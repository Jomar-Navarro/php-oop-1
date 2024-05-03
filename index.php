<?php

require_once __DIR__ . '/Model/Movie.php';

$IronMan = new Movie('Iron Man', 2008, ['Action', 'Adventure', 'Sci-Fi', 'Fantasy'], 10);
$IronManTwo = new Movie('Iron Man 2', 2010, ['Action', 'Adventure', 'Sci-Fi', 'Fantasy'], 10);
$IronManThree = new Movie('Iron Man 3', 2008, ['Action', 'Adventure', 'Sci-Fi', 'Fantasy'], 10);
$Avengers = new Movie('Avengers', 2008, ['Action', 'Adventure', 'Sci-Fi', 'Fantasy'], 10);
$AgeOfUltron = new Movie('Avengers: Age of Ultron', 2008, ['Action', 'Adventure', 'Sci-Fi', 'Fantasy'], 10);

// var_dump($IronMan);
// var_dump($IronManTwo);
// var_dump($IronManThree);
// var_dump($Avengers);
// var_dump($AgeOfUltron);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>Modello</title>
</head>

<body>
  <div class="container my-5">
    <h1 class="my-5 text-center text-white fw-bolder">Movies</h1>

    <div class="flex-wrap d-flex">

      <div class="card m-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $IronMan->title ?></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">
            <?php echo $IronMan->year ?>
          </h6>
          <p class="card-text"><?php echo implode(", ", $IronMan->genre) ?></p>
          <p class="card-text"><?php echo $IronMan->vote ?></p>
        </div>
      </div>

      <div class="card m-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $IronManTwo->title ?></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">
            <?php echo $IronManTwo->year ?>
          </h6>
          <p class="card-text"><?php echo implode(", ", $IronManTwo->genre) ?></p>
          <p class="card-text"><?php echo $IronManTwo->vote ?></p>
        </div>
      </div>

      <div class="card m-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $IronManThree->title ?></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">
            <?php echo $IronManThree->year ?>
          </h6>
          <p class="card-text"><?php echo implode(", ", $IronManThree->genre) ?></p>
          <p class="card-text"><?php echo $IronManThree->vote ?></p>
        </div>
      </div>

      <div class="card m-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $Avengers->title ?></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">
            <?php echo $Avengers->year ?>
          </h6>
          <p class="card-text"><?php echo implode(", ", $Avengers->genre) ?></p>
          <p class="card-text"><?php echo $Avengers->vote ?></p>
        </div>
      </div>

      <div class="card m-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $AgeOfUltron->title ?></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">
            <?php echo $AgeOfUltron->year ?>
          </h6>
          <p class="card-text"><?php echo implode(", ", $AgeOfUltron->genre) ?></p>
          <p class="card-text"><?php echo $AgeOfUltron->vote ?></p>
        </div>
      </div>

    </div>
  </div>
</body>

</html>