<?php
header('Access-Control-Allow-Origin: E:\xampp\htdocs\DASHBOARD_NEXT\dashboard1.html');
header('Access-Control-Allow-Methods: GET, POST'); 
$device=$_POST['device'];
/*$array = array(1,2,3,4,5,6);
echo json_encode($array);*/
//include('connect.php');
$con = mysqli_connect('localhost' , 'root' ,'','iaq');
$sql="select * from ".$device." ORDER BY _id DESC LIMIT 1";
$result=mysqli_query($con,$sql);
$data=array();
while($row=mysqli_fetch_row($result))
{
	if(strpos($device, 'iaq') !== false)
	{
	$data['pm10'][]=$row[1];
	$data['pm2'][]=$row[2];
	$data['voc'][]=$row[3];
	$data['co2'][]=$row[4];
	$data['hum'][]=$row[5];
	$data['temp'][]=$row[6];
	}
	else if(strpos($device, 'wms') !== false)
	{
	$data['temp'][]=$row[1];
	$data['hum'][]=$row[2];
	$data['press'][]=$row[3];
	$data['ws'][]=$row[4];
	$data['wd'][]=$row[5];

	$data['pre_rain'][]=$row[6];
	$data['cur_rain'][]=$row[7];
	$data['solar'][]=$row[8];
	$data['long'][]=$row[9];
	$data['latti'][]=$row[10];
	$data['time'][]=$row[13];
	}
	else if(strpos($device, 'gwr') !== false)
	{
		$data['water_level'][]=$row[2];
		$data['gwr_lut'][]=$row[1];
	}
}
$rand=rand(30,500);
$data['rand'][]=$rand;
echo json_encode($data);
?>		