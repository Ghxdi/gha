<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie-edge">
    @vite(['resources/scss/app.scss'])
    <script>
document.addEventListener("DOMContentLoaded", function() {
    const currentUrl = window.location.pathname;
    const links = document.querySelectorAll('.navbar ul li a');

    links.forEach(link => {
        if (link.getAttribute('href') === '/aboutus') {
            link.classList.add('active');
        }
        if (link.getAttribute('href') === '/ourproducts') {
            link.classList.add('active');
        }
        if (link.getAttribute('href') === '/sustainability') {
            link.classList.add('active');
        }
        if (link.getAttribute('href') === '/contactus') {
            link.classList.add('active');
        }
    });
});

    </script>
    <style>
         .navbar{
        width: 100%;
        height: 8vh;
        padding-top: 0px;
        background-color: transparent;
        display: flex;
        justify-content: space-between;
        z-index: 2;
            position: absolute;
        top: 0;
        flex-direction: row;
        align-items: center;
        padding-left: 0.2%;
       
    }
    .active{
        background: #FFFFFF 0% 0% no-repeat padding-box;
        box-shadow: 0px 20px 30px #00000012;
        opacity: 1;
    }
    .active li ul{
        text-align: left;
        font: normal normal bold 14px/60px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        text-transform: uppercase;
        opacity: 1;
    }
    
    .text{
        display: flex;
        flex-direction: row;
        padding-right: 8%;
    }
    .logo{
        background:transparent;
    }
    ul {
        list-style: none;    
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        text-decoration: none;
        font-size: medium;
        text-align: left;
        font: normal normal bold 14px/60px Open Sans;
        letter-spacing: 0px;
        color: #FFFFFF;
        text-transform: uppercase;
        opacity: 1;
        gap:10px;
        filter:brightness(120%) ;
        text-decoration: none;
        gap:50px;
    }
    a {
        text-decoration: none;
        color: white;

    }
    li {
    color:white;
    }
    .logo {
        background: transparent;
        opacity: 1;
        display: flex;
        flex-direction: row;
        justify-content: space-between; 
        margin-left: 4%;
        padding-right: 2%;  
        
    }
    .servselect{
        text-align: left;
        font: normal normal bold 14px/60px Open Sans;
        letter-spacing: 0px;
        color: #FFFFFF;
        text-transform: uppercase;
        opacity: 1;
        background:transparent;
        border:none;
    }
    </style>

    </head>
    <body>
    <nav>
        <nav>
        <div class="container">
        <div class="navbar">
            <div class="logo">
              @include('logo')  
            </div>
    
    <div class="text">
    <ul>
    <li><a href="aboutus">ABOUT US</a></li>
    <li><a href="products">OUR PRODUCTS</a></li>
    <form class=services>
        <select class="servselect">
            <option>OUR SERVICES</option>
        </select>
    </form>   
    <li><a href="sustain">SUSTAINABILITY</a></li> 
    <li><a href="contactus">CONTACT US</a></li>  
</ul>

    
                </div>
</nav>
    </body>
</html>