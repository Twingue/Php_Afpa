<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet'href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel='stylesheet'href="index.css">

    <title>PDO - Ajout</title>
</head>
<body>

<?php

include "db.php";
$db = connexionBase();
$requete = $db->query("SELECT * FROM artist");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();

$errorMessage=$_GET['error'];

echo $errorMessage;
 ?>                      
<div class="container">
<div class="row">
      <div class="col-12 col-md-8 mx-md-auto mt-5">
<form class="needs-validation" novalidate action="script_disc_ajout.php" method="POST" id="formulaire_ajout" enctype="multipart/form-data">    
<fieldset>
        <legend class="h1">Ajouter un vinyle</legend>
           <!-- <p>Erreur:(<?=$errorMessage?>)</p> -->
            <div   class="form-group">
            <label for="title">Title</label>
            <input required name="title"  type="text" class="form-control" id="title" placeholder="Enter title ">
            <small id="titleHelp" class="form-text">Entrer un titre correcte</small>
            </div>

            <label for="artist">Artist</label>
            <select required name='artist' id="artist" size='1'class='form-control'>

                <option selected>Select artist</option>
                <?php foreach($tableau as $artist) : ?>
                <option value="<?= $artist->artist_id ?>"><?= $artist->artist_name ?></option>
                <?php endforeach ?>
            </select>    
            <br>



            <div   class="form-group">
            <label for="year">Year</label>
            <input   required name="year" type="text" class="form-control" id="year" placeholder="Enter year ">
            <small id="yearHelp" class="form-text">Entrer une date correcte(1998.1999.2000.20001...)</small>
          </div>


            <label for="genre">Genre</label>
            <input required name='genre' type="text" placeholder="Enter genre (Rock,Pop,Prog...)" class="form-control"><br>

            <label for="label">Label</label>
            <input required name='label' type="text" placeholder="Enter label (EMI,Warner,PolyGram,Universale...)" class="form-control"><br>

            <div   class="form-group">
            <label for="price">Price</label>
            <input required name="price" type="text" class="form-control" id="price" placeholder="Enter price ">
            <small id="priceHelp" class="form-text">Entrer price correct </small>
          </div>
            
            <label for="picture">Picture</label><br>
            <input required name='picture' type="file" accept="image/png,image/jpeg" ><br><br>

            <input class="btn btn-primary btn-sm" type="submit" value="Ajouter">
            <a class="btn btn-primary btn-sm" href="discs.php"role="button">Retour</a>        
</fieldset>
</form>
                </div>
                </div>
</div>
 <script src="index.js"></script> 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>




