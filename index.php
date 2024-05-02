
<?php 

require_once __DIR__ . '/Model/Movie.php';

require_once __DIR__ . '/data/movies.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
  <title>php-oop-1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="my-3 bg-dark text-secondary "> 

<h1 class=" text-center ">PHP-OOP-1</h1>

<div class="container">

  <div class="row row-cols-2 ">

    <?php foreach($movies as $movie) : ?>


      <div class="col d-flex justify-content-center ">


        <div class="card w-50  my-5 text-center bg-dark-subtle ">

          <img class="p-2" src="<?php echo $movie->getPoster(); ?>" alt="Poster">
          <div class="card-body">
            <h3 class="mb-4"><?php echo $movie->getName(); ?></h3>
            <p class="card-text">Year: <?php echo $movie->getYear(); ?></p>
            <p class="card-text">Language: <?php echo $movie->getLanguage(); ?></p>
            <p class="card-text">Genres: <?php echo implode(', ', $movie->getGenres()); ?></p>
          </div>


        </div>


      </div>

         
    <?php endforeach; ?>



  </div>


</div>

  
</body>
</html>