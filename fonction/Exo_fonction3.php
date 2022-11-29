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
function verification_mdp($mdp)
{

$majuscule=preg_match('@[A-Z]@',$mdp);
$minuscule=preg_match('@[a-z]@',$mdp);
$chiffre=preg_match('@[0-9]@',$mdp);

if (!$majuscule || !$minuscule || !$chiffre || strlen($mdp)<8)
{
return false;
echo "non correct";
}
else
return true;
echo "correct";

}
if (verification_mdp('TopSecret42')!=true)
{
    echo "non correct";
}else
echo'correct';

verification_mdp ($mdp)
    ?>
    
</body>
</html>








