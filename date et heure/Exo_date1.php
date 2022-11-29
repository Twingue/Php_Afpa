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
    
    // echo "Nous sommes le " . date("d/m/Y") ;
    // echo "<br>";
    // echo date("H:i:s");
    // $oDate = new DateTime();
    // var_dump($oDate);

$date = "2019-07-14";
$semaine=strtotime ($date); // strtotime = depuis le 01/01
echo date('W',$semaine);
    
    
    ?>
    
</body>
</html>