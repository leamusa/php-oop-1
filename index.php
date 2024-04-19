<?php
// Include la classe Movie
include_once './class/movie.php';
// Include la classe serietv
include_once './class/tvserie.php';


// Crea due oggetti Movie
$movies = [
    new Movie('Quei bravi ragazzi', 'english', 8),
    new Movie('La grande Bellezza', 'italian', 9)
];

// Imposta il percorso dell'immagine per ciascun film
$movies[0]->setImg('https://pad.mymovies.it/filmclub/2006/03/273/locandina.jpg');
$movies[1]->setImg('https://pad.mymovies.it/filmclub/2012/05/105/locandina.jpg');
?>

<!doctype html>
<html lang="en">
<head>
    <title>Favorites movies of Lea</title>
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
                <?php foreach ($movies as $movie): ?>
                    <li class="list-group-item">
                        <img src="<?php echo $movie->img; ?>" class="img-fluid me-3" alt="<?php echo $movie->getTitle(); ?>" style="max-width: 600px;">
                        <div>
                            <h5 class="mb-1"><?php echo $movie->getTitle(); ?></h5>
                            <p class="mb-1">Language: <?php echo $movie->getLanguage(); ?></p>
                            <p class="mb-1">Grade: 
                                <?php 
                                    for ($i = 1; $i <= 10; $i++) {
                                        if ($i <= $movie->getGrade()) {
                                            echo '<i class="fas fa-star filled-star"></i>';
                                        } else {
                                            echo '<i class="fas fa-star empty-star"></i>';
                                        }
                                    }
                                ?>
                            </p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
