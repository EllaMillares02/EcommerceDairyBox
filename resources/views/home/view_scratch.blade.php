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
            border: none; /* No border for a cleaner look */
            position: absolute; /* Position the canvas absolutely */
            top: 0;
            left: 0;
            z-index: 1; /* Make sure the canvas is above the cover */
        }
        .scratch {
            text-align: center;
            margin: 3% 25% 5% 25%;
        }
        .scratch-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    
        .scratch {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .scratch-cards {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
    
        .scratch-card {
            width: 250px; /* Adjust size as necessary */
            height: 250px; /* Adjust size as necessary */
            margin: 0 10px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            border-radius: 8px; /* Optional: rounded corners */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Optional: add shadow for depth */
            transition: transform 0.2s; /* Add transition for hover effect */
        }
    
        .scratch-card:hover {
            transform: scale(1.05); /* Slightly enlarge on hover */
        }
    
        .scratch-card .cover {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 0; /* Cover should be below the canvas */
        }
    
        .scratch-card.revealed {
            background-color: transparent; /* Make it transparent when revealed */
        }
    
        .image {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 0; /* Image should be below the canvas */
        }
    
        #result {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            color: #333; /* Change color if needed */
        }
        .scratch-card.disabled {
            opacity: 0.5; /* Make it look faded */
            cursor: not-allowed; /* Change cursor to indicate it's disabled */
        }
        .intro-heading {
        margin-top: 10px;
        color: white;
        padding: 20px;
    }
    @media (max-width: 768px) {
    .scratch-cards {
        flex-direction: column; /* Stack cards vertically */
    }

    .scratch-card {
        width: 200px; /* Reduce size on smaller screens */
        height: 200px;
    }
}

@media (max-width: 480px) {
    .scratch-cards {
        flex-direction: column; /* Ensure cards stack vertically */
        margin: 10px 0;
    }

    .scratch-card {
        width: 150px; /* Further reduce size for very small screens */
        height: 150px;
        margin-bottom: 20px;
    }
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
                        <h2>Scratch and Win</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/games') }}">Games</a>
                            <span>Scratch and Win</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container d-flex align-items-center justify-content-center">
        <div class="intro-heading text-center">
            <h3>🎉 Scratch and Win! 🎉</h3>
            <p>Uncover your prize and enjoy exciting rewards!</p>
        </div>
    </div>

    <div class="scratch-container">
        <div class="scratch">
            <div class="scratch-cards">
                <div class="scratch-card" id="card1"></div>
                <div class="scratch-card" id="card2"></div>
                <div class="scratch-card" id="card3"></div>
            </div>
            <div id="result"></div>
            <div id="message" style="color: red; font-weight: bold; margin-top: 20px;"></div>
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
    <script>
   document.addEventListener('DOMContentLoaded', () => {
        const images = [
            'img/games/Scratch-1.png',
            'img/games/Scratch-2.png',
            'img/games/Scratch-3.png'
        ];
        const cards = document.querySelectorAll('.scratch-card');
        const resultDisplay = document.getElementById('result');
        const messageDiv = document.getElementById('message');

        // Check if the game was already played today
        const today = new Date().toLocaleDateString(); // Get today's date
        const lastPlayed = localStorage.getItem('scratchGameLastPlayed');

        if (lastPlayed === today) {
            messageDiv.textContent = 'You can only play this game once a day. Please come back tomorrow!';
            cards.forEach(card => {
            card.style.pointerEvents = 'none'; // Disable interaction
            card.style.backgroundColor = 'rgb(237, 187, 14, 1)'; 
        }); // Disable cards
            return;
        }

        // Assign random images to each card
        cards.forEach((card) => {
            const imgIndex = Math.floor(Math.random() * images.length);
            card.dataset.image = images[imgIndex];

            const canvas = document.createElement('canvas');
            card.appendChild(canvas);
            canvas.width = card.clientWidth;
            canvas.height = card.clientHeight;
            const ctx = canvas.getContext('2d');

            ctx.fillStyle = 'rgb(237, 187, 14, 1)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);

            const coverImage = 'img/games/reveal.png';
            const coverDiv = document.createElement('div');
            coverDiv.classList.add('cover');
            coverDiv.style.backgroundImage = `url('${coverImage}')`;
            card.appendChild(coverDiv);

            let isScratching = false;

            canvas.addEventListener('mousedown', (event) => {
                isScratching = true;
                scratch(event, ctx, card);
            });

            canvas.addEventListener('mouseup', () => {
                isScratching = false;
            });

            canvas.addEventListener('mouseleave', () => {
                isScratching = false;
            });

            canvas.addEventListener('mousemove', (event) => {
                if (isScratching) {
                    scratch(event, ctx, card);
                }
            });
        });

        function scratch(event, ctx, card) {
            const rect = ctx.canvas.getBoundingClientRect();
            const x = event.clientX - rect.left;
            const y = event.clientY - rect.top;
            const scratchSize = 30;

            ctx.globalCompositeOperation = 'destination-out';
            ctx.beginPath();
            ctx.arc(x, y, scratchSize, 0, Math.PI * 2, false);
            ctx.fill();

            if (isFullyScratched(ctx, ctx.canvas.width, ctx.canvas.height)) {
                card.classList.add('revealed');
                card.innerHTML = `<div class="image" style="background-image: url('${card.dataset.image}'); width: 100%; height: 100%; background-size: cover;"></div>`;
                checkAllRevealed();
            }
        }

        function checkAllRevealed() {
            const revealedCards = Array.from(cards).filter(card => card.classList.contains('revealed'));

            if (revealedCards.length === cards.length) {
                displayResult(revealedCards);

                // Save the date of the game play
                localStorage.setItem('scratchGameLastPlayed', today);
            }
        }

        function isFullyScratched(ctx, width, height) {
            const imgData = ctx.getImageData(0, 0, width, height);
            const pixels = imgData.data;
            let scratchedPixels = 0;

            for (let i = 0; i < pixels.length; i += 4) {
                if (pixels[i + 3] === 0) {
                    scratchedPixels++;
                }
            }

            return scratchedPixels / (width * height) > 0.7;
        }

        function displayResult(revealedCards) {
            const revealedImages = revealedCards.map(card => card.dataset.image);
            const firstImage = revealedImages[0];
            const allMatch = revealedImages.every(img => img === firstImage);

            if (allMatch) {
                resultDisplay.innerText = 'Congratulations! You won a Coupon: PABUY20CODE';
            } else {
                resultDisplay.innerText = 'Sorry, try again next time.';
            }
        }
    });

    </script>

</body>

</html>
