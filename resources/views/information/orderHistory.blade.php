@extends('information.layouts')
@section('information')
<style>
    body {
        background: linear-gradient(120deg, #ebe9e5, #ffa31a);
        font-family: 'Arial', sans-serif;
        color: #333;
    }

    .card {
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        background-color: #000000;
    }

    .profile-card {
        background: linear-gradient(135deg, #040200, #000000);
        color: #fff;
    }

    .btn-primary {
        background-color: #ffa31a;
        border: none;
        border-radius: 20px;
        box-shadow: 0 8px 15px #e4caa3;
        transition: all 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background-color: #ffa31a;
        box-shadow: 0 12px 25px rgba(238, 196, 134, 0.5);
    }

    .table {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
    }

    .table thead {
        background: #66a6ff;
        color: #fff;
    }
</style>

<div class="container py-5">
    <!-- User Profile Section -->
    <div class="row mb-4">
        <div class="col-lg-4 mb-3">
            <div class="card profile-card text-center p-4">
                <img src="https://via.placeholder.com/120" alt="User Avatar" class="rounded-circle mx-auto mb-3" width="120">
                <h3>{{$user->name}}</h3>
                <p>{{$user->email}}</p>
            </div>
        </div>

        <!-- Saved Addresses -->
        <div class="col-lg-8 mb-3">
            <div class="card p-4">
                <h4>Saved Addresses</h4>
                <!-- Check if addresses exist -->
                @if ($addresses->isEmpty())
                <p class="text-muted">No addresses found. Please add a new address.</p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                    Add Address
                </button>
            @else
                <ul class="list-group">
                    @foreach ($addresses as $address)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ $address->address }}</span>
                            <div class="d-flex align-items-center gap-2">
                                <!-- Edit Button -->
                                <button
                                    class="btn btn-sm btn-secondary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editAddressModal"
                                    data-id="{{ $address->id }}"
                                    data-address="{{ $address->address }}">
                                    Edit
                                </button>

                                <!-- Set as Default Form -->
                                <form action="{{ route('addresses.setDefault', $address->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('PATCH')
                                    <button
                                        type="submit"
                                        class="btn btn-sm {{ $address->is_default ? 'btn-success' : 'btn-primary' }}"
                                        {{ $address->is_default ? 'disabled' : '' }}>
                                        {{ $address->is_default ? 'Default' : 'Set as Default' }}
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                    Add Another Address
                </button>
            @endif


<!-- Add Address Modal -->
<div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true" style="margin-top:120px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('addresses.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="addAddressModalLabel">Add Address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="newAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="newAddress" name="address" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Address</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Address Modal -->
<div class="modal fade" id="editAddressModal" tabindex="-1" aria-labelledby="editAddressModalLabel" aria-hidden="true" style="margin-top:120px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editAddressForm" method="POST" action="">
                @csrf
                @method('PATCH')
                <div class="modal-header">
                    <h5 class="modal-title" id="editAddressModalLabel">Edit Address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="editAddress" name="address" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>

    <!-- Order History Section -->
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <h4>Order History</h4>
                <table class="table">
                    <thead>

                        <tr>
                            <th>#</th>
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($orderList->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center">No orders found.</td>
                        </tr>
                    @else
                        @foreach ($orderList as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>ORDER{{ $order->id }}</td>
                                <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                <td>
                                    <span class="badge bg-success">
                                        {{ ucfirst($order->status ?? 'Pending') }}
                                    </span>
                                </td>
                                <td>₹ {{ number_format($order->total_amount, 2) }}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
