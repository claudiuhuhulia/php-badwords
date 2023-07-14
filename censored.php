<?php

$paragraph = $_GET['paragraph'];
$word = $_GET['word'];
$cens = '***';

$lunghezza_stringa = strlen($paragraph);

$censored_paragraph = str_replace($word, $cens, $paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Censura</title>
</head>

<body>

    <div class="container">

        <h3>La frase inserita:</h3>
        <p> <?= $paragraph ?> </p>

        <h3>La sua lunghezza è:</h3>
        <p class="fw-bold"><?= $lunghezza_stringa ?></p>

        <h3>La frase censurata diventa</h3>
        <p> <?= $censored_paragraph ?></p>

        <h3>La sua lunghezza è:</h3>
        <p class="fw-bold"> <?= strlen($censored_paragraph) ?> </p>
    </div>


</body>

</html>