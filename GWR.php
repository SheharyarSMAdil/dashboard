<?php
session_start();
if (isset($_SESSION['email_id']) != true) {
    header('location:http://localhost/next_cloud3/index.php');
}
?>




<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/app.css" />
   <!--  <link type="text/css" rel="stylesheet" href="css/media.css" /> -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- css animation file --> 
    <link rel="stylesheet" type="text/css" href="css/animate.css">
	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>




    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--MDL link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>


  <script>
 
  </script>

    <style>
	.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
	border-radius:5px;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
    
}
/* Create two unequal columns that floats next to each other */
.column {
    float: left;
    padding-left:5px;
    min-height: 400px; /* Should be removed. Only for demonstration */
}


.left {
  width: 70%;
}

.right {
  width: 30%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.iaqcolumn1{
float: left;
    padding-left:5px;
    min-height: 200px;
    width: 20%;

  }
  .iaqcolumn2{
float: left;
    padding-left:5px;
    min-height: 200px;
    width: 80%;

  }
	</style>


    <style >
    .plus_icon{
        display: inline-block;  margin-bottom: 10px; margin-top: 20px; margin-right: 40px; padding: 8px; background-color: #DC4A3E; color: white;  float: right; height: 56px;  font-size: 35px;
    }

    .plus_icon:hover {
        width: 180px;
        background-color: #0072BC;
        border-radius: 5px;
        height: 50px;
        font-size: 16px;
        padding: 5px;
        transform: 100px 0px;
        transition: all .4s;
        
        }

    </style>

<script>
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /*loop through a collection of all HTML elements:*/
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /*make an HTTP request using the attribute value as the file name:*/
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /*remove the attribute, and call this function once more:*/
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }      
      xhttp.open("GET", file, true);
      xhttp.send();
      /*exit the function:*/
      return;
    }
  }
};
</script>

  </head>

  <body style="background-color: #E4E4E4">
        <div class="navbar-fixed" style="display: none;">
           <div w3-include-html="header.php"></div>
                  
                </div>

                <script>
                includeHTML();
                </script>
        
        <div id="wrapper" class="toggled">
                <!-- Sidebar -->
                <div id="sidebar-wrapper" class="" style="display: none; font-size: 12px;">
                    <ul class="sidebar-nav ">
                        <!-- <li><a href="#" id="menu-toggle" class="active"><i class="fa fa-bars fa-fw" style="font-weight: bold;"></i>MENU</a></li> -->
                         <div class="logo_gif" style="margin-top: 150px;"><!-- <img src="images/ezgif.com-video-to-gif.gif" style="width: 200px; height: 150px;" > -->
                        </div>
                       <!--  <li> <i class="fas fa-bars"> </li> -->

                        <li><a href="home.php" class="active"><i class="fas fa-home fa-lg"  ></i> Home</a></li>
                        <li><a href="profile.php"><i class="fas fa-user fa-lg"></i> Profile</a></li>
                     <!--    <li><a href="devices.html"><i class="fas fa-laptop fa-fw"></i> Manage Devices</a></li>
                         -->
                        <!-- <li><a href="reports.html"><i class="fas fa-file fa-fw"></i> Reports</a></li> -->
                        <li><a href="change-password.php"><i class="fas fa-key fa-lg"></i> Change Password</a></li>
                        <li><a href="logout.php"><i class="fas fa-sign-out-alt fa-lg"></i> Logout <?php
                        
                        ?></a></li>
                    </ul>
                </div>
        
                
                <!-- /#sidebar-wrapper -->
            
                <!-- Page Content -->
                <div id="page-content-wrapper" class="page-content" style="padding: 2px;">
                      
                      <div class="card s12" style=" background-color: #ebeff2; margin-bottom: 20px; ">
                       <div class="row" style="margin-top: 10px; margin-bottom: 0px; padding-top: 10px; ">
                         <div class="col m12" style="float: right; text-align: right; color: #0072BC;">
                           <?php echo $_SESSION['firm_name']; ?>
                         </div>
                       </div>

                        <div class="row" style="padding: 20px 0 20px 0; margin-bottom: 10px;" >    

                        
                            <div class="col m10" style=" " >
                                        
                                    <?php

                                        $email = $_SESSION['email_id'];
                                        require 'dbconfig/config.php';

                                        $sql= "SELECT * from devicedetails where email= '$email' ";

                                        $result=mysqli_query($con,$sql);

                                        $num=mysqli_num_rows($result);

                                        if($num>=1)
                                        {
											 $sql= "SELECT * from devicedetails where email= '$email' ";
												$result = mysqli_query($con,$sql);
												
                                            
											echo "<div class='container-fluid' style=' text-align: center; padding-right: 2px; '>
												<form>
													<div class='form-group'>
									         
													<select class='form-control' id='select_device' style='width:80%;text-transform: uppercase; float: left; margin-left: 5px;'>
													 <option value='SELECT YOUR DEVICE'></option>";
													while( $row = mysqli_fetch_assoc( $result ) ){
												echo "<option value='".$row['model_no']."'> ".$row['model_no']."</option>";;
												
												}
													
										
													echo "</select>
													</div>
												</form>
                        </div>
												";
										?>
                                        <!-- <button type="button" name="Add_device" class="mdl-button mdl-js-button mdl-button--fab mdl-js " onclick="showdetails1()" style="display: inline-block;  width: 140px; height: 30px; border-radius: 4px; margin-bottom: 10px;  background-color: #0072BC; color: white; font-size: 14px; "  >Show Details</button> -->
                                        

                                            <div class="alert alert-warning animated rubberBand" role="alert" style="display: none; text-align: right; " >
                                      No Device is Added Yet!, Click on Add New Device Button to Link your Device 
                                    </div>
                                        <?php
                                        }

                                        else
                                        {
                                            ?>
                                            <div class="alert alert-warning animated rubberBand" role="alert" style="display: inline-block; text-align: right; font-weight: normal; margin-left: 20px;  margin-top: 20px; " >
                                       No Device is Added Yet!, Click on Add New Device Button to Link your Device 
                                    </div>
                                        <?php
                                        }


                                    ?>
                                    </div>
                                     
                                    
                                   <!--  <div class="col m4"></div> -->
                                     <div class="col m2" style="float: right;">
                                             <button  id="plus" type="button" name="Add_device" class="plus_icon mdl-button mdl-js-button mdl-button--fab mdl-js animated rubberBand"  style=" margin: 10px 30px 10px 0px; "  data-toggle="modal" data-target="#mymodal_1" onclick="show_Panel()">+ Add New Device</button>
                                            <!--  <span style="float: right; margin-top: 40px;" >Add New Device</span> -->
                                    </div>
                            

                          
                            </div>
                            <div class="row" id="add_Device_Module" style="display: none;">
                              <form action="addDevice.php" method="post">
                              <div class="col m3" style="padding-left: 40px;">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <input class="mdl-textfield__input" style="width: 20px; display: inline;  text-transform: uppercase; " autofocus required type="text" id="sample3" name="model_no1">
                                                    <span>  </span>
                                                    <input class="mdl-textfield__input" style="width: 50px; display: inline;  text-transform: uppercase;  " autofocus required type="text" id="sample3" name="model_no2">
                                                    <span>  </span>
                                                    <input class="mdl-textfield__input" style="width: 70px; display: inline; text-transform: uppercase; " autofocus required type="text" id="sample3" name="model_no3">
                                                    <label class="mdl-textfield__label" for="sample3">Enter Model Number</label>
                                </div>
                              </div>
                              <div class="col m3" style="padding-left: 40px; ">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                    <input class="mdl-textfield__input"  type="text"  id="txt_no" name="serial_no">
                                                    <label class="mdl-textfield__label" for="txt_no">Enter Serial Number</label>
                                </div>
                              </div>
                              <div class="col m3"></div>
                              <div class="col m3" style="padding: 20px 20px 20px 20px; text-align: left; ">
                                <?php echo "<input type='hidden' value='".$_SERVER['SERVER_NAME']."' name='link' />";?>
                                                     <input type="submit" value="ADD" name="Add_device" class="btn btn-primary" id="btn_add" onclick="info()" style="display: inline-block; background-color: #189AD3; border-color: #1EBBD7; "  >
                              </div>
                            </form>
                            </div>
						</div>
						<!-- <p id="demo"></p> -->
						<div id="main_div">
							<div class="alert alert-warning" role="alert"> Select Your Device to Display Result </div>						</div>
						<!-- <div id="test" style="width:500px;height:400px; margin:20px auto;"></div> -->
                                    <div class="modal animated fadeInUp" id="mymodal" style="width: 600px; border-radius: 15px; min-height: 200px; ">
                                        
                                        <div class="modal-dialog" style="margin: 0px;">
                                            <div class="modal-content" style="padding: 0px;">
                                                <div class="modal-header" style="background-image: url(images/ezgif.com-video-to.gif); background-color: #53CCC9; padding-left: 50px; ">
                                                    <button type="button" class="close" data-dismiss="modal" style="color: white; background-color: red; border-radius: 5px; padding-left: 10px; padding-right: 10px;" >&times;</button>
                                                    <h3 style="font-family: century gothic; color: white; margin-top: 94px; margin-bottom: 10px;">Enter Your Device Details</h3>
                                                </div>
                                                <div class="modal-body" style="padding-left: 50px;">
                                                    
                                                    
                                                    <div class="modal-footer">
                                                    
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                     </div>

                                    


                                        <!-- <div class="row">
                                          
                                            <div class="col m6" id="container1" style="min-width: 400px; height: 380px; margin: 0 auto;  display: inline; max-width: 800px; min-width: 380px;height: 400px; margin: 1em auto; padding-left: 50px; ">
                                            </div>
                                            
                                            <div class="col m6" id="container2" style="height: 400px; min-width: 380px; display: inline;  max-width: 800px; min-width: 380px;height: 400px; margin: 1em auto; padding-left: 10px; padding-right: 30px;">
                                            </div>
                                            
                                            </div> -->

                 </div>

                                    

                    
                            <!-- <div class="col s12 m4">
                                <a href="devices.html">
                                        <div class="card md-card valign-wrapper">
                                                <i class="fas fa-laptop fa-fw fa-3x"></i>
                                            <h2>Manage Devices</h2>
                                        </div>
                                </a>
                            </div>
                            <div class="col s12 m4">
                                    <a href="history.html">
                                    <div class="card history-card valign-wrapper">
                                            <i class="fas fa-history fa-fw fa-3x"></i>
                                        <h2>History</h2>
                                    </div>
                                    </a>
                            </div>
                            <div class="col s12 m4">
                                    <a href="reports.html">
                                    <div class="card reports-card valign-wrapper">
                                            <i class="fas fa-file fa-fw fa-3x"></i>
                                        <h2>Reports</h2>
                                    </div>
                                    </a>
                            </div> -->
                       
                        
             
                <!-- /#page-content-wrapper -->
       </div>
	   
<script>
var x=['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
         'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
	



</script>

<script type="text/javascript">
$(document).ready( function() {
    $('#select_device').change(function() {
		var device_id = $("#select_device option:selected").val();
		if(device_id == "NULL"){
			 $('#main_div').html('<p><div class="alert alert-warning" role="alert"> Select Your Device to Display Result </div></p>');
		}
		else if(device_id.includes("GWR")==true){
			s_device_id=device_id.toLowerCase();
			device='id='+s_device_id;
        $.ajax({
            type: 'POST',
            url: 'gwr.php',
            data: device,
            dataType: 'json',
            cache: false,
            success: function(result) {
                $('#main_div').html("<div class='row' style='margin-bottom:0px;'><div class=' animated flipInX card' id='water_level' style='background-color:#0072BC; padding-top:5px; color: white; margin-top:-15px; margin-bottom:0px; text-align:center;  font-family: 'Orbitron', sans-serif; '> </div><div class=' animated flipInX card' style='background-color:white; padding:35px 25px 1px 25px; margin-top:0; margin_bottom:0; ' id='date_input'></div></div><div class='card  column left' id='chart' style='background-color:#fff; padding:20px; height: 450px; width:100%'></div>");
				$.ajax({
            type: 'POST',
            url: 'gwr_water_level.php',
            data: device,
            dataType: 'json',
            cache: false,
            success: function(result) {
				var i;
					var s;
					var date;
					var month;
					var year;
					var myDate=result.initial_date[0];
					myDate=myDate.split("-");
					var initialdate=myDate[1]+"/"+myDate[2]+"/"+myDate[0];
					
					//var initialdate = date2str(, "dd/MM/yyyy");
					
					//var initialdate=+(result.initial_date[0]+"000");
					var total_row=result.total_row[0];
					var xdata=new Array(total_row);
					j=0;
					for(i=total_row-1;i>=0;i=i-1){
					myDate=result.date[i];
					myDate=myDate.split("-");
					myTime=result.time[i];
					s=myDate[1]+"/"+myDate[2]+"/"+myDate[0]+" "+myTime;
					s=new Date(s).getTime();
					//s=+(result.timecode[i]+"000");
					xdata[i]=new Array(2);
					xdata[i][0]=s;
					xdata[i][1]=+result.read_[i];
					//var date=new Date(1167609600000);
					}
					
					var dateObj = new Date(xdata[total_row-1][0]);
					var month = dateObj.getMonth() + 1; //months from 1-12
					var day = dateObj.getDate();
					var year = dateObj.getFullYear();

					newdate1 = month + "/" + day+"/"+ year;
					newdate11=month + "/" + (day-1)+"/"+ year;
					
					dateObj = new Date(xdata[0][0]);
					month = dateObj.getMonth() + 1; //months from 1-12
					day = dateObj.getDate();
					year = dateObj.getFullYear();
					
					newdate2 = month + "/" + day+"/"+year;
					newdate22 = month + "/" + (day-1)+"/"+year
					
					dateObj = new Date(initialdate);
					month = dateObj.getMonth() + 1; //months from 1-12
					day = dateObj.getDate();
					year = dateObj.getFullYear();
					
					newdate3 = month + "/" + day+"/"+year;
					$('#water_level').html("<h3 style='margin-left:10px; font-size:40px;'>Ground Water Level</h3><h3 style='margin-left:10px; font-size:120px; font-family: Orbitron , sans-serif;'>"+result.read_[0]+" <span style='font-size:20px;'>meters</span> </h3> <p style='margin-bottom:0px;'><i>Last Updated on "+result.date[0]+" "+result.time[0]+"</i></p>");
					$('#date_input').html("<div  class='row' style='margin-bottom:0px;'> <div class='col m6 style='font-size:24px; font-weight:bold;'>Start date <span style='font-size:14px'>(mm/dd/yyyy)</span> <input type='text' id='datepicker1'> </div> <div class='col m6' style='font-size:18px'>End date <span style='font-size:14px'>(mm/dd/yyyy)</span> <input type='text' id='datepicker2'> </div> </div>");
					 
						$( "#datepicker1" ).datepicker(
						{
							beforeShow : function(){
							jQuery( this ).datepicker('option','maxDate', newdate22 );
							jQuery( this ).datepicker('option','minDate',    newdate3 );
							}
						});
						$( "#datepicker2" ).datepicker(
						{
							beforeShow : function(){
							jQuery( this ).datepicker('option','minDate',    jQuery('#datepicker1').val() );
							jQuery( this ).datepicker('option','maxDate', newdate2 );
							}
						});
						
					
				/*	var i;
					var s;
					var date;
					var month;
					var year;
					var xdata=new Array(168);
					j=0;
					for(i=167;i>=0;i=i-1){
					s=+(result.timecode[i]+"000");
					xdata[i]=new Array(2);
					xdata[i][0]=s;
					xdata[i][1]=+result.read_[i];
					//var date=new Date(1167609600000);
					}
					var dateObj = new Date(xdata[167][0]);
					var month = dateObj.getMonth() + 1; //months from 1-12
					var day = dateObj.getDate();
					var year = dateObj.getFullYear();

					newdate1 = month + "/" + day+"/"+ year;
					
					dateObj = new Date(xdata[0][0]);
					month = dateObj.getMonth() + 1; //months from 1-12
					day = dateObj.getDate();
					year = dateObj.getFullYear();
					
					newdate2 = month + "/" + day+"/"+year;*/
					
					$('#datepicker1').val(newdate1);
					$('#datepicker2').val(newdate2);
					
					$("#datepicker1").change(function(){
						var start=document.getElementById("datepicker1").value;
						var end=document.getElementById("datepicker2").value;
						var start_timestamp=new Date(start).getTime();
						var end_timestamp=new Date(end).getTime();
						alert(end_timestamp);
						 $.ajax({
							type: 'POST',
							url: 'gwr_data_by_date.php',
							data: {
								start_time:start_timestamp,
								end_time:end_timestamp,
								id:s_device_id
							},
							dataType: 'json',
							cache: false,
							success: function(result) {
								
								var i;
					var s;
					var date;
					var month;
					var year;
				//	var initialdate=+(result.initial_date[0]+"000");
					var total_row=result.total_row[0];
					var xdata=new Array(total_row);
					j=0;
					for(i=total_row-1;i>=0;i=i-1){
						myDate=result.date[i];
					myDate=myDate.split("-");
					myTime=result.time[i];
					s=myDate[1]+"/"+myDate[2]+"/"+myDate[0]+" "+myTime;
					s=new Date(s).getTime();
					//s=+(result.timecode[i]+"000");
					xdata[i]=new Array(2);
					xdata[i][0]=s;
					xdata[i][1]=+result.read_[i];
					//var date=new Date(1167609600000);
					}
					var dateObj = new Date(xdata[total_row-1][0]);
					var month = dateObj.getMonth() + 1; //months from 1-12
					var day = dateObj.getDate();
					var year = dateObj.getFullYear();

					//newdate1 = month + "/" + day+"/"+ year;
					//newdate11=month + "/" + (day-1)+"/"+ year;
					
					dateObj = new Date(xdata[0][0]);
					month = dateObj.getMonth() + 1; //months from 1-12
					day = dateObj.getDate();
					year = dateObj.getFullYear();
					
					//newdate2 = month + "/" + day+"/"+year;
					//newdate22 = month + "/" + (day-1)+"/"+year
					
					dateObj = new Date(initialdate);
					month = dateObj.getMonth() + 1; //months from 1-12
					day = dateObj.getDate();
					year = dateObj.getFullYear();
					//$('#demo').html(result.id);
						var data;

    Highcharts.chart('chart', {
      chart: {
        zoomType: 'x'
      },
      title: {
        text: 'Weekly Ground Level Water Data'
      },
      subtitle: {
        text: document.ontouchstart === undefined ?
            'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
      },
      xAxis: {
        type: 'datetime'
      },
      yAxis: {
        title: {
          text: 'Ground Water Level (in METRES)'
        }
      },
      legend: {
        enabled: false
      },
      plotOptions: {
        area: {
          fillColor: {
            linearGradient: {
              x1: 0,
              y1: 0,
              x2: 0,
              y2: 1
            },
            stops: [
              [0, Highcharts.getOptions().colors[0]],
              [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
            ]
          },
          marker: {
            radius: 2
          },
          lineWidth: 1,
          states: {
            hover: {
              lineWidth: 1
            }
          },
          threshold: null
        }
      },

      series: [{
        type: 'area',
        name: 'Water Level',
        data: xdata
      }]
    });
							},
						 });
						
					});
					$("#datepicker2").change(function(){
						var start=document.getElementById("datepicker1").value;
						var end=document.getElementById("datepicker2").value;
						var start_timestamp=new Date(start).getTime();
						var end_timestamp=new Date(end).getTime();
						alert(end_timestamp);
						 $.ajax({
							type: 'POST',
							url: 'gwr_data_by_date.php',
							data: {
								start_time:start_timestamp,
								end_time:end_timestamp,
								id:s_device_id
							},
							dataType: 'json',
							cache: false,
							success: function(result) {
								
								var i;
					var s;
					var date;
					var month;
					var year;
				//	var initialdate=+(result.initial_date[0]+"000");
					var total_row=result.total_row[0];
					var xdata=new Array(total_row);
					j=0;
					for(i=total_row-1;i>=0;i=i-1){
						myDate=result.date[i];
					myDate=myDate.split("-");
					myTime=result.time[i];
					s=myDate[1]+"/"+myDate[2]+"/"+myDate[0]+" "+myTime;
					s=new Date(s).getTime();
					//s=+(result.timecode[i]+"000");
					xdata[i]=new Array(2);
					xdata[i][0]=s;
					xdata[i][1]=+result.read_[i];
					//var date=new Date(1167609600000);
					}
					var dateObj = new Date(xdata[total_row-1][0]);
					var month = dateObj.getMonth() + 1; //months from 1-12
					var day = dateObj.getDate();
					var year = dateObj.getFullYear();

					//newdate1 = month + "/" + day+"/"+ year;
					//newdate11=month + "/" + (day-1)+"/"+ year;
					
					dateObj = new Date(xdata[0][0]);
					month = dateObj.getMonth() + 1; //months from 1-12
					day = dateObj.getDate();
					year = dateObj.getFullYear();
					
					//newdate2 = month + "/" + day+"/"+year;
					//newdate22 = month + "/" + (day-1)+"/"+year
					
					dateObj = new Date(initialdate);
					month = dateObj.getMonth() + 1; //months from 1-12
					day = dateObj.getDate();
					year = dateObj.getFullYear();
					//$('#demo').html(result.id);
						var data;

    Highcharts.chart('chart', {
      chart: {
        zoomType: 'x'
      },
      title: {
        text: 'Weekly Ground Level Water Data'
      },
      subtitle: {
        text: document.ontouchstart === undefined ?
            'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
      },
      xAxis: {
        type: 'datetime'
      },
      yAxis: {
        title: {
          text: 'Ground Water Level (in METRES)'
        }
      },
      legend: {
        enabled: false
      },
      plotOptions: {
        area: {
          fillColor: {
            linearGradient: {
              x1: 0,
              y1: 0,
              x2: 0,
              y2: 1
            },
            stops: [
              [0, Highcharts.getOptions().colors[0]],
              [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
            ]
          },
          marker: {
            radius: 2
          },
          lineWidth: 1,
          states: {
            hover: {
              lineWidth: 1
            }
          },
          threshold: null
        }
      },

      series: [{
        type: 'area',
        name: 'Water Level',
        data: xdata
      }]
    });
							},
						 });
						
					});
					
					
	var data;

    Highcharts.chart('chart', {
      chart: {
        zoomType: 'x'
      },
      title: {
        text: 'Weekly Ground Level Water Data'
      },
      subtitle: {
        text: document.ontouchstart === undefined ?
            'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
      },
      xAxis: {
        type: 'datetime'
      },
      yAxis: {
        title: {
          text: 'Ground Water Level (in METRES)'
        }
      },
      legend: {
        enabled: false
      },
      plotOptions: {
        area: {
          fillColor: {
            linearGradient: {
              x1: 0,
              y1: 0,
              x2: 0,
              y2: 1
            },
            stops: [
              [0, Highcharts.getOptions().colors[0]],
              [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
            ]
          },
          marker: {
            radius: 2
          },
          lineWidth: 1,
          states: {
            hover: {
              lineWidth: 1
            }
          },
          threshold: null
        }
      },

      series: [{
        type: 'area',
        name: 'Water Level',
        data: xdata
      }]
    });

			},
        });
			},
        });
		}

    else if(device_id.includes("node")==true){
		device="id="+device_id;
		
		$.ajax({
            type: 'POST',
            url: 'iaq.php',
            data: device,
            dataType: 'json',
            cache: false,
            success: function(result) {
      
      $('#main_div').html("<div class='row'><div id='aqi' class='iaqcolumn1' style='background-color:;'><p>Some text..</p></div><div class='iaqcolumn2' style='background-color:#bbb;'><div class='container' style='width:100%; text-align:center;'><div class='btn-group'><button type='button' id='pm2' class='btn btn-primary' style='border-radius:100%; padding:20px 0px; margin:20px; width:100px; height:100px; font-size:40px;'><b>"+result.pm2[0]+"</b></button><button type='button' id='pm10' class='btn btn-primary' style='border-radius:100%; margin:20px;padding:20px 0px; width:100px; height:100px;font-size:40px;'><b>"+result.pm10[0]+"</b></button><button type='button' id='voc' class='btn btn-primary' style='border-radius:100%;margin:20px; padding:20px 0px; width:100px; height:100px;font-size:40px;'><b>"+result.voc[0]+"</b></button></div><button type='button' id='co2' class='btn btn-primary' style='border-radius:100%; padding:20px 0px;margin:20px; width:100px; height:100px;font-size:40px;'><b>"+result.co2[0]+"</b></button><button type='button' class='btn btn-primary' style='border-radius:100%;margin:20px; padding:20px 0px; width:100px; height:100px;font-size:40px;' id='hum1'><b>"+result.hum[0]+"</b></button><button type='button' class='btn btn-primary' style='border-radius:100%;margin:20px; padding:20px 0px; width:100px; height:100px;font-size:40px;' id='temp1'><b>"+result.temp[0]+"</b></button></div><div class='container' style='width:100%; text-align:center;'><div class='btn-group'><button type='button' class='btn btn-primary' style='margin:20px; margin-top:-15px; width:100px; border-radius:10px;'>PM 2.5</button><button type='button' class='btn btn-primary' style='margin:20px;margin-top:-15px; width:100px; border-radius:10px;'>PM 10</button><button type='button' class='btn btn-primary' style='margin:20px;margin-top:-15px; width:100px; border-radius:10px;'>CO2</button></div><button type='button' class='btn btn-primary' style='margin:20px;margin-top:-15px; width:100px; border-radius:10px;'>VOC</button><button type='button' class='btn btn-primary' style='margin:20px;margin-top:-15px; width:100px; border-radius:10px;'>temp.</button><button type='button' class='btn btn-primary' style='margin:20px; margin-top:-15px;width:100px; border-radius:10px;'>hum.</button></div></div></div></div></div><div id='container' style='min-width: 310px; height: 400px; margin: 0 auto'></div>");
     	  		$.ajax({
            type: 'POST',
            url: 'iaq_calculation.php',
            data: device,
            dataType: 'json',
            cache: false,
            success: function(result) {
				
				var aqi_new;
				var code;
				aqi_new=+(result.aqi);
				if(aqi_new<=50){
					code='#248f24';
				}
				else if(51<=aqi_new<=100){
					code='#99ff66';
				}
				else if(101<=aqi_new<=200){
					code='#ff66ff';
				}
				else if(201<=aqi_new<=300){
					code='#ffb366';
				}
				else if(301<=aqi_new<=400){
					code='#ff1a1a';
				}
				else if(400<=aqi_new){
					code='#990000';
				}
				
				$('#aqi').html("<h1 style='text-align:center'>"+aqi_new+"<br/>AQI</h1>");
			$('#aqi').css({"background-color":code});
				
	$.ajax({
            type: 'POST',
            url: 'iaq_parameters.php',
            data: {
								
								id:device_id,
								para:'pm2'
				},
            dataType: 'json',
            cache: false,
            success: function(result) {
				
				var n=(result.pm2).length;
				
				var iaqdata=new Array(n);
				//iaqdata[0][0]=3;
				//alert(iaqdata[0][0]);
				for(i=0;i<n;i++){
					iaqdata[i]=new Array(2);
					iaqdata[i][0]=+result.timestamp[i];
					
					iaqdata[i][1]=+result.pm2[i];
					
					
					
					
				}
Highcharts.chart('container', {
  chart: {
    type: 'spline'
  },
  title: {
    text: 'Snow depth at Vikjafjellet, Norway'
  },
  subtitle: {
    text: 'Irregular time data in Highcharts JS'
  },
  xAxis: {
    type: 'datetime',
    dateTimeLabelFormats: { // don't display the dummy year
      month: '%e. %b',
      year: '%b'
    },
    title: {
      text: 'Date'
    }
  },
  yAxis: {
    title: {
      text: 'Snow depth (m)'
    },
    min: 0
  },
  tooltip: {
    headerFormat: '<b>{series.name}</b><br>',
    pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
  },

  plotOptions: {
    spline: {
      marker: {
        enabled: true
      }
    }
  },

  colors: ['#6CF', '#39F', '#06C', '#036', '#000'],

  // Define the data points. All series have a dummy year
  // of 1970/71 in order to be compared on the same x axis. Note
  // that in JavaScript, months start at 0 for January, 1 for February etc.
  series: [{
    name: "Winter 2015-2016",
    data: iaqdata
  }]
});
			},
		});
	 $("#pm2").click(function(){
	  $.ajax({
            type: 'POST',
            url: 'iaq_parameters.php',
            data: {
								
								id:device_id,
								para:'pm2'
				},
            dataType: 'json',
            cache: false,
            success: function(result) {
				var n=(result.pm2).length;
				
				var iaqdata=new Array(n);
				//iaqdata[0][0]=3;
				//alert(iaqdata[0][0]);
				for(i=0;i<n;i++){
					iaqdata[i]=new Array(2);
					iaqdata[i][0]=+result.timestamp[i];
					
					iaqdata[i][1]=+result.pm2[i];
					
					
					
					
				}
Highcharts.chart('container', {
  chart: {
    type: 'spline'
  },
  title: {
    text: 'Snow depth at Vikjafjellet, Norway'
  },
  subtitle: {
    text: 'Irregular time data in Highcharts JS'
  },
  xAxis: {
    type: 'datetime',
    dateTimeLabelFormats: { // don't display the dummy year
      month: '%e. %b',
      year: '%b'
    },
    title: {
      text: 'Date'
    }
  },
  yAxis: {
    title: {
      text: 'Snow depth (m)'
    },
    min: 0
  },
  tooltip: {
    headerFormat: '<b>{series.name}</b><br>',
    pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
  },

  plotOptions: {
    spline: {
      marker: {
        enabled: true
      }
    }
  },

  colors: ['#6CF', '#39F', '#06C', '#036', '#000'],

  // Define the data points. All series have a dummy year
  // of 1970/71 in order to be compared on the same x axis. Note
  // that in JavaScript, months start at 0 for January, 1 for February etc.
  series: [{
    name: "Winter 2015-2016",
    data: iaqdata
  }]
});
			},
		});
	   });
	   
	   
	   //pm10 data start from here
	   
	   
	   
	         $("#pm10").click(function(){
	  $.ajax({
            type: 'POST',
            url: 'iaq_parameters.php',
            data: {
								
								id:device_id,
								para:'pm10'
				},
            dataType: 'json',
            cache: false,
            success: function(result) {
				var n=(result.pm2).length;
				
				var iaqdata=new Array(n);
				//iaqdata[0][0]=3;
				//alert(iaqdata[0][0]);
				for(i=0;i<n;i++){
					iaqdata[i]=new Array(2);
					iaqdata[i][0]=+result.timestamp[i];
					
					iaqdata[i][1]=+result.pm2[i];
					
					
					
					
				}
Highcharts.chart('container', {
  chart: {
    type: 'spline'
  },
  title: {
    text: 'Snow depth at Vikjafjellet, Norway'
  },
  subtitle: {
    text: 'Irregular time data in Highcharts JS'
  },
  xAxis: {
    type: 'datetime',
    dateTimeLabelFormats: { // don't display the dummy year
      month: '%e. %b',
      year: '%b'
    },
    title: {
      text: 'Date'
    }
  },
  yAxis: {
    title: {
      text: 'Snow depth (m)'
    },
    min: 0
  },
  tooltip: {
    headerFormat: '<b>{series.name}</b><br>',
    pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
  },

  plotOptions: {
    spline: {
      marker: {
        enabled: true
      }
    }
  },

  colors: ['#6CF', '#39F', '#06C', '#036', '#000'],

  // Define the data points. All series have a dummy year
  // of 1970/71 in order to be compared on the same x axis. Note
  // that in JavaScript, months start at 0 for January, 1 for February etc.
  series: [{
    name: "Winter 2015-2016",
    data: iaqdata
  }]
});
			},
		});
	   });
	   		//VOC Data from here
	   	         $("#co2").click(function(){
	  $.ajax({
            type: 'POST',
            url: 'iaq_parameters.php',
            data: {
								
								id:device_id,
								para:'co2'
				},
            dataType: 'json',
            cache: false,
            success: function(result) {
				var n=(result.pm2).length;
				
				var iaqdata=new Array(n);
				//iaqdata[0][0]=3;
				//alert(iaqdata[0][0]);
				for(i=0;i<n;i++){
					iaqdata[i]=new Array(2);
					iaqdata[i][0]=+result.timestamp[i];
					
					iaqdata[i][1]=+result.pm2[i];
					
					
					
					
				}
Highcharts.chart('container', {
  chart: {
    type: 'spline'
  },
  title: {
    text: 'Snow depth at Vikjafjellet, Norway'
  },
  subtitle: {
    text: 'Irregular time data in Highcharts JS'
  },
  xAxis: {
    type: 'datetime',
    dateTimeLabelFormats: { // don't display the dummy year
      month: '%e. %b',
      year: '%b'
    },
    title: {
      text: 'Date'
    }
  },
  yAxis: {
    title: {
      text: 'Snow depth (m)'
    },
    min: 0
  },
  tooltip: {
    headerFormat: '<b>{series.name}</b><br>',
    pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
  },

  plotOptions: {
    spline: {
      marker: {
        enabled: true
      }
    }
  },

  colors: ['#6CF', '#39F', '#06C', '#036', '#000'],

  // Define the data points. All series have a dummy year
  // of 1970/71 in order to be compared on the same x axis. Note
  // that in JavaScript, months start at 0 for January, 1 for February etc.
  series: [{
    name: "Winter 2015-2016",
    data: iaqdata
  }]
});

			},
		});
	   });
	   
	    $("#voc").click(function(){
	  $.ajax({
            type: 'POST',
            url: 'iaq_parameters.php',
            data: {
								
								id:device_id,
								para:'voc'
				},
            dataType: 'json',
            cache: false,
            success: function(result) {
				var n=(result.pm2).length;
				
				var iaqdata=new Array(n);
				//iaqdata[0][0]=3;
				//alert(iaqdata[0][0]);
				for(i=0;i<n;i++){
					iaqdata[i]=new Array(2);
					iaqdata[i][0]=+result.timestamp[i];
					
					iaqdata[i][1]=+result.pm2[i];
					
					
					
					
				}
Highcharts.chart('container', {
  chart: {
    type: 'spline'
  },
  title: {
    text: 'Snow depth at Vikjafjellet, Norway'
  },
  subtitle: {
    text: 'Irregular time data in Highcharts JS'
  },
  xAxis: {
    type: 'datetime',
    dateTimeLabelFormats: { // don't display the dummy year
      month: '%e. %b',
      year: '%b'
    },
    title: {
      text: 'Date'
    }
  },
  yAxis: {
    title: {
      text: 'Snow depth (m)'
    },
    min: 0
  },
  tooltip: {
    headerFormat: '<b>{series.name}</b><br>',
    pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
  },

  plotOptions: {
    spline: {
      marker: {
        enabled: true
      }
    }
  },

  colors: ['#6CF', '#39F', '#06C', '#036', '#000'],

  // Define the data points. All series have a dummy year
  // of 1970/71 in order to be compared on the same x axis. Note
  // that in JavaScript, months start at 0 for January, 1 for February etc.
  series: [{
    name: "Winter 2015-2016",
    data: iaqdata
  }]
});

			},
		});
	   });
	   
	    $("#temp1").click(function(){
	  $.ajax({
            type: 'POST',
            url: 'iaq_parameters.php',
            data: {
								
								id:device_id,
								para:'temp'
				},
            dataType: 'json',
            cache: false,
            success: function(result) {
				var n=(result.pm2).length;
				
				var iaqdata=new Array(n);
				//iaqdata[0][0]=3;
				//alert(iaqdata[0][0]);
				for(i=0;i<n;i++){
					iaqdata[i]=new Array(2);
					iaqdata[i][0]=+result.timestamp[i];
					
					iaqdata[i][1]=+result.pm2[i];
					
					
					
					
				}
Highcharts.chart('container', {
  chart: {
    type: 'spline'
  },
  title: {
    text: 'Snow depth at Vikjafjellet, Norway'
  },
  subtitle: {
    text: 'Irregular time data in Highcharts JS'
  },
  xAxis: {
    type: 'datetime',
    dateTimeLabelFormats: { // don't display the dummy year
      month: '%e. %b',
      year: '%b'
    },
    title: {
      text: 'Date'
    }
  },
  yAxis: {
    title: {
      text: 'Snow depth (m)'
    },
    min: 0
  },
  tooltip: {
    headerFormat: '<b>{series.name}</b><br>',
    pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
  },

  plotOptions: {
    spline: {
      marker: {
        enabled: true
      }
    }
  },

  colors: ['#6CF', '#39F', '#06C', '#036', '#000'],

  // Define the data points. All series have a dummy year
  // of 1970/71 in order to be compared on the same x axis. Note
  // that in JavaScript, months start at 0 for January, 1 for February etc.
  series: [{
    name: "Winter 2015-2016",
    data: iaqdata
  }]
});

			},
		});
	   });
	    $("#hum1").click(function(){
	  $.ajax({
            type: 'POST',
            url: 'iaq_parameters.php',
            data: {
								
								id:device_id,
								para:'hum'
				},
            dataType: 'json',
            cache: false,
            success: function(result) {
				var n=(result.pm2).length;
				
				var iaqdata=new Array(n);
				//iaqdata[0][0]=3;
				//alert(iaqdata[0][0]);
				for(i=0;i<n;i++){
					iaqdata[i]=new Array(2);
					iaqdata[i][0]=+result.timestamp[i];
					
					iaqdata[i][1]=+result.pm2[i];
					
					
					
					
				}
Highcharts.chart('container', {
  chart: {
    type: 'spline'
  },
  title: {
    text: 'Snow depth at Vikjafjellet, Norway'
  },
  subtitle: {
    text: 'Irregular time data in Highcharts JS'
  },
  xAxis: {
    type: 'datetime',
    dateTimeLabelFormats: { // don't display the dummy year
      month: '%e. %b',
      year: '%b'
    },
    title: {
      text: 'Date'
    }
  },
  yAxis: {
    title: {
      text: 'Snow depth (m)'
    },
    min: 0
  },
  tooltip: {
    headerFormat: '<b>{series.name}</b><br>',
    pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
  },

  plotOptions: {
    spline: {
      marker: {
        enabled: true
      }
    }
  },

  colors: ['#6CF', '#39F', '#06C', '#036', '#000'],

  // Define the data points. All series have a dummy year
  // of 1970/71 in order to be compared on the same x axis. Note
  // that in JavaScript, months start at 0 for January, 1 for February etc.
  series: [{
    name: "Winter 2015-2016",
    data: iaqdata
  }]
});

			},
		});
	   });
		//VOC Data from here
	   	      /*  $("#voc").click(function(){
	  $.ajax({
            type: 'POST',
            url: 'iaq_parameters.php',
            data: {
								
								id:device_id,
								para:'voc'
				},
            dataType: 'json',
            cache: false,
            success: function(result) {
				var n=(result.pm2).length;
				
				var iaqdata=new Array(n);
				//iaqdata[0][0]=3;
				//alert(iaqdata[0][0]);
				for(i=0;i<n;i++){
					iaqdata[i]=new Array(2);
					iaqdata[i][0]=+result.timestamp[i];
					
					iaqdata[i][1]=+result.pm2[i];
					
					
					
					
				}
Highcharts.chart('container', {
  chart: {
    type: 'spline'
  },
  title: {
    text: 'Snow depth at Vikjafjellet, Norway'
  },
  subtitle: {
    text: 'Irregular time data in Highcharts JS'
  },
  xAxis: {
    type: 'datetime',
    dateTimeLabelFormats: { // don't display the dummy year
      month: '%e. %b',
      year: '%b'
    },
    title: {
      text: 'Date'
    }
  },
  yAxis: {
    title: {
      text: 'Snow depth (m)'
    },
    min: 0
  },
  tooltip: {
    headerFormat: '<b>{series.name}</b><br>',
    pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
  },

  plotOptions: {
    spline: {
      marker: {
        enabled: true
      }
    }
  },

  colors: ['#6CF', '#39F', '#06C', '#036', '#000'],

  // Define the data points. All series have a dummy year
  // of 1970/71 in order to be compared on the same x axis. Note
  // that in JavaScript, months start at 0 for January, 1 for February etc.
  series: [{
    name: "Winter 2015-2016",
    data: iaqdata
  }]
});
			

		//VOC Data from here
	   	         $("#temp1").click(function(){
	  $.ajax({
            type: 'POST',
            url: 'iaq_parameters.php',
            data: {
								
								id:device_id,
								para:'temp'
				},
            dataType: 'json',
            cache: false,
            success: function(result) {
				var n=(result.pm2).length;
				
				var iaqdata=new Array(n);
				//iaqdata[0][0]=3;
				//alert(iaqdata[0][0]);
				for(i=0;i<n;i++){
					iaqdata[i]=new Array(2);
					iaqdata[i][0]=+result.timestamp[i];
					
					iaqdata[i][1]=+result.pm2[i];
					
					
					
					
				}
Highcharts.chart('container', {
  chart: {
    type: 'spline'
  },
  title: {
    text: 'Snow depth at Vikjafjellet, Norway'
  },
  subtitle: {
    text: 'Irregular time data in Highcharts JS'
  },
  xAxis: {
    type: 'datetime',
    dateTimeLabelFormats: { // don't display the dummy year
      month: '%e. %b',
      year: '%b'
    },
    title: {
      text: 'Date'
    }
  },
  yAxis: {
    title: {
      text: 'Snow depth (m)'
    },
    min: 0
  },
  tooltip: {
    headerFormat: '<b>{series.name}</b><br>',
    pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
  },

  plotOptions: {
    spline: {
      marker: {
        enabled: true
      }
    }
  },

  colors: ['#6CF', '#39F', '#06C', '#036', '#000'],

  // Define the data points. All series have a dummy year
  // of 1970/71 in order to be compared on the same x axis. Note
  // that in JavaScript, months start at 0 for January, 1 for February etc.
  series: [{
    name: "Winter 2015-2016",
    data: iaqdata
  }]
});
			},
		});
	   });
	   
			
	   		//VOC Data from here
	   	         $("#hum1").click(function(){
	  $.ajax({
            type: 'POST',
            url: 'iaq_parameters.php',
            data: {
								
								id:device_id,
								para:'hum'
				},
            dataType: 'json',
            cache: false,
            success: function(result) {
				var n=(result.pm2).length;
				
				var iaqdata=new Array(n);
				//iaqdata[0][0]=3;
				//alert(iaqdata[0][0]);
				for(i=0;i<n;i++){
					iaqdata[i]=new Array(2);
					iaqdata[i][0]=+result.timestamp[i];
					
					iaqdata[i][1]=+result.pm2[i];
					
					
					
					
				}
Highcharts.chart('container', {
  chart: {
    type: 'spline'
  },
  title: {
    text: 'Snow depth at Vikjafjellet, Norway'
  },
  subtitle: {
    text: 'Irregular time data in Highcharts JS'
  },
  xAxis: {
    type: 'datetime',
    dateTimeLabelFormats: { // don't display the dummy year
      month: '%e. %b',
      year: '%b'
    },
    title: {
      text: 'Date'
    }
  },
  yAxis: {
    title: {
      text: 'Snow depth (m)'
    },
    min: 0
  },
  tooltip: {
    headerFormat: '<b>{series.name}</b><br>',
    pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
  },

  plotOptions: {
    spline: {
      marker: {
        enabled: true
      }
    }
  },

  colors: ['#6CF', '#39F', '#06C', '#036', '#000'],

  // Define the data points. All series have a dummy year
  // of 1970/71 in order to be compared on the same x axis. Note
  // that in JavaScript, months start at 0 for January, 1 for February etc.
  series: [{
    name: "Winter 2015-2016",
    data: iaqdata
  }]
});
			},
		});
	   });
			},
		});
			});*/
			},
		});
			},
		});

    }
    });
});
</script>

    

    
            
<script>
    function addDevice()
    {
  var x=  document.getElementById('addDetails');
  x.style.display='block';
    }
</script>
        
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<script type="text/javascript">
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<script type="text/javascript">
    
    function showdetails()
    {
        var sd= document.getElementById('detailsCard');
        sd.style.display='block';
    }


    function show_Panel()
    {
      
       var sp= document.getElementById('add_Device_Module');

        if(sp.style.display === 'none')
        {
           
            sp.style.display='block';
        }
      else
          {
          
             sp.style.display='none';
          }

    }
    
  
</script>

<script type="text/javascript">
    
    function info()
    {
        var sd= document.getElementById('Selection_info');
        sd.style.display='block';
    }
</script>

  </body>
</html>