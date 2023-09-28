<!DOCTYPE html>
<html>
    <title>Products</title>
    <head>
    <meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<meta http-equiv="X-UA-compatible" content="ie-edge">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
      @vite(['resources/scss/app.scss'])
      <link rel="stylesheet" href="/path/to/generated/app.scss">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<style>
    .productlist{
        display: flex;
        flex-direction: column;
        gap: 40px;
        margin-right: 0;
    }
    .asp1 {
    position: relative;
    width: 100%;
    padding-bottom: 12.5%; /* This represents the aspect ratio 8:1 (1 / 8 = 0.125 or 12.5%) */
}

.asp1 img,
.asp1 picture {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(50%);
}

    .productimg{
        width:93%;
        height:100px;
    }
    .productinfo{
        position: absolute;
        display: flex;
        flex-direction: column;
        gap: 0px;
        margin-top: 3%;
        margin-left: 2%;
    }
    .producthead{
        text-align: left;
        font: normal normal bold 25px/0px Open Sans;
        letter-spacing: 0px;
        color: #FFFFFF;
        text-transform: uppercase;
        opacity: 1;
        
    }
    .producttext{
        text-align: left;
        font: normal normal normal 16px/25px Open Sans;
        letter-spacing: 0px;
        color: #FFFFFF;
        opacity: 1;
        width: 60%;
    }
    </style>
    </head>
    <body>
                    <div class="productlist">
                <div class="productimg asp1 asp-8-1">
                    <img src="images/beef.png" alt="beef">

                    <div class="productinfo">
                    <h1 class="producthead">BEEF</h1>
                    <p class="producttext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet.</p>
                    </div>

                </div>

                <div class="productimg asp1 asp-8-1">
                    <img src="images/lamb.png" alt="beef">

                    <div class="productinfo">
                    <h1 class="producthead">LAMB</h1>
                    <p class="producttext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet.</p>
                    </div>

                </div>

                <div class="productimg asp1 asp-8-1">
                    <img src="images/mutton.png" alt="beef">
                   
                    <div class="productinfo">
                    <h1 class="producthead">MUTTON</h1>
                    <p class="producttext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet.</p>
                    </div>
                </div>
                    

                <div class="productimg asp1 asp-8-1">
                    <img src="images/veal.png" alt="beef">
                    
                    <div class="productinfo">
                    <h1 class="producthead">VEAL</h1>
                    <p class="producttext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet.</p>
                    </div>
                    
                    </div>

                </body>
</html>