<?php

namespace App\Http\Controllers;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    //
    public function index()
    {
        $addresses = Address::where('user_id', Auth::id())->get();
        return view('addresses.index', compact('addresses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
        ]);

        Address::create([
            'user_id' => Auth::id(),
            'address' => $request->address,
            'is_default' => false,
        ]);

        return back()->with('success', 'Address added successfully!');
    }

    public function update(Request $request, Address $address)
    {
        $this->authorize('update', $address); // Check if the user is authorized to update this address

        // Validate the incoming request data
        $request->validate([
            'address' => 'required|string|max:255',
        ]);

        // Update the address record
        $address->update([
            'address' => $request->address,
        ]);

        // Redirect back with success message
        return back()->with('success', 'Address updated successfully!');
    }

    public function setDefault(Address $address)
    {
        $this->authorize('update', $address); // Check if the user is authorized to update this address

        // Use a transaction to ensure consistency
        \DB::transaction(function () use ($address) {
            // Reset all other addresses to non-default
            Address::where('user_id', Auth::id())->update(['is_default' => false]);

            // Set the selected address as default
            $address->update(['is_default' => true]);
        });

        // Redirect back with success message
        return back()->with('success', 'Default address updated!');
    }

    public function destroy(Address $address)
    {
        $this->authorize('delete', $address);
        $address->delete();

        return back()->with('success', 'Address deleted successfully!');
    }
}
