<?php
// Eğer film id'si get parametresi olarak gelmediyse, kullanıcıyı başka bir sayfaya yönlendir
if (!isset($_GET['film_id'])) {
    header("Location: index.php"); // Ya da uygun bir sayfa
    exit;
}

// Veritabanı bağlantısını yapılandırma dosyasından al
include("filmlerbaglanti.php");

// Film id'sini al
$film_id = $_GET['film_id'];

// Veritabanından film detaylarını al
$sorgu = $vt->prepare("SELECT * FROM filmler WHERE id = ?");
$sorgu->execute([$film_id]);
$film = $sorgu->fetch(PDO::FETCH_OBJ);

// Eğer film bulunamadıysa, kullanıcıyı başka bir sayfaya yönlendir
if (!$film) {
    header("Location: index.php"); // Ya da uygun bir sayfa
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $film->film_adi; ?> Detay Sayfası</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="film-detay">
        <h2><?php echo $film->film_adi; ?></h2>
        <img src="resimler/<?php echo $film->resim_dosya_yolu; ?>" alt="<?php echo $film->film_adi; ?>">
        <p>Yapım Yılı: <?php echo $film->yapim_yili; ?></p>
        <p>Ortalama Puan: <?php echo $film->ortalama_puan; ?></p>
        <a href="index.php">Ana Sayfa</a>
    </div>
</body>
</html>
