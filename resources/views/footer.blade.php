<!DOCTYPE html>
<html>
<title>footer</title>
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
      <style>
        .bottomcontainer{
            width: 100%;
            
        }
      .bottom{
        border-top: 1px solid rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: row;
      }
      .bottomleft{
        margin-top: 1%;
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding-left: 6%;
      }
      .leftheader{
        text-align: left;
        font: normal normal bold 14px/0px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        text-transform: uppercase;
        opacity: 1;
      }
      .locationinfo{
        text-align: left;
        font: normal normal 600 14px/0px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        opacity: 1;
      }
      .locationinfo svg{
        padding-top: 1.5%;
      }
      .info{
        text-align: left;
        font: normal normal 600 14px/0px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        opacity: 1;
      }
      .info svg{
        padding-right: 5%;
        padding-top: 1.5%;
      }
      .number{
        text-align: left;
        font: normal normal 600 14px/0px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        opacity: 1;
      }
      .number svg{
        padding-right: 5%;
        padding-top: 1.5%;
      }
      .location1{
        display: flex;
        flex-direction: row;
        gap: 10px;
      }
      .location2{
        margin-left: 10%;
      }
      .legal{
        text-align: left;
        font: normal normal bold 14px/25px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        text-transform: uppercase;
        opacity: 1;
      }
      .middle{
        margin-top: 1%;
        text-align: left;
        font: normal normal 600 14px/20px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        text-transform: capitalize;
        opacity: 1;
        padding-left: 20%;
      }
      .bottomright{
        margin-top: 1%;
        display: flex;
        flex-direction: column;
        margin-left: 10%;
        width: 800px;


      }
      .join{
        text-align: left;
        font: normal normal bold 14px/25px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        text-transform: uppercase;
        opacity: 1;
      }
      .receive{
        text-align: left;
        font: normal normal 600 14px/25px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        opacity: 0.5;
      }

      .email{
        display: flex;
        flex-direction: row;
        gap: 20px;
      }


      .emailinput{
        background: #FFFFFF 0% 0% no-repeat padding-box;
        border: 1px solid #000000;
        opacity: 0.2;
        width: 70%;
        padding-left: 2%;
      }





      .submit{
        width: 20%;
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
    .extrabottom{
        margin-top: 5%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        padding-left: 6%;
        padding-right: 6%;
    }
    .allrightsreserved{
        text-decoration: none;
        text-align: left;
        font: normal normal 600 14px/25px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        text-transform: capitalize;
        opacity: 0.5;
    }
    .allrightsreserved a{
        text-decoration: none;
        text-align: left;
        font: normal normal bold 14px/25px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        text-transform: capitalize;
        opacity: 0.5;
    }

    .webaddicts{
        text-decoration: none;
        text-align: left;
        font: normal normal 600 14px/25px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        text-transform: capitalize;
        opacity: 0.5;
    }
    .webaddicts a{
        text-decoration: none;
        text-align: left;
        font: normal normal bold 14px/25px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        text-transform: capitalize;
        opacity: 0.5;
    }
      </style>
</head>
<body>
<div class="bottom-container">
<div class="bottom">
    <div class="bottomleft">


    <h1 class="leftheader">HEADQUARTERS</h1>
    <div class="locationinfo">
        <div class="location1">
                @include('location')
    <p class="location"> Office: Al Imam Abdel Aziz, Al Faysaliya</p>
        </div>

    <p class="location2">Cold Store: Location Goes Here</p>
    </div>

    <p class="number"> @include('phone') +966 5 5586 6105 / +966 5 0552 4378</p>
    <p class="info"> @include('mail') info@alwisaa.com</p>
    



</div>
<div class="middle">
    <h1 class="legal">LEGAL</h1>
    <p>Terms & Conditions</p>
    <p>Privacy Policy</p>
    <p>Cookies Policy</p>

</div>
<div class="bottomright">
    <h1 class="join">JOIN OUR NEWSLETTER</h1>
    <p class="receive">Receive our latest news and updates.</p>
    <div class="email">
   <input class="emailinput" type="text" placeholder="Email Address">
         <button class="submit">SUBMIT</button>

    </div>
      
   
</div>



    </div>
    <div class="extrabottom">
<p class="allrightsreserved"> ©2023. All rights reserved. Copyrights <a href="/">Al Wisa'a</a>.</p> 
<p class="webaddicts">Web Design & Development by <a href="https://thewebaddicts.com">The Web Addicts</a></p>
</div>
    </div>

</body>
</html> 