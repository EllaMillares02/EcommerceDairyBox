<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pa-Buy | Ecommerce</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

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
        body {
            background-color: #f8f9fa; 
        }
    
        .card {
            border-radius: 15px; 
        }
    
        .card-header {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
    
        .form-label {
            font-weight: bold;
        }
    
        .btn-primary {
            background-color: #EDBB0E;
            border: none;
        }
    
        .btn-primary:hover {
            background-color: #EDBB0E;
        }
        .card{
            margin-bottom: 50px;
        }
        .card-header{
            background-color: #EDBB0E;
        }
    </style>


</head>

<body>

    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> albaydairybox@gmail.com</li>
                                <li>We Deliver and You Can Pick-up Orders</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <script>
            @if (session('error_message'))
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '{{ session('error_message') }}',
                });
            @endif
        </script>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-white text-center">
                            <h4>Complete Your Profile</h4>
                        </div>
                        <div class="card-body">
                            <!-- Profile Form -->
                            <form method="POST" action="{{ route('saveProfile') }}">
                                @csrf
                                <!-- Address Field -->
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" id="address" name="address" class="form-control" required placeholder="Enter your address">
                                </div>
    
                                <!-- Phone Field -->
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" id="phone" name="phone" class="form-control" required placeholder="Enter your phone number">
                                </div>
    
                                <!-- Password Field -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">New Password</label>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter a new password" required>
                                </div>

                                <!-- Confirm Password Field -->
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm your new password" required>
                                </div>

    
                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary w-100">Save Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    

</body>

</html>
