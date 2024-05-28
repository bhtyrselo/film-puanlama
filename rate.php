<?php
session_start();
include("filmlerbaglanti.php");

if(isset($_SESSION['user']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user']['id'];
    $movie_id = $_POST['movie_id'];
    $rating = $_POST['rating'];

    // Aynı kullanıcı aynı filme birden fazla puan vermesin diye kontrol
    $sorgu = $vt->prepare("SELECT * FROM ratings WHERE user_id = ? AND movie_id = ?");
    $sorgu->execute([$user_id, $movie_id]);
    $existingRating = $sorgu->fetch(PDO::FETCH_OBJ);

    if($existingRating) {
        // Güncelle
        $sorgu = $vt->prepare("UPDATE ratings SET rating = ? WHERE user_id = ? AND movie_id = ?");
        $sorgu->execute([$rating, $user_id, $movie_id]);
    } else {
        // Yeni ekle
        $sorgu = $vt->prepare("INSERT INTO ratings (user_id, movie_id, rating) VALUES (?, ?, ?)");
        $sorgu->execute([$user_id, $movie_id, $rating]);
    }

    // Filmin ortalama puanını güncelle
    $sorgu = $vt->prepare("SELECT AVG(rating) as average_rating FROM ratings WHERE movie_id = ?");
    $sorgu->execute([$movie_id]);
    $average = $sorgu->fetch(PDO::FETCH_OBJ)->average_rating;

    $sorgu = $vt->prepare("UPDATE movies SET ortalama_puan = ? WHERE id = ?");
    $sorgu->execute([$average, $movie_id]);

    header("Location: filmler.php");
}
?>
