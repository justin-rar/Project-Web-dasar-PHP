<?php
if (!isset($_POST['q1']) || !isset($_POST['q2']) || !isset($_POST['q3'])) {
    header("Location: .php?error=Harap isi semua pertanyaan!");
    exit();
}

// Ambil data dari form
if (isset($_POST['q1'])) {
    $food = $_POST['q1'];
} else {
    $food = 0;
}

if (isset($_POST['q2'])) {
    $ingredient = $_POST['q2'];
} else {
    $ingredient = 0;
}

if (isset($_POST['q3'])) {
    $environment = $_POST['q3'];
} else {
    $environment = 0;
}

// Array untuk menyimpan skor negara
$scores = [
    'Italia' => 0,
    'Jepang' => 0,
    'Meksiko' => 0
];

// Tambahkan poin sesuai jawaban user
if ($food == 1) $scores['Italia']++;
if ($food == 2) $scores['Jepang']++;
if ($food == 3) $scores['Meksiko']++;

if ($ingredient == 1) $scores['Italia']++;
if ($ingredient == 2) $scores['Jepang']++;
if ($ingredient == 3) $scores['Meksiko']++;

if ($environment == 1) $scores['Italia']++;
if ($environment == 2) $scores['Jepang']++;
if ($environment == 3) $scores['Meksiko']++;

// Tentukan negara dengan poin tertinggi
// $bestMatch = array_search(max($scores), $scores);

$max = max($scores);
$bestMatch = 0;

foreach ($scores as $country => $v) {
    if ($v == $max) {
        $bestMatch = $country;
        break;
    }
}


// Tentukan background dan gambar berdasarkan hasil
$bgColor = [
    'Italia' => 'blue',
    'Jepang' => 'red',
    'Meksiko' => 'indianred'
];

$foodImage = [
    'Italia' => 'image/italy.jpg',
    'Jepang' => 'image/japan.jpg',
    'Meksiko' => 'image/mexico.jpg'
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Hasil Kuliner</title>
</head>
<body style="background-color: <?php echo $bgColor[$bestMatch]; ?>">
    <div class="container">
        <h1>Destinasi Kuliner yang Cocok untukmu adalah:</h1>
        <h2><?= $bestMatch; ?></h2>
        <p>Berdasarkan pilihanmu, kuliner <?= $bestMatch; ?> adalah yang paling sesuai dengan seleramu!</p>
        <img src="<?= $foodImage[$bestMatch]; ?>" alt="<?= $bestMatch; ?>">
        <br>
        <a href="landing-page.html" class="btn">Kembali ke Awal</a>
    </div>
</body>
</html>
