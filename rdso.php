<?php
$m=$_POST['multiplier'];
define("DRUM_START",$_POST['drum_start']);
define("DRUM_END",$_POST['drum_end']);
define("PHYSICAL1_PERCENT",10*$m);//Physical Sample percentage Qty Row 1
define("PHYSICAL2_PERCENT",4*$m);//Physical Sample percentage Qty Row 2
define("PHYSICAL3",1);//Physical Sample percentage Qty Row 2
define("HV_PERCENT",25*$m);//HV,IR,CR Sample Qty percentage Row 5
define("WET_IR_PERCENT",4*$m);//WET IR Sample Qty percentage Row 6
define("WI_PERCENT",4*$m);//Water Immersion Sample Qty percentage Row 7
define("VISUAL_PERCENT",4*$m);//Visual Sample Qty percentage Row 6

//Get all drums in form of array 
function getalldrums(){
	$alldrums;
	for($i=DRUM_START;$i<=DRUM_END;$i++){
		$alldrums[$i-DRUM_START]=$i;
	}
	return $alldrums;
}

//Get Total number of drums
function drumcount($start,$end){
	$totaldrums=$end-$start+1;
	return $totaldrums;
}

//converts array to comma seperated string
function arraytostring($array){
	$string="";
	for($i=0;$i<sizeof($array);$i++){
		if($i!=sizeof($array)-1){
			$string.=$array[$i].', ';
		}
		else{
			$string.=$array[$i];
		}
		
	}
	return $string;
}

//For array of Physical Test Parameter in Row 1
function sampling_physical_one(){
	$copy_alldrums=getalldrums();

	$phy_samp_count1=(int)(drumcount(DRUM_START,DRUM_END)*PHYSICAL1_PERCENT*0.01)+1;
	
	global $sample;

	$random_end=DRUM_END-1;

	for($i=0;$i<$phy_samp_count1;$i++){
		$start=DRUM_START;
		$rand_num=random_int(0, drumcount($start,$random_end));
		$sample[$i]=$copy_alldrums[$rand_num];
		array_splice($copy_alldrums,$rand_num,1);
		$random_end--;
	}
	
	global $remain_drum_after_sample1;
	$remain_drum_after_sample1=$copy_alldrums;
	rsort($sample);
	return $sample;
}

//For array of Physical Test Parameter in Row 2
function sampling_physical_two(){
	$copy_physical_one_drums=$GLOBALS['sample'];
	$phy_samp_count2=(int)(drumcount(DRUM_START,DRUM_END)*PHYSICAL2_PERCENT*0.01)+1;
	
	global $sample2;

	// $random_end2=sizeof($GLOBALS['sample'])-1;

	for($i=0;$i<$phy_samp_count2;$i++){
		$rand_num2=random_int(0,sizeof($copy_physical_one_drums)-1);
		$sample2[$i]=$copy_physical_one_drums[$rand_num2];
		array_splice($copy_physical_one_drums,$rand_num2,1);
	}
	rsort($sample2);
	return $sample2;
}

function sampling_physical_three(){
	$copy_physical_two_drums=$GLOBALS['sample2'];
	
	global $sample3;

	for($i=0;$i<PHYSICAL3;$i++){
		$rand_num3=random_int(0,sizeof($GLOBALS['sample2'])-1);
		$sample3[$i]=$copy_physical_two_drums[$rand_num3];
		array_splice($copy_physical_two_drums,$rand_num3,1);
	}
	rsort($sample3);
	return $sample3;
}

function hv(){
	$copydrumforhv=$GLOBALS['remain_drum_after_sample1'];
	$hv_samp_count=(int)(drumcount(DRUM_START,DRUM_END)*HV_PERCENT*0.01)-1;
	
	global $sample4;

	for($i=0;$i<$hv_samp_count;$i++){
		$rand_num4=random_int(0,sizeof($copydrumforhv)-1);
		$sample4[$i]=$copydrumforhv[$rand_num4];
		array_splice($copydrumforhv,$rand_num4,1);
	}
	global $remain_drum_after_sample4;
	$remain_drum_after_sample4=$copydrumforhv;
	rsort($sample4);
	return $sample4;
}
function wetIR(){
	$copyforwetIR=$GLOBALS['remain_drum_after_sample4'];
	$wetIR_samp_count=(int)(drumcount(DRUM_START,DRUM_END)*WET_IR_PERCENT*0.01);
	global $sample5;
	for($i=0;$i<$wetIR_samp_count;$i++){
		$rand_num5=random_int(0,sizeof($copyforwetIR)-1);
		$sample5[$i]=$copyforwetIR[$rand_num5];
		array_splice($copyforwetIR,$rand_num5,1);
	}
	global $remain_drum_after_sample5;
	$remain_drum_after_sample5=$copyforwetIR;
	rsort($sample5);
	return $sample5;
}
function WI(){
	$copyforWI=$GLOBALS['remain_drum_after_sample5'];
	$WI_samp_count=(int)(drumcount(DRUM_START,DRUM_END)*WI_PERCENT*0.01);
	global $sample6;
	for($i=0;$i<$WI_samp_count;$i++){
		$rand_num6=random_int(0,sizeof($copyforWI)-1);
		$sample6[$i]=$copyforWI[$rand_num6];
		array_splice($copyforWI,$rand_num6,1);
	}
	global $remain_drum_after_sample6;
	$remain_drum_after_sample6=$copyforWI;
	rsort($sample6);
	return $sample6;
}
function visual(){
	$copyforVisual=$GLOBALS['remain_drum_after_sample6'];
	$Visual_samp_count=(int)(drumcount(DRUM_START,DRUM_END)*VISUAL_PERCENT*0.01);
	global $sample7;
	for($i=0;$i<$Visual_samp_count;$i++){
		$rand_num7=random_int(0,sizeof($copyforVisual)-1);
		$sample7[$i]=$copyforVisual[$rand_num7];
		array_splice($copyforVisual,$rand_num7,1);
	}
	global $remain_drum_after_sample7;
	$remain_drum_after_sample7=$copyforVisual;
	rsort($sample7);
	return $sample7;
}
?>
<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 6.2.3.2 (Linux)"/>
	<meta name="author" content="lenovo"/>
	<meta name="created" content="2019-05-28T18:30:53"/>
	<meta name="changedby" content="lenovo"/>
	<meta name="changed" content="2019-05-31T20:46:44"/>
	<meta name="AppVersion" content="16.0300"/>
	<meta name="DocSecurity" content="0"/>
	<meta name="HyperlinksChanged" content="false"/>
	<meta name="LinksUpToDate" content="false"/>
	<meta name="ScaleCrop" content="false"/>
	<meta name="ShareDoc" content="false"/>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:x-small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  } 
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  } 
		comment { display:none;  }
		tbody td{
			border-bottom: 1px solid #000000;
			 border-left: 1px solid #000000;
			  border-right: 1px solid #000000;
			  padding: 8px;
		} 
		thead td{
			padding:0px;
			border: 1px solid #000000;
			vertical-align: center;
			font-family: serif;
		}
		table{
			margin-top: 10px;
		}
	</style>
	
</head>
<body>
	<div class="container" align="center" style="margin:auto; padding: 20px;"> 
<table class="table" cellspacing="0" border="0">
	<!-- <colgroup width="212"></colgroup>
	<colgroup width="194"></colgroup>
	<colgroup width="150"></colgroup>
	<colgroup width="136"></colgroup>
	<colgroup width="375"></colgroup> -->
	<thead>
		<tr  align="center" >
			<td colspan=5 ><!-- <h1>LASER POWER INFRA PVT LTD.</h1> --><img src="images/laser.png" style="width:800px; height:100px; align-self: center;"/></td>
			</tr>
		<tr align="center" >
			<td colspan=5><h2><b>RDSO INTERNAL PRE-INSPECTION SAMPLING PLAN</b></h2></td>
		</tr>
	<tr>
		<td height="28" align="center" valign=bottom><b><font face="Arial" size=4 color="#000000">Test Parameter</font></b></td>
		<td align="center" valign=bottom><b><font face="Arial" size=4 color="#000000">SI. No</font></b></td>
		<td align="center" valign=bottom><b><font face="Arial" size=4 color="#000000">Sampling</font></b></td>
		<td align="center" valign=bottom><b><font face="Arial" size=4 color="#000000">Sample Qty</font></b></td>
		<td align="left" valign=bottom><b><font face="Arial" size=4 color="#000000">Drum No.<?php echo DRUM_START." to ".DRUM_END?></font></b></td>
	</tr>
	</thead>
	<tr>
		<td rowspan=3 height="156" align="center" valign=middle><b><font face="Arial" size=4 color="#000000">Physical</font></b></td>
		<td align="center" valign=bottom><font face="Arial" size=4 color="#000000">1,2,3,4a.i,4b.i</font></td>
		<td align="center" valign=bottom sdval="0.1" sdnum="1033;0;0%"><font face="Arial" size=4 color="#000000"><?php echo PHYSICAL1_PERCENT."%"?></font></td>
		<td align="center" valign=bottom sdval="1" sdnum="1033;"><font face="Arial" size=4 color="#000000"><?php echo sizeof(sampling_physical_one())?></font></td>
		<td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><?php echo arraytostring(sampling_physical_one()) ?></font></td>
	</tr>
	<tr>
		<td align="center" valign=bottom><font face="Arial" size=4 color="#000000">4.a.ii,4.b.ii.4.c,4d,4e,4f,5a,5b,7</font></td>
		<td align="center" valign=bottom sdval="0.04" sdnum="1033;0;0%"><font face="Arial" size=4 color="#000000"><?php echo PHYSICAL2_PERCENT."%"?></font></td>
		<td align="center" valign=bottom><font face="Arial" size=4 color="#000000"><?php echo sizeof(sampling_physical_two())?></font></td>
		<td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><?php echo arraytostring(sampling_physical_two()) ?></font></td>
	</tr>
	<tr>
		<td align="center" valign=bottom sdval="6" sdnum="1033;"><font face="Arial" size=4 color="#000000">6</font></td>
		<td align="center" valign=bottom sdval="1" sdnum="1033;"><font face="Arial" size=4 color="#000000"><?php echo PHYSICAL3?></font></td>
		<td align="center" valign=bottom><font face="Arial" size=4 color="#000000"><?php echo sizeof(sampling_physical_three())?></font></td>
		<td align="left" valign=bottom><font face="Arial" size=3 color="#000000">
			<?php global $midpoint;
			$midpoint=arraytostring(sampling_physical_three());
			print($midpoint); ?></font></td>
	</tr>
	<tr>
		<td height="28" align="center" valign=bottom><b><font face="Arial" size=4 color="#000000">HV test</font></b></td>
		<td align="center" valign=bottom><font face="Arial" size=4 color="#000000">9b</font></td>
		<td align="center" valign=bottom><font face="Arial" size=4 color="#000000">All except 9A</font></td>
		<td align="center" valign=bottom><font face="Arial" size=4 color="#000000"><?php echo (int)(drumcount(DRUM_START,DRUM_END)*HV_PERCENT*0.01)+1?></font></td>
		<td align="left" valign=bottom><font face="Arial" size=4 color="#000000">ALL DRUMS EXCEPT 9A</font></td>
	</tr>
	<tr>
		<td height="187" align="center" valign=middle><b><font face="Arial" size=4 color="#000000">HV, IR, CR</font></b></td>
		<td align="center" valign=middle><font face="Arial" size=4 color="#000000">8,9a,10.a</font></td>
		<td align="center" valign=middle sdval="0.25" sdnum="1033;0;0%"><font face="Arial" size=4 color="#000000"><?php echo HV_PERCENT."%"?></font></td>
		<td align="center" valign=middle><font face="Arial" size=4 color="#000000"><?php echo sizeof(hv())?></font></td>
		<td align="left" valign=middle><font face="Arial" size=3 color="#000000"><?php echo arraytostring(hv()) ?></font></td>
	</tr>
	<tr>
		<td height="28" align="center" valign=bottom><b><font face="Arial" size=4 color="#000000">WET IR</font></b></td>
		<td align="center" valign=bottom><font face="Arial" size=4 color="#000000">10.b</font></td>
		<td align="center" valign=bottom sdval="0.04" sdnum="1033;0;0%"><font face="Arial" size=4 color="#000000"><?php echo WET_IR_PERCENT."%"?></font></td>
		<td align="center" valign=bottom><font face="Arial" size=4 color="#000000"><?php echo sizeof(wetIR())?></font></td>
		<td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><?php echo arraytostring(wetIR()) ?></font></td>
	</tr>
	<tr>
		<td height="28" align="center" valign=bottom><b><font face="Arial" size=4 color="#000000">Water Immersion</font></b></td>
		<td align="center" valign=bottom sdval="11" sdnum="1033;"><font face="Arial" size=4 color="#000000">11</font></td>
		<td align="center" valign=bottom sdval="0.04" sdnum="1033;0;0%"><font face="Arial" size=4 color="#000000"><?php echo WI_PERCENT."%"?></font></td>
		<td align="center" valign=bottom><font face="Arial" size=4 color="#000000"><?php echo sizeof(WI())?></font></td>
		<td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><?php echo arraytostring(WI()) ?></font></td>
	</tr>
	<tr>
		<td height="28" align="center" valign=bottom><b><font face="Arial" size=4 color="#000000">Visual</font></b></td>
		<td align="center" valign=bottom sdval="12" sdnum="1033;"><font face="Arial" size=4 color="#000000">12</font></td>
		<td align="center" valign=bottom sdval="0.04" sdnum="1033;0;0%"><font face="Arial" size=4 color="#000000"><?php echo VISUAL_PERCENT."%"?></font></td>
		<td align="center" valign=bottom><font face="Arial" size=4 color="#000000"><?php echo sizeof(visual())?></font></td>
		<td align="left" valign=bottom><font face="Arial" size=3 color="#000000"><?php echo arraytostring(visual()) ?></font></td>
	</tr>
	<tr>
		<td colspan=4 height="28" align="center" valign=bottom><b><font face="Arial" size=5 color="#000000">Note : Drum will include for All Test (Mid Point)</font></b></td>
		<td align="left" valign=bottom><font face="Arial" size=6 color="#000000"><b><?php echo  $GLOBALS['midpoint']?></b></font></td>
	</tr>
	<tr>
		<td height="116" align="center" valign=top><b><font face="Arial" size=4 color="#000000">ALL DRUMS</font></b></td>
		<td colspan=4 align="left" valign=center><font face="Arial" size=3 color="#000000"><?php echo arraytostring(getalldrums()) ?></font></td>
		
	</tr>
	<tr>
		<td height="30" align="center" valign=bottom><b><font face="Arial" size=4 color="#000000">TOTAL NO OF DRUMS</font></b></td>
		<td colspan=4 align="center" valign=bottom><font face="Arial" size=5 color="#000000"><?php echo sizeof(getalldrums())?></font></td>
		
	</tr>
	<tfoot>
		<tr>
			<td colspan="5"><span style="text-align: center; display: block; font-size: 20px;">Created By &copy;Santosh Singh</span></td>
		</tr>
	</tfoot>
