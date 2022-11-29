<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function AnneeBissextile($annee)
{
   $MultipleDeQuatreCent = ( ($annee % 400) == 0);
   $MultipleDeQuatre = ( ($annee % 4) == 0);
   $PasMultipleDeCent = ( ($annee % 100) != 0);      
   return ( $MultipleDeQuatreCent || ( $MultipleDeQuatre &&
$PasMultipleDeCent ) );
}
$y = date("Y"); // pour les tests modifier manuellement $y
if(AnneeBissextile($y))
      $message = $y." est une année bissextile !<br />";
else  $message = $y." n'est pas une année bissextile !<br />";
echo $message;




?>    

</body>
</html>