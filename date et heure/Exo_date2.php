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

$debut = new DateTimeImmutable('2022-10-05');
$fin = new DateTimeImmutable('2022-12-05');
$interval = $debut->diff($fin); // diff = différence entre deux objet dateTime
 echo $interval->format('%R%a jours')




?>    

</body>
</html>