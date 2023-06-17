<?php 
include 'header.php';


if (isset($_POST['publier'])     ) {
    
    $img=$_FILES['img']['name'];
    $dest="include/image/".$img;
    move_uploaded_file($_FILES['img']['tmp_name'],$dest);
    $contenu=$_POST['contenu'];
    $date_heure_pub=$_POST['date_heure_pub'];
    $sql = "INSERT INTO publication(contenu,date_heure_pub,photo) VALUES('$contenu','$date_heure_pub','$img')";
    $resultat = mysqli_query($conn,$sql);
    if ($resultat) {
        //echo "Produit ajouté avec succes !";
       header("location: index.php");
    }
 }




 if (isset($_POST['inscrire'])) {
 
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $Tel=$_POST['Tel'];
    $cmdp=$_POST['cmdp'];
    $Email=$_POST['Email'];
    $mdp=$_POST['mdp'];
    $img=$_FILES['img']['name'];
    $dest="include/image/".$img;
    move_uploaded_file($_FILES['img']['tmp_name'],$dest);

    if ($mdp==$cmdp) {
      $secure=hash_hmac("sha256", $mdp, "cle");
      $mdp_secure=password_hash($secure,PASSWORD_DEFAULT);
    $sql1="INSERT INTO utilisateur(nom,prenom,Email,Tel,mdp,photo)VALUES('$nom','$prenom','$Email','$Tel','$mdp_secure','$img')";
      $resultat=mysqli_query($conn,$sql1);
      if ($resultat) {
        // echo "utilisateur ajouté avec succes !"; 
         header("location: lcompte.php");
      }
    }
  
  }







  if (isset($_POST['soumettre'])) {
  
      $contenu=$_POST['contenu'];
      $date_heure_pub=$_POST['date_heure_pub'];
    $requete ="INSERT INTO commentaire(contenu,date_heure_pub) VALUES ('$contenu','$date_heure_pub')";
    $resultat = mysqli_query($conn,$requete);
    if ($resultat) {
      // echo "utilisateur ajouté avec succes !"; 
       header("location: index.php");
    }
 }

   // Affichage des commentaires existants
   $requete = "SELECT * FROM commentaire ORDER BY date_heure_com DESC";
   $resultat = mysqli_query($conn,$requete);



   if (mysqli_num_rows($resultat) > 0) {
    while ($row = mysqli_fetch_assoc($resultat)) {
        echo "contenu : " . $row['contenu'] . "<br>";
        echo "date_heure_com : " . $row['date_heure_com'] . "<br><br>";
    }
} else {
    echo "Aucun commentaire trouvé.";
}










  
  
  include 'footer.php';
  ?>