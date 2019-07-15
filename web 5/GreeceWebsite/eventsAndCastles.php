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
<title>Events and Castles | Greece</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body bgcolor = "#E6E6FA">

<div class="homeSection">
<div class="topnav" id="myTopnav">
  <a href="logout.php">Logout</a>  
   <a href="profile.php">Profile</a>  
  <a href="religion.php">Religion</a>
  <a href="beaches.php">Beaches</a>
   <div class="dropdown">
  <button class="dropbtn">Culture 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="museums.php" class="active">Museums</a>
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
		  <h1>EVENTS</h1>	
		</div>

	<table class="sectionTable" >
	<tr>
		<td  class="left"><img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Politistikos_tourismos/odeion_of_herodes_560.jpg" height="300px" width="900px"/></td>
		<td class="caption right">
		<p>Greece is a true paradise for cultural tourism, a large journey into history and art. Educational excursions, theatrical presentations, festivals, pilgrimages, visits to archaeological sites, monuments and museums, excursions to study the natural environment, folk art culture – these are just a few of the many things that Greece has to offer in the cultural tourism sector.</p>
	   </td>
	</tr>
	</table>
	<table class="sectionTable" >
	<tr>
		<td  class=" caption left" style="width:70%;" >
		<p>Whoever really wants to understand Greece, its history and its people, he will find an unrivalled cultural experience through traveling into the area and chronological period of Greek culture.</p><br>
		</td>
		<td class=" right" style="width:30%;">
		<img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Politistikos_tourismos/epidaurus_560.jpg" height="300px" width="900px"/></td>
		</td>
	</tr>
	</table>
	
	<div class="heading" >
	<h1>CASTLES</h1>
	</div>
	<table class="sectionTable" >
	<tr>
		<td  class="left"><img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Castles/corfu_510.jpg" height="300px" width="900px"/></td>
		<td class="caption right">
		<p>Visiting Greece is an experience where myth and tradition, history and culture play a leading role. It is absolutely essential for a country to be able to show its history to the world and make people want to know about it. Like its Mediterranean neighbours, Greece has been under the influence of diverse civilizations over the centuries with traces of them left across the country for anyone to see.</p>
		<p>Starting from the Mediaeval times, the Byzantine period, the Francs, the Ottomans, and the Venetians - cultures that influenced this land and its people - not only helped shape the country that is today Greece, the continent that is today Europe, but also us all the people living here. Greece presents its castles and welcomes visitors in them, laying stress on a different aspect of its history.</p>
		</td>
	</tr>
	</table>
	<table class="sectionTable" >
	<tr>
		<td  class=" caption left" style="width:70%;" >
		<p>The majestic castle on Rhodes Island in the East; Spinalonga in Crete, boasting a rich and controversial history, in the South; the Byzantine city-fort of Monemvasia, Peloponnese, in the West; and the castle of Kavala in the North: the list of castles in Greece, including the above, numbers 480. The above monuments date from the Early Byzantine period (5th century A.D.) until the 19th century.</p>
		<p>Discover the myths and tales of battles and chivalry in a country not known till now for this part of its cultural past. These destinations are perfect for a family holiday and taking into consideration Greece’s mild Mediterranean climate, they are visitable all year round. So, discover the so far less-known parts of Greece!</p>
		<p>The Ancient, Byzantine and Medieval castles are scattered all over the country, and they could be the perfect backdrop for a holiday. In Peloponnese, discover the castles in Mystras, Methoni, Koroni, Monemvasia, Niokasto, Kyparissia, Kalamata, Chlemoutsi and Palamidi. They are in top condition and their history is rich with tales of locals who were infamous for their strength and tenacity. In the Ionian Sea, you can visit the castles of Zakynthos, of Assos in Kefalonia, Grivas in Lefkada and the fort on Corfu. In the Aegean Sea there are numerous well preserved castles on the islands of Naxos, Lesvos, Chios, Evia, Skyros, Skopelos, Rhodes and Karpathos.</p>
		</td>
		<td class=" right" style="width:30%;">
		<img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Castles/methoni_510.jpg" height="300px" width="900px"/></td>
		</td>
	</tr>
	</table>
	<div class="caption outerDiv">
		<p>Head South to Crete for a visit to the castles of Gramvousa, Frangokastelo, Rethymnon, Herakleion, Fodele and the famous Spinalonga Island which was a leper community in the past. Last, but not least, the North of Greece is a crossroads of civilizations where you can find some of the most impressive castles in the country, such as the ones in Halkidiki, Kavala, Alexandroupoli, Thessaloniki and Edessa, to name but a few.</p>
		<p>This is just another part of Greece’s rich history and heritage that Greeks wish to share with the world; a heritage that includes the passage of different civilizations that have left their mark in this country, enveloped in myth and waiting to be discovered. Set out on this journey and be part of something truly special that will change once and for all your image of Greece as you have known it so far.</p>
	</div>
	
	</div>
</section>

</body>
</html>
