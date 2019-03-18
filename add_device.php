<?php
$con = mysqli_connect('localhost' , 'root' ,''); 
    mysqli_select_db($con,"iaq");
	$data1=array();
	$username=$_GET['client'];
	$mac=$_GET['mac'];
	$newdevice="iaq".$_GET["device"];
	$sql= "SELECT * from realtimedata where device_id='$newdevice' and mac_address= '$mac'";
	if($result=mysqli_query($con,$sql)){}
	else
		echo mysqli_error($con);
	
	echo 'test';
	$num=mysqli_num_rows($result);

	if($num==1)
	{ 
	$sql= "SELECT * from login where username='$username'";
	$result=mysqli_query($con,$sql);
	$num=mysqli_num_rows($result);
	
	if($num==1)
	{ 

		  $row=mysqli_fetch_array($result,MYSQLI_NUM);
		  $device_list=preg_replace('/[^A-Za-z0-9[],_\-]/', '', $row[2]);
		  if (strpos($device_list, ',') !== false) {
		  $devices=explode(",",$device_list);
		  $n=count($devices);
		  $i=0;
		  for($i=0;$i<$n;$i++){
			if($devices[$i]==$newdevice)
				$num=2;
		  	$data[]=$devices[$i];
		  }
		  $data[]=$newdevice;
		  $j= json_encode($data);
		 
		  }
		  
			else
			{
				if(strpos($device_list, '"') !== false){
					 $device_list=preg_replace('/[^A-Za-z0-9,_\-]/', '', $device_list);
					$data[]=$device_list;
					$data[]=$newdevice;
					$j= json_encode($data);
					if($device_list==$newdevice){
						$num=2;
					}
					
				}
				else{
					
				$j=json_encode($newdevice);
				$j="[".$j."]";
				
				}
			}
		  if($num!=2){
		  	
		$sql = "CREATE TABLE `".$newdevice."` (
  `_id` int(11) NOT NULL,
  `pm_10` float NOT NULL,
  `pm_2_5` float NOT NULL,
  `voc` float NOT NULL,
  `co2` float NOT NULL,
  `humidity` float NOT NULL,
  `temperature` float NOT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
if($result=mysqli_query($con,$sql)){}
	else
	{}
	//	echo mysqli_error($con);

$sql="update login set devices='$j' where username='$username'";
if($result=mysqli_query($con,$sql)){}
	else
	{}
		//echo mysqli_error($con);
	
	
	$data1[]="yes";
	
	}
	else{
		$data1[]="already";
	}
	}
	}
	else{
		$data1[]="no";
	}
echo json_encode($data1);


?> 