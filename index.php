<?php
  //richiamo il file Movie.php
  require_once __DIR__.'/Movie.php';

  //inserisco le proprietà di base presenti nel costruttore
  $film1 = new Movie('Otto e mezzo', 'Federico Fellini', 1963, 'Drama/Fantasy');

  //aggiungo una proprietà senza utilizzare il costruttore
  $film1->dop = 'Tonino Delli Colli';

  // $film2 = new Movie();
  // $film2->title = 'Stalker';
  // $film2->director = 'Andrej Tarkovskij';
  // $film2->year = 1979;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<!-- FILM -->
  <div>
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

</body>
</html>