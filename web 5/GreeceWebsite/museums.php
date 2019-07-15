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
<title>Museums | Greece</title>
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
		  <h1>MUSEUMS</h1>	
		</div>

	<table class="sectionTable" >
	<tr>
		<td  class="left"><img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Mouseia/acropolis_museum_560.jpg" height="300px" width="900px"/></td>
		<td class="caption right">
		<p>Greek culture is one of the most emblematic in the world. The habitation of Greece from deep prehistory, the miracle of classical Greek culture, the glory of Byzantium, and the country’s modern history excite the imagination. </p>
		<p>Greece is truly a vast exhibition area in which centuries, influences and everyday life are intermingled. Whoever has the chance to visit a small Greek island will surely observe the continuation of culture as even daily utensils are identical to those found in museum show-cases.</p>
		<p>Archaeological research and collective practice never cease in Greece. Treasures from another era are continually coming to light and we gain a wider understanding of the historical evolvement of the Greek world with every new discovery. The wealth, depth and significance of this lasting Greek culture are on display in countless museums scattered across the country. Museums are arks of memory and memory in Greece reaches far back in time.</p>
		</td>
	</tr>
	</table>
	
	 <div class="heading">
		 <h2>Archaeological museums: admiring human origins</h2>	
		</div>
	<table class="sectionTable" >
	<tr>
		<td  class=" caption left" style="width:70%;" >
		<p>Greece has more than 100 archaeological museums. This number is an indication of the country’s archaeological wealth. Apart from the large national museums, such as the Acropolis Museum, the National Archaeological Museum in Athens and the Thessaloniki Archaeological Museum, the visitor has the opportunity to enjoy ancient Greek treasures in almost every corner of the country. Archaeological museums are located very near excavation sites and they keep the relationship of locality between the findings and the archaeological sites. </p>
		<p>Wandering through Palaiopolis in Samothraki one can feel the power of the place and learn about the magnificent civilization of the Kabeiroi, marvelling at the show-cases in the archaeological museum where unique treasures are housed. Correspondingly in Santorini, the Archaeological and the Prehistoric Museums complete the experience of exploring the Theran civilization that seems to be frozen in time. In Delos, Delphi, Elefsis, Olympia, as well as in the island of Aigina, the Cyclades, Crete, everywhere in Greece, these treasures from ancient Greek culture actively bear witness to a past that graced humanity.</p>
		</td>
		<td class=" right" style="width:30%;">
		<img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Mouseia/archaeologicalmuseum_560_skoulas.jpg" height="300px" width="900px"/></td>
		</td>
	</tr>
	</table>
	
	<div class="heading" >
	<h2>Byzantine Museums: purple and silk</h2>
	</div>
	<table class="sectionTable" >
	<tr>
		<td  class="left"><img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Mouseia/Museum_byzantine_thesssaloniki_560.jpg" height="300px" width="900px"/></td>
		<td class="caption right">
		<p>The Byzantine Empire was one of the greatest states in the world. Its extent both in place and in time is impressive. It linked continents, cultures, societies and people, it knew periods of ineffable glory and bestowed on the world great cultural achievements. The 25 Byzantine and post-Byzantine museums and collections in Greece allow the visitor to get to know one of the most mystical civilizations. The relationship between Byzantium and eastern Orthodox Christian tradition goes so deep that religion cannot be imagined without Byzantium or Byzantium without religion. This bond created greatly spiritual works of art steeped in the godliness of the faith and the glory of the mighty empire. Byzantine churches and monuments can be more easily understood when one sees the wealth of the museums. Mobile icons in the timeless transcendental Orthodox style, liturgical vessels centuries old, mosaics of unequalled skill, coins and ceramic elements; all the exhibits in Byzantine museums captivate the mind of the visitor. An entire era is vividly displayed as one enters the Byzantine and Christian Museum in Athens, the Crypt of Agios Dimitrios in Thessaloniki, the Byzantine and Post-Byzantine Collection in Chania, Crete.</p>
		</td>
	</tr>
	</table>
	
	<div class="heading" >
	<h2>Historical and folk art museums: endless culture</h2>
	</div>
	
		<div class=" caption outerDiv">
		<p>Greece has over 50 historical and folk art museums which preserve the memory and values of Modern Greek culture. Apart from these large exhibitions, many villages and towns are home to small collections, created by the inhabitants’ love for their homeland. The Folklife and Ethnological Museum of Macedonia-Thrace, the Museum of Greek Folk Art in Athens, the ‘Kostas Frontzos’ Folk Art Museum of Epirus, the Historical Museum of Crete and all the other large and small museums and collections keep alive the memories of heroic national struggles and portray the daily life of an era gone by but not forgotten.</p>
		</div>
	
	
	<div class="heading" >
	<h2>Theme museums: temples to dedication</h2>
	</div>
	<table class="sectionTable" >
	<tr>
		<td  class=" caption left" style="width:70%;" >
		<p>Theme museums are usually created out of the passion of one person or a small group of people for a particular activity; in this way museums of visual art are born centred around a private collection, or museums of theatrical art, out of the love and devotion of a certain collector.</p>
		<p>Greece has 18 downtown museums of visual art that cover a wide range of topics from painting to philately as a visual art. It also has 3 splendid museums of theatrical art, the Museum and Research Centre on Greek Theatre, housing valuable collections, the Marika Kotopouli Museum and the Spathario Shadow Theatre Museum. Thessaloniki is home to the Museum of Greek Cinema and throughout the country wonderful museums house collections on music, photography, natural history, science and technology and of course, on the art and history of seamanship.</p>
		</td>
		<td class=" right" style="width:30%;">
		<img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Mouseia/dimitsana_PIOP_560_428.jpg" height="300px" width="900px"/></td>
		</td>
	</tr>
	</table>
	
	<div class="heading">
	<h2>Opening Hours</h2>
	</div>
	<div class="caption outerDiv">
		<p>Most of the State-run Museums are open every day except Mondays. They are also closed on the following Public Holidays: January 1st, Good Friday, Easter Sunday, May 1st, Christmas and Boxing Days (December 25th and 26th). With respect to other Public Holidays, please contact the museum you wish to visit to check whether it will be open or not on that specific day.</p>
	</div>
	
	<div class="heading">
	<h2>Taking photographs and video</h2>
	</div>
	<div class="caption outerDiv">
		<p>In general, photography and video recording is allowed provided that tripods and flashlights are not used. However, you should contact museum officials in advance in order to check whether you need to pay an extra fee or get special permission for the use of a camera or video camera.</p>
	</div>
	
	</div>
</section>

</body>
</html>
