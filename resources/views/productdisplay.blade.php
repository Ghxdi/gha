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
    .beefdisplayheader{
        margin-top:7%;
        text-align: center;
        font: normal normal bold 50px/75px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        text-transform: capitalize;
        opacity: 1;
    }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            margin-bottom: 5%;
        }

        .grid-item {
            background-color: #ccc;
            padding: 20px;
            text-align: center;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            box-shadow: 0px 3px 20px #00000012;
            opacity: 1;
            margin-top: 10%;
        }
        .asp-1-1 {
            padding-bottom: calc(calc(100% * 1) / 1);

        }
        .asp8 {
            position: relative;
            width: 100%;
        }
        .asp8 img,
        .asp8 picture {
            position: absolute;
            top: 0;
            left: 0;
            height: 380px;
            width: 380px;
            object-fit: cover;
        }
        .displayheader{
            text-align: center;
            font: normal normal bold 25px/72px Open Sans;
            letter-spacing: 0px;
            color: #000000;
            text-transform: uppercase;
            opacity: 1;
        }
        .gram{
            display: flex;
            flex-direction: row;
            gap: 20px; 
            color: rgba(0,0,0, 0.7);
            align-items: center;
            padding-left: 0 ;
        }
        .x200g{
            align-items: center;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            text-align: left;
            opacity: 0.7;
            font: normal normal normal 16px/40px Open Sans;
            padding-left: 12%;
            letter-spacing: 0px;
            width: 100px;
            height: 42px;
           
        }
        .x500g{
            align-items: center;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            text-align: left;
            opacity: 0.7;
            font: normal normal normal 16px/40px Open Sans;
            padding-left: 12%;
            letter-spacing: 0px;
            width: 100px;
            height: 42px;
           
        }
        .x1kg{
            align-items: center;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            text-align: left;
            opacity: 0.7;
            font: normal normal normal 16px/40px Open Sans;
            padding-left: 12%;
            letter-spacing: 0px;
            width: 100px;
            height: 42px;
           
        }

        .footdisplay{
            margin-top: 30%;
        }
</style>
    </head>

    <body>
    @include('navbar2')
    <h1 class="beefdisplayheader">Beef</h1>
    <div class="grid-container">

        <div class="grid-item">
            <div class="asp8 asp-1-1">
                <img src="images/beef1.png" alt="beef1">
            </div>
            <h1 class="displayheader">NAME GOES HERE</h1>


            <div class="gram">
            <div class="x200g">200g</div>
            <div class="x500g">500g</div>
            <div class="x1kg">1kg</div>
            </div>

            
        </div>

        <div class="grid-item">
            <div class="asp8 asp-1-1">
                <img src="images/beef2.png" alt="beef1">
            </div>
            <h1 class="displayheader">NAME GOES HERE</h1>

            
            <div class="gram">
            <div class="x200g">200g</div>
            <div class="x500g">500g</div>
            <div class="x1kg">1kg</div>
            </div>

            
        </div>

        <div class="grid-item">
            <div class="asp8 asp-1-1">
                <img src="images/beef3.png" alt="beef1">
            </div>
            <h1 class="displayheader">NAME GOES HERE</h1>

            
            <div class="gram">
            <div class="x200g">200g</div>
            <div class="x500g">500g</div>
            <div class="x1kg">1kg</div>
            </div>

            
        </div>

        <div class="grid-item">
            <div class="asp8 asp-1-1">
                <img src="images/beef4.png" alt="beef1">
            </div>
            <h1 class="displayheader">NAME GOES HERE</h1>

            
            <div class="gram">
            <div class="x200g">200g</div>
            <div class="x500g">500g</div>
            <div class="x1kg">1kg</div>
            </div>

            
        </div>

    </div>
    </body>

    <footer class="footdisplay">
        @include('footer')
    </footer>
</html>