<!DOCTYPE html>
<html>
    <title>services</title>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/path/to/generated/app.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(function() {
          var owl = $(".owl-carousel");
          owl.owlCarousel({
            items: 1.9,
            margin: 1,
            loop: true,
            nav: false,
            dots: false
          });
          
          owl.on('changed.owl.carousel', function(event) {
            $('.owl-item').removeClass('active-item');
            $('.owl-item.active').addClass('active-item');
          });

          $('.owl-carousel .item').eq(1).addClass('active-item'); // Set initial active item (adjust as needed)
          
        });

        $(".custom-next").click(function(){
          $(".owl-carousel").trigger('next.owl.carousel');
        });

        $(".custom-prev").click(function(){
          $(".owl-carousel").trigger('prev.owl.carousel');
        });
    </script>

    <style>
      .owl-carousel .owl-theme {
        margin-right: 0;
        padding-right: 0;
      }
      .itemimg{
        height: 522px;
      }
      .itemimg2{
        height: 522px;
        opacity: 0.4;
      }
      .item {
        width: 870px;
      }
      .owl-carousel .item img {
        opacity: 1; //* Set default opacity for all images */
        transition: opacity 0.3s ease;
      }

    
    </style>
    </head>
    <body>
    <div class="owl-carousel owl-theme"> 
        <div class="item">
          <div class="itemimg">
            <img src="images/meat.png" alt="meat">
          </div>
        </div>
        <div class="item">
          <div class="itemimg2">
            <img src="images/snapshot.png" alt="snap">
          </div>
        </div>
    </div>
    </body>
</html>
