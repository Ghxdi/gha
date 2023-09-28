<!DOCTYPE html>
<html>
    <title>About US</title>
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
<script>
       
       document.addEventListener('DOMContentLoaded', function() {
                const aspectvids = document.querySelectorAll('.aspectvid');

                aspectvids.forEach(function(aspectvid) {
                    const video = aspectvid.querySelector('video');

                    aspectvid.addEventListener('mouseover', function() {
                        video.play(); // Play video on hover
                        video.style.opacity = '1'; // Show the video
                    });

                    
                });
            });
</script>
<style>
    .aboutmain{
        display: flex;
        flex-direction: row;
    }
    .aboutimg{
        filter: brightness(50%);
        width: 980px;
        height: 980px;
    }
    .asp5 img,
.asp5 picture {
    position: absolute;
    top: 0;
    left: 0;
    width: 980px;
    height: 980px;
    object-fit: cover;
    filter: brightness(50%);
}

    .whoweare{
        position: absolute;
        margin-top: 17%;
        margin-left: 45%;
        opacity: 1;
        width: 940px;
        height: 449px;
        z-index: 1;
    }
    .whoweareinfo{
        display: flex;
        flex-direction: column;
        background: #FFFFFF 0% 0% no-repeat padding-box;
        box-shadow: 0px 20px 30px #00000012;
        opacity: 1;
        padding:5%;
    }
    .whohead{
      
        text-align: left;
        font: normal normal bold 50px/75px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        text-transform: capitalize;
        opacity: 1;
    }
    .whoinfo{
        text-align: left;
        font: normal normal normal 16px/25px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        opacity: 0.7;
        width: 76%;
    }
    .abotext{
        margin-left: 75%;
        text-align: left;
        font: normal normal bold 300px/75px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        text-transform: uppercase;
        opacity: 0.05;
        z-index: 0;
    }
    .aspectimg{
        width: 100%;
    }
    .aspectimg img{
        height: 520px;
        filter: brightness(100%) !important;
    }
    .aspectvid{
        background: #FFFFFF 0% 0% no-repeat padding-box;
        box-shadow: 0px 1px 20px #00000012;
        opacity: 1;
        border-radius: 50%;
        width: 130px;
        height: 130px;
        margin-top: 15%;
        margin-left: 40%;
        transition: 0.3s ease-in-out;
        
    }
    .aspectvid video{
        margin-left: 15%;
        margin-top: 15%;
    }
    .aspecthead{
        text-align: center;
        font: normal normal bold 25px/60px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        text-transform: uppercase;
        opacity: 1;
    }
    .aspectp{
        text-align: center;
        font: normal normal normal 14px/22px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        opacity: 0.7;
        width: 80%;
        padding-left: 10%;
    }
    .aspectcontent{
        position: absolute;
        display: flex;
        flex-direction: row;
        gap: 40px;
        margin-left: -3.5%;
    }
    .introduction{
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-top: 30%;
        margin-left: 5%;
    }
    .introducing{
        text-align: left;
        font: normal normal bold 50px/75px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        text-transform: capitalize;
        opacity: 1;
    }
    .teampresentation{
        display: flex;
        flex-direction: row;
        gap: 80px;
    }
    .introducing img{
        width: 520px;
        height: 520px;
    }
    .asp0 img,
.asp0 picture {
    top: 0;
    left: 0;
    width: 520px;
    height:520px;
    object-fit: cover;
    filter: brightness(100%) !important;
}
.positionhead{
    text-align: left;
    font: normal normal bold 20px/50px Open Sans;
    letter-spacing: 0px;
    color: #003589;
    text-transform: uppercase;
    opacity: 1;
}
.posname{
    text-align: left;
    font: normal normal bold 30px/0px Open Sans;
    letter-spacing: 0px;
    color: #000000;
    text-transform: capitalize;
    opacity: 1;
}
.footabout{
    margin-top: 5%;
}
</style>
    </head>



    <body>
    @include('navbar2')
    <div class="aboutmain">
        <div class="aboutimg asp5 asp-1-1">
        <img src="images/aboutimg.png" alt="productimg">
        </div>
        
        
        <div class="whoweare">
            <div class="whoweareinfo">
                <h1 class="whohead">Who We Are</h1>
                <p class="whoinfo">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. </p>
                <p class="whoinfo"> Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla.Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Tempor id eu nisl nunc mi ipsum faucibus. Fusce id velit ut tortor pretium. Massa ultricies mi quis hendrerit dolor magna eget.

</p>
            </div>
        </div>
        <h1 class="abotext">ABO</h1>


      

    </div>
  <div class="aspects">
    <div class="aspectimg asp asp-3.71-1">
            <img src="images/about1.png" alt="aboutbg">          
    </div>
        <div class="aspectcontent">
            <div class="aspectinfo">
            <div class="aspectvid">
                    <video width="90" height="90" 
                    src="videos/Mission.mp4" type="video/mp4">
                    </video>
            </div>
                <div class="aspecthead"><h1>MISSION</h1></div>
                <div class="aspectp"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacust.</p></div>
            </div>


            <div class="aspectinfo">
            <div class="aspectvid">
                    <video width="90" height="90" 
                    src="videos/Vision.mp4" type="video/mp4">
                    </video>
            </div>
                <div class="aspecthead"><h1>VISION</h1></div>
                <div class="aspectp"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacust.</p></div>
            </div>


            <div class="aspectinfo">
            <div class="aspectvid">
                    <video width="90" height="90" 
                    src="videos/Value.mp4" type="video/mp4">
                    </video>
            </div>
                <div class="aspecthead"><h1>VALUE</h1></div>
                <div class="aspectp"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacust.</p></div>
            </div>
        </div>
        </div>
        <div class="introduction">
            <h1 class="introducing">Introducing Al Wise'a Team</h1>
            <div class="teampresentation">
                <div class="teamintro">
                    <div class="teamimg asp0 asp-1-1">
                    <img src="images/team1.png" alt="team1">
                    </div>

                    <div class="position">
                        <h1 class="positionhead">Position</h1>
                        <p class="posname">Johnny Doe</p>
                    </div>
                    
                </div>

                <div class="teamintro">
                    <div class="teamimg asp0 asp-1-1">
                    <img src="images/team2.png" alt="team1">
                    </div>

                    <div class="position">
                        <h1 class="positionhead">Position</h1>
                        <p class="posname">Johnny Doe</p>
                    </div>
                    
                </div>

                <div class="teamintro">
                    <div class="teamimg asp0 asp-1-1">
                    <img src="images/team3.png" alt="team1">
                    </div>

                    <div class="position">
                        <h1 class="positionhead">Position</h1>
                        <p class="posname">Johnny Doe</p>
                    </div>
                    
                </div>
            </div>
        </div>
</body>
<footer class="footabout">
    @include('footer')
</footer>
</html>