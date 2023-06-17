<!DOCTYPE html>
<html>
<head>
    <title>Mon compte</title>
</head>
<body>
    <?php
        // Vérifier si l'utilisateur est connecté ou non
        session_start();
        if(isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            // Afficher le nom d'utilisateur et d'autres informations du compte
            echo "<h1>Mon compte</h1>";
            echo "<p>Nom d'utilisateur : $username</p>";
            // Afficher la photo de profil
            echo "<img src='path/to/profile_picture.jpg' alt='Photo de profil'>";
            echo "<br>";
            echo "<a href='edit_profile.php'>Modifier le profil</a>";
            echo "<br>";
            echo "<a href='logout.php'>Déconnexion</a>";
        } else {
            // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
            //header("Location: login.php");
            exit();
        }
    ?>
</body>
</html>
