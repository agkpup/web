<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function showCart(){
        $cart = session()->get('cart',[]);
        $address = session()->get('address',[]);
        $amount = $this->calculateCartAmount();
        return view('application.checkOut',compact('cart','address','amount'));
    }

    public function addToCart(Request $request)
{
    // Get the product data from the request
    $product = $request->only(['id', 'image', 'subject', 'description', 'price', 'quantity']);

    // Retrieve the current cart from the session or initialize as an empty array if not set
    $cart = session()->get('cart', []);

    $found = false;
    // Check if the product already exists in the cart
    foreach ($cart as &$item) {
        if ($item['id'] == $product['id']) {
            // If found, increase the quantity
            $item['quantity'] += $product['quantity'];
            $found = true;
            break;
        }
    }

    // If the product was not found in the cart, add it
    if (!$found) {
        $cart[] = $product;
    }

    // Store the updated cart back in the session
    session()->put('cart', $cart);

    // Return a success response
    return response()->json(['status' => 'success']);
}


    public function addQuantity(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'id' => 'required|integer',
        ]);

        // Retrieve the current cart from the session
        $cart = session()->get('cart', []);

        foreach ($cart as &$item) {
            if ($item['id'] == $request->id) {
                $item['quantity'] += 1; // Increment quantity
                session()->put('cart', $cart); // Save updated cart back to the session
                return response()->json(['status' => 'success', 'message' => 'Quantity increased', 'cart' => $cart]);
            }
        }

        return response()->json(['status' => 'error', 'message' => 'Product not found'], 404);
    }

    public function subtractQuantity(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'id' => 'required|integer',
        ]);

        // Retrieve the current cart from the session
        $cart = session()->get('cart', []);

        foreach ($cart as &$item) {
            if ($item['id'] == $request->id) {
                if ($item['quantity'] > 0) {
                    $item['quantity'] -= 1; // Decrement quantity
                }

                // If the quantity is now 0, optionally remove the item from the cart
                if ($item['quantity'] === 0) {
                    $cart = array_filter($cart, fn($cartItem) => $cartItem['id'] !== $item['id']);
                }

                session()->put('cart', $cart); // Save updated cart back to the session
                return response()->json(['status' => 'success', 'message' => 'Quantity decreased', 'cart' => $cart]);
            }
        }

        return response()->json(['status' => 'error', 'message' => 'Product not found'], 404);
    }

    


    public function updateCart(){
        $cart = session()->get('cart',[]);
        foreach($request->input('cart',[]) as $productId => $data){
            if(isset($cart[$productId])){
                $cart[$productId]['quanitity']=$data['quanitity'];
            }
        }
        session(['cart'=>$cart]);
        return redirect()->back()->with('success','cart updated successfully');
    }

    // public function clearCart(){
    //     session()->forget('cart');
    //     return redirect()->back()->with('message','cart cleared');
    // }
    
    // Add a new address
    public function addAdressOfDelivery(Request $request)
    {
        $newAddress = $request->validate([
            'isSelectedforDelivery' => 'required|boolean',
            'street' => 'required|string',
            'city' => 'required|string',
            'pinCode' => 'required|integer',
            'contactPersonMob' => 'required|string|min:10|max:15',
        ]);

        $addresses = session()->get('address', []);
        $addresses[] = $newAddress;

        session()->put('address', $addresses);

        return response()->json(['message' => 'Address added successfully!', 'addresses' => $addresses]);
    }

    public function updateAddressOfDelivery(Request $request, $addressId)
    {
        $updateData = $request->validate([
            'street' => 'string',
            'city' => 'string',
            'pinCode' => 'integer',
            'contactPersonMob' => 'string|min:10|max:15',
        ]);

        $addresses = session()->get('address', []);
        foreach ($addresses as &$address) {
            $address['isSelectedforDelivery'] = false;
        }        
        foreach ($addresses as &$address) {
            if ($address['addressId'] == $addressId) {
                $address = array_merge($address, $updateData);
                session()->put('address', $addresses);
                return response()->json(['message' => 'Address updated successfully!', 'addresses' => $addresses]);
            }
        }

        return response()->json(['message' => 'Address not found!'], 404);
    }

    public function deleteAddressOfDelivery($addressId)
    {
        $addresses = session()->get('address', []);
        $filteredAddresses = array_filter($addresses, function ($address) use ($addressId) {
            return $address['addressId'] != $addressId;
        });

        session()->put('address', $filteredAddresses);

        return response()->json(['message' => 'Address deleted successfully!', 'addresses' => $filteredAddresses]);
    }



    public function calculateCartAmount()
    {
        // Get cart data from session
        $cart = session()->get('cart', []);
    
        // Initialize total price
        $totalAmount = 0;
    
        // Initialize discount to 0 by default
        $discount = 0;
    
        // Iterate through cart items to calculate the total price
        foreach ($cart as $item) {
            $totalAmount += $item['price'] * $item['quantity'];
        }
    
        // Check if a coupon is applied and apply discount
        $coupon = session()->get('coupon', null); // assuming the coupon is stored in session
    
        if ($coupon) {
            // Check for valid coupon type, this can vary based on your logic
            if ($coupon['type'] == 'percentage') {
                // Apply percentage discount
                $discount = ($totalAmount * $coupon['value']) / 100;
            } elseif ($coupon['type'] == 'fixed') {
                // Apply fixed discount
                $discount = $coupon['value'];
            }
        }
    
        // Subtract discount from total amount
        $totalAmount -= $discount;
    
        // Filter net amount to make sure it's not less than zero
        $netAmount = max(0, $totalAmount);
    
        return [
            'totalAmount' => $totalAmount,  // total amount before discount
            'discount' => $discount,        // applied discount
            'netAmount' => $netAmount       // final amount after discount
        ];
    }
    


}
