<!DOCTYPE html>
<html lang="en">

<head>
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
    <link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="home/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="home/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/style.css" type="text/css">

    <style>
        canvas {
        border: 2px solid #000;
        border-radius: 50%;
        }
        .spin{
            text-align: center;
            margin: 3% 25% 5% 25%;
        }
        .spin-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .spin {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #spinButton {
        margin-top: 15px;
        padding: 10px 20px;
        font-size: 1em;
        cursor: pointer;
        background-color: #EDBB0E;
        color: white;
    }

    #revealButton{
        margin-top: 15px;
        margin-bottom: 50px;
        padding: 10px 20px;
        font-size: 1em;
        cursor: pointer;
        background-color: #EDBB0E;
        color: white;
    }
    #copyButton{
        margin-top: 15px;
        margin-bottom: 50px;
        padding: 10px 20px;
        font-size: 1em;
        cursor: pointer;
        background-color: grey;
        color: white;
    }

    .prize-display {
        margin-bottom: 20px;
        font-size: 1.5em;
        color: red;
        text-align: center;
    }
    .intro-heading {
    margin-top: 10px;
    color: white;
    padding: 20px;
}

    </style>
</head>

<body>

    @include('home.header')

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

    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Spin and Win</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/games') }}">Games</a>
                            <span>Spin and Win</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container d-flex align-items-center justify-content-center">
        <div class="intro-heading text-center">
            <h3>🎉 Spin and Win! 🎉</h3>
            <p>Try your luck and win exciting prizes!</p>
        </div>
    </div>


    <div class="spin-container">
        <div class="spin">
            <canvas id="wheel" width="300" height="300"></canvas>
            <button id="spinButton">Spin the Wheel!</button>
          
        <div id="message" style="color: red; font-weight: bold; margin-top: 20px;"></div>
        </div>  
        <div id="prizeDisplay" class="prize-display">
           
        </div>  
        <button id="revealButton" style="display: none;">Reveal Prize</button>
        <button id="copyButton" style="display:none;">Copy</button>
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

    <script>
        const canvas = document.getElementById('wheel');
const ctx = canvas.getContext('2d');
const spinButton = document.getElementById('spinButton');
const segments = ['Prize 1', 'Prize 2', 'Prize 3', 'Prize 4', 'Prize 5', 'Prize 6'];
const couponCodes = ['PABUY50CODE', 'PABUY20CODE', 'PABUY10CODE', 'PABUY10CODE', 
    'Screenshoot This! You win free Cows Milk, then claim it to the store', 
    'Screenshoot This! You win free Ice cream, then claim it to the store'];
const colors = ['#FF6B6B', '#FFD93D', '#6BCB77', '#4D96FF', '#FF85B3', '#FFA500'];
let currentAngle = 0;

 // Message display
 const messageDiv = document.getElementById('message');

// Check if the game was already played today
const today = new Date().toLocaleDateString(); // Get today's date as a string
const lastPlayed = localStorage.getItem('lastPlayed');

if (lastPlayed === today) {
    spinButton.disabled = true; // Disable the button if already played
    messageDiv.textContent = 'You can only play this game once a day. Please come back tomorrow!';
}

// Draw the wheel
function drawWheel() {
    const numSegments = segments.length;
    const anglePerSegment = (2 * Math.PI) / numSegments;

    for (let i = 0; i < numSegments; i++) {
        ctx.beginPath();
        ctx.moveTo(canvas.width / 2, canvas.height / 2);
        ctx.arc(canvas.width / 2, canvas.height / 2, canvas.width / 2, currentAngle, currentAngle + anglePerSegment);
        ctx.fillStyle = colors[i];
        ctx.fill();
        ctx.stroke();
        ctx.save();
        ctx.translate(canvas.width / 2, canvas.height / 2);
        ctx.rotate(currentAngle + anglePerSegment / 2);
        ctx.textAlign = 'right';
        ctx.fillStyle = '#000';
        ctx.fillText(segments[i], canvas.width / 2 - 10, 10);
        ctx.restore();
        currentAngle += anglePerSegment;
    }
}

// Spin the wheel
function spinWheel() {
    const spinAngle = Math.random() * 10 + 20;
    const spinDuration = 5000;
    const startTime = Date.now();

    function animate() {
        const elapsedTime = Date.now() - startTime;
        const progress = Math.min(elapsedTime / spinDuration, 1);
        currentAngle += (spinAngle * (1 - Math.pow(progress - 1, 3))) * Math.PI / 180;
        drawWheel();

        if (progress < 1) {
            requestAnimationFrame(animate);
        } else {
            const winningSegmentIndex = Math.floor((currentAngle / (2 * Math.PI)) * segments.length) % segments.length;
            const winningSegment = segments[winningSegmentIndex]; // Prize won
            prizeDisplay.textContent = `Congratulations! You've won ${winningSegment}!`;

            const revealButton = document.getElementById('revealButton');
            revealButton.style.display = 'inline';
            revealButton.onclick = function () {
                const winningCoupon = couponCodes[winningSegmentIndex];
                prizeDisplay.textContent = `Congratulations! You've won: ${winningCoupon}`;

                const copyButton = document.getElementById('copyButton');
                copyButton.style.display = 'inline';
                copyButton.onclick = function () {
                    navigator.clipboard.writeText(winningCoupon).then(() => {
                        alert('Coupon code copied to clipboard!');
                    }).catch(err => {
                        console.error('Failed to copy: ', err);
                    });
                };

                revealButton.style.display = 'none';
            };

            // Save today's date in localStorage to prevent replaying
            localStorage.setItem('lastPlayed', today);

            spinButton.disabled = true; // Disable the spin button
        }
    }

    animate();
}

spinButton.addEventListener('click', spinWheel);
drawWheel();


    </script>

</body>

</html>
