<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
    //
    public function viewOrder(){
        $orderList = Order::with('user')->get();
        $address = Order::with(['user.defaultAddress:id,address,user_id'])->get();
        //$address = Order::with(['user.defaultAddress'])->get();

        return view('dashboard.listOrders',compact('orderList','address'));
    }
    public function viewInquiry(){
        return view('dashboard.listInquiries');
    }
    public function detailDescription(Request $request){
        $request->validate([
            'userId' => 'required|exists:users,id',  // Ensures the userId is valid
        ]);

        // Get the userId from the request
        $userId = $request->input('userId');

        // Fetch the user's orders and their cart data
        $order = Order::with(['user', 'user.defaultAddress']) // Include user and default address
                      ->where('user_id', $userId) // Filter orders by userId
                      ->get();

        return view('dashboard.viewListOrder',compact('order'));
    }
}
