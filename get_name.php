<?php
    $username= $_GET['username'];
	$data=array();
    $con = mysqli_connect('localhost' , 'root' ,''); 
    mysqli_select_db($con,"iaq");
	$sql= "SELECT * from login where username='$username'";
	$result=mysqli_query($con,$sql);
	$num=mysqli_num_rows($result);
	if($num==1)
	{ 
		$row=mysqli_fetch_array($result,MYSQLI_NUM);
		$data['init']=$row[3];
		$data['name']=$row[4];


  $device_list=preg_replace('/[^A-Za-z0-9,_\-]/', '', $row[2]);
		  $devices=explode(",",$device_list);
		  $n=count($devices);
		  $i=0;
		  for($i=0;$i<$n;$i++){

		  	$data['device'][]=$devices[$i];
		  }
		  	}
	else
	{
		$data['init']="";
	}
	echo json_encode($data);
?>				