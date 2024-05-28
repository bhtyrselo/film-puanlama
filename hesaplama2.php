<?php
// Veritabanı bağlantı bilgileri
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "puanlar_db";

// Veritabanına bağlantıyı kur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// POST isteğinden puanı al
$rating = isset($_POST['rating']) ? intval($_POST['rating']) : 0;
echo  $rating;
if ($rating > 0 && $rating <= 5) {
    // Puanı veritabanına ekle
    $stmt = $conn->prepare("INSERT INTO puanlar2 (puan) VALUES (?)");
    $stmt->bind_param("i", $rating);




    
    if ($stmt->execute()) {
        // Ortalama puanı ve toplam puan sayısını hesapla
        $sql = "SELECT AVG(puan) as average_rating, COUNT(puan) as total_ratings FROM puanlar2";
        $result = $conn->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $average_rating = round($row['average_rating'], 2);
            $total_ratings = $row['total_ratings'];

            // JSON formatında ortalama puanı ve toplam puan sayısını geri döndür
            echo json_encode(['average_rating' => $average_rating, 'total_ratings' => $total_ratings]);
        } else {
            echo json_encode(['error' => 'Ortalama puanı hesaplayamadı']);
        }
    } else {
        echo json_encode(['error' => 'Puanı ekleyemedi']);
    }
    $stmt->close();
} else {
    echo json_encode(['error' => 'Geçersiz puan']);
}


$conn->close();
?>