<?php
$con = mysqli_connect('localhost' , 'root' ,''); 
    mysqli_select_db($con,"iaq");
$username=$_GET["client"];
	$sql= "SELECT * from login where username='$username'";
	$result=mysqli_query($con,$sql);
	$data=array();
	$num=mysqli_num_rows($result);
	if($num==1)
	{ 
$row=mysqli_fetch_array($result,MYSQLI_NUM);
		 if($row[2]=="[]")
			 $data[]="no";
		 else
			 $data[]="yes";
    
	}
	echo json_encode($data);
	
?>