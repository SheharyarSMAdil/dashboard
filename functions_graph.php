<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST'); 
$con = mysqli_connect('localhost' , 'root' ,'','iaq');
$device_id=$_GET['device'];
$para=$_GET['para'];
//$name=$_GET['name'];
//$time=$_POST['time'];
$sql="select * from ".$device_id." ORDER BY _id DESC LIMIT 1";
$result=mysqli_query($con,$sql);
$data=array();
while($row=mysqli_fetch_row($result))
{
	$date=$row[7];
}
//$week=date('Y-m-d', strtotime("-".$time, strtotime($date)));

$sql="select * from ".$device_id."" ;
//where date<='".$date."' AND date>='".$week."' ORDER BY _id";

if($result=mysqli_query($con,$sql)){
	
}else{
	echo mysqli_error($con);
}
$i=0;
if($para=='pm2'){
	$i=2;
}
else if($para=='pm10'){
	$i=1;
}
else if($para=='voc'){
	$i=3;
}
else if($para=='co2'){
	$i=4;
}
else if($para=='hum'){
	$i=5;
}
else {
	$i=6;
}
while($row=mysqli_fetch_row($result)){
	$data['pm2'][]=$row[$i];
	$date=strtotime($row[7]);
	$date=$date."000";
	$data['timestamp'][]=$date;
}
	$sql= "SELECT * from realtimedata where device_id='$device_id'";
	$result=mysqli_query($con,$sql);
	$num=mysqli_num_rows($result);
	if($num==1)
	{ 
$row=mysqli_fetch_array($result,MYSQLI_NUM);
		$data['n']=$row[1];
	}
echo json_encode($data);
?>