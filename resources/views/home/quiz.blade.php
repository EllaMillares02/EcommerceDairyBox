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
     
     #next, #finish {
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #EDBB0E; /* Green color */
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    position: absolute;
    right: 30px;
    bottom: 30px;
}

#next:hover, #finish:hover {
    background-color: #EDBB0E; /* Darker green on hover */
}

#finish {
    display: none;
    background-color: #218838; /* Blue color */
}

#finish:hover {
    background-color: #218838; /* Darker blue on hover */
}

/* Adjustments to .quiz-container for button positioning */
.center-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    position: relative; /* Needed to position buttons relative to container */
}

.quiz-container {
    max-width: 600px;
    width: 100%;
    background: #fff;
    padding: 30px;
    padding-bottom: 80px; /* Add extra space at bottom for buttons */
    border-radius: 15px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    text-align: center;
    position: relative;
    animation: slideIn 0.5s ease;
}


@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

h1 {
    font-size: 2em;
    margin-bottom: 10px;
    color: #333;
}

p {
    font-size: 1em;
    margin-bottom: 20px;
    color: #555;
}

.question {
    margin: 20px 0;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 10px;
    border: 1px solid #ddd;
}

.question p {
    font-weight: bold;
    color: #444;
}

label {
    display: block;
    margin: 8px 0;
    cursor: pointer;
    color: #666;
}

input[type="radio"] {
    margin-right: 10px;
}

#submit {
    background: #EDBB0E;
    color: #fff;
    border: none;
    padding: 15px 30px;
    font-size: 1em;
    border-radius: 8px;
    cursor: pointer;
    margin-top: 20px;
    transition: background 0.3s;
}

#submit:hover {
    background: #EDBB0E;
}

#finish {
    display: none;
}

#result {
    margin-top: 20px;
    font-size: 1.2em;
    font-weight: bold;
}

#result h2 {
    color: #28a745;
}

.no-prize {
    color: #d9534f;
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
                            <span>All departments</span>
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
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do you need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
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
                        <h2>Daily Quiz</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/games') }}">Games</a>
                            <span>Daily Quiz</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="center-wrapper">
        <div class="quiz-container">
            <h3>🧠🎉 Daily Quiz Game 🧠🎉</h3>
            <p>Test your knowledge and win amazing prizes!</p>
            <div id="quiz">
                <!-- Question will load here -->
            </div>
            <button id="next" onclick="nextQuestion()">Next</button>
            <button id="finish" onclick="finishQuiz()">Finish Quiz</button>
            <div id="result"></div>
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
        let quizData = [];
let currentQuestionIndex = 0;
let selectedAnswers = [];

// Check if the quiz has been played today
const lastPlayedQuiz = localStorage.getItem('lastPlayedQuiz');
const todayQuiz = new Date().toISOString().split('T')[0];

if (lastPlayedQuiz === todayQuiz) {
    document.getElementById('quiz').innerHTML = `
        <h2>You can only play this quiz once a day. Please come back tomorrow!</h2>
    `;
} else {
    // Fetch 3 questions from the API (or use a static set of 3 questions)
    fetch('https://opentdb.com/api.php?amount=3&category=9&type=multiple') // 3 questions, category 9 (general Knowledge)
        .then(response => response.json())
        .then(data => {
            quizData = data.results.map(item => ({
                question: item.question,
                options: [...item.incorrect_answers, item.correct_answer].sort(() => Math.random() - 0.5),
                answer: item.correct_answer
            }));
            loadQuestion(currentQuestionIndex); // Load the first question
        })
        .catch(error => console.error('Error fetching quiz data:', error));
}

// Function to load a question into the HTML
function loadQuestion(index) {
    const quizContainer = document.getElementById('quiz');
    quizContainer.innerHTML = `
        <div class="question">
            <p>${quizData[index].question}</p>
            ${quizData[index].options.map(option => `
                <label>
                    <input type="radio" name="answer" value="${option}">
                    ${option}
                </label>
            `).join('')}
        </div>
    `;

    // Disable Next button until an answer is selected
    document.getElementById('next').disabled = true;

    // Listen for the answer to be selected
    document.querySelectorAll('input[name="answer"]').forEach(input => {
        input.addEventListener('change', () => {
            document.getElementById('next').disabled = false;
        });
    });
}

// Function to move to the next question
function nextQuestion() {
    const selectedOption = document.querySelector('input[name="answer"]:checked');
    if (selectedOption) {
        selectedAnswers[currentQuestionIndex] = selectedOption.value;
    } else {
        alert("Please select an answer!");
        return;
    }

    currentQuestionIndex++;

    if (currentQuestionIndex < quizData.length) {
        loadQuestion(currentQuestionIndex);
    }

    if (currentQuestionIndex === quizData.length - 1) {
        document.getElementById("next").style.display = "none";
        document.getElementById("finish").style.display = "inline";
    }
}

// Function to finish the quiz
function finishQuiz() {
    const selectedOption = document.querySelector('input[name="answer"]:checked');
    if (selectedOption) {
        selectedAnswers[currentQuestionIndex] = selectedOption.value;
    } else {
        alert("Please select an answer!");
        return;
    }

    const correctAnswers = quizData.map(q => q.answer);
    let score = 0;

    selectedAnswers.forEach((answer, index) => {
        if (answer === correctAnswers[index]) {
            score++;
        }
    });

    const resultContainer = document.getElementById('result');
    const prizes = ["Coupon: PABUY20CODE", "Free Milk", "Coupon: PABUY30CODE", "Coupon: PABUY40CODE"];
    const randomPrize = prizes[Math.floor(Math.random() * prizes.length)];

    if (score === quizData.length) {
        resultContainer.innerHTML = `<h2>Congratulations! You won: ${randomPrize}</h2>`;
    } else {
        resultContainer.innerHTML = `<h2 class="no-prize">Sorry, no prize this time. Try again!</h2>`;
    }

    // Set today's date as last played date
    localStorage.setItem('lastPlayedQuiz', todayQuiz);

    // Hide quiz container and finish button
    document.getElementById('quiz').style.display = "none";
    document.getElementById('finish').style.display = "none";
}

    </script>

</body>

</html>
