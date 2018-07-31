<?php
$number = 0; //définition de la variable
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 1</title>
</head>
<body>
  <p>
    <?php
    while ($number <= 10) //début de la boucle : tant que la variable est inférieur à 10
    {
      echo $number++; // incrémentation de la variable
    }
    /*
    for($number = 0; number <= 10; $number++)
    {
    echo $number . ' ';
  }
    ?>
  </p>
</body>
</html>
