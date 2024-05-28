<?php
try{
    $host='localhost';
    $vtadi='uyelik';
    $kullanici='root';
    $sifre='';
    $vt=new PDO("mysql:host=$host;dbname=$vtadi;charset=UTF8","$kullanici",$sifre);

}
catch(PDOException $e){
    print $e->getMessage();
}
// Puanlama ekleme/güncelleme
if (isset($_POST['rate_movie'])) {
    $movie_id = $_POST['movie_id'];
    $user_id = $_SESSION['user_id']; // Kullanıcı oturumu üzerinden alınmalı
    $rating = $_POST['rating'];

    // Veritabanı bağlantısı
    include("db_connect.php");

    // Puanlamayı ekle veya güncelle
    $query = $conn->prepare("INSERT INTO puanlar (film_adi, kullanici_adi, puan) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE rating = ?");
    $query->bind_param("iiii", $movie_id, $user_id, $rating, $rating);
    $query->execute();

    echo "Puanlama gönderildi!";
}


?>