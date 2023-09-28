<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie-edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Syncopate:wght@400;700&family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
    @vite(['resources/scss/app.scss'])
        <style>
           
        </style>

    </head>
    <body>
        @include('navbar')
        <div class="homepage">
            <div class="homepic asp asp-2-1">
                             <img src="images/startpic.png" alt="startpic">   
 
               <h1 class="quality">Quality Cuts, Exceptional Taste</h1>
            <div class="attributes">
                <div class="premium asp asp-2-1">
                    <img src="images/premium.png" alt="premium"> 
                    
                </div> 
                <h1 class="premiumhead">Premium Quality</h1>

                <div class="highstandard asp asp-2-1">
                    <img src="images/highstandard.png" alt="highstandard"> 
                          
                </div>
                 <h1 class="highead">HIGH STANDARDS TRADING & LOGISTICS</h1>  

                <div class="transparency asp asp-2-1">
                    <img src="images/transparency.png" alt="transp">
                </div>
                <h1 class="transhead">TRANSPARENCY AND TRUST</h1>
            </div>
</div>

       <div class="partnerlogos">
            <img src="images/midfield.png" alt="midfield">
            <img src="images/friboi.png" alt="friboi">
            <img src="images/carapreta.png" alt="carapreta">
            <img src="images/anglo.png" alt="anglo">
            <img src="images/minerva.png" alt="minerva">
        </div>

        <div class="trusted">
            <h1 class="trusthead">
                Your Trusted Source For Chilled Meat
            </h1>
            <div class="carouselal">
                <h1 class="altext">AL</h1>
                @include('carousel')
            </div>
            

            <div class="trusteddesc">
                <img class="halaltag" src="images/halaltag.png" alt="halal">
                <div class="trustedtext">
                <p class="trustedtext">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. </p>
                <p class="trustedtext"> Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla.<p>

                </div>
            </div>
                <button class="learnmore">Learn More</button>
        </div>


                <div class="products">
                    <h1 class="productshead">Wide Range Of Products For Your Needs</h1>
                        @include('products')
            </div>
               <button class="view">VIEW ALL</button>


               <div class="certifications">
                <h1 class="certified">Certifications</h1>
                <p class="vat">VAT Number: 123456789012345</p>
                <div class="certifiedlogos">
                    <div class="sfda">
                        <img src="images/sfda.png" alt="sfda">
                    </div>
                    <div class="ministry">
                        <img src="images/ministry.png" alt="ministry"> 
                    </div>
                   <div class="halal">
                     <img src="images/halaltag.png" alt="halal">
                   </div>
                   
                </div>
               </div>
        </div>
                   <div class="whatsapp">
                @include('whatsapp')
                </div>

                <div class="ordernow">
                    <div class="orderimg asp3 asp-3-1">
                        <img src="images/order.png" alt="order">
                    </div>
                    <div class="ordernowtext">
                        <h1 class="orderhead">Order Now</h1>
                        <p class="orderp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada.</p>
                    </div>
                   
                </div>
                 <button class="contactusbutton">Contact Us</button>
</div>

    </body>
    <footer>
        @include('footer')
    </footer>
</html>