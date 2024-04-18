<?php
// include class Movie
include_once './class/movie.php';

// Create two obj Movie
$movie1 = new Movie('Quei bravi ragazzi', 'english', 8);
$movie2 = new Movie('La grande Bellezza', 'italian', 9);

// Impost img for movies
$movie1->setImg('https://pad.mymovies.it/filmclub/2006/03/273/locandina.jpg');
$movie2->setImg('https://pad.mymovies.it/filmclub/2012/05/105/locandina.jpg');

// print info
//var_dump($movie1);
//var_dump($movie2);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <header>
    <h1><i class="fas fa-film"></i> Favorites movies of Lea</h1>
    </header>
    <main>
    <div class="container">
    <ul class="list-group">
        <li class="list-group-item">
            <img src="<?php echo $movie1->img; ?>" class="img-fluid me-3" alt="<?php echo $movie1->title; ?>" style="max-width: 400px;">
            <div>
                <h5 class="mb-1"><?php echo $movie1->title; ?></h5>
                <p class="mb-1">Language: <?php echo $movie1->language; ?></p>
                <p class="mb-1">Grade: <?php echo $movie1->grade; ?></p>
            </div>
        </li>
        <li class="list-group-item">
            <img src="<?php echo $movie2->img; ?>" class="img-fluid me-3" alt="<?php echo $movie2->title; ?>" style="max-width: 400px;">
            <div>
                <h5 class="mb-1"><?php echo $movie2->title; ?></h5>
                <p class="mb-1">Language: <?php echo $movie2->language; ?></p>
                <p class="mb-1">Grade: <?php echo $movie2->grade; ?></p>
            </div>
        </li>
    </ul>
</div>

    </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
