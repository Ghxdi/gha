<!DOCTYPE html>
<html>
    <title>Contact Us</title>
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@400;700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
      @vite(['resources/scss/app.scss'])
      <link rel="stylesheet" href="/path/to/generated/app.scss">
      <style>

        .contacthead{
            display: flex;
            text-align: left;
            letter-spacing: 0px;
            color: #000000;
            text-transform: uppercase;
            opacity: 1;
            margin-top: 2%;
            margin-left: 5%;
            width: 35%;
        }
        
    
        .contact{
            display: flex;
            flex-direction: column;
            margin-top: 0%;
            align-items: center;
            gap: 20px;
            width: 100%;
            
        }
        .contacthead{
            text-align: center;
            font: normal normal bold 50px/75px Open Sans;
            letter-spacing: 0px;
            color: #000000;
            text-transform: capitalize;
            opacity: 1;
            margin-right: 10px;
        }
        .contactinputs{
            display: flex;
            flex-direction: column;
            gap: 10px;
            text-align: left;
            font: normal normal bold 14px/12px Open Sans;
            letter-spacing: 0px;
            color: #003589;
            text-transform: uppercase;
            opacity: 1;
            padding-left: 35%;
            padding-right: 35%;
        width: 50%
        }
        .inputbar3{

            width: 100%;
            height: 40px;
            font-size: small;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            border: 1px solid #00000000;
            opacity: 1; 
            text-align: left;
            font: normal normal medium 16px/47px Ubuntu;
            letter-spacing: 0px;
            color: #000000;
            text-transform: capitalize;
            opacity: 0.2;
        }
        .inputbarmsg{
            width: 100%;
            height: 120px;
            font-size: small;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            border: 1px solid #00000033;
            opacity: 1; 
            text-align: start;
            font: normal normal medium 16px/47px Ubuntu;
            letter-spacing: 0px;
            color: #000000;
            text-transform: capitalize;
            opacity: 0.3;
        }
        .submission{

            display: flex;
            flex-direction: column;
            margin-left: 42%;
            gap: 20px;
        }
        .submitbut{
            align-items: center;
            text-align: center;
            width: 25%;
            height: 50px;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            border: 1px solid #003589;
            opacity: 1;
            text-align: center;
            font: normal normal bold 14px/40px Open Sans;
            letter-spacing: 1.4px;
            color: #003589;
            text-transform: uppercase;
            opacity: 1;
            transition: 0.3s ease-out;
            &:hover{
                background: #003589 0% 0% no-repeat padding-box;
                border: 1px solid #003589;
                opacity: 1;
                color: #FFFFFF;
            }


        }
        .footerlog{
            margin-top:12%
        }
      </style>
    </head>
    <body>
        @include('navbar2') 
        <div class="map">
             @include('map')
             @include('mapcomp')
        </div>
       
    
       
    <div class="contact">
            <div class="contacthead">
                 <h1 class="getintouch">Get In Touch</h1>
            </div>

<form class="contactinputs" action="">
               
                    <label for="firstname">First Name</label>
              
                        <input class="inputbar3" type="firstname" placeholder="First Name"></br>
                    
                    <label for="lastname">Last Name</label>
                  
                        <input class="inputbar3" type="lastname" placeholder="Last Name"></br>
                
       
                <label for="email"> Email Address</label>
      
                    <input  class="inputbar3" type="email" name="email" placeholder="Email Address"><br>
      
                 


                    <label for="phonenumber">Phone Number</label>
                
                        <input class="inputbar3" type="tel" id="demo" placeholder="Phone Number"></br>
                   

                        
                    <label for="message">MESSAGE</label>
                
                        <input class="inputbarmsg" type="message" placeholder="Message"></br>
                

                   
                        <div class="submission">
                    <button class="submitbut">SUBMIT</button>
                        </div>

            
            </form>   


                    
        </div>
        <div class="footerlog">
             @include('footer')
        </div>
       
    </body>
</html>