@extends('information.layouts')
@section('information')
<style>

</style>
<section class="space">
    <div class="container">
<div class="container py-3">
    <h3>Address</h3>
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-8">
        <!-- single cart item  -->
        <div class="cart-item py-2">
            <div class="row">
                <div class="d-flex justify-content-between mb-3">
                  <div class="container my-4">
                      <h3 class="mb-3">Shipping Info</h3>
                      <div class="row">
                        <input type="text" name="address" id="address" placeholder="Enter the address">
                      </div>
                    </div>


<!-- Modal for editing the address -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true" style="margin-top:130px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editAddressForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" value="Jane Smith">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" value="456 Elm Street, Metropolis, USA">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" value="(987) 654-3210">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveChanges">Save Changes</button>
            </div>
        </div>
    </div>
</div>

              </div>
            </div>
          </div>
          <hr />
          <!-- ./ single cart item end  -->
        </div>
        <div class="col-12 col-sm-12 col-md-8 col-lg-4">
          <div class="bg-light rounded-3 p-4 sticky-top">
            <h6 class="mb-4">Order Summary</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div>Subtotal</div>
              <div><strong id="total-subtotal">Rs. 5000</strong></div>
            </div>
            <hr />
            <div class="d-flex justify-content-between align-items-center">
              <div>Delivery Charge</div>
              <div><strong>Rs. 0</strong></div>
            </div>
            <hr />
            <div class="d-flex justify-content-between align-items-center">
              <div>Total</div>
              <div><strong id="total-price">Rs.5100</strong></div>
            </div>
            <div class="d-flex justify-content-between align-items-center border">
              <input type="text" id="coupon-code" placeholder="Enter coupon code" />
            </div>
            <button onclick="placeOrder()" class="btn btn-primary w-100 mt-4">Place Order</button>
          </div>
        </div>
      </div>
        <hr />
        <h5 class="card-title mb-3">Select Payment Method</h5>

        <!-- Cash on Delivery -->
        <div class="form-check">
          <input class="form-check-input" type="radio" name="paymentMethod" id="codPayment" value="cod" checked>
          <label class="form-check-label" for="codPayment">
            Cash on Delivery
          </label>
        </div>


  </div>
    </div>
</section>

<script>
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

// Function to update the total price after changes
function updateTotal() {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];

  // Calculate the total price
  let totalPrice = 0;
  cart.forEach(item => {
    totalPrice += item.quantity * item.cost;
  });

  //show auth section if not logged in


  // Check for applied coupon (if any)
  const couponCode = document.getElementById('coupon-code').value; // Assuming there's an input for the coupon code
  const finalAmount = calculateTotal(couponCode, totalPrice); // Use the existing calculateTotal function

  // Update the UI with the calculated total (net amount)
  document.getElementById('total-price').innerText = `Total: ₹${finalAmount}`;
  document.getElementById('total-subtotal').innerText = `Total: ₹${totalPrice}`;
}

// Function to calculate the final amount with a coupon
function calculateTotal(couponCode, totalPrice) {
  // Sample coupon data
  const coupons = [
    { code: 'DISCOUNT10', type: 'percentage', value: 10 },
    { code: 'FLAT50', type: 'flat', value: 50 }
  ];

  let discount = 0;

  // Find the applied coupon
  const appliedCoupon = coupons.find(coupon => coupon.code === couponCode);

  if (appliedCoupon) {
    if (appliedCoupon.type === 'percentage') {
      discount = (totalPrice * appliedCoupon.value) / 100;
    } else if (appliedCoupon.type === 'flat') {
      discount = appliedCoupon.value;
    }
  }

  // Calculate the final amount after discount
  const netAmount = totalPrice - discount;

  // Return the final amount after discount
  return netAmount;
}

function checkout(){
    updateTotal();


}

window.onload = updateTotal;

function placeOrder() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Ensure the cart is not empty before sending the request
    if (cart.length === 0) {
        alert('Your cart is empty. Please add items before placing an order.');
        return;
    }
    document.addEventListener("DOMContentLoaded", function () {
        // Check if the user is logged in using Laravel's Auth::check()
        const isLoggedIn = @json(Auth::check()); // This will output 'true' or 'false'

        if (isLoggedIn) {
            // If logged in, skip showing the modal
            return;
        }
        const authModal = new bootstrap.Modal(document.getElementById("authModal"));
        authModal.show();
    }
);
    // Send the cart data to the backend via POST request
    fetch('/place-order', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify({ cart })
    })
    .then(response => {
        // Check if the response is JSON or HTML
        const contentType = response.headers.get("content-type");
        if (contentType && contentType.includes("application/json")) {
            return response.json();
            localStorage.removeItem('cart');
        } else {
            return response.text(); // Handle non-JSON response
            localStorage.removeItem('cart');
        }
    })
    .then(data => {
        if (typeof data === 'string') {
            console.error("Error: Expected JSON response, but got HTML:", data);
            alert('An unexpected error occurred. Please try again later.');
            console.error("Detailed Error: ", data.ERROR);
        } else {
            if (data.success) {
                console.log('Order placed successfully:', data);
                alert('Order placed successfully! Your order ID is ' + data.order_id);
            } else {
                console.error('Error placing order:', data.message);
                alert('Error: ' + data.message);
            }
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while placing your order. Please try again later.');
        console.error("Detailed Error: ", error.ERROR);
    });
}
var addresses = @json($addresses);
console.log(addresses);

  </script>

@endsection
