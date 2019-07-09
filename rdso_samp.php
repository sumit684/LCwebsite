<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>RDSO SAMPLING Laser Power Cable Ltd.</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/jpg" href="images/logo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <style type="text/css">
  	/*body{
  		margin: 50px;
  	}*/
  	.col-auto{
  		margin-left: auto;
  		margin-right: auto;
  	}
  </style>
</head>
<body>
<?php 
include 'include/nav.html';?>
	<div class="container" style=" box-shadow:1px 1px 12px 1px grey;  border: 2px solid black; margin-top: 50px;">
		<div align="center" style="margin:15px;">
			<img src="images/logo.png"/>
		</div>

		<h5 style="font-family: serif; text-align:center; font-weight: 700;">RDSO INTERNAL PRE-INSPECTION</h5>
<form style="text-align: center;" align=center action="rdso.php" method="post" onsubmit="validate()" id="form">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Drum Number</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><b>DRUM FROM</b></div>
        </div>
        <input type="text" name="drum_start" class="form-control" id="drum_start" placeholder="Enter Start Drum No." required>
      </div>
    </div>
   </div>
   <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Drum Number</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><b>DRUM TO</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        </div>
        <input type="text" name="drum_end" class="form-control" id="drum_end" placeholder="Enter End Drum No." required>
      </div>
    </div>
	</div>

	<div class="form-row align-items-center" style="margin:10px;">
		<div class="col-auto">
			
			<label><b>SELECT SAMPLING SET&nbsp;&nbsp;</b></label>
			<br>
			<input type="radio" name="multiplier" value="1" onclick="hidediv(1)" required>&nbsp;Sampling 1
			<input type="radio" name="multiplier" value="2" onclick="hidediv(2)" required>&nbsp;Sampling 2
		</div>
	</div>

	<div class="form-row align-items-center" >
		<div class="col-auto" id="div1" style="display: none;">
			<h4 style="font-family: serif; text-decoration: underline;">SAMPLING 1 DETAILS</h4>
		<table class="table table-responsive table-bordered">
			<thead>
				<tr>
					<td>Test Parameter</td>
					<td>SI No.</td>
					<td>Sampling
					</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="3"><b>Physical</b></td>
					<td>1,2,3,4a.i,4b.i</td>
					<td>10%</td>
				</tr>
				<tr>
					<td>4.a.ii,4.b.ii.4.c,4d,4e,4f,5a,5b,7	</td>
					<td>4%</td>
				</tr>
				<tr>
					<td>6</td>
					<td>1</td>
				</tr>
				<tr>
					<td><b>HV, IR, CR</b></td>
					<td>8,9a,10.a</td>
					<td>25%</td>
				</tr>
				<tr>
					<td><b>WET IR</b></td>
					<td>10.b</td>
					<td>4%</td>
				</tr>
				<tr>
					<td><b>Water Immersion</b></td>
					<td>11</td>
					<td>4%</td>
				</tr>
				<tr>
					<td><b>Visual</b></td>
					<td>12</td>
					<td>4%</td>
				</tr>
			</tbody>
		</table>
		</div>
	</div>
	<div class="form-row align-items-center" >
		<div class="col-auto" id="div2" style="display: none;">
			<h4 style="font-family: serif; text-decoration: underline;">SAMPLING 2 DETAILS</h4>
			<table class="table table-responsive table-bordered">
			<thead>
				<tr>
					<td>Test Parameter</td>
					<td>SI No.</td>
					<td>Sampling
					</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td rowspan="3"><b>Physical</b></td>
					<td>1,2,3,4a.i,4b.i</td>
					<td>20%</td>
				</tr>
				<tr>
					<td>4.a.ii,4.b.ii.4.c,4d,4e,4f,5a,5b,7	</td>
					<td>8%</td>
				</tr>
				<tr>
					<td>6</td>
					<td>1</td>
				</tr>
				<tr>
					<td><b>HV, IR, CR</b></td>
					<td>8,9a,10.a</td>
					<td>50%</td>
				</tr>
				<tr>
					<td><b>WET IR</b></td>
					<td>10.b</td>
					<td>8%</td>
				</tr>
				<tr>
					<td><b>Water Immersion</b></td>
					<td>11</td>
					<td>8%</td>
				</tr>
				<tr>
					<td><b>Visual</b></td>
					<td>12</td>
					<td>8%</td>
				</tr>
			</tbody>
		</table>



		</div>
	</div>
	<div class="form-row align-items-center" style="margin: auto; display: block;">
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Generate Plan</button>
    </div>
  </div>

</form>
</div>
<?php
include 'include/footer.html'
?>
</body>
</html>
<script type="text/javascript">
	function hidediv(n){
		
		if(n==1){
			document.getElementById("div1").style.display="block";
			document.getElementById("div2").style.display="none";
		}
		if(n==2){
			document.getElementById("div2").style.display="block";
			document.getElementById("div1").style.display="none";
			}
		}
		function validate() {
			var a= document.getElementById("drum_start").value;
			var b= document.getElementById("drum_end").value;
			if(b<=a){
				window.alert("End Drum Number should be greater than Start Drum Number.\n Please Enter Valid Inputs");
				document.getElementById("form").action="rdso_samp.php"
			}
		}
</script>