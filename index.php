<?php
 include __DIR__ . '/Movie.php';
 include __DIR__ . '/data.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <div class="container">
        <h1>Movies</h1>
        <ul><?php
            foreach ($movies as $movie) { ?>
                <li><?= $movie->title ?> <br>
                    <?= $movie->year ?> <br>
                    <?= $movie->actors ?> <br>
                </li><?php
            } ?>
        </ul>
    </div>
</body>
</html>