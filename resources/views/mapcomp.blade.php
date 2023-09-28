<style>

.bottomleft1{
        background: #FFFFFF 0% 0% no-repeat padding-box;
        opacity: 1;
        position: absolute;
        margin-top: -15%;
        margin-left: 5%;
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 20px;
        padding-bottom: 5px;
        padding-top: 0;
      }
      .leftheader2{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        text-align: left;
        font: normal normal bold 20px/60px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        text-transform: uppercase;
        opacity: 1;
      }
      .leftheader2 svg{
        padding: 20px;
      }
      .locationinfo1{
        text-align: left;
        font: normal normal 600 14px/0px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        opacity: 1;
      }
      .locationinfo1 svg{
        padding-top: 1.5%;
      }
      .info1{
        text-align: left;
        font: normal normal 600 14px/0px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        opacity: 1;
      }
      .info1 svg{
        padding-right: 5%;
        padding-top: 1.5%;
      }
      .number1{
        text-align: left;
        font: normal normal 600 14px/0px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        opacity: 1;
      }
      .number1 svg{
        padding-right: 5%;
        padding-top: 1.5%;
      }
      .location1{
        display: flex;
        flex-direction: row;
        gap: 10px;
      }
      .coldstore{
        border-top: 1px solid rgba(0, 0, 0, 0.1);
        text-align: left;
        font: normal normal bold 20px/0px Open Sans;
        letter-spacing: 0px;
        color: #000000;
        text-transform: uppercase;
        opacity: 1;
        width: 100%;
        height: 50px;
        border-left: none;
        border-right: none;
        border-bottom: none;
      }


</style>

<body>


<div class="bottomleft1">

<div class="leftheader2">
    
<div class="leftheader3">
OFFICE 
</div>
@include('arrowup')
</div>

<div class="locationinfo1">
    <div class="location1">
            @include('location')
<p class="location1"> Office: Al Imam Abdel Aziz, Al Faysaliya</p>
    </div>

<p class="number1"> @include('phone') +966 5 5586 6105 / +966 5 0552 4378</p>
<p class="info1"> @include('mail') info@alwisaa.com</p>
<form class="coldstore">
    <select class="coldstore">
             <option>COLD STORE</option>
    </select>
</form>





</div>
</body>