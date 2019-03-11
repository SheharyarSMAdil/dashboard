<?php

//$device_id=$_POST['device'];
$con = mysqli_connect('localhost' , 'root' ,'','iaq');
$device_id =$_GET['device'];
$sql="select * from ".$device_id." ORDER BY _id DESC LIMIT 1";
$result=mysqli_query($con,$sql);

$time=explode("/",$_GET['fdate']);
$date=$time[0]."-".$time[1]."-".$time[2]." 00:00:00";	

$time1=explode("/",$_GET['ldate']);
$week=$time1[0]."-".$time1[1]."-".$time1[2]." 23:59:00";

$sql="select * from ".$device_id." where date_time<='".$week."' AND date_time>='".$date."' ORDER BY _id DESC";
$result=mysqli_query($con,$sql);

$data=array();
$rowcount=mysqli_num_rows($result);
if($rowcount>0){
$data['p']="yes";	
}
else
	$data['p']="no";
echo json_encode($data);

?>
