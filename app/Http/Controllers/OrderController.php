<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\Order;
use Illuminate\Support\Facades\Log;
use App\Models\Address;

class OrderController extends Controller
{
    //
    public function placeOrder(Request $request)
{
    try {
        // Validate the incoming request to ensure correct data structure
        // if (!auth()->check()) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'User is not authenticated. Please log in to place an order.',
        //     ], 401);  // 401 Unauthorized
        // }

        $validated = $request->validate([
            'cart' => 'required|array', // Ensure 'cart' is an array
            'cart.*.cost' => 'required|numeric', // Ensure each item in the cart has a valid numeric 'cost' field
            'cart.*.quantity' => 'required|integer|min:1', // Ensure each item has a valid quantity (integer and >= 1)
            'cart.*.id' => 'required|integer', // Ensure each item has a valid 'id' (product id as integer)
            'cart.*.name' => 'required|string', // Ensure each item has a valid 'name' (string)
            'cart.*.image' => 'required|url', // Ensure each item has a valid 'image' URL (string)
            'cart.*.description' => 'required|string', // Ensure each item has a valid 'description' (string)
        ]);

        // Ensure cart is not empty
        if (empty($validated['cart'])) {
            return response()->json([
                'success' => false,
                'message' => 'Cart cannot be empty.',
            ], 400);
        }

        // Calculate the total amount by summing the 'cost' fields from the cart items
        $totalAmount = array_sum(array_map(function ($item) {
            return $item['cost'] ?? 0; // Default to 0 if 'cost' is missing or invalid
        }, $validated['cart']));

        // Ensure total amount is greater than 0
        if ($totalAmount <= 0) {
            return response()->json([
                'success' => false,
                'message' => 'The total amount must be greater than 0.',
            ], 400);
        }

        // Create a new order record in the database
        $order = Order::create([
            'user_id' => 1, // Associate the order with the authenticated user auth()->id()
            'cart_data' => json_encode($validated['cart']), // Store cart items as a JSON string
            'total_amount' => $totalAmount, // Store the calculated total amount
        ]);

        // Return a success response with the order details
        return response()->json([
            'success' => true,
            'order_id' => $order->id,
            'total_amount' => $totalAmount,
        ], 200);

    } catch (\Illuminate\Validation\ValidationException $e) {
        // Catch validation exceptions and return a structured error response
        return response()->json([
            'success' => false,
            'message' => 'Validation error',
            'errors' => $e->errors(), // Return specific validation error details
        ], 422);

    } catch (\Exception $e) {
        // Catch any other exceptions and log the error
        Log::error('Error placing order: ' . $e->getMessage(), [
            'exception' => $e,
            'user_id' => auth()->id(),
        ]);

        // Return a generic error response
        return response()->json([
            'success' => false,
            'message' => 'An error occurred while processing your order. Please try again later.',
            'ERROR'=> $e,
        ], 500);
    }
}
public function selectSavedAddress(){
    $addresses = Address::where('user_id', Auth::id())->get();
    return view('information.confirmCheckOut',compact('addresses'));
}

}
