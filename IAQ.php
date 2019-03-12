<?php 

 ?>

 <div class="content" style="">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
              
            </div>


            <div class="row " >

                <button  id="demo-pie-1" data-percent="34" value="pm2"  onclick="setValue(this,'cir1')" class="flip-card pie-title-center circle col-md-3 circle animated flipInY" style="padding: 0px; background-color: #B6D161; outline : 0; -moz-outline : 0; ">
                    
                          <div class="flip-card-inner"   style="background-color: #B6D161;   display: inline-grid;">
                            <div class="flip-card-front" id="cir1" style="text-align: center; align-self: center; justify-content: center; padding-top: 20%; ">  <h3 style="" id="pm2"></h3>
                                <p id="param1">PM 2.5</p>
                             <!-- <p style="text-align: center; align-self: center; justify-content: center;">PM 2.5</p> -->
                            </div>
                            <!-- <div class="flip-card-back" style="background-color: #0073bc;">
                            <div class="content" style="text-align: center; margin-right: 8px; transform: rotateZ(90deg); perspective: 1000px; ">
                               
                              <p style="font-size: 12px;">(Perticulate Matter)</p> 
                              <p style="font-size: 10px;">Threshold value: 22PPM </p>
                              </div>
                            </div> -->
                          </div>
                        
                    
                </button>
               <button id="demo-pie-2" data-percent="34" value="pm10"  onclick='setValue(this,"cir2")' class="flip-card pie-title-center circle col-md-3 circle animated flipInY" style="text-align: center; padding: 0px; background-color: #627AAD;  outline : 0; -moz-outline : 0;">
                    
                          <div class="flip-card-inner"  style="background-color: #627AAD;  display: inline-grid;">
                            <div class="flip-card-front" id="cir2"  style="text-align: center; align-self: center; justify-content: center;  padding-top: 20%;">  <h3 style="" id="pm10"></h3>
                                <p id="param2">PM 10</p>
                             <!-- <p style="text-align: center; align-self: center; justify-content: center;">PM 2.5</p> -->
                            </div>
                            <!-- <div class="flip-card-back" style="background-color: #0073bc;">
                            <div class="content" style="text-align: center; transform: rotateZ(90deg); perspective: 1000px; ">
                               
                              <p>(Perticulate Matter)</p> 
                              <p>Threshold value: 22PPM </p>
                            </div>
                          </div> -->
                        </div>
                    
                </button>
                <button id="demo-pie-3" value="voc" data-percent="34"  onclick='setValue(this,"cir3"); ' class="flip-card pie-title-center circle col-md-3 circle animated flipInY" style="padding: 0px; background-color: #77BDF1;  outline : 0; -moz-outline : 0;">
                   
                          <div class="flip-card-inner"  style="background-color: #77BDF1; display: inline-grid; ">
                            <div class="flip-card-front" id="cir3"  style="text-align: center; align-self: center; justify-content: center; padding-top: 20%; ">  <h3 style="" id="voc"></h3>
                                <p id="param3">VOC</p>
                             <!-- <p style="text-align: center; align-self: center; justify-content: center;">PM 2.5</p> -->
                            </div>
                            <!-- <div class="flip-card-back" style="background-color: #0073bc;">
                            <div class="content" style="text-align: center; transform: rotateZ(90deg); perspective: 1000px; ">
                               
                              <p>(Perticulate Matter)</p> 
                              <p>Threshold value: 22PPM </p>
                            </div>
                          </div> -->
                        </div>
                    
                </button>
                <button id="demo-pie-4" value="co2" data-percent="34"  onclick='setValue(this,"cir4")' class="flip-card pie-title-center circle col-md-3 circle animated flipInY" style="padding: 0px; background-color: #E46F61;  outline : 0; -moz-outline : 0; ">
                   
                          <div class="flip-card-inner"  style="background-color: #E46F61;  display: inline-grid;">
                           <div class="flip-card-front" id="cir4" style="text-align: center; align-self: center; justify-content: center; padding-top: 20%; ">  <h3 style="" id="co2"></h3>
                                <p id="param4">CO<sub>2</sub></p>

                             <!-- <p style="text-align: center; align-self: center; justify-content: center;">PM 2.5</p> -->
                            </div>
                            <!-- <div class="flip-card-back" style="background-color: #0073bc;">
                            <div class="content" style="text-align: center; transform: rotateZ(90deg); perspective: 1000px; ">
                               
                              <p>(Perticulate Matter)</p> 
                              <p>Threshold value: 22PPM </p>
                            </div>
                          </div> -->
                        </div>
                    
                </button>
                                            
               

            </div>
            
             <div class="picPanel row"   style="width: 100%; min-height: 300px; border-radius: 5px 40px 5px 30px; background-image: url(assets/img/panel_bg_azure2.jpg);  background-size: cover;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); display: inline-block;">
                    <div class="AQI col-md-3" >
                        <img src="assets/img/ScaleOnly_white.png" alt="" style="">
                        <h1 id="iaq" style="margin-top: -10px;"></h1>
                        <span style="margin-top: -10px;">AQI | Poor</span> <br/>
                        <p> Hello There! Good Morning.. </p>
                        <!-- <span class="AQI_status">Poor</span> -->

                    </div>
                    <div class="blank col-md-6"></div>
                    <div class="Temp-hum col-md-3" style="text-align: right;">

                        <h3 class="title" style="font-size: 52px; color:white;  margin-top: 80px;"  ><i class="pe-7s-sun" style="margin-right: 5px; font-size: 42px;"></i><span id="temp"></span>&deg;C</h3>
                        <h3 class="category" style="margin-top: 0; font-size: 2em; color: white;" id="hum"></h3>
                    </div>
                    
                </div>
                <div class="row" style="text-align: center;">
                    <div  class="col-md-12" style="text-align: center;">
                        <div class="animated flipInY" style="   width: 160px; height: 160px; border-radius: 50%; background-color: #EDEDED;  margin:-85px 30px 0px 30vw; align-self: center; padding: 10px;" >
                           <img src="" style="width: 100%; height: 100%;" alt="" id="iaq_img">
                        </div>
                    </div>
                </div>

                <div class="row2 row" style="">
                    <div class="highcharts-block col-md-8" style="padding-left: 20px;">
                        <script src="https://code.highcharts.com/highcharts.js"></script>
                        <script src="https://code.highcharts.com/modules/exporting.js"></script>
                        <script src="https://code.highcharts.com/modules/export-data.js"></script>
                        <div id="container" style="min-width: 310px;  height: 400px; margin: 0 auto; margin-top: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);"></div>
                        
                    </div>
                    <div class="col2 col-md-4" style="">
                     
                    <div class="row1 row" style="width: 100%; height: 150px; background-color: #E46F61;  margin:0px 6px 0 5px; box-shadow: 10px 5px 0px 5 rgba(0,0,0,0.2); display: inline-flex;">
                            <div class="col-md-3 animated flipInY" style="margin-top: 10px; padding: 0px; text-align:center;">
                                    <img id="recommend1" src="assets/img/cyle_deactive3.png" alt="" style=" width: 60px; height: 60px;"></br>
                                    <span id="span_rec1" style="font-size: 12px; color: #A1494E;">Avoid outdoor Exercise</span>
                                </div>
                                <div class="col-md-3 animated flipInY" style=" margin-top: 10px;padding: 0px; text-align: center;margin-left: 0px; ">
                                    <img id="recommend2" src="assets/img/window_deactive3.png" alt="" style="width: 60px; height: 60px; color: #f00;  "></br>
                                    <span id="span_rec2" style="font-size: 12px; color: #A1494E; margin-top: -50px; padding-top: -50px;">Close Windows</span>
                                </div>
                                <div class="col-md-3 animated flipInY" style=" margin-top: 10px;padding: 0px; text-align: center;">
                                    <img id="recommend3" src="assets/img/mask_deactive3.png" alt="" style="width: 60px; height: 60px;"> </br>
                                    <span  id="span_rec3" style="font-size: 12px; color: #A1494E; margin-top: -50px; padding-top: -50px;">Wear Mask</span>
                                </div>
                                <div class="col-md-3 animated flipInY" style="margin-top: 10px; padding: 0px; text-align: center;">
                                    <img  id="recommend4" src="assets/img/purifier_deactive3.png" alt="" style="width: 60px; height: 60px;"></br>
                                    <span id="span_rec4" style="font-size: 12px; color: #A1494E; margin-top: -50px; padding-top: -50px;">Turn On Air Purifier</span>
                                </div> 
                            <br>
                                  <!-- <h5>Recommendation</h5> -->
                                   
                     </div>
                    <div class="row" style="width: 100%; height: 20px; background-color: #E46F61; border-radius:0; margin:-20px 6px 0 5px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                        <div class="col-md-12" style="text-align: center; ">
                            <h6 style="margin-top: -10px; color: white; letter-spacing: 12px;">Recommendation</h6>
                        </div>
                    </div>
                                        
                    <div class="row col2"  >         
                        <div class="col-md-12"  id="backup" style="background-color: #fff;  height: 240px; margin:5px 10px 0 20px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                            
                            <form action="backup.php" method="GET" >
                            <!-- <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin:15px 20px 5px 20px;">
                            <input class="mdl-textfield__input" type="text" id="sample3">
                            <label class="mdl-textfield__label" for="sample3">Enter start Date</label>
                          </div> -->
                            <div id="date_container" class="col-md-12 mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin:5px 20px;">
                               <!--  <input class="mdl-textfield__input" type="text" id="date" readonly /> -->
                          
<label class="real">
 <div class=" form-group" style='margin-top:-20px;'>
      <label for="usr" >First Date</label>
    <input type="text" name="realDPX-min" style="width: 250px;" class="form-control" placeholder="Choice start date" id="datepicker" value=""/>
	</div>
</label> </div>
                          <div id="date_container" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin:5px 20px;">
                               <!--  <input class="mdl-textfield__input" type="text" id="date" readonly /> -->
                             <label class="real">
							  <div class="form-group" style='margin-top:-90px;'>
      <label for="usr">Last Date</label>
	  
        <input type="text" name="realDPX-max" style="width: 250px;" class="form-control" placeholder="Choice end date" id="datepicker1" value=""/>
		</div>
    </label> </div>
                              <!-- <div id="ui-datepicker-div"></div> -->
                            <input type="hidden" value="" name="device" id="device_form" />
                            <div class="col-md-12">
                            <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="width: 100%; margin-top: 70px; background-color: #0072bc; color: white; background: #1DC7EA;
                    background: -moz-linear-gradient(top, #1DC7EA 0%, #4091ff 100%);
                    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1DC7EA), color-stop(100%, #4091ff));
                    background: -webkit-linear-gradient(right, #1DC7EA 0%, #4091ff 100%);
                    background: -o-linear-gradient(right, #1DC7EA 0%, #4091ff 100%);
                    background: -ms-linear-gradient(right, #1DC7EA 0%, #4091ff 100%);
                    background: linear-gradient(to right, #1DC7EA 0%, #4091ff 100%);
                    background-size: 150% 150%; padding: 2px 50px;margin-top: -60px; color: white;"  value="Backup Data" />
                             
                            
                            </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                    

      

        </div> 

        
    </div>
</div>