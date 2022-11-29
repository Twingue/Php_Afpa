<?php

    $id = (isset($_POST['disc_id']) && $_POST ['disc_id']!="") ? $_POST['disc_id'] : Null;
    $titre = (isset($_POST['disc_title']) && $_POST['disc_title'] != "") ? $_POST['disc_title'] : Null;
    $artist = (isset($_POST['disc_artist']) && $_POST['disc_artist']!= "") ? $_POST['disc_artist'] : Null;
    $year = (isset($_POST['disc_year']) && $_POST['disc_year'] != "") ? $_POST['disc_year'] : Null ;
    $genre = (isset($_POST['disc_genre']) && $_POST['disc_genre'] != "") ? $_POST['disc_genre'] : Null ;
    $label = (isset($_POST['disc_label']) && $_POST['disc_label'] != "") ? $_POST['disc_label'] : Null ;
    $price = (isset($_POST['disc_price']) && $_POST ['disc_price'] != "") ? $_POST ['disc_price'] : Null ;
    $picture =(isset($_POST['disc_picture']) && $_POST['disc_picture'] != "") ? $_POST ['disc_picture'] : Null ;

    if(isset($_FILES['disc_picture'])) {
        $name_file = $_FILES['disc_picture']['name'];
        $picture = $name_file;
        //echo var_dump($_FILES['picture']['name']);
        $tmp_name = $_FILES['disc_picture']['tmp_name'];
        $local_images="jaquettes/";
      move_uploaded_file($tmp_name,$local_images.$name_file);
        
    }


    // si erreur on renvoie sur le disc_form.php
   // if($id==Null){
    //        header("Location: discs.php");
    //            }
    if($titre == null || $artist == null || $year == null || $genre == null || $label== null || $price == null || $picture == null){
           // header("Location: discs_form.php?disc_id=".$id);
           var_dump($titre);
           echo var_dump($artist);
           echo var_dump($year);
           echo var_dump($genre);
           echo var_dump($label);
           echo var_dump($price);
           echo var_dump($picture);
         header("location: http://127.0.0.1:8080/discs_form.php?error=Formulaire_non_valide");
            exit;
            }

// si OK
require "db.php";
$db = ConnexionBase();


try {
$requete = $db->prepare("UPDATE disc SET disc_title = :title, artist_id = :artname, disc_year = :year, disc_genre = :genre, disc_label = :label, 
disc_price = :price, disc_picture = :picture WHERE disc_id = :id");

$requete->bindValue(":id", $id, PDO::PARAM_INT);
var_dump($id);
$requete->bindValue(":title", $titre, PDO::PARAM_STR);
$requete->bindValue(":artname", $artist, PDO::PARAM_STR);
var_dump($artist);

$requete->bindValue(":year", $year, PDO::PARAM_STR);
$requete->bindValue(":genre", $genre, PDO::PARAM_STR);
$requete->bindValue(":label", $label, PDO::PARAM_STR);
$requete->bindValue(":price", $price, PDO::PARAM_STR);
$requete->bindValue(":picture", $picture, PDO::PARAM_STR);
$requete->execute();
$requete->closeCursor();
    }

catch(Exception $e){
    var_dump($requete->queryString);
    var_dump($requete->errorInfo());
        echo "Erreur : " .$requete->errorInfo()[2]. "<br>";
        die("Fin du script (script_discs_modif.php)");
                }

header("Location:discs_detail.php?disc_id=".$id);
exit;

