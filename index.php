

<?php 
include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mon réseau social</title>
</head>
<body >
    <?php
        // Vérifier si l'utilisateur est connecté ou non
        session_start();
        if(isset($_SESSION['username'])) {
            // Afficher le nom d'utilisateur s'il est connecté
            echo "<h1>Bienvenue, " . $_SESSION['username'] . "!</h1>";
            echo "<a href='deconnexion.php'>Déconnexion</a>";
        } else {
            // Afficher un message d'invitation à la connexion ou à l'inscription
            echo "<h1>Bienvenue sur Mon réseau social</h1>";
            echo "<p>Connectez-vous ou inscrivez-vous pour rejoindre la communauté.</p>";
            echo "<a href='login.php'>Se connecter</a> | <a href='inscrit.php'>S'inscrire</a>";
        }
    ?>
</body>
</html>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Ajouter une publication
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">PUBLICATION</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- debut formulaire -->

        <!DOCTYPE html>
 <html>
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3/css/bootstrap.min.css">
 </head>
 <body>
 <div class="panel panel-primary col-md-6 col-md-offset-3">
	<div class="panel panel-heading"> 
		
	<h3>Publication</h3>
	</div>
	<div class="panel panel-body">
		<form class="form" action="ajout.php" method="POST">




            <div class="form-group">
            <label for="img" class="form-label">photo</label>
            <input type="file" class="form-control" name="img">
            </div>



            <div class="form-group">
			<label class="control-label">nom</label>
			<input class="form-control" type="text" name="contenu">	
			</div>
			<div class="form-group">
			<label class="control-label">date_publication</label>
			<input class="form-control" type="date" name="date_heure_pub">	
			</div>
			<div class="form-group">
            <button type="submit" class="btn btn-success" name="publier">publier</button>
             </div>
  
           </form>
    </div>

        <!-- fin formulaire -->

        </div>
    </div>
  </div>
 </div>
 </div>
 <!-- fin du modal -->



 





<!-- Debut de la carte! -->
<div class="row">
<?php 
$req = "SELECT * FROM publication";
$result = mysqli_query($conn,$req);
while ($row = mysqli_fetch_assoc($result)) { ?>
<div class="card mx-md-4" style="width:18rem;">
<img src="<?php echo "include/image/".$row['photo'];?>" class="card-img-top" alt="img" height="100px">
  <div class="card-body">
    <h5 class="card-title text-primary"><?php echo $row['contenu'];?></h5>
    <div class="row">
        <p class="card-text row-md-4"><?php echo $row['date_heure_pub'];?></p>
    </div>
    <div class="">


    <a class="btn btn-info" href="edit.php?id=<?php echo $row['idpub']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
  <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
</svg>J'aime</a>
      <a class="btn btn-info" href="#.php?id=<?php echo $row['idpub']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
  <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
</svg>Partager</a>
      
    </div>


    <form method="POST" action="ajout.php">
        <label for="commentaire">Votre commentaire :</label><br>
        <textarea name="commentaire"  rows="4" cols="30"></textarea><br>
        <input type="submit" class="btn btn-info" value="Soumettre">
    </form>



  </div>
 </div> 


 <?php } ?>
 </div>
 <!-- fin de la carte! -->
<?php 
include 'footer.php';

?>

