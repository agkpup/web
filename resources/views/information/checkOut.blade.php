@extends('information.layouts')
@section('information')
<style>
    a {
    text-decoration: none;
    color: #000;
}
body {
    font-family: "Poppins", sans-serif;
}
.card-title {
    font-weight: bold;
}
.product-listing {
    transition: all 0.3s linear;
}
.product-listing:hover {
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.3);
}
.product-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
}
.cart-image {
    width: 200px;
    height: 200px;
    object-fit: cover;
    border-radius: 5px;
}
.brand-img{
    width: 100%;
    height: 100px;
    object-fit: cover;
}

.footer-title{
    position: relative;
    padding-bottom: 10px;
    margin-bottom: 15px;
}
.footer-title::after{
    z-index: 999;
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    background-color: #0d6efd;
    width: 15%;
    height: 2px;
}
.footer-app{
    width: 150px;
    object-fit: contain;
}

@media screen and (max-width: 789px) {
    .cart-image {
        width: 120px;
        height: 120px;
    }
}

</style>
<section class="space">
    <div class="container">
<div class="container py-3">
    <h3>Shopping Cart</h3>
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-8">
        <!-- single cart item  -->

        <hr />

        <div id="cart-items-container"></div>

        {{-- <div class="cart-item py-2">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <div class="d-flex justify-content-between mb-3">
                <img
                  class="cart-image d-block"
                  src="https://images.pexels.com/photos/8532616/pexels-photo-8532616.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                  alt=""
                />
                <div class="mx-3">
                  <h5>Basic Tee</h5>
                  <p>Lorem ipsum, dolor sit</p>
                  <h5>Rs. 800</h5>
                  <small
                    class="text-white bg-success px-2 py-1 d-inline-block rounded-3 mt-2"
                    >In Stock</small
                  >
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center">

                  <div class="card text-center p-4" style="backdrop-filter: blur(10px); border-radius: 15px;">
                    <div class="d-flex justify-content-center align-items-center">
                      <button class="btn btn-light btn-lg me-2" style="border-radius: 50%; backdrop-filter: blur(5px);" onclick="increaseQuantity('${item.id}')">+</button>
                      <select class="form-select">
                        <option selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                      <button class="btn btn-light btn-lg ms-2" style="border-radius: 50%; backdrop-filter: blur(5px);"onclick="increaseQuantity('${item.id}')">-</button>
                    </div>
                  </div>

                </div>
                <div>
                  <button
                    type="button"
                    class="btn-close"
                    aria-label="Close"
                  ></button>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
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
          <button class="btn btn-primary w-100 mt-4" onclick="checkout()">Checkout</button>
        </div>
      </div>
    </div>
  </div>
    </div>
</section><script>
    // Get cart data from localStorage
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Function to dynamically generate cart items
    function renderCartItems() {
      const cartContainer = document.getElementById('cart-items-container');
      cartContainer.innerHTML = '';  // Clear any previous cart items

      // Loop through each item in the cart
      cart.forEach(item => {
        const cartItem = `
          <div class="cart-item py-2">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="d-flex justify-content-between mb-3">
                  <img class="cart-image d-block" src="${item.image}" alt="${item.description}" />
                  <div class="mx-3">
                    <h5>${item.name}</h5>
                    <p>${item.description}</p>
                    <h5>Rs. ${item.cost}/KG</h5>
                    <small class="text-white bg-success px-2 py-1 d-inline-block rounded-3 mt-2">In Stock</small>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="d-flex justify-content-between">
                  <div class="d-flex align-items-center">
                    <div class="card text-center p-4" style="backdrop-filter: blur(10px); border-radius: 15px;">
                      <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-light btn-lg me-2" style="border-radius: 50%; backdrop-filter: blur(5px);" onclick="increaseQuantity(parseInt('${item.id}'))">+</button>
                        <select class="form-select" onchange="updateQuantity('${item.id}', this.value)">
                          <option value="1" ${item.quantity === 1 ? 'selected' : ''}>1</option>
                          <option value="2" ${item.quantity === 2 ? 'selected' : ''}>2</option>
                          <option value="3" ${item.quantity === 3 ? 'selected' : ''}>3</option>
                          <option value="4" ${item.quantity === 4 ? 'selected' : ''}>4</option>
                        </select>
                        <button class="btn btn-light btn-lg ms-2" style="border-radius: 50%; backdrop-filter: blur(5px);" onclick="decreaseQuantity(parseInt('${item.id}'))">-</button>
                      </div>
                    </div>
                  </div>
                  <div>
                    <button type="button" class="btn-close" aria-label="Close" onclick="removeItem('${item.id}')"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        `;
        // Insert the generated HTML into the container
        cartContainer.innerHTML += cartItem;
      });
    }
// Function to increase the quantity of an item
function increaseQuantity(id) {
  // Retrieve the cart from localStorage
  const cart = JSON.parse(localStorage.getItem('cart')) || [];

  console.log('Cart before increasing quantity:', cart); // Debugging line

  // Parse the id as an integer to avoid string comparison issues
  const itemId = parseInt(id, 10); // Ensure the id is an integer

  // Find the item with the specified id
  const item = cart.find(item => item.id === itemId);

  // Check if the item exists
  if (item) {
    // Increase the item's quantity
    item.quantity += 1;

    // Update the cart in localStorage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Re-render the cart items to reflect the updated quantity
    renderCartItems();
    updateTotal();
  } else {
    console.error(`Item with id ${itemId} not found in the cart.`);
  }
}

// Function to decrease the quantity of an item
function decreaseQuantity(id) {
  // Retrieve the cart from localStorage
  const cart = JSON.parse(localStorage.getItem('cart')) || [];

  console.log('Cart before decreasing quantity:', cart); // Debugging line

  // Parse the id as an integer to avoid string comparison issues
  const itemId = parseInt(id, 10); // Ensure the id is an integer

  // Find the item with the specified id
  const item = cart.find(item => item.id === itemId);

  // Check if the item exists and the quantity is greater than 1
  if (item) {
    // Decrease the quantity only if it's greater than 1
    if (item.quantity > 1) {
      item.quantity -= 1;

      // Update the cart in localStorage
      localStorage.setItem('cart', JSON.stringify(cart));

      // Re-render the cart items to reflect the updated quantity
      renderCartItems();
      updateTotal();
    } else {
      console.warn(`Quantity for item with id ${itemId} cannot be less than 1.`);
    }
  } else {
    console.error(`Item with id ${itemId} not found in the cart.`);
  }
}



    // Function to update quantity from the select dropdown
    function updateQuantity(id, quantity) {
      const item = cart.find(item => item.id === id);
      if (item) {
        item.quantity = parseInt(quantity);
        localStorage.setItem('cart', JSON.stringify(cart));
        renderCartItems();  // Re-render the cart after updating
      }
    }

    // Function to remove an item from the cart
    function removeItem(id) {
      const updatedCart = cart.filter(item => item.id !== id);
      localStorage.setItem('cart', JSON.stringify(updatedCart));
      renderCartItems();  // Re-render the cart after removing an item
    }

    // Initial render of cart items
    renderCartItems();

    // Log the cart every 3 seconds
const intervalId = setInterval(() => {
    console.log('cart item checkout', cart);

    // Example condition: Stop logging if the cart is empty
    if (cart.length === 0) {
        console.log('Cart is empty, stopping logging.');
        clearInterval(intervalId);  // Stop the interval if cart is empty
    }
}, 3000);

// Function to update the total price after changes
function updateTotal() {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];

  // Calculate the total price
  let totalPrice = 0;
  cart.forEach(item => {
    totalPrice += item.quantity * item.cost;
  });

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
    var checkoutUrl = "{{ route('checkOutConfirm') }}";
    window.location.href = checkoutUrl;

}


window.onload = updateTotal;


  </script>

@endsection
