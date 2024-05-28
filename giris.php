<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=uyelik;charset=utf8",'root',"");
var_dump($db);

$kadi = $_POST['kullanici_adi'];
$sifre = $_POST['sifre'];
if (!$kadi || !$sifre) {
    die("Boş alan bırakmayınız!");
}

$user = $db->query("SELECT * FROM kullanicilar WHERE kullanici_adi='$kadi' AND sifre='$sifre'")->fetch();
if ($user) {
    $_SESSION['user'] = $user;
    echo "Giriş başarılı! Ana sayfaya yönlendiriliyorsunuz...";
    header("Refresh:2; url=index.php");
    exit();
} else {
    echo "Kullanıcı adı veya şifre hatalı";
}
?>
