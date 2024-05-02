<?php

require_once __DIR__ . '/Model/Movie.php';

$movie = new Movie('Movie', 2016, 'action', 10);

var_dump($movie);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Modello</title>
</head>

<body>
  <div class="container my-5">
    <h1>Modello</h1>
  </div>
</body>

</html>