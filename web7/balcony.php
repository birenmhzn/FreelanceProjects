<?php include 'db_config.php'; ?>
<!--modal start contact us-->
<script type="text/javascript">
<!--
function showMe_balcony_shampooing(it, box) {
    $("#div_balcony_sanisation").hide();
  var vis = (box.checked) ? "block" : "none";
  document.getElementById(it).style.display = vis;
}
function showMe_balcony_sanisation(it, box) {
    $("#div_balcony_shampooing").hide();
  var vis = (box.checked) ? "block" : "none";
  document.getElementById(it).style.display = vis;
}
//-->
</script>
<style>
.btncollapse {
    color: white;
    display: block;
    font-size: 18;
    font-weight: 700;
    padding: 10px;
    border: 0px solid blue;
    background: #18bc9c;
    text-align: center;
</style> 
        <!-- Modal -->
        <div id="myModal_balcony" class="modal fade" role="dialog" style="color:#18bc9c;">
          <div class="modal-dialog modal-lg" >
              
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">balcony Cleaning</h4>
              </div>
                <div class="modal-body">
                  <form method="post" class="form-item" id="pc">
                    <form name="Form1" method="post" action = "functions/function.php">     
                          <input type="radio" name="balcony" value="balcony Shampooing" onclick="showMe_balcony_shampooing('div_balcony_shampooing', this)"/>balcony Cleaning
                          <div id="div_balcony_shampooing" style="display:none">
                              <h6>Pest Control : General service (This is only for one time)</h6>
                                            <ul style="background:rgba(24, 188, 156, 0.11);border-radius:5px;">
                                                
												<li>balcony service is covers all crawling insects</li> 
												<li>which include, - Cockroaches - Red/ black ants - Spiders - Millipede - Silver fish</li>
                                                
                                            </ul>
                                                <p style="color:red;background:rgba(24, 188, 156, 0.11);border-radius:5px;padding-left:20px;">Service Time: 1 to 2.5 Hours<br />
                                                No. of servicemen: 1 To 2 depend on type of BHK<br />
                                                In this process no need to vacate your place Fully odourless solution, 
												It is not messy and non smelly chemicals It is not harmfull for Healthe <br/>  
                                                </p>
                                            <div style="background:rgba(24, 188, 156, 0.11);height:50px;border-radius:5px;padding-top:10px;">
											<div class="col-xs-9">
                                            <label>Select your BHK/balcony : <select id="mySelect_balcony_shampooing" name="mySelect_balcony_shampooing" onchange="myFunction_balcony_shampooing()">
                                                <option value="00">Choose BHK</option>
                                                <?php
											$res=mysql_query("select * from services where category='shampooing One Time'");
											 while($row=mysql_fetch_assoc($res)){?>
                                                <option value="<?php echo $row['price'];?>"><?php echo $row['sub category'];?></option>
											 <?php
											 }
											 ?>
                                            </select>
                                            </label>
											</div>
											<div class="col-xs-3">
                                            <p id="value_balcony_shampooing" style="font-weight:bold;font-size:15px;"></p>
                                            </div>
											</div>
											<div class="row" style="padding-top:10px;">
											<div class="col-xs-6">
                                            <a data-toggle="collapse" class="collapse" data-target="#demo_balcony_shampooing">Place Order</a>
											</div>
											<div class="col-xs-6">
											<input name="id" type="hidden" id="id_pc" value=""/>
											<input type="submit" class="btncollapse" form="pc" value="Book Now">
											</div></div>
											</form>
                                            <div id="demo_balcony_shampooing" class="collapse">
                                                <table style="width: 60%;margin-left:20%;margin-right:20%;background-color: transparent;">
                                                <tr><td>First name:</td><td> <input type="text" name="client_name_balcony_shampooing"/></td></tr>
                                                <tr><td>E-mail:</td><td> <input type="email" name="client_email_balcony_shampooing"/></td></tr>
                                                <tr><td>Mobile:</td><td> <input type="text" name="client_mobile_balcony_shampooing"/></td></tr>
                                                <tr><td>Date : </td><td><input type="date" name="booking_date_balcony_shampooing"/></td></tr>
                                                <tr><td>Time : </td><td><input type="time" name="booking_time_balcony_shampooing"/></td></tr>
                                                <tr><td>Address : </td><td><textarea name="address_balcony_shampooing" cols="20" rows="5"></textarea></td></tr>
                                                <tr><td colspan="2"><center><input type="submit" name="submit_balcony_shampooing" value="Submit"/></center></td></tr>
                                                </table>
                                            </div>

                          </div>
                          
                          <form id="pc_sanitation" class="form-item" method="post">
                          <div id="div_balcony_sanisation" style="display:none">
                                            <h6>Pest control : General (Annual maintanace contract ):-</h6>
                                            <ul style="background:rgba(24, 188, 156, 0.11);border-radius:5px;">
                                                <li> Pest control( General ) service 3 time in one year</li>
												<li>Pest control service frequently after 4 month in one year
												<li>Peste- control service is covers all crawling insects</li> 
												<li>which include, - Cockroaches - Red/ black ants - Spiders - Millipede - Silver fish</li>
                                                
                                            </ul>
                                                <p style="color:red;background:rgba(24, 188, 156, 0.11);border-radius:5px;padding-left:20px;">Service Time: 1 to 2.5 Hours<br />
                                                No. of servicemen: 1 To 2 depend on type of BhK<br />
                                                In this process no need to vacate your place Fully odourless solution, 
												It is not messy and non smelly chemicals It is not harmfull for Healthe <br/>  
                                                </p>
                                            <div style="background:rgba(24, 188, 156, 0.11);height:50px;border-radius:5px;padding-top:10px;">
											<div class="col-xs-8">
                                            <label>Select your BHK : <select id="mySelect_balcony_sanisation" name="mySelect_balcony_sanisation" onchange="myFunction_balcony_sanisation()">
                                                <option value="00">Choose BHK</option>
                                                <?php
											$res=mysql_query("select * from services where category='shampooing AMC'");
											 while($row=mysql_fetch_assoc($res)){?>
                                                <option value="<?php echo $row['price'];?>"><?php echo $row['sub category'];?></option>
											 <?php
											 }
											 ?>
                                                
                                            </select>
                                            </label>
											</div>
											<div class="col-xs-4">
                                            <p id="value_balcony_sanisation" style="font-weight:bold;font-size:15px;"></p>
                                            </div>
											</div>
											<div class="row" style="padding-top:10px;">
											<div class="col-xs-6">
                                            <a data-toggle="collapse" class="collapse" data-target="#demo_balcony_sanisation">Place Order</a>
											</div>
											<div class="col-xs-6">
											<input name="id" type="hidden" id="id_pc_sanitation" value=""/>
											<input type="submit" class="btncollapse" form="pc_sanitation" value="Book Now">
											</div></div>
											</form>
                                            <div id="demo_balcony_sanisation" class="collapse">
                                                <table align="center">
                                                <tr><td>First name:</td><td> <input type="text" name="client_name_balcony_sanisation"/></td></tr>
                                                <tr><td>E-mail:</td><td> <input type="email" name="client_email_balcony_sanisation"/></td></tr>
                                                <tr><td>Mobile:</td><td> <input type="text" name="client_mobile_balcony_sanisation"/></td></tr>
                                                <tr><td>Date : </td><td><input type="date" name="booking_date_balcony_sanisation"/></td></tr>
                                                <tr><td>Time : </td><td><input type="time" name="booking_time_balcony_sanisation"/></td></tr>
                                                <tr><td>Address : </td><td><textarea name="address_balcony_sanisation" cols="20" rows="5"></textarea></td></tr>
                                                <tr><td colspan="2"><center><input type="submit" name="submit_balcony_sanisation" value="Submit"/></center></td></tr>
                                                </table>
                                            </div>
                              
                          </div>    
                       </form>
                </div>
            </div>    
          </div>
        </div>
         
 <!--modal end contact us-->   
    <script>
function myFunction_balcony_shampooing() {
    var x = document.getElementById("mySelect_balcony_shampooing").value;
    document.getElementById("value_balcony_shampooing").innerHTML = "<i class='fa fa-rupee'></i>&nbsp;"+x+".00";
	var e = document.getElementById("mySelect_balcony_shampooing");
   var strUser = e.options[e.selectedIndex].text;
	switch(strUser){
	case "1BHK":
	document.getElementById("id_pc").value="243";
	break;
	case "2BHK":
	document.getElementById("id_pc").value="244";
	break;
	case "3BHK":
	document.getElementById("id_pc").value="245";
	break;
	case "4BHK":
	document.getElementById("id_pc").value="246";
	break;
	case "5BHK":
	document.getElementById("id_pc").value="247";
	break;
	case "balcony/area(300)":
	document.getElementById("id_pc").value="248";
	break;
	case "balcony/area(500)":
	document.getElementById("id_pc").value="249";
	break;
	case "balcony/area(600)":
	document.getElementById("id_pc").value="250";
	break;
	case "balcony/area(700)":
	document.getElementById("id_pc").value="251";
	break;
	case "balcony/area(800)":
	document.getElementById("id_pc").value="252";
	break;
	}
}
function myFunction_balcony_sanisation() {
    var x = document.getElementById("mySelect_balcony_sanisation").value;
    document.getElementById("value_balcony_sanisation").innerHTML = "<i class='fa fa-rupee'></i>&nbsp;"+x+".00";
	var e = document.getElementById("mySelect_balcony_sanisation");
   var strUser = e.options[e.selectedIndex].text;
	switch(strUser){
	case "1BHK":
	document.getElementById("id_pc_sanitation").value="253";
	break;
	case "2BHK":
	document.getElementById("id_pc_sanitation").value="254";
	break;
	case "3BHK":
	document.getElementById("id_pc_sanitation").value="255";
	break;
	case "4BHK":
	document.getElementById("id_pc_sanitation").value="256";
	break;
	case "5BHK":
	document.getElementById("id_pc_sanitation").value="257";
	break;
	}
}
</script>