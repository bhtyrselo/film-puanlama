$(document).ready(function(){
    $.ajax({
        url: 'film_verileri.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
           
            data.forEach(function(film) {
                console.log(film.film_adi);
                console.log(film.ortalama_puan);
                console.log(film.yapim_yili);
               
            });
        },
        error: function(xhr, status, error) {
            console.error('Hata:', error);
        }
    });
});
