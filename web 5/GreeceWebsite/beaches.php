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
<title>Beaches | Greece</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body bgcolor = "#E6E6FA">

<div class="homeSection">
<div class="topnav" id="myTopnav">
  <a href="logout.php">Logout</a>
  <a href="profile.php">Profile</a>  
  <a href="religion.php">Religion</a>
  <a href="beaches.php" class="active">Beaches</a>
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
		  <h1>BEACHES</h1>	
		</div>

	<table class="sectionTable" >
	<tr>
		<td  class="left"><img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Paralies/alyki_thassos_560.jpg" height="300px" width="900px"/></td>
		<td class="caption right">
		<p>Greece has one of the longest coastlines in the world – almost 16.000km. The mainland and island areas end in a myriad variety of coastlines, with countless beautiful small beaches, charming bays and coves. Half of the aforementioned length includes the thousands of Greek islands scattered through the Greek seas, while the rest extends along the mainland.</p>
		<p>The Greek shores are world-famous and exceedingly popular because they are known for their crystal clean and clear waters, as well as for their unique diversity. Visitors have the opportunity to enjoy beaches stretching along over many kilometers, sheltered bays and coves, golden stretches of sand with dunes, pebble beaches, coastal caves with steep rocks and dark sand typical of volcanic soil.</p>
		</td>
	</tr>
	</table>
	<table class="sectionTable" >
	<tr>
	
	<div class="heading" >
	<h2>Greek summer is one big festival</h2>
	</div>
		<td  class=" caption left" style="width:70%;" >
		<p>Cosmopolitan destinations with a high level of infrastructure and services, family units at reasonable prices but with high standards, and lonely beaches, totally unspoiled, satisfy every need. Peaceful coves, where one can swim and fish, endless beaches with waves big enough for windsurfing, beaches with a variety of services to offer, promising absolute pleasure (where, apart from swimming, you can enjoy water sports - water skiing, windsurfing, diving, as well as other means of having fun in the water, such as the parasailing, “inner tubes”, “bananas”, wakeboard, jet ski) urban beaches a stone’s throw from cities, all allow the visitor to enjoy the rejuvenating power of the Greek seas.</p>
		</td>
		<td class=" right" style="width:30%;">
		<img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Paralies/balos_crete_560_shutterstock.jpg" height="300px" width="900px"/></td>
		</td>
	</tr>
	</table>
	<div class="caption outerDiv">
		<p>Every year hundreds of beaches and marinas in Greece are awarded with the Blue Flag. The Blue Flag award to a beach is an international institution that began in 1987. The criteria a beach must meet in order to receive a Blue Flag are very strict, both from an environmental viewpoint as well as from the aspect of services provided to bathers and safety. In Greece about 400 beaches and 9 marinas have been awarded the Blue Flag; this number rises each year, a true indication of the Greeks’ love and regard for the sea.</p>
	</div>
	
	<div class="heading" >
	<h2>Beloved beaches</h2>
	</div>
	<table class="sectionTable" >
	<tr>
		<td class="left"><img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Paralies/navagio_zakynthos_560_shutterstock.jpg" height="300px" width="900px"/></td>
		<td class="caption right">
		<p>Many Greek beaches have become synonymous with luxury and a carefree life. Navagio (Shipwreck) on Zakynthos, Balos on Crete, Lindos on Rhodes, Manganari on Ios, Foinikounta on the Mani coast and numerous others are inundated each year by lovers of the Greek seas.</p>
		</td>
	</tr>
	</table>
	
	<table class="sectionTable" >
	<tr>
		<td  class=" caption left" style="width:70%;" >
		<p>Elia on the island of Myconos is of course the most famous Greek beach. Popular Elia is just 8 kilometres from Chora Myconos and combines the wonderful Cycladic landscape, bright blue sea and superior infrastructure.
		Kolympithres on Paros with its strange rock formations carved out by the sea, captivates travellers. The beach lies in north-west Paros, in the gulf of Naoussa. It is essentially not a single beach but many different ones: an incredible, natural work of art.</p>
		<p>Red Beach on Santorini is undoubtedly the most famous on the island. A unique palette of colours dominated by vivid volcano red leads down to the crystal blue sea. Sea lovers flock down to this southernmost point of Santorini to enjoy nature’s wild beauty.</p>
		</td>
		<td class=" right" style="width:30%;">
		<img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Paralies/redbeach_santorini_560_shutterstock.jpg" height="300px" width="900px"/></td>
		</td>
	</tr>
	</table>
	
	<table class="sectionTable" >
	<tr>
		<td class="left"><img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Paralies/myrtos_kefalonia_560_shutterstock.jpg" height="300px" width="900px"/></td>
		<td class="caption right">
		<p>Alyki Beach on the island of Thassos is another ‘jewel’ of the sea. It is in actual fact twin beaches separated by a narrow strip of land. In the sea stand the famous Thrones, carved stone formations, the remnants of an ancient quarry, which though give the impression of being thrones for sea gods.</p>
		<p>Elounta on Crete, Minoan Olous, is the island’s trademark. It lies on the south side, just 10 kilometres from Agios Nikolaos, a delightful complex of beaches adored by the global travel community.</p>
		<p>Myrtos beach on the island of Kefalonia receives awards every year and features in travel guides the world over. It is considered one of the most beautiful beaches on earth. Just 30 kilometres from Argostoli, the beauty of the landscape, pure white pebbles and heavenly waters are breath-taking.</p>
		</td>
	</tr>
	</table>
	
	<div class="heading" >
	<h2>Extraordinary Beauty</h2>
	</div>
	<table class="sectionTable" >
	<tr>
		<td  class=" caption left" style="width:70%;" >
		<p>Every Greek beach is engulfed in beauty. Some are lush-green with pines reflecting in the water, others were born of volcanoes mesmerizing with nature’s power, like Kipoi on Samothrace, with its jet-black pebbles. Yet again, others are hidden paradises, like Varelaioi in Evia, the ‘secret’ beaches of the Minor Cyclades, Voutoumi on the island of Antipaxos, Mylopotamos in Pelion; beaches in Greece are a true kaleidoscope, enthralling the senses with their colours and formations.</p>
		<p>Red Beach on Santorini is undoubtedly the most famous on the island. A unique palette of colours dominated by vivid volcano red leads down to the crystal blue sea. Sea lovers flock down to this southernmost point of Santorini to enjoy nature’s wild beauty.</p>
		</td>
		<td class=" right" style="width:30%;">
		<img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Paralies/kolybithres_paros_560.jpg" height="300px" width="900px"/></td>
		</td>
	</tr>
	</table>
	
	</div>
</section>

</body>
</html>
