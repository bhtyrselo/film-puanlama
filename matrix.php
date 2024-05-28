<!DOCTYPE html>
<html>
<head>
    <title>Rating</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="puan.css">
    <link rel="stylesheet" href="dark_knight.css">
   
</head>
<body>
<div class="container-1">
    <div class="text-center">
        <img src="resimler/matrixyeni.jpeg" class="rounded" alt="matrix">
    </div>
    <div class="about">
        <h2>About Batman</h2>
        <p>Batman is a fictional superhero appearing in American comic books published by DC Comics. The character was created by artist Bob Kane and writer Bill Finger, and first appeared in Detective Comics #27 in 1939.</p>
    </div>
</div>



<div id="rating-info">
    <?php include ('ortalama3.php'); ?>
</div>

<div class="container">
    <div class="container-rating">
        <i class="fa fa-star" data-value="1"></i>
        <i class="fa fa-star" data-value="2"></i>
        <i class="fa fa-star" data-value="3"></i>
        <i class="fa fa-star" data-value="4"></i>
        <i class="fa fa-star" data-value="5"></i>
    </div>
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
            url: 'hesaplama3.php',
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

    $('.container-rating').mouseout(function() {
        $('i.fa-star').removeClass('hover');
    });
});
</script>
</body>
</html>
