<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pa-Buy | Ecommerce</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
    
    <!-- Css Styles -->
    <link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="home/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="home/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/style.css" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .img_design{
            width: 100px;
            height: auto;
        }
    </style>
</head>

<body>
 
    @include('home.header')

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Categories</span>
                        </div>
                        <ul>
                            @foreach ($categories as $category)
                                    <li><a href="{{ route('category.products', $category->category_name) }}">{{$category->category_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form"> 
                            <form action="{{ route('search_page') }}" method="GET">
                                <input type="text" name="query" placeholder="What do you need?" required>
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+63 907 802 4442</h5>
                            <span>available 8:00am-5:00pm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    @include('sweetalert::alert')

    @if(session('success_message'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Item Removed!',
                text: '{{ session('success_message') }}',
                confirmButtonText: 'OK',
            });
        });
    </script>
@endif

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/') }}">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    @if(session()->has('message'))

    <div class="alert alert-success">

        {{session()->get('message')}}

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        
    </div>

    @endif

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shoping__cart__table" style="overflow-y: auto; max-height: 500px;">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $totalprice=0; ?>

                                @forelse ($cart as $cart)
                                
                                <tr>
                                    <td class="shoping__cart__item" style="display: flex; align-items: center;">
                                        <div class="checkout__input__checkbox" style="margin-right: 10px;">
                                            <label for="acc-{{$cart->id}}">
                                                <input type="checkbox" id="acc-{{$cart->id}}" class="product-checkbox" 
                                                       data-cart-id="{{ $cart->id }}" 
                                                       data-product-title="{{ $cart->product_title }}" 
                                                       data-product-price="{{ $cart->price }}"
                                                       data-product-img="/product/{{ $cart->image }}"
                                                       data-product-quantity="{{ $cart->quantity }}"
                                                       data-product-id="{{ $cart->product_id }}">
                                                <span class="checkmark"></span>
                                            </label>
                                            
                                        </div>
                                        <img class="img_design" src="/product/{{$cart->image}}" alt="" style="margin-right: 10px;">
                                        <h5 style="margin: 0;">{{$cart->product_title}}</h5>
                                    </td>
                                    
                                    <td class="shoping__cart__price">
                                        
                                        @if($cart->product->sale && $cart->product->sale->title == $cart->product_title)
                                            <span class="badge badge-success">{{ $cart->product->sale->discount }}% OFF</span>

                                            @php
                                                $discountPrice = $cart->product->price - ($cart->product->price * ($cart->product->sale->discount / 100));
                                            @endphp

                                            <div>₱{{ number_format($discountPrice, 2) }}</div>
                                            <div style="text-decoration: line-through; color: gray;">₱{{ number_format($cart->product->price, 2) }}</div>
                                        @else
                                            ₱{{ number_format($cart->product_price) }}
                                        @endif

                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <button type="button" class="dec qtybtn">-</button>
                                                <input type="number" value="{{$cart->quantity}}" min="1" data-product-id="acc-{{$cart->id}}">
                                                <button type="button" class="inc qtybtn">+</button>
                                            </div>
                                        </div>                                        
                                    </td>
                                    <td class="shoping__cart__total product-total-{{ $cart->id }}">
                                        ₱<span>{{ $cart->price }}</span>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="{{url('/remove_cart',$cart->id)}}" onclick="event.preventDefault(); confirmRemove('{{ url('/remove_cart', $cart->id) }}')">
                                            <span class="icon_close"></span></a>
                                    </td>
                                </tr>

                                <?php $totalprice=$totalprice + $cart->price ?>

                                @empty
                                <tr>
                                    <td colspan="10" class="text-center">
                                        <i class="fa fa-shopping-bag" style="font-size: 24px; color: grey;" title="No deliveries available"></i>
                                        <p>No Products on the Cart at the moment.</p>
                                    </td>
                                </tr>
                            @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="shoping__checkout__table">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form id="applyCouponForm">
                                <input type="text" id="couponCode" placeholder="Enter your coupon code" required>
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span class="subtotal">₱0</span></li> 
                            <li>Discount <span class="discount">₱<span id="discountValue">-0</span></span></li>
                            
                            <li>Total <span class="total">₱0</span></li> 
                        </ul>
                        <form action="{{ url('/checkout') }}" method="POST" id="checkoutForm">
                            @csrf
                            <input type="hidden" name="selected_products" id="selected_products">
                            <input type="hidden" name="discount" id="discount" value="0">
                            <button type="submit" class="primary-btn" style="margin: auto;" disabled>PROCEED TO CHECKOUT</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    @include('home.footer');

    <!-- Js Plugins -->
    <script src="home/js/jquery-3.3.1.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.nice-select.min.js"></script>
    <script src="home/js/jquery-ui.min.js"></script>
    <script src="home/js/jquery.slicknav.js"></script>
    <script src="home/js/mixitup.min.js"></script>
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/main.js"></script>

    <script>
        
    document.getElementById('applyCouponForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting normally

    let couponCode = document.getElementById('couponCode').value; // Get the coupon code value

    // Make an AJAX POST request to validate the coupon
    fetch('{{ route('validate.coupon') }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include the CSRF token
        },
        body: JSON.stringify({
            coupon: couponCode // Send the coupon code
        })
    })
    .then(response => response.json()) // Parse the JSON response
    .then(data => {
        if (data.success) {
            // Apply the discount if the coupon is valid
            let discountAmount = data.discount; // Get the discount amount
            let subtotalElement = document.querySelector('.subtotal').innerText.replace('₱', '');
            let subtotal = parseFloat(subtotalElement);

            // Update the discount value in the UI and hidden input
            document.getElementById('discountValue').innerText = '-' + discountAmount;
            document.getElementById('discount').value = discountAmount; // Update hidden input with discount

            // Update the total by subtracting the discount from the subtotal
            let newTotal = subtotal - discountAmount;

            // Update the total in the UI
            document.querySelector('.total').innerText = '₱' + newTotal.toFixed(2);
        } else {
            // Handle invalid or expired coupon
            document.getElementById('discountValue').innerText = ''; // Clear discount display
            Swal.fire({
                title: 'Error!',
                text: data.message, // Use the error message from the response
                icon: 'error',
                confirmButtonText: 'Okay'
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        Swal.fire({
            title: 'Error!',
            text: 'An error occurred while applying the coupon. Please try again later.',
            icon: 'error',
            confirmButtonText: 'Okay'
        });
    });
});

function confirmRemove(url) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'Do you really want to remove this product from your cart?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, remove it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
    
    </script>

    
</body>

</html>