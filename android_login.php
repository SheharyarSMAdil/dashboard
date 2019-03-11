<?php
    $username= $_GET['username'];
	$password= $_GET['password'];
	$data=array();
    $con = mysqli_connect('localhost' , 'root' ,''); 
    mysqli_select_db($con,"iaq");
	$sql= "SELECT * from login where username='$username' and password='$password'";
	$result=mysqli_query($con,$sql);
	$num=mysqli_num_rows($result);
	if($num==1)
	{ 
		$data['yes']="yes";
	}
	else
	{
		$data['yes']="no";
	}
	
	echo json_encode($data);
?>				