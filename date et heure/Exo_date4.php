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
$date_test=checkdate(32,17,2019);
if($date_test==true){
    echo "date valide";
}else{
echo "erreur date";
}
    
    
    
    ?>
</body>
</html>