<!DOCTYPE html>
<html>
    <title>Our Products</title>
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
     .asp6 img,
.asp6 picture {
    position: absolute;
    height: 750px;
    width: 100%;
    object-fit: cover;
    filter: brightness(50%);
}

    .asp-3-1 {
        padding-bottom: calc(calc(100% * 1) / 3);
    }
    .productheads{
        text-align: center;
        font: normal normal bold 50px/75px Open Sans;
        letter-spacing: 0px;
        color: #FFFFFF;
        text-transform: capitalize;
        opacity: 1;
        position: absolute;
        margin-top: -10%;
        margin-left: 40%;
    }
    .productinfos{
        margin-top: -3%;
        margin-left:26%;
        position: absolute;
        background: #FFFFFF 0% 0% no-repeat padding-box;
        box-shadow: 0px 20px 30px #00000012;
        opacity: 1;
        text-align: left;
        font: normal normal normal 16px/25px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        width: 1080px;
        height: 160px;
        padding: 10px;
        padding-top: 1%;
        padding-left: 2%;
        padding-right: 2%;
        width: 46%;
    }
    .productinfos p{
        opacity: 0.5;
    }
    .products22{
        margin-top: 15%;
        margin-left:2%;
        width: 100%;
    }
    .foot2{
        margin-top: 5%;
    }
    </style>
    </head>

    <body>
        @include('navbar2')
        <div class="productmain">
            <div class="asp6 asp-3-1">
                <img src="images/cow.png" alt="cow">
            </div>
            <h1 class="productheads">Our Products</h1>
            <div class="productinfos">
                <p>
                We offer fresh and frozen halal meat products for our customers in mass retail, traditional butchery, distributes, wholesalers, catering, restaurants and industry. Our ranges follow changing eating habits thanks to global sourcing and a dynamic product innovation policy, combining traditional raw products with increasingly processed, tailor-made products. Discover all of our 100% taste and pleasure ranges.!
                </p>            
            </div>
        </div>

        <div class="products22">

            @include('products')
            @include('products')
        </div>
    </body>
    <footer class="foot2">
        @include('footer')
    </footer>
</html>