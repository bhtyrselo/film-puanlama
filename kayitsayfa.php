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
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="kayitsayfa.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="footer.css">
<title>üye girişi</title>

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

<div class="form-container">
    <form action="kayit.php" method="post">
        <label for=""> Kullanıcı Adı</label> <br>
        <input type="text" name="kullanici_adi"> <br>
        <label for=""> Mail</label> <br>
        <input type="text" name="mail"> <br>
        <label for=""> Şifre</label> <br>
        <input type="password" name="sifre"> <br> <br>
        <button> Kayıt Ol</button>
    </form>
</div>





</body>
</html>