</table>

</div>
<div style="margin-top: 20px;margin-bottom: 100px;">
	<button id="mybtn" style="margin:auto;display: block;" class="btn btn-success" onclick="hideme();window.print();">
		<i class='fa fa-download'></i> Download PDF
	</button>
</div>


<!-- ************************************************************************** -->
<!--
For Debugging


 <?php
echo "SAMPLE1:-".arraytostring($sample)."<br>";
echo "SAMPLE1 REMAIN:- ".sizeof($remain_drum_after_sample1)."<br>";
echo arraytostring($remain_drum_after_sample1)."<br>";
echo "SAMPLE2:-".arraytostring($sample2)."<br>";
echo "SAMPLE3:-".arraytostring($sample3)."<br>";
echo "SAMPLE4:-".arraytostring($sample4)."<br>";
echo "SAMPLE4 REMAIN:- ".sizeof($remain_drum_after_sample4)."<br>";
echo arraytostring($remain_drum_after_sample4)."<br>";
echo "SAMPLE5:-".arraytostring($sample5)."<br>";
echo "SAMPLE5 REMAIN:- ".sizeof($remain_drum_after_sample5)."<br>";
echo arraytostring($remain_drum_after_sample5)."<br>";
echo "SAMPLE6:-".arraytostring($sample6)."<br>";
echo "SAMPLE6 REMAIN:- ".sizeof($remain_drum_after_sample6)."<br>";
echo arraytostring($remain_drum_after_sample6)."<br>";
echo "SAMPLE7:-".arraytostring($sample7)."<br>";
echo "SAMPLE7 REMAIN:- ".sizeof($remain_drum_after_sample7)."<br>";
echo arraytostring($remain_drum_after_sample7)."<br><br><br>";
?> -->
</body>
</html>
<script>
    function hideme()
    {
      document.getElementById('mybtn').style.display ='none'; //first hide the button
      setTimeout(function(){ //using setTimeout function
      document.getElementById('mybtn').style.display ='block'; //displaying the button again after 1000ms or 1 seconds
    }
    ,1000); 
    }
</script>