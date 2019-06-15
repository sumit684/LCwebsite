<?php
include('session.php');
?>
<html>
    <head>
        <title>DESIGN SHEETS QC INPROCESS</title>    
        <link rel="icon" type="image/jpg" href="images/logo.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <style>
            td{
                text-align: center;
                font-size: 18px;
            }
            thead td{
                background-color: #3f97f1;
                font-size: 24px;
                font-weight: 700;
                color: white;
                font-family: serif;
            }
        </style>
    </head>
<body>
       <?php include('include/nav.html')?>
       <div class="display-4" align="center" style="margin-top: 20px; font-family: serif;">RDSO DESIGN SHEETS</div>
     <!--   <select>
           <option value="RDSO">RDSO DESIGN SHEET</option>
           <option value="SERVICE CABLE">SERVICE CABLE DESIGN SHEET</option>
           <option value="POWER CABLE">POWER CABLE DESIGN SHEET</option>
           <option value="AB CABLE">AB CABLE DESIGN SHEET</option>
           <option value="HT CABLE">HT DESIGN SHEET</option>
       </select> -->
       <table align="center" class="container table table-bordered table-hover">
        <thead>
            <tr>
                <td>S.No.</td>
                <td>Cable Size</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            
                <?php
                    $sql="SELECT * FROM `design_sheet` WHERE customer_name='RDSO' ORDER BY cable_name ";
                    $sno = 1;
                    $result=mysqli_query($db,$sql);
                        if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>".$sno."</td>  
                     <td>".$row['cable_name']."</td>
                     <td><button class='btn btn-primary'><a style='color:white;' href='Design_Sheet/".$row['customer_name']."/".$row['cable_name']." RDSO Design Sheet.pdf'><i class='fa fa-download'></i> Download PDF</a></button>
                    </td>
                    </tr>"; 
                    $sno++;
                    }
                }
                ?>
            
        </tbody>
       </table>
       <?php include('include/footer2.html');?>
</body>
</html