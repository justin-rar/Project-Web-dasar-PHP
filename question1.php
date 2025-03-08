<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="question.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Question</title>
</head>

<body>
    <div class="container">
        <div class="text">
            <h1>Selamat Datang di Petualangan Kuliner</h1>
            <p>Jawab beberapa pertanyaan berikut untuk mengetahui selera kulinermu!</p>
        </div>
        <div class="container-child">
            <form action="result.php" method="POST">
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="question-text">
                            <h4>Pertanyaan 1: Apa jenis makanan kesukaanmu?</h4>
                        </div>
                        <div class="question-image">
                            <input type="radio" id="q1option1" name="q1" value="1" required>
                            <label for="q1option1" class="radio-label">
                                <img src="image/pasta.jpg" alt="pasta">
                                <p>pasta</p>
                            </label>
                            <input type="radio" id="q1option2" name="q1" value="2">
                            <label for="q1option2" class="radio-label">
                                <img src="image/sushi.jpg" alt="sushi">
                                <p>sushi</p>
                            </label>
                            <input type="radio" id="q1option3" name="q1" value="3">
                            <label for="q1option3" class="radio-label">
                                <img src="image/burrito.jpg" alt="burrito">
                                <p>burrito</p>
                            </label>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="question-text">
                            <h4>Pertanyaan 2: Apa bahan makanan yang kamu minati?</h4>
                        </div>
                        <div class="question-image">
                            <input type="radio" id="q2option1" name="q2" value="1" required>
                            <label for="q2option1" class="radio-label">
                                <img src="image/cheese.jpg" alt="cheese">
                                <p>cheese</p>
                            </label>
                            <input type="radio" id="q2option2" name="q2" value="2">
                            <label for="q2option2" class="radio-label">
                                <img src="image/seafood.jpg" alt="seafood">
                                <p>seafood</p>
                            </label>
                            <input type="radio" id="q2option3" name="q2" value="3">
                            <label for="q2option3" class="radio-label">
                                <img src="image/chili.jpg" alt="chili">
                                <p>chili</p>
                            </label>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="question-text">
                            <h4>Pertanyaan 3: Bagaimana kondisi ruangan sekitar?</h4>
                        </div>
                        <div class="question-image">
                            <input type="radio" id="q3option1" name="q3" value="1" required>
                            <label for="q3option1" class="radio-label">
                                <img src="image/hangat.jpg" alt="hangat">
                                <p>hangat</p>
                            </label>
                            <input type="radio" id="q3option2" name="q3" value="2">
                            <label for="q3option2" class="radio-label">
                                <img src="image/terang.jpg" alt="terang">
                                <p>terang</p>
                            </label>
                            <input type="radio" id="q3option3" name="q3" value="3">
                            <label for="q3option3" class="radio-label">
                                <img src="image/meriah.jpg" alt="meriah">
                                <p>meriah</p>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="btnB">
                <a href="result.php"><button>Cari Tahu!</button></a>
            </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>