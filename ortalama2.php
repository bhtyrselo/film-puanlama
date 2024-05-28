<?php
$servername = "localhost";
$database = "puanlar_db";
$username = "root";
$password = "";

// Veritabanı bağlantısını oluştur
$conn = mysqli_connect($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if (!$conn) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}

// SQL sorgusunu hazırla ve yürüt
$sql = "SELECT SUM(puan) AS toplam_puan, COUNT(puan) AS puan_sayisi, AVG(puan) AS ortalama_puan FROM puanlar2";
$result = mysqli_query($conn, $sql);

// Sorgu sonucunu işle
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $toplam_puan = $row["toplam_puan"];
    $puan_sayisi = $row["puan_sayisi"];
    $ortalama_puan = $row["ortalama_puan"];

    echo "Toplam Puan: " . $toplam_puan . "<br>";
    echo "Puan Sayısı: " . $puan_sayisi . "<br>";
    echo "Ortalama Puan: " . $ortalama_puan . "<br>";
} else {
    echo "Puanlar tablosunda kayıt bulunamadı.";
}

// Bağlantıyı kapat
mysqli_close($conn);
?>