<?php
include("hesaplama.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Rating</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="puan.css">
   
</head>
<body>

<div class="container">
    <style></style>
    <i class="fa fa-star" data-value="1"></i>
    <i class="fa fa-star" data-value="2"></i>
    <i class="fa fa-star" data-value="3"></i>
    <i class="fa fa-star" data-value="4"></i>
    <i class="fa fa-star" data-value="5"></i>
</div>
<div id="rating-info">
    Ortalama Puan: <span id="average-rating-value">1</span> (Toplam Puan: <span id="total-ratings">0</span>)
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    $('i.fa-star').click(function(){
        $('i.fa-star').removeClass('voted');
        var rate = $(this).data('value');
        console.log(rate); // rate değişkeninin değerini konsola yazdır
        $(this).addClass('voted');
        $(this).prevAll().addClass('voted');

        // Puanı backend'e gönder
        $.ajax({
            url: 'hesaplama.php',
            type: 'POST',
            data: { rating: rate },
            success: function(response) {
                var data = JSON.parse(response);
                $('#average-rating-value').text(data.average_rating);
                $('#total-ratings').text(data.total_ratings);
            }
        });
    });

    $('i.fa-star').hover(function(){
        $('i.fa-star').removeClass('hover');
        $(this).addClass('hover');
        $(this).prevAll().addClass('hover');
    });

    $('.container').mouseout(function() {
        $('i.fa-star').removeClass('hover');
    });
});

$(document).ready(function() {
    $('i.fa-star').click(function(){
        // Tıklanan yıldıza karşılık gelen puan değerini alın
        var rate = $(this).data('value');
        console.log("Tıklanan puan:", rate); // puanı konsola yazdır
        // Geri kalan kodlar buraya gelecek
    });
});
</script>
</body>
</html>