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
    echo "Société : " . $_REQUEST['societe'] . "<br>";
    echo "Personne à contacter  : " . $_REQUEST['personne'] . "<br>";
    echo "Adresse de l'entreprise : " . $_REQUEST['adresse_ent'] . "<br>";
    echo "Code Postal : " . $_REQUEST['code_postal'] . "<br>";
    echo "Ville : " . $_REQUEST['ville'] . "<br>";
    echo "E-mail : " . $_REQUEST['email'] . "<br>";
    echo "Téléphone : " . $_REQUEST['téléphone'] . "<br>";
    echo "Environnement technique du projet : " . $_REQUEST['tab_prog'];
    //foreach
    ?>
</body>
</html>