<?php 
include "header.php";
?>



 <nav class="navbar navbar-expand-lg bg-body-tertiary "style="background-color: #e3f2fd;" >

  <div class="container-fluid"  >
    <a class="navbar-brand" href="#"><h3>les comptes</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inscrit.php"><h4>sinscrire</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php"><h4>Publication</h4></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            copmte
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      
      </form>
    </div>
  </div>

 </nav>

 <nav class="navbar bg-dark" data-bs-theme="dark">
  <!-- Navbar content -->
 </nav>









  <!-- Debut de la carte! -->
 <div class="row">
  <?php 
 $req = "SELECT * FROM utilisateur";
 $result = mysqli_query($conn,$req);
 while ($row =mysqli_fetch_assoc($result)) { ?>




 <div class="card mx-md-4" style="width:18rem;">
  <img src="<?php echo "include/image/".$row['photo'] ?>"class="card-img-top"  height="100px">
  <div class="card-body">
    <h5 class="card-title text-primary"><?php echo $row['nom'];?></h5>
    <div class="row">
        <p class="card-text row-md-4"><?php echo $row['prenom'];?></p>
        <p class="card-text row-md-4"><?php echo $row['Tel'];?></p>
        <p class="card-text row-md-4"><?php echo $row['Email'];?></p>
    </div>

    </div>
    </div> 

    
 <?php } ?>
 
 <!-- fin de la carte! -->
 <?php 
include 'footer.php';
?>
