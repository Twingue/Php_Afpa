<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice boucle 3</title>
</head>
<body>
    
<?php
// table-border=1

  echo '<link rel="stylesheet" href="./ex3.css">';

  $i = -1;
  $j = -1;
  echo "<table>";
  echo "<tr>";
  echo "<td> </td>";
  while (++$j <= 12)
    echo "<td><h5>$j</h5></td>";       // J'affiche la ligne du haut
  echo "</tr>";
  $j = -1;
  while (++$j <= 12)
  {
    $i = -1;                          // Je remets i à -1 à chaque nouvelle entrée dans la boucle
    echo "<tr>";
    echo "<td><h5>$j</h5></td>";      // J'affiche la ligne de gauche
    while (++$i <= 12)
    {
      $res = $i * $j;
      echo "<td>$res</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
?>

</body>
</html>
    
