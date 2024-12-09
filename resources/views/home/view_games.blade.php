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
</head>

<body>

    @include('home.header')


        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Game Intro Heading -->
                    <h2 class="section-title">Fun & Rewards Await You!</h2>
                    <!-- Brief Description -->
                    <p class="intro-text">
                        Welcome to our exciting game corner! Choose from a variety of fun games designed to offer thrilling rewards. 
                        Try your luck with "Spin the Wheel," uncover hidden surprises with "Scratch Card," or challenge your knowledge with the "Daily Quiz."
                        Play now and see what you could win!
                    </p>
                    <!-- Optional Banner Image -->
                    <img src="img/games/games.png" alt="Exciting Games" class="intro-banner img-fluid">
                </div>
            </div>

    

    <section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>Play Now!</h2>
                </div>
            </div>
        </div>
            <div class="row">
                <!-- Spin the Wheel Card -->
                <div class="col-md-4">
                    <div class="card game-card">
                        <img src="img/games/games-1.png" class="card-img-top" alt="Spin the Wheel">
                        <div class="card-body">
                            <h5 class="card-title">Spin the Wheel</h5>
                            <p class="card-text">Try your luck and win exciting discounts!</p>
                            <a href="{{url('view_spin')}}" class="btn btnPlay">Play Now</a>
                        </div>
                    </div>
                </div>
                
                <!-- Scratch Card -->
                <div class="col-md-4">
                    <div class="card game-card">
                        <img src="img/games/games-2.png" class="card-img-top" alt="Scratch Card">
                        <div class="card-body">
                            <h5 class="card-title">Scratch Card</h5>
                            <p class="card-text">Scratch to reveal a surprise prize just for you!</p>
                            <a href="{{url('view_scratch')}}" class="btn btnPlay">Play Now</a>
                        </div>
                    </div>
                </div>
                
                <!-- Daily Quiz Challenge -->
                <div class="col-md-4">
                    <div class="card game-card">
                        <img src="img/games/games-3.png" class="card-img-top" alt="Daily Quiz">
                        <div class="card-body">
                            <h5 class="card-title">Daily Quiz</h5>
                            <p class="card-text">Answer the daily quiz and win rewards.</p>
                            <a href="{{url('view_quiz')}}" class="btn btnPlay">Play Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

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

    

</body>

</html>
