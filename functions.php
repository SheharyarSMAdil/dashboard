<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST'); 
$contents = json_decode(file_get_contents('php://input'), TRUE);
$device=$contents['device'];
$con = mysqli_connect('localhost' , 'root' ,'','iaq');

$sql="select * from ".$device." ORDER BY _id DESC LIMIT 1";
$data=array();
if($row=mysqli_fetch_row(mysqli_query($con, $sql))) {
	foreach($row as $val){
		array_push($data, $val);
	}
}
echo json_encode($data);
?>		