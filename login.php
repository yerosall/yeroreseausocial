<?php 
include 'header.php';?>
  

<form action="login.php" method="POST">
 <section class="vh-50 gradient-custom">
  <div class="container py-5 h-75">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>
              <form method="POST" action="login.php" enctype="multipart/form-data">
          

              <div class="form-outline form-white mb-6">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" name="Email"/>
                <label class="form-label" for="mail">Email</label>
              </div>

              <div class="form-outline form-white mb-6">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" name="mdp" />
                <label class="form-label" for="mdp">Password</label>
              </div>
              <div>
         <a href="index.php">
         <button type="submit" class="btn btn-primary" name="connect">Login</button>
         </a>
         </div>
              <p class="small mb-7 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
              <div class="d-flex justify-content-center text-center mt-9 pt-1">
                <a href="index.php" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>

                
              </div>
              <a href="lcompte.php" class="text-white-50 fw-bold">Voir les comptes</a>
              
             </div>
             <p class="mb-0">Don't have an account? <a href="inscrit.php" class="text-white-50 fw-bold">S'inscrire</a>
        
              </p>
             <div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
</form>


<?php 
if (isset($_POST['connect'])) {
	$Email= $_POST['Email'];
	$mdp= $_POST['mdp'];
	$req2=" SELECT id_utilisateur,Email,mdp FROM utilisateur WHERE Email='$Email'";
	$result = mysqli_query($conn,$req2);
	if ($row = mysqli_fetch_assoc($result)) {
		$mdp_secure= hash_hmac("sha256", $mdp, "cle");
		$mdp_base= $row['mdp'];
		$userid=$row['id_utilisateur'];
		if (password_verify($mdp_secure, $mdp_base)) {
			$_SESSION['id']=$userid;
			header('location:index.php');
		}

	}else{
		echo "Cet mail n'existe pas!!!";
	}
}


include 'footer.php';

?>