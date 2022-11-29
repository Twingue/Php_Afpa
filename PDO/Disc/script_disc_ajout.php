<?php
 

if(isset($_POST['title'])&& $_POST['title'] != ""){
    $titre=$_POST['title'];
}
else{
    $titre=null;
}
//var_dump($titre);

if(isset($_POST['artist'])&& $_POST['artist'] !="" ){
    $artist=$_POST['artist'];
}
else{
    $artist=null;
}
//var_dump($artist);

if(isset($_POST['year'])&& $_POST['year'] != ""){
    $year=$_POST['year'];
}
else{
    $year=null;
}
//var_dump($year);





if(isset($_POST['genre'])&& $_POST['genre'] != ""){
    $genre=$_POST['genre'];
}else{
    $genre=null;
}
//var_dump($genre);

if(isset($_POST['label'])&& $_POST['label'] != ""){
    $label=$_POST['label'];
}
else{
    $label=null;
}
//var_dump($label);

$price = (isset($_POST["price"]) && $_POST["price"] != "") ? str_replace([","], ["."], $_POST["price"]) : null;
//var_dump($price);

/*if(isset($_POST["picture"])&& $_POST['picture'] != ""){
    $picture=$_POST['picture'];
}
else{
    $picture=null;
}*/

// $title = addslashes($_POST['title']);
// $artist = addslashes($_POST['artist']);
// $genre = addslashes($_POST['genre']);
// $label = addslashes($_POST['label']);






  
if(isset($_FILES['picture'])) {
    $name_file = $_FILES['picture']['name'];
    $picture = $name_file;
    //echo var_dump($_FILES['picture']['name']);
    $tmp_name = $_FILES['picture']['tmp_name'];
    $local_images="jaquettes/";
  move_uploaded_file($tmp_name,$local_images.$name_file);
    
}











//erreur renvoie sur la page : disc_new.php
if ($titre ==null||$artist==null||$year==null||$genre==null||$label==null||$price==null||$picture==null){
    header("location: http://127.0.0.1:8080/disc_new.php?error=Formulaire_non_valide");
     //echo var_dump($titre);
     //echo var_dump($artist);
     //echo var_dump($year);
     //echo var_dump($genre);
     //echo var_dump($label);
     //echo var_dump($price);
     //echo var_dump($picture);

    exit;
}

//si ok
require "db.php";
$db=connexionBase();

try{
    $requete=$db->prepare("INSERT INTO disc (disc_title,disc_year,disc_genre,disc_label,disc_price,disc_picture,artist_id) VALUES (:title, :annee, :genre, :label, :prix, :picture, :artist);");
    $requete->bindValue(":title",$titre,PDO::PARAM_STR);
    $requete->bindValue(":annee",$year,PDO::PARAM_INT);
    $requete->bindValue(":genre",$genre,PDO::PARAM_STR);
    $requete->bindValue(":label",$label,PDO::PARAM_STR);
    $requete->bindValue(":prix",$price,PDO::PARAM_INT);
    $requete->bindValue(":picture",$picture,PDO::PARAM_STR);
    $requete->bindValue(":artist",$artist,PDO::PARAM_STR);
//var_dump($requete);
    $requete->execute();
    $requete->closeCursor();
}
catch (Exception $e) {
    header("location: http://127.0.0.1:8080/disc_new.php?error=Formulaire_non_valide");
    //var_dump($requete->queryString);
   // var_dump($requete->errorInfo());
    echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    die("Fin du script (script_artist_ajout.php)");
}





// Si OK: redirection vers la page discs.php
header("Location: http://127.0.0.1:8080/discs.php");

// Fermeture du script
exit;



?>