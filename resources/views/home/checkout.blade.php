<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pa-Buy | Ecommerce</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">

    <!-- Css Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="home/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="home/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>

<body>
 
    @include('home.header')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
            </div>
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="row">
                        <!-- Billing Details Section -->
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Name</p>
                                <input type="text" readonly value="{{ $user->name }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Address</p>
                                <input type="text" class="checkout__input__add" readonly value="{{ $user->address }}">
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone</p>
                                    <input type="text" readonly value="{{ $user->phone }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email</p>
                                    <input type="text" readonly value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>

                        <h4>Type of Delivery</h4>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input__checkbox">
                                    <label for="pick-up">
                                        Pick-Up
                                        <input type="radio" name="shipping" id="pick-up" value="0" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="checkout__input__checkbox">
                                    <label for="cod">
                                        Cash on Delivery
                                        <input type="radio" name="shipping" id="cod" value="50">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div id="store-address" style="display: none;">
                            <h5>Pick-up at the Store Address:</h5>
                            <p >Albay Farmers' Bounty Village, Camalig, 4502 Albay</p><br> <!-- Example store address -->
                        </div>

                        <div id="pickup-time" style="display: none;">
                            <label for="pickup-time-input">Pick-up Time:</label><br>
                            <small style="color: red;">Note: Pick-up/ reservation of order is within the day only from 8 AM to 5pm</small>
                            <div class="checkout__input">
                                <input type="text" id="pickup-time-input" name="pickup_time" placeholder="Select time">
                            </div>
                        </div>

                        <!-- Hidden pickup location input initially -->
                        <div id="pickup-location" style="display: none;">
                            <label for="location">Enter Meet-up Location:</label><br>
                            <small style="color: red;">Note: Meet Up location must be along the road only</small>
                            <div class="checkout__input">
                                <input type="text" id="location" name="meetup_location" placeholder="Enter your pickup location" oninput="fetchSuggestions()" required>
                            </div>
                            <ul id="suggestions-list" style="display: none; border: 1px solid #ddd; max-height: 150px; overflow-y: auto; padding: 0; list-style: none;"></ul>
                        </div>

                        <div id="deliveryDate" style="display: none;">
                        <label for="delivery-date" style="font-size: 1.6rem">Choose Delivery Date:</label><br>
                        <small style="color: red;">Note: We Only Deliver every Thursday and Friday</small>
                        <div class="checkout__input">
                            <input type="text" id="delivery-date" placeholder="Select date" readonly>
                        </div>
                    </div>

                        
                    </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>

                                <!-- Order Summary Section -->
                                    <div class="checkout__order__products">Products <span>Total</span></div>
                                    <ul>
                                  
                                            @foreach($selectedProducts as $product)
                                                <li><img src="{{ $product['img'] ?? '' }}" alt="{{ $product['title'] }} Image" style="display: inline; width: 30px;">
                                                    {{ $product['title'] }} x{{ $product['quantity'] }}<span>₱{{ $product['price'] }}</span></li>
                                            @endforeach
                                       
                                    </ul>

                                    <!-- Display the subtotal and total based on selected products -->
                                    @php 
                                        // Calculate subtotal for selected products
                                        $subtotal1 = array_reduce($selectedProducts, function($carry, $product) {
                                            return $carry + $product['price'];
                                        }, 0);

                                        // If productPrice has a value, add it to the subtotal1
                                        $productPrice = isset($productPrice) && !empty($productPrice) ? $productPrice : 0;
                                        $subtotal = $subtotal1 + $productPrice - $discountAmount; // Apply discount after adding productPrice
                                    @endphp


                                    
                                <div class="checkout__order__products"> 
                                    Discount <span id="discountValue">- {{ $discountAmount }}</span>
                                </div>

                                <div class="checkout__order__subtotal">Subtotal <span id="subtotal">₱{{ $subtotal }}</span></div>


                                <div class="checkout__input__checkbox">
                                    <div class="checkout__order__products">Shipping Fee: <span id="shipping"></span></div>
                                    
                                </div>

                                <div class="checkout__order__total">Total <span id="total">₱{{ $subtotal }}</span></div>

                                <!-- Place Order Form -->
                                <form action="{{ url('/save_orders') }}" method="POST" id="placeOrderForm">
                                    @csrf
                                    <input type="hidden" name="total" id="totalAmount" value="{{ $subtotal }}">
                                        @foreach ($selectedProducts as $product)
                                            <input type="hidden" name="products[]" value="{{ json_encode($product) }}">
                                        @endforeach
                                    
                                    <input type="hidden" id="hidden_meetup_location" name="meetup_location">
                                    <input type="hidden" id="hidden_delivery_date" name="delivery_date">
                                    <input type="hidden" id="store_address_input" name="pickup_location" value="Albay Farmers' Bounty Village, Camalig, 4502 Albay">
                                   <!-- <input type="hidden" id="hidden_pickup_date" name="pickup_date">-->

                                    <input type="hidden" id="hidden_delivery_type" name="hidden_delivery_type">
                                    
                                    <button type="button" class="site-btn" id="confirmOrderButton" data-bs-toggle="modal" data-bs-target="#orderReviewModal">CONFIRM ORDER</button>
                                    
                                    <div class="modal fade" id="orderReviewModal" tabindex="-1" aria-labelledby="orderReviewModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header text-white" style="background-color: #EDBB0E;">
                                                    <h5 class="modal-title" id="orderReviewModalLabel">Review Your Order</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="width: 20px; height: 20px;"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="d-flex justify-content-center">
                                                        <h5><strong>Your Order Details</strong></h5>
                                                    </div>
                                                    <ul class="list-group mb-3" id="orderDetailsList">

                                                    </ul>
                                
                                                    <p><strong>Meetup Location:</strong> <span id="modalMeetupLocation"></span></p>
                                                    <p><strong>Delivery Date:</strong> <span id="modalDeliveryDate"></span></p>
                                                    <p><strong>Pickup Location:</strong> <span id="modalPickupLocation"></span></p>
                                                    <p><strong>Pickup Date:</strong> <span id="modalPickupDate"></span></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Edit Order</button>
                                                    <!-- Submit Button Inside Modal -->
                                                    <button type="submit" class="site-btn" id="placeOrderButton">PLACE ORDER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>  
                            </div>   

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    @include('home.footer')

    <!-- Js Plugins -->
    <script src="home/js/jquery-3.3.1.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.nice-select.min.js"></script>
    <script src="home/js/jquery-ui.min.js"></script>
    <script src="home/js/jquery.slicknav.js"></script>
    <script src="home/js/mixitup.min.js"></script>
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/main.js"></script>
    <script src="home/js/location.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const confirmOrderButton = document.getElementById('confirmOrderButton');
            const modalMeetupLocation = document.getElementById('modalMeetupLocation');
            const modalDeliveryDate = document.getElementById('modalDeliveryDate');
            const modalPickupLocation = document.getElementById('modalPickupLocation');
            const modalPickupDate = document.getElementById('modalPickupDate');
            const orderDetailsList = document.getElementById('orderDetailsList');
        
            // Populate Modal Data
            confirmOrderButton.addEventListener('click', function () {
                // Populate order details list
                const productInputs = document.querySelectorAll('input[name="products[]"]');
                orderDetailsList.innerHTML = '';
                productInputs.forEach(productInput => {
                    const product = JSON.parse(productInput.value);
                    const listItem = document.createElement('li');
                    listItem.textContent = `Product: ${product.title} - ₱${product.price} x ${product.quantity}`;
                    orderDetailsList.appendChild(listItem);
                });
        
                // Get the selected shipping option (Pick-Up or Cash on Delivery)
                const shippingOption = document.querySelector('input[name="shipping"]:checked').value;

                // Check if Pick-Up is selected
                if (shippingOption === '0') {
                    // Display the store address for Pick-Up
                    const storeAddress = document.querySelector('#store-address p')?.textContent || 'N/A';
                    modalPickupLocation.textContent = storeAddress;

                    // Get and display the pickup time
                    modalPickupDate.textContent = document.getElementById('pickup-time-input').value || 'N/A';
                    
                    // Hide delivery-related info (since Pick-Up is selected)
                    modalMeetupLocation.textContent = 'N/A'; 
                    modalDeliveryDate.textContent = 'N/A';
                } 
                // Check if Cash on Delivery (COD) is selected
                else if (shippingOption === '50') {
                    // Display the meetup location for COD
                    modalMeetupLocation.textContent = document.getElementById('location').value || 'N/A';

                    // Display the delivery date
                    modalDeliveryDate.textContent = document.getElementById('delivery-date').value || 'N/A';
                    
                    // Hide pickup-related info (since COD is selected)
                    modalPickupLocation.textContent = 'N/A';
                    modalPickupDate.textContent = 'N/A';
                }


            });
        });
        </script>
        

    
   
</body>

</html>