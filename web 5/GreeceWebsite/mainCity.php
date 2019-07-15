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
<title>Main City | Greece</title>
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
      <a href="museums.php">Museums</a>
      <a href="eventsAndCastles.php">Events and Castles</a>
    </div>
	</div>
  <div class="dropdown">
    <button class="dropbtn">Destination 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="mainCity.php" class="active">Main City</a>
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
		  <h1 >MAIN CITIES</h1>	
		</div>
	<table class="sectionTable" >
	<tr>
		<td  class="left"><img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Athens_acropolis_510.jpg" height="300px" width="900px"/></td>
		<td class="caption right">
		<p>Greece is the ideal place for city tourism. Discovering the soul of a Greek city is much more than a quick tour around its monuments and sightseeing. Greek cities are full of possibilities, easily accessible and visitor friendly around the year, offering a great sum of modern facilities and choices. Greek cities combine excellent conference facilities with unique museums, archaeological sites, shopping and nightlife.<p>
		<p>Think of the perfect city break. And then visit a Greek city, where it will be planned and organized for you!</p>
		</td>
	</tr>
	</table>
	
	<table class="sectionTable" >
	<tr>
		<td  class=" caption left" style="width:70%;" >
		<p>A walk around the old neighborhoods reveals the coexistence of different eras in cities’ heart. Old mansions, many of them well-preserved, luxurious department stores and small intimate shops, fancy restaurants and traditional taverns are located one next to another. All have their place here!</p>
		<p>The Greek spirit, a force of creativity and renewal throughout Greece’s long history, has yet again transformed the urban landscape. Greece is a unique destination that combines business and pleasure in the best possible way! It is one of the most charismatic locations in terms of natural beauty, with mild climate conditions, a combination of landscapes from sea to mountains and appropriate for vacation and business activities throughout the year!</p>
		<p>Luxurious hotels with services that combine entertainment, leisure areas and excellent conference facilities, constitute yet another powerful incentive for someone to enjoy a magnificent city break or even close a business deal in Greece! Even museums can wonderfully combine a tour to an archaeological site with a philosophical conference, thus demonstrating the magnificence of ancient civilization through modern culture!</p>
		<p>Moreover, there are innovative scientific centers and exhibition areas that can accommodate small or large scale conference events, with state-of-the-art technical specifications including audiovisual systems, teleconference means, auxiliary dining areas, and by utilizing specialized staff such as interpreters and translators.</p>
		<p>Greece is now dynamically entering the city tourism sector on the global map.</p>
		</td>
		<td class=" right" style="width:30%;">
		<img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/thessaloniki_510_Vitsaropoulos.jpg" height="350px" width="900px"/></td>
		</td>
	</tr>
	</table>
	
	<table class="sectionTable" >
	<tr>
		<td  class="left"><img src="http://www.greektravel.com/naxos-fantasy.jpg" height="350px" width="900px"/></td>
		<td class="caption right">
		<p>The 2004 Athens Olympic Games, the widely acknowledged “unforgettable, dream games” left a crucial legacy to city of Athens:  transport infrastructure of a new era, green parks and squares, world-class sports facilities, and a gleaming, Calatrava-inspired Olympic Sports Complex.
			The Olympic cities, Thessaloniki, Patras, Heraklion, and Volos revamped, refurbished, cleaned up.
			A short break in Greece can take you a long way...</p>

	</tr>
	</table>
	
	<div class="heading" >
	<h2>European destinations of excellence</h2>
	</div>
	<div class="caption outerDiv" >
	<p>Get ready to enjoy Greek nature in an environmentally-friendly way thanks to the EDEN network - European Destinations of Excellence - recognised by the European Commission.</p>
	<p style="font-size:22px">What is EDEN?</b><br>
	<p>It is a European project that aims to foster sustainable tourism management and show Europe's diversity: natural resources, historic heritage, traditional celebrations, local gastronomy... To this end, every year a series of destinations are carefully selected by means of national competitions. The destinations are selected because of their interesting tourist attractions that care for the environment and that mainly promote rural areas, protected areas and countryside activities.</p>
	<p>This European quest for excellence in tourism is developed around an annual theme, chosen by the Commission together with the relevant national tourism bodies. This theme functions as a leitmotif: so far, rural tourism, intangible heritage, protected areas, aquatic tourism and regeneration of Physical sites have been the main EDEN themes.</p>	</td>
	</div>
	
	</div>
</section>

</body>
</html>
