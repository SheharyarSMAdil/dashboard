<?php
session_start();
/*******EDIT LINES 3-8*******/
//include("connect.php");
$con = mysqli_connect('localhost' , 'root' ,'','iaq');
     //File Name
/*******YOU DO NOT NEED TO EDIT ANYTHING BELOW THIS LINE*******/    
//create MySQL connection   
//$sql="select * from node_2";
//$result = mysqli_query($con,$sql) or die("Couldn't execute query:<br>" . mysqli_error($con). "<br>" . mysqli_errno($con));    
$file_ending = "xls";
//$device_id=$_POST['device'];
//$sql="select * from ".$device_id." ORDER BY _id DESC LIMIT 1";
//$result=mysqli_query($con,$sql);
$t = str_replace("%2F", '/', $_GET['realDPX-min']) ;
$t1 = str_replace("%2F", '/', $_GET['realDPX-max']) ;
$time=explode("/",$t);
//$week=$time[2]."-".$time[0]."-".$time[1];	
$time1=explode("/",$t1);

//$date=$time1[2]."-".$time1[0]."-".$time1[1];	
/*if($time[1]=="Jan")
	$time[1]="1";
else if($time[1]=="Feb")
	$time[1]="1";
else if($time[1]=="Mar")
	$time[1]="3";
else if($time[1]=="Apr")
	$time[1]="4";
else if($time[1]=="May")
	$time[1]="5";
else if($time[1]=="Jun")
	$time[1]="6";
else if($time[1]=="Jul")
	$time[1]="7";
else if($time[1]=="Aug")
	$time[1]="8";
else if($time[1]=="Sep")
	$time[1]="9";
else if($time[1]=="Oct")
	$time[1]="10";
else if($time[1]=="Nov")
	$time[1]="11";
else
	$time[1]="12";





if($time1[1]=="Jan")
	$time1[1]="1";
else if($time1[1]=="Feb")
	$time1[1]="1";
else if($time1[1]=="Mar")
	$time1[1]="3";
else if($time1[1]=="Apr")
	$time1[1]="4";
else if($time1[1]=="May")
	$time1[1]="5";
else if($time1[1]=="Jun")
	$time1[1]="6";
else if($time1[1]=="Jul")
	$time1[1]="7";
else if($time1[1]=="Aug")
	$time1[1]="8";
else if($time1[1]=="Sep")
	$time1[1]="9";
else if($time1[1]=="Oct")
	$time1[1]="10";
else if($time1[1]=="Nov")
	$time1[1]="11";
else
	$time1[1]="12";
*/
$device_id=$_GET["device"];

$init=$time[0]."-".$time[1]."-".$time[2]." 00:00:00";	
$final=$time1[0]."-".$time1[1]."-".$time1[2]." 23:59:00";

$filename = $device_id."_".date("d_M_y")."_IAQ_DATA";    

$sql="select * from ".$device_id." where date_time >= '".$init."' AND date_time <= '".$final."' ORDER BY _id DESC";

$result=mysqli_query($con,$sql)or die("Couldn't execute query:<br>" . mysqli_error($con). "<br>" . mysqli_errno($con)); 
 $rowcount=mysqli_num_rows($result);
 
if($rowcount>0)
{
	header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
	print "PM10(PPM)\t P2.5(PPM)\t VOC(PPB)\t CO2(PPM)\t Humidity(%)\t Temperature(C)\t Timestamp\n";
while($row=mysqli_fetch_row($result))
{
	
	print $row[1]."\t".$row[2]."\t".$row[3]."\t".$row[4]."\t".$row[5]."\t".$row[6]."\t".$row[7]."\n";
}
} 
?>
	
