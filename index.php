<?php
session_start();


if(isset($_SESSION['user'])) {
  
    $oturumAcGizle = "style='display:none;'";
  
    $cikisGoster = "";
} else {
  
    $oturumAcGizle = "";

    $cikisGoster = "style='display:none;'";
}
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>  </title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="slider.css">


</head>
<body>

<nav class="navbar">
    <div class="container">
        <a href="index.php" class="logo">Logo</a>
        <form action="#" class="search-form">
            <input type="text" placeholder="Ara...">
            <button type="submit">Ara</button>
        </form>
        <ul class="nav-links">
            <li><a href="index.php">Anasayfa</a></li>
            <li><a href="#">Diziler</a></li>
            <li><a href="filmler.php">Filmler</a></li>
            <li <?php echo $oturumAcGizle; ?>><a href="girissayfa.php">Oturum Aç</a></li>
            <li <?php echo $oturumAcGizle; ?>><a href="kayitsayfa.php">Kayıt Ol</a></li>
            <li <?php echo $cikisGoster; ?>><a href="cikis.php">Çıkış Yap</a></li>
        </ul>
        
    </div>
    
</nav>

<div class="slider-container">
  <div class="slider">
    
 

    <div><img src="resimler/matrixresim.jpg" alt="Film 1"></div>
    <div><img src="resimler/godfather.jpg" alt="Film 2"></div>
    <div><img src="resimler/batman.jpg" alt="Film 3"></div>
  </div>
</div>

<footer class="bg-body-tertiary text-center">
  <!-- Grid container -->
  <div class="container p-4 pb-0 d-flex justify-content-center">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
      data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2020 Copyright:
    <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="slider.js"></script>



</body>
</html>
