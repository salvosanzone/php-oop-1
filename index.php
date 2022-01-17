<?php
  //richiamo il file Movie.php
  require_once __DIR__.'/Movie.php';

  //inserisco le proprietà di base presenti nel costruttore
  $film1 = new Movie('Otto e mezzo', 'Federico Fellini', 1963, 'Drama/Fantasy');

  //aggiungo una proprietà senza utilizzare il costruttore
  $film1->dop = 'Tonino Delli Colli';

  //inserisco le proprietà di base presenti nel costruttore
  $film2 = new Movie('Stalker', 'Andrej Tarkovskij', 1979, 'Sci-fi');

  //aggiungo una proprietà senza utilizzare il costruttore
  $film2->dop = 'Aleksandr Kniažinskij';
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style/style.css">
</head>
<body>

<!-- FILM -->
  <div class="film">
    <ul>
      <h2>Title of Movie:</h2>
      <li>
        <h4>
          <?php echo $film1->title; ?>
        </h4>
      </li>
      <h2>Director:</h2>  
      <li>
        <h4>
          <?php echo $film1->director; ?>
        </h4>
      </li>
      <h2>Year:</h2>  
      <li>
        <h4>
          <?php echo $film1->year; ?>
        </h4>
      </li>
      <h2>Genre:</h2>
      <li>
        <h4>
          <?php echo $film1->getParentControl(); ?>
        </h4>
      </li>
      <h2>Director Of Photography:</h2>
      <li>
        <h4>
          <?php echo $film1->dop; ?>
        </h4>
      </li>
    </ul>
  </div> 
<!-- /FILM -->

<!-- FILM -->
  <div class="film">
    <ul>
      <h2>Title of Movie:</h2>
      <li>
        <h4>
          <?php echo $film2->title; ?>
        </h4>
      </li>
      <h2>Director:</h2>  
      <li>
        <h4>
          <?php echo $film2->director; ?>
        </h4>
      </li>
      <h2>Year:</h2>  
      <li>
        <h4>
          <?php echo $film2->year; ?>
        </h4>
      </li>
      <h2>Genre:</h2>
      <li>
        <h4>
          <?php echo $film2->getParentControl(); ?>
        </h4>
      </li>
      <h2>Director Of Photography:</h2>
      <li>
        <h4>
          <?php echo $film2->dop; ?>
        </h4>
      </li>
    </ul>
  </div> 
<!-- /FILM -->

</body>
</html>