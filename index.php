<html>
    <head>
        <title>QC INPROCESS | LASER POWER CABLE PVT LTD.</title>   
        <link rel="icon" type="image/jpg" href="images/logo.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <style>
            /* Make the image fully responsive */
               .carousel-inner img {
                width: 100%;
                /*                height: 100%;*/
            }
            .login a{
                text-decoration:none; 
                color:white;
            }
            .login a:hover{
                color:white;
            }
            .container{
                box-shadow: 1px 1px 5px 2px grey;
            }
            .laser{
               /* box-shadow: 1px 1px 10px 0.1px grey;*/
            }
            /*.carousel-item .img-fluid{
                height:(calc(--input(width/2);
            }*/
        </style>

    </head>
    <body>
    
        <div class="container">
            <img class="laser img-fluid" src="images/laser.png" style="align:center">
            <div class="container-fluid">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        <li data-target="#demo" data-slide-to="3"></li>
                        <li data-target="#demo" data-slide-to="4"></li>
                        <li data-target="#demo" data-slide-to="5"></li>
                        <li data-target="#demo" data-slide-to="6"></li>
                        <li data-target="#demo" data-slide-to="7"></li>
                        <li data-target="#demo" data-slide-to="8"></li>
                      

                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img class="img-fluid" src="images/lab/1.jpg" alt="QC LAB 1">
                            <div class="carousel-caption">
                                <h3>QC LAB</h3>
                            </div> 
                        </div>

                        <div class="carousel-item ">
                            <img class="img-fluid"  src="images/lab/2.jpg" alt="QC LAB 2">
                        </div>

                       
                        <div class="carousel-item ">
                            <img class="img-fluid" src="images/lab/3.jpg" alt="Tensile Testing Machine">
                            <div class="carousel-caption">
                                <p>Tensile Testing Machine</p>
                            </div> 
                        </div>
                         <div class="carousel-item ">
                            <img class="img-fluid" src="images/lab/4.jpg" alt="QC LAB 3">
                        </div>


                        <div class="carousel-item ">
                            <img class="img-fluid" src="images/lab/5.jpg" alt="QC LAB ">
                        </div>
                        <div class="carousel-item ">
                            <img class="img-fluid" src="images/lab/6.jpg" alt="QC LAB ">
                        </div>
                        <div class="carousel-item ">
                            <img class="img-fluid" src="images/lab/7.jpg" alt="QC LAB ">
                        </div>
                        <div class="carousel-item ">
                            <img class="img-fluid" src="images/lab/8.jpg" alt="QC LAB ">
                        </div>
                        <div class="carousel-item ">
                            <img class="img-fluid" src="images/lab/9.jpg" alt="QC LAB ">
                        </div>
                        .

                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
                <center><a href="login.php"><button class="login btn btn-primary"style="margin-top:40px; font-size:20px; width:250px; margin-bottom:40px;">LOGIN</button></a></center>
            </div>
           
           <?php include('include/footer2.html');?>
           
        </div>
        
    </body>
</html>