<?php
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 --><meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="-1">
	<title>AirGenius | IAQ DASHBOARD</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/animate.css" rel="stylesheet"/>
    <!--Light Bootstrap Table core CSS -->
    <link href="assets/css/NS_style.css" rel="stylesheet"/>
    <!-- datepicker style -->
   <!--  <link href="assets/css/bootstrap-datepicker.css" rel="stylesheet"/>

    <link href="assets/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
 -->


    <link rel="stylesheet" type="text/css" href="assets/css/date_picker.css">

    <script type="text/javascript" src="assets/js/date_picker.js"></script>
    

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <script >
        $(function(){
            $.fn.datepicker.defaults.format = "yyyy-mm-dd";
            $('.datepicker').datepicker({
               startDate: '-3d'
            });
        });

    </script>
    <!--CSS for Demo Purpose, don't include it in your project-->
   <!--  <link href="assets/css/demo.css" rel="stylesheet" />
 -->

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- For progress circle -->
    <!-- <link href="assets/css/pie-style.css" rel="stylesheet" /> -->
        
   <!-- -->

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="assets/css/circle_responsive.css" rel="stylesheet" />
    <script src="js/pie-chart.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://github.com/moment/momentjs.com"></script>
     <script src="https://github.com/trentsp/mdl-datepicker.git"  type="text/javascript"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/rome/2.1.22/rome.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
<!-- <script src="material-datetime-picker.js" charset="utf-8"></script> -->

    <!-- style to flip the circles -->

      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

 <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>


    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

    <style type="text/css">
    ::-webkit-scrollbar {
    width: 0.4em;
    height: 1em;
    
}
::-webkit-scrollbar-button {
    background:  #888;
    height: 0px;
}
::-webkit-scrollbar-track-piece {
    background: #eee;
   
}
::-webkit-scrollbar-thumb {
        background-image: linear-gradient(141deg, #0072bc 0%, #1fc8db 51%, #2cb5e8 75%);
     border-radius:10px;

    
}​
    body
    {
        /* overflow-y: hidden;
          overflow-y: hidden;*/
    }
    .row .Add-device .input-field :onclick
    {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }
    .row .Add-device form .mac input
    {
        width: 38px; border-width: 0; background-color: #eee; text-align: center; padding: 5px; border-radius: 15%;
        text-transform: lowercase;
    }
    form button:hover
    {
        box-shadow:  0 4px 8px rgba(102, 175, 233, 0.4);
    }
    
    .row .Add-device 
    {
        height: 150px;
    }
    .row .row1
    {
        border-radius:0 15px 0 0;
    }
     .row .col2 #backup
    {
        border-radius:0 0 15px 0;
    }
    .row2 .highcharts-block{

     padding-right: 2px;
    }
    .row2 .highcharts-block #container
    {
        border-radius: 15px 0 0 15px;
    }
    .row2 .col2
    {
        padding-left: 2px;
    }
     .row .col2 #backup button
    }
    {
        border-radius: 5px 5px 15px 5px;
    }

    @media (max-width: 991px) {
    .row .Add-device {
        min-height: 300px;
    }
    .row .Add-device h4{
    padding-top: 22px; 
    }
    .table-responsive {
        width: 100%;
        margin-bottom: 15px;
        overflow-x: scroll;
        overflow-y: hidden;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        -webkit-overflow-scrolling: touch;

    }
    .circle
    {
        width: 100px;
        height: 100px;

    }
     .row .row1
    {
        border-radius:15px 15px 0 0;
    }
     .row .col2 #backup
    {
        border-radius:0 0 15px 15px;
    }
    .row2 .highcharts-block{
        
     padding-right: 15px;
    }
   .row2 .highcharts-block #container
    {
        border-radius: 15px;
    }
    /*.row1 .row
    {
        margin-left: 20px;
    }*/
    .row2 .col2
    {
        padding-left: 20px;
    }
    .row .col2 #backup button
    {
        border-radius: 5px 5px 15px 15px;
    }
}
    </style>
    <!--  <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#3bb479',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
            $('#demo-pie-3').pieChart({
                barColor: '#ee0000',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
            $('#demo-pie-4').pieChart({
                barColor: '#ff6800',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-5').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
            $('#demo-pie-6').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script> -->
    <script src="js/skycons.js"></script>
    <style>
        
    </style>
</head>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
     $("#ui-datepicker-div").css("margin-top","85vh");
     document.querySelector('style').textContent +=
    " @media  (max-width: 991px) { #ui-datepicker-div{margin-top:250vh;}}"
  } );
       $( function() {
    $( "#datepicker1" ).datepicker();
     $("#ui-datepicker-div").css("margin-top","75vh");
  } );
  </script>
<body onload="entry()">

<div class="wrapper">
    <div class="sidebar" data-color="azure" style="" data-image="assets/img/sidebar-4.jpg">

   

    	<div class="sidebar-wrapper">
            <div class="logo" style="text-align: center;">
                <!-- <a href="http://www.creative-tim.com" class="simple-text"> -->
                    <!-- <img src="assets/img/NEW_NEXTSENSE_white2.png" alt="" style="width: 240px; height: 65px;"> -->
                    <h2>Air <b><span style="background-color: #0072bc; border-radius: 20px; padding: 5px;">Genius<b></span></h2>
                </a>
            </div>

            <ul class="nav">
                <div>
                 <li class="">

                    <div class="userName" style="padding: 20px 0 35px 0; text-align: center; ">
                   <span style="margin-left: 0px; mix-blend-mode: overlay;">Hello </span ><span id="init"></span> <span id="u_name"></span>
                    </div>
                </li>
                </div>
                

                <li class="active">
                    <hr style="width: 100%; margin: auto; display: block; border-color: #3CB8D9; border-width: 1px; border-radius: 3px; margin-bottom: 20px;">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>AIrGenius Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="pe-7s-user" style=""></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li>
                    <a href="ManageDevice.html">
                        <i class="pe-7s-tools"></i>
                        <p>Manage Device</p>
                    </a>
                </li>
               <!--  <li>
                    <a href="BackupData.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Backup Data</p>
                    </a>
                </li> -->
                <li class="disabled">
                    <a  href="#" >
                        <i class="pe-7s-science"></i>
                        <p>Reports</p>
                    </a>
                </li>
                 <li class="">
                    <a  href="logout.html" >
                        <i class="pe-7s-power"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel" >
         <nav class="navbar navbar-default navbar-fixed" style="">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                    

                    <div class="animated bounceInRight col-md-4"  style="text-align: right; padding-right: 0px; margin-top: 20px; float: right;">
                    <select id="device_list"  class="animated bounceInRight" onchange="set(this.value)" style="font-size: 18px;  margin-top: -35px; padding:5px 20px; background-color:#0072bc; border-radius:2px 0 0 2px; color: white; outline: none;">Device Name: AIR-12908</select>
                    <input type="hidden" value="" id="device_para" />
                </div>
                 <div class="collapse navbar-collapse">
                
                </div> 
            </div>
        </nav>
        
        <div id="device-page">
            

        </div>

       

<script>

    var i=Math.floor(Math.random() * 2);
    alert(i);
    if(i==0)
    {
 $('#device-page').load('IAQ.php');
}
else if(i==1)
{
    $('#device-page').load('GWR.php');
}
$document.ready(function()
{
    alert(1);
   
});


if(localStorage.getItem("nextsense_user")== null){
	location.replace("index.html");
}
</script>
<input id="alwaysFetch" type="hidden" />
<script>
   $(window).bind("pageshow", function(event) {
    if (event.originalEvent.persisted) {
        window.location.reload(); 
    }
});
</script>
    <script>
        var d = new Date();
        var month = d.getMonth()+1;
        var day = d.getDate();
        var output = d.getFullYear() +'/'+
        (month<10 ? '0' : '') + month +'/'+(day<10 ? '0' : '') + day;
        document.getElementById("datepicker1").value=output;
        var myDate = new Date();
        var d1 = new Date(myDate.getTime() - (60*60*24*7*1000));
        var month1 = d1.getMonth()+1;
        var day1 = d1.getDate();
        var output1 = d1.getFullYear()+'/'+(month1<10 ? '0' : '') + month1 +'/'+(day1<10 ? '0' : '') + day1;
        document.getElementById("datepicker").value=output1;
        var device=document.getElementById("device").value;
        
        </script>

        <script>

    $("input").change(function(){
	
        var fdate=document.getElementById("datepicker").value;
                var ldate=document.getElementById("datepicker1").value;
                var str=$("#device_list option:selected").val();
              
        $.ajax({

            type: 'GET',
            url: "print_backup.php",
            data: {
                                
                                ldate:ldate,
                                fdate:fdate,
                                device:str
                                
                },
            dataType: 'json',
            cache: false,
            success: function(result) {
             
                if(result.p=="yes")
                    $(':input[type="submit"]').prop('disabled', false);
                else
                    $(':input[type="submit"]').prop('disabled', true);
            }
        });
    
    });

</script>

<script>

var j=0;
function set(x){
document.getElementById("device_para").value=x+",pm2";
document.getElementById("device_form").value=x;
	$(document).ready(function(){
 var fdate=document.getElementById("datepicker").value;
                var ldate=document.getElementById("datepicker1").value;
                
              
        $.ajax({

            type: 'GET',
            url: "print_backup.php",
            data: {
                                
                                ldate:ldate,
                                fdate:fdate,
                                device:x
                                
                },
            dataType: 'json',
            cache: false,
            success: function(result) {
             
                if(result.p=="yes")
                    $(':input[type="submit"]').prop('disabled', false);
                else
                    $(':input[type="submit"]').prop('disabled', true);
            }
        });
    
    });
entry();
}

     $("#date").mdldatepicker();
function entry()


    {
	$(document).ready(function(){
 var fdate=document.getElementById("datepicker").value;
                var ldate=document.getElementById("datepicker1").value;
                var str=$("#device_list option:selected").val();
              
        $.ajax({

            type: 'GET',
            url: "print_backup.php",
            data: {
                                
                                ldate:ldate,
                                fdate:fdate,
                                device:str
                                
                },
            dataType: 'json',
            cache: false,
            success: function(result) {
             
                if(result.p=="yes")
                    $(':input[type="submit"]').prop('disabled', false);
                else
                    $(':input[type="submit"]').prop('disabled', true);
            }
        });
    
    });
    $("#cir1").css("background-color","#B6D161");
    $("#cir").css("background-color","#627AAD");
    $("#cir3").css("background-color","#77BDF1");
    $("#cir4").css("background-color","#E46F61");

         $("#cir1").css("background-color","#555555");
    $("#cir1").css("transition","2s");
    $("#demo-pie-1").css("border-width","10");
    $("#demo-pie-1").css("border-color","#0072bc");
        var i=0;
        var x=localStorage.getItem("nextsense_user") ;
		var z=x;
		 $.ajax({

            type: 'GET',
            url: "device.php",
            data: {

								client:x
                                
                },
            dataType: 'json',
            cache: false,
            success: function(result) {
				if(result=="no"){
				
				 location.replace("ManageDevice.html");
				 }
				
				 
				
				 
				 
			}
			
			});
        $.ajax({ 
    type: 'GET', 
    url: 'get_name.php', 
    data: { username: x
    }, 
    dataType: 'json',
    success: function (data) { 
      
    $("#init").html(data.init);
    $("#u_name").html(data.name);
$('#device_list')
    .empty();
    // alert(x);
    x=document.getElementById("device_para").value;

    var y="";
    if(x == ""){
         
    for(i=0;i<(data.device).length;i++){

        if(i==0){

               $('#device_para').val(data.device[i]+",pm2");
               $('#device_form').val(data.device[i]);
             
            
            }

             
        $('#device_list').append('<option value='+data.device[i]+'>'+data.device[i]+'</option>');

    }
}
else{
     y=x.split(",");
  x=y[0];

  for(i=0;i<(data.device).length;i++){
        

        $('#device_list').append('<option value='+data.device[i]+'>'+data.device[i]+'</option>');

            if(x==data.device[i]){

               $('#device_para').val(x+",pm2");
           
            $('#device_list').val(x);
            }
    }

}
   

         

        //$('#example').append('<option value="foo" selected="selected">Foo</option>');
    }
});

        var ex="";
    $(document).ready(function(){
ex=document.getElementById("device_para").value;
var device=ex.split(",");


            $.ajax({ 
    type: 'POST', 
    url: 'functions.php', 
    data: { device: device[0] }, 
    dataType: 'json',
    success: function (data) { 
        $("#pm10").html(data.pm10);
        $("#pm2").html(data.pm2);
        $("#voc").html(data.voc);
        $("#co2").html(data.co2);
        $("#temp").html(data.temp);
        $("#hum").html(data.hum +"%");
        $("#iaq").html(data.rand);
var s=parseInt(data.rand);
// alert(s);
 $("#span_rec1").css("color","#A2494E");
  $("#span_rec2").css("color","#A2494E");
   $("#span_rec3").css("color","#A2494E");
    $("#span_rec4").css("color","#A2494E");
    $("#recommend1").attr("src","assets/img/cyle_deactive3.png");
    $("#recommend2").attr("src","assets/img/window_deactive3.png");
    $("#recommend3").attr("src","assets/img/mask_deactive3.png");
     $("#recommend4").attr("src","assets/img/purifier_deactive3.png");

if(0<s&& s<50){
        $("#iaq_img").attr("src","assets/img/1.png");
         
    }
    else if(51<s&& s<100){
        $("#iaq_img").attr("src","assets/img/2.png");
        
    }
    else if(101<s&& s<200){
        $("#iaq_img").attr("src","assets/img/3.png");
        $("#recommend1").attr("src","assets/img/cyle_active3.png");
         $("#span_rec1").css("color","white");
    }
    else if(200<s&& s<300){
        $("#iaq_img").attr("src","assets/img/4.png");
        
        $("#recommend2").attr("src","assets/img/window_active3.png");
        $("#span_rec2").css("color","white");
    }
    else if(300<s&& s<400){
        $("#iaq_img").attr("src","assets/img/5.png");
         $("#recommend3").attr("src","assets/img/mask_active3.png");
         $("#span_rec3").css("color","white");
    }
    else{

        $("#iaq_img").attr("src","assets/img/6.png");
         $("#recommend4").attr("src","assets/img/purifier_active3.png");
         $("#span_rec4").css("color","white");
    }
    }
});
});
    // alert(3);

    $(document).ready(function(){

    var ex=document.getElementById("device_para").value;
    var device=ex.split(",");
   

    $.ajax({

            type: 'GET',
            url: 'functions_graph.php', 
    data: { device: device[0],
    para:'pm2'

}, 
    dataType: 'json',
            cache: false,
            success: function(result) {

                var n=(result.pm2).length;
                
                var iaqdata=new Array(n);
                //iaqdata[0][0]=3;
                //alert(iaqdata[0][0]);
                var thre=new Array(2);
                //iaqdata[0][0]=3;
                //alert(iaqdata[0][0]);
                
                var outdoor=new Array(2);
                //iaqdata[0][0]=3;
                //alert(iaqdata[0][0]);
                var j=0;
                for(i=0;i<n;i++){
                    iaqdata[i]=new Array(2);
                    iaqdata[i][0]=+result.timestamp[i];
                    
                    iaqdata[i][1]=+result.pm2[i];
                    
                  /*  if(i==0 || i == n-1){
                        thre[j]=new Array(2);
                        outdoor[j]=new Array(2);
                    thre[j][0]=+result.timestamp[i];
                    
                    thre[j][1]=+res[1];
                        outdoor[j][0]=+result.timestamp[i];
                    
                    outdoor[j][1]=+res[2];
                    j++;*/
                        
                    }
                    
                    
              
                
                var y_axis;
        var unit;
		var head;
		
		y_axis= "PM2.5 (μg/m³)";
		 head=result.n+" (PM2.5)";
              /*  if(res[0]=='pm2'){
        y_axis= "PM2.5 (μg/m³)";
        unit="μg/m³";
          head=device_name+" ("+res[0]+".5)";
      }
      else if(res[0]=='pm10'){
        y_axis= "PM10 (μg/m³)";
        unit="μg/m³";
          head=device_name+" ("+res[0]+")";
      } 
      else if(res[0]=='co2'){
        y_axis= "CO2 (PPM)";
        unit="ppm";
          head=device_name+" ("+res[0]+")";
      }

      else if(res[0]=='voc'){
        y_axis="VOC (PPB)";
        unit="ppb";
           head=device_name+" ("+res[0]+")";
      }
      else if(res[0]=='temp'){
        y_axis= "Temp. (Celcius)";
        unit="celcius";
           head=device_name+" ("+res[0]+")";
      }
      else{
        y_axis= "Humidity (%)";
        unit="%";
           head=device_name+" ("+res[0]+")";
      }*/
/*
                var threshold="";
                var color="";
                if(unit=="%" || unit=="celcius")
                {
                    threshold=".";
                    color="#ffffff";
                }
                else{
                threshold="Threshold ("+thre[0][1]+" "+unit+" as per the recommendation of CPCB)"
                    color="#DC143C";
                }*/
                    
Highcharts.chart('container', {
  chart: {
    type: 'spline',
    borderColor: '#fff',
        borderRadius: 0,
        borderWidth: 2,
        type: 'line'
  },
  title: {
    text: head
  },subtitle:{
    text:device[0]   
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
      text: y_axis
    },
    min: 0
  },
  tooltip: {
    headerFormat: '<b>{series.name}</b><br>',
    pointFormat: '{point.x:%e. %b}: {point.y:.2f} '
  },

  plotOptions: {
    spline: {
      marker: {
        enabled: true
      }
    }
  },

  colors: ['#6CF', '#06C',  '#036', '#000'],

  // Define the data points. All series have a dummy year
  // of 1970/71 in order to be compared on the same x axis. Note
  // that in JavaScript, months start at 0 for January, 1 for February etc.
  series: [{
    name: "Realtime Data",
    data: iaqdata
  }
           
  
  ]
});
            }
            
            });
});

if(j==0){
j++;
entry();
}

    }
</script>	
</script>
<script>



function setValue(para,current)
{
    // $("#"+current).click(function(){
    //     alert(current);
   

    // });
     $('body').animate({scrollTop: '+=280'});
   // alert(current);
    $("#"+current).css("background-color","#555555");
    $("#"+current).css("transition","2s");
    $("#"+para.id).css("border-width","10");
    $("#"+para.id).css("border-color","#0072bc");
    

     // $("#"+current).css("padding","35px");
    // $("#"+current).css("color","#000");


    if(current=="cir1"& para.id=="demo-pie-1")
    {
       
    // $("#"+cir1).css("background-color","#B6D161");
    // ---------------------------------------------------reset bg color of other selected circle------------------
    $("#cir2").css("background-color","#627AAD");
    $("#cir3").css("background-color","#77BDF1");
    $("#cir4").css("background-color","#E46F61");
    // ---------------------------------------------------reset border of other selected circle------------------
    $("#demo-pie-2").css("border-width","3");
    $("#demo-pie-2").css("border-color","grey");

    $("#demo-pie-3").css("border-width","3");
    $("#demo-pie-3").css("border-color","grey");

    $("#demo-pie-4").css("border-width","3");
    $("#demo-pie-4").css("border-color","grey");


    }   
    else  if(current=="cir2")
    {
       
    $("#cir1").css("background-color","#B6D161");
    // $("#"+cir2).css("background-color","#627AAD");
    $("#cir3").css("background-color","#77BDF1");
    $("#cir4").css("background-color","#E46F61");

     // ---------------------------------------------------reset border of other selected circle------------------
    $("#demo-pie-1").css("border-width","3");
    $("#demo-pie-1").css("border-color","grey");

    $("#demo-pie-3").css("border-width","3");
    $("#demo-pie-3").css("border-color","grey");

    $("#demo-pie-4").css("border-width","3");
    $("#demo-pie-4").css("border-color","grey");


    }  
    else  if(current=="cir3")
    {
        
    $("#cir1").css("background-color","#B6D161");
    $("#cir2").css("background-color","#627AAD");
    // $("#"+cir3).css("background-color","#77BDF1");
    $("#cir4").css("background-color","#E46F61");
     // ---------------------------------------------------reset border of other selected circle------------------
    $("#demo-pie-2").css("border-width","3");
    $("#demo-pie-2").css("border-color","grey");

    $("#demo-pie-1").css("border-width","3");
    $("#demo-pie-1").css("border-color","grey");

    $("#demo-pie-4").css("border-width","3");
    $("#demo-pie-4").css("border-color","grey");

    }   else  if(current=="cir4")
    {
        
    $("#cir1").css("background-color","#B6D161");
    $("#cir2").css("background-color","#627AAD");
    $("#cir3").css("background-color","#77BDF1");
    // $("#"+cir4).css("background-color","#E46F61");
     // ---------------------------------------------------reset border of other selected circle------------------
    $("#demo-pie-2").css("border-width","3");
    $("#demo-pie-2").css("border-color","grey");

    $("#demo-pie-3").css("border-width","3");
    $("#demo-pie-3").css("border-color","grey");

    $("#demo-pie-1").css("border-width","3");
    $("#demo-pie-1").css("border-color","grey");
    }  
   
   var ex="";
   ex=document.getElementById("device_para").value;
var device=ex.split(",");

$(document).ready(function(){
    $.ajax({

            type: 'GET',
            url: 'functions_graph.php', 
    data: { device: device[0],
    para:para.value

}, 
    dataType: 'json',
            cache: false,
            success: function(result) {

                var n=(result.pm2).length;
                
                var iaqdata=new Array(n);
                //iaqdata[0][0]=3;
                //alert(iaqdata[0][0]);
                var thre=new Array(2);
                //iaqdata[0][0]=3;
                //alert(iaqdata[0][0]);
                
                var outdoor=new Array(2);
                //iaqdata[0][0]=3;
                //alert(iaqdata[0][0]);
                var j=0;
                for(i=0;i<n;i++){
                    iaqdata[i]=new Array(2);
                    iaqdata[i][0]=+result.timestamp[i];
                    
                    iaqdata[i][1]=+result.pm2[i];
                    
                  /*  if(i==0 || i == n-1){
                        thre[j]=new Array(2);
                        outdoor[j]=new Array(2);
                    thre[j][0]=+result.timestamp[i];
                    
                    thre[j][1]=+res[1];
                        outdoor[j][0]=+result.timestamp[i];
                    
                    outdoor[j][1]=+res[2];
                    j++;*/
                        
                    }
                    
                    
              var head;
                
                var y_axis;
        var unit;
                if(para.value=='pm2'){
        y_axis= "PM2.5 (μg/m³)";
        unit="μg/m³";
          head=result.n+" ("+para.value+".5)";
      }
      else if(para.value=='pm10'){
        y_axis= "PM10 (μg/m³)";
        unit="μg/m³";
          head=result.n+" ("+para.value+")";
      } 
      else if(para.value=='co2'){
        y_axis= "CO2 (PPM)";
        unit="ppm";
          head=result.n+" ("+para.value+")";
      }

      else if(para.value=='voc'){
        y_axis="VOC (PPB)";
        unit="ppb";
           head=result.n+" ("+para.value+")";
      }
      else if(para.value=='temp'){
        y_axis= "Temp. (Celcius)";
        unit="celcius";
           head=result.n+" ("+para.value+")";
      }
      else{
        y_axis= "Humidity (%)";
        unit="%";
           head=result.n+" ("+para.value+")";
      }
                /*var threshold="";
                var color="";
                if(unit=="%" || unit=="celcius")
                {
                    threshold=".";
                    color="#ffffff";
                }
                else{
                threshold="Threshold ("+thre[0][1]+" "+unit+" as per the recommendation of CPCB)"
                    color="#DC143C";
                }*/
                    
Highcharts.chart('container', {
  chart: {
    type: 'spline',
    borderColor: '#fff',
        borderRadius: 0,
        borderWidth: 2,
        type: 'line'
  },
  title: {
    text: head
  },subtitle:{
    text:result.n   
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
      text: y_axis
    },
    min: 0
  },
  tooltip: {
    headerFormat: '<b>{series.name}</b><br>',
    pointFormat: '{point.x:%e. %b}: {point.y:.2f} '
  },

  plotOptions: {
    spline: {
      marker: {
        enabled: true
      }
    }
  },

  colors: ['#6CF', '#06C',  '#036', '#000'],

  // Define the data points. All series have a dummy year
  // of 1970/71 in order to be compared on the same x axis. Note
  // that in JavaScript, months start at 0 for January, 1 for February etc.
  series: [{
    name: "Realtime Data",
    data: iaqdata
  }
           
  
  ]
});
            }
            
            });
});

}


</script>


     <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-note2',
                message: "Welcome to <b>AirGenius </b> - a dashboard where you can monitor your IAQ Data."

            },{
                type: 'info',
                timer: 4000
            });

        });
    </script>

    <script>
        
Highcharts.chart('containe', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Monthly Average Temperature'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Air Quality Index'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Indoor',
        data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
    }, {
        name: 'Outdoor',
        data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
    }]
});
    </script>

    <script src="js/DatePickerX.min.js"></script>
    <script>
        window.addEventListener('DOMContentLoaded', function()
        {
            var $min = document.querySelector('.real [name="realDPX-min"]'),
                $max = document.querySelector('.real [name="realDPX-max"]');

            $min.DatePickerX.init({
                mondayFirst: true,
                minDate    : new Date(2017, 8, 13),
                maxDate    : $max
            });

            $max.DatePickerX.init({
                mondayFirst: true,
                minDate    : $min,
                //maxDate    : new Date(2017, 4, 25)
            });

        });
    </script>
	<script>
	entry();
	</script>
    <link rel="stylesheet" href="css/DatePickerX.css">
    
</body>
</html>





   