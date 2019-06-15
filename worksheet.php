<?php
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Worksheets | Laser Power Cable </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/jpg" href="images/logo.png">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <style>
            .accordion {
                background-color: #ccc;
                color: #000000;
                cursor: pointer;
                padding: 10px;
                width: 100%;
                border: none;
                text-align: left;
                outline: none;
                font-size: 18px;
                font-family: sans-serif;
                font-weight: 550;
                transition: 0.4s;
                font-family: 'Merriweather';
                border-radius: 4px;
                padding-left: 10px;
            }

            .notices .active {
                background-color: #eee;
            }

            .accordion:after {
                content: '\f0aa'; /*upper arrow*/ 
                font-family: "FontAwesome";
                color: #777;
                font-weight: bold;
                float: right;

            }

            .notices .active:after {
                content: "\f0ab"; /*lower arrow*/ 
                font-family: "FontAwesome";
                color:#0074fc;
            }

            .notices div.panel {
                padding: 0 18px;
                background-color: #eee;
                display: none;
                overflow: hidden;
                font-size: 16px;

            }
            .notices div.panel li{
                list-style-type: none;
                line-height: 2.0;
                font-weight: 700;
                font-size: 18px;
                font-family: 'MerriWweather';
            }
            .notices div.panel li:before{
                content: "\f15c";
                font-family: "FontAwesome";
                width: 10px;
                height: 10px;
                margin-right: 5px;
                color: #0f9d58;
            }
            .container{
                box-shadow: 5px 5px 30px grey;
                /*                margin-top: 10px;*/
                padding-bottom:30px;
            }
            .notices h1{
                font-family: 'Merriweather';
                color: #100e33d6;
            }
            .icon_style{
                padding-right:8px;
            }


            .blink_me {
                animation: blinker 1s linear infinite;
            }

            @keyframes blinker {
                50% {
                    opacity: 0;
                }
            }
            .notices a{
                color:black;
            }
            .notices #inprocess_head{
                background-color: yellow;
                padding-top: 10px;
            }
        </style>


    </head>
    <body>
        <?php include('include/nav.html')?>
        <div class="container notices">
            <br>
            <h1 id="inprocess_head"><center>Inprocess Records</center></h1>

            <?php   

    $sql="SELECT DISTINCT worksheet_name FROM sheet";
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)) {
                echo "
                    <div id='".$row['worksheet_name']."'>";  
            ?>

            <button class="accordion"><i class='fas fa-scroll icon_style'></i><?php echo $row['worksheet_name']?></button>
            <div class="panel">
                <ul>
                    <?php
                $data="SELECT * FROM sheet WHERE worksheet_name='".$row["worksheet_name"]."'";

                $data_result=mysqli_query($db,$data);
                if(mysqli_num_rows($data_result)>0){
                    while($data_row=mysqli_fetch_assoc($data_result)){                                

                        echo "
                                <li>
                                <a href='".$data_row['sheet_link']."' target='_blank'>". $data_row['sheet_name']."</a>
                                </li>";
                    }//close $data while
                }//close $data if
                    ?>
                </ul>
            </div>
            <?php
            }//close $row while
        }// close $row if
            ?>
        </div>
</div>
</div>
</div>
</div>
</div>
<?php include('include/footer2.html');?>
        <script>
            // # This script opens accordion onclick
            var acc = document.getElementsByClassName("accordion");
            var i;
            console.log(acc);
            
            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() { 
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display==="block"){
                        panel.style.display = "none";
                    } else {
                        panel.style.display ="block";
                    } 
                });
            }
        </script>
        
        <script>
            //# This function is to load section accordion on click nav-link
            function myaccordion(id_name){
             
                var acc1 = document.getElementById(id_name);
                console.log(acc1);
                var abc = acc1.getElementsByClassName("panel");
                console.log(abc[0]);
                abc[0].style.display="block";
            }
            
            $(document).ready(function(){
                var x = location.href.indexOf("#");
                var div = location.href.substring(x+1);
                myaccordion(decodeURI(div));
            });
            
            
        </script>

    </body>
</html>