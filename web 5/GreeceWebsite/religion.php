<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Religion | Greece</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body bgcolor = "#E6E6FA">

<div class="homeSection">
<div class="topnav" id="myTopnav">
  <a href="logout.php">Logout</a> 
   <a href="profile.php">Profile</a>    
  <a href="religion.php" class="active">Religion</a>
  <a href="beaches.php">Beaches</a>
   <div class="dropdown">
  <button class="dropbtn">Culture 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="museums.php">Museums</a>
      <a href="eventsAndCastles.php">Events and Castles</a>
    </div>
	</div>
  <div class="dropdown">
    <button class="dropbtn">Destination 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="mainCity.php">Main City</a>
      <a href="mainLand.php">Main Land</a>
    </div>
  </div> 
  <a href="homepage.php">About</a>
  <a href="homepage.php">Home</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<script>
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
		x.className += " responsive";
	  } else {
		x.className = "topnav";
	  }
	}
	</script>
<div class="container">
<div class="heading" style="margin-top:9%;">
  <h1>GREECE</h1>
  <h3>THE ROYAL HAYATT TOURS.</h3>
  </div>
</div>
</div>

	  <div class="container">
		 <div class="heading">
		  <h1>RELIGION</h1>	
		</div>
	<center><img src="http://darkroom.baltimoresun.com/wp-content/uploads/2013/05/AFPGetty-519438865.jpg" height="500px" width="800px" style="padding:15px;"></center><br>
	
	<div class="heading" >
	<h2>CHURCHES</h2>
	</div>
	<table class="sectionTable" >
	<tr>
		<td  class="left"><img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Churches_Sifnos_510.jpg" height="300px" width="900px"/></td>
		<td class="caption right">
		<p>Churches, places intended to meet the needs of Christian worshipping, are a characteristic and inseparable element of the Greek landscape. From austere, aisle-less chapels to magnificent cross-in-square types, churches follow specific architectural forms that were gradually established since the first centuries of Christianity and after. Their decoration -whether paintings, mosaic or other- always reflects Orthodox doctrine, following specific style trends and established iconographic programs.</p>
		<p>Over the centuries, renowned architects, builders or painters have contributed to the construction and adornment of the Greek churches, many of which are now preserved monuments.</p>
		</td>
	</tr>
	</table>
	<div class="caption outerDiv">
		<p>The oldest churches in Greece, the more significant being those in Thessaloniki, Nea Anchialos, Nikopolis, Athens and Corinth, date back to the Early Byzantine Period (4th - 6th Century A.D.).
		During this period, important Ancient Greek temples, such as the Parthenon, the Erechtheion or the “Thission” in Athens, were converted into and functioned as churches, while many Christian churches were built near to or on the sites of known idolatry centers (e,g. Daphni, Elefsina, Delphi, Epidavros, Delos). Churches were also built on sites relating to persons or events that were important to Christians, such as the burial sites of martyrs.</p>
		<p>Greek churches acquired an intensely local character during the Middle Byzantine Period (7th C. - 1204 A.D.) and were quite different from corresponding monuments in Constantinople. The more notable ones are situated in Attica, Viotia, Argolida, Mani, etc. Some of these are the katholicons or main churches of the monasteries they belong to.
		The churches of the Late Byzantine Period (1204-1453) continue to follow traditional architectural models. Some of the most significant churches built during that period have been preserved in Arta, Veroia, Kastoria, Thessaloniki and Mystras Churches constructed after this period in regions under Frankish or Venetian occupation adopted quite a few western elements – architectural or decorative.</p>
		<p>Churches built in Greece during the Ottoman occupation are especially austere. Exceptions to this were churches situated in areas under Venetian or generally Western influence (Crete, Ionian Islands). After the War of Independence, the economic recession did not allow the construction of ostentatious churches. An exception to this rule is the Metropolis of Athens, built in the middle of the 19th C. in order to function as the cathedral church in the capital of the newly-established Greek State. However, there was a new rise in ecclesiastical architecture from the end of the 19th C. and especially during the beginning of the 20th C.</p>
	</div>
			
	
	<div class="heading" >
	<h2>MONASTERIES</h2>
	</div>
	<table class="sectionTable" >
	<tr>
		<td  class=" caption left" style="width:70%;" >
		<p>Greek monasteries are interconnected with Greek nature and history. Located in steep rocks, cliffs, on windy slopes above the sea, lush green valleys and olive groves, these monasteries are actually witnesses of human efforts to come closer to God through silence, simplicity and harmony.</p>
		<p>Based on religious worship, miracles, built by experienced local craftsmen and decorated by remarkable religious painters.</p>
		</td>
		<td class=" right" style="width:30%;">
		<img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Monasteries_Kavala_510.jpg" height="300px" width="900px"/></td>
	</tr>
	</table>
	<div class="caption outerDiv">
		<p>Greek monasteries played a valuable role in different periods of Greek history protecting and sometimes preserving the Greek language, arts and tradition through generations of monks. Even today many monasteries teach arts such as religious painting, protection and preservation of ancient manuscripts, wine-making, biological agriculture, traditional cheese making etc.</p>
		<p>The Royal Hayatt Tours present you the most exciting, never experienced trip to Greece. All you need to do is pack your bags and fill the promo form given below and tell us about your crazy dreams, hobbies, interests and obviously why do you want to visit Greece? The two of most innovaive and craziest form enteries from your own city will be chosen and taken to Greece for free. All you need to pay for is your food and shopping! Stay in the best of 5-Star Hotels, go on a 3 days cruise sail and visit all the exciting places as showcased in our website and that too for free of cost. Live your life to the fullest in this amazing 6 days and 7 nights trip to Greece. Go on and test your luck....</p>
	</div>

	</div>
</section>

</body>
</html>
