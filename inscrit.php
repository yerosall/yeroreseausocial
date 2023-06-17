<?php 
include "header.php";


?>



  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3/css/bootstrap.min.css">
</head>
<body>
 <div class="panel panel-primary col-md-6 col-md-offset-3">
	<div class="panel panel-heading">
		
	<h3>Creer votre compte</h3>
	</div>
	<div class="panel panel-body">
		<form class="form" action="ajout.php" method="POST">
			

		<div class="form-group">
      <label for="img" class="form-label">Choisir votre photo de profil</label>
      <input type="file" class="form-control" name="img">
    </div>
    <div class="form-group">
			<label class="control-label">nom</label>
			<input class="form-control" type="text" name="nom">	
			</div>
			<div class="form-group">
			<label class="control-label">Prenom</label>
			<input class="form-control" type="text" name="prenom">
			</div>
			<div class="form-group">
			<label class="control-label">Email</label>
			<input class="form-control" type="Email" name="Email">	
			</div>
      <div class="form-group">
			<label class="control-label">TEL</label>
			<input class="form-control" type="number" name="Tel">	
			</div>
      <div class="form-group">
    <label for="mdp" class="control-label">Mot de passe</label>
    <input type="password" class="form-control" name="mdp">
    </div>
    <div class="form-group">
    <label for="cmdp" class="control-label">Confirmation Mot de passe</label>
    <input type="password" class="form-control" name="cmdp">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success" name="inscrire">Inscrire</button>
     </div>
    </form>
    </div>

</body>
</html>


















  
  