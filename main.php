<?php
include('session.php');
?>

<html>
    <head>
        <title>QC INPROCESS</title>    
        <link rel="icon" type="image/jpg" href="images/logo.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <style>
        .main a{
            text-decoration: none;
            color: aliceblue;
            text-transform: uppercase;

        }
        .main a:hover{
            text-decoration: underline;
            color: aliceblue!important;
        }
        .main button:hover{
            background: #3eb73e!important;
            text-decoration: none!important;
            text-decoration-color: aliceblue!important;
        }

        .main .col-md-4{

            margin-left: auto;
            margin-right: auto;
            padding: 10px;
            text-align: center;
        }
        .main button{
            width:inherit;
        }
        body{
            overflow-x: hidden;
            background-image: url(images/cable.jpg);
            background-blend-mode:darken;
            background-repeat: no-repeat;
            background-size: cover;


        }
        .main .inprocess{
            color: #100e33d6;;
            font-weight: 600!important;
            font-family: serif;
            margin-top: 5vh;
            font-size:50px;
            text-shadow: 2px 2px #a8aeda;
        }
        @media only screen and (max-width:600px){
            .main .inprocess{
                font-size:30px;
                margin-top: 10vh;
            }
        }
    </style>

    <body>
        
        <?php include('include/nav.html')?>
        <div class="main container">

            <div class="inprocess" id="forms_head"><center>ONLINE FORM FOR HT CABLE</center></div>
            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-primary"><h4>   <a href="https://goo.gl/forms/ORxYW6Dgv393Dt2x2" target="_blank">CONDUCTOR INPROCESS</a></h4></button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary"><h4>    <a href="https://forms.gle/KB6zBqDcJtC6wvgD6" target="_blank">Insulation INPROCESS</a></h4></button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary"><h4>   <a href="https://forms.gle/n6U5Yv8yrY7KN2oF8" target="_blank">Copper Tape INPROCESS</a></h4></button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-primary"><h4>  <a href="https://goo.gl/forms/lN7wJXj8i3o4ERVv2" target="_blank">Laying INPROCESS</a></h4></button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary"><h4>    <a href="https://goo.gl/forms/CYJDH8U7E2V1VsVx1" target="_blank">Inner Sheath INPROCESS</a></h4></button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary"><h4>   <a href="https://goo.gl/forms/QzTHpoda0bfUcKIg1" target="_blank">Armouring INPROCESS</a></h4></button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-primary"><h4> <a href="https://goo.gl/forms/k5MdJJWwPr13p1gy1" target="_blank">Outer Sheath INPROCESS</a></h4></button>
                </div>
            
                <div class="col-md-4">
                    <button class="btn btn-primary" style="background:red;"><h4> <a href="https://forms.gle/t8Ku8CLftMjP4Q6WA" target="_blank" >Non Conformance Report INPROCESS</a></h4></button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary" style="background:orange;"><h4> <a href="https://forms.gle/iU5YNCF7YKpsxJ2C7" target="_blank">HOT SET & PERMANENT TEST RECORD</a></h4></button>
                </div>
            </div>

         <!-- 
           <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-primary"><h4> <a href="link_santosh" target="_blank"> Santosh Singh </a></h4></button>
                </div>
            
                <div class="col-md-4">
                    <button class="btn btn-primary"><h4> <a href="link_santosh" target="_blank"> Santosh Singh </a></h4></button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary"><h4> <a href="link_santosh" target="_blank"> Santosh Singh </a></h4></button>
                </div>
            </div>
        -->
        </div>
 <?php include('include/footer.html');?>
    </body>
</html>