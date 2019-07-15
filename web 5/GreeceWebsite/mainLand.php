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
<title>MainLand | Greece</title>
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
		  <h1>MAIN LAND</h1>	
		</div>
		<div class="caption outerDiv">
		<p>Greece is a beloved destination and in addition to the more familiar islands, the mainland offers plenty of options for a classic Mediterranean holiday! You’ll find unspoilt fishing villages full of tranquil charm or fulfilling city break. Enjoy a wealth of archaeological sites, fascinating culture, spectacular coastline and picture-perfect scenery!</p>
	  </div>
	  
		 <div class="heading">
		  <h2>Mythical Peloponnese</h2>	
		</div>
	<table class="sectionTable" >
	<tr>
		<td  class="left"><img <img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Ellada/monemvasia_mainland_560.jpg" height="300px" width="900px"/></td>
		<td class="caption right">
		<p>Escape to the Peloponnese, where Myth meets history. Monuments from every period of the eventful history, great archeological sites, such as ancient Olympia, Epidaurus, Mycenae and Tiryns (Tiryntha), the Temple of Apollo Epicurius, Byzantine churches, unique villages and alluring castles amidst stunning natural beauty, mountains and forest, rivers and caves, make this part of Greek land ideal for holidays, touring, sports and culture. Not to mention that the Peloponnese is surrounded by the Greek sea, with lovely beaches, sandy and smooth coasts on the west – rocky and lacy on the east.</p>
		</td>
	</tr>
	</table>
	
	 <div class="heading">
		  <h2>Macedonia</h2>	
		</div>
	<table class="sectionTable" >
	<tr>
		<td  class=" caption left" style="width:70%;" >
		<p>Visit Macedonia where you will encounter unique images. Explore this magnificent place in Greece where east meets west. The imposing – and almost perennial snowy – massifs of unique beauty boast Mt Olympus, the country's most famous and highest mountain, which is followed by the equally beautiful Pangaio, Kaimaktsalan (Voras) and Falakro mountains, where you can enjoy skiing or snowboarding during winter. The water element is significantly present with some of the most important rivers and lakes in Greece flowing through Macedonia. </p>

		</td>
		<td class=" right" style="width:30%;">
		<img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Ellada/mountains_mainland_560.jpg" height="300px" width="900px"/></td>
		</td>
	</tr>
	</table>
	<table class="sectionTable" >
	<tr>
		<td  class="left"><img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Ellada/thessaloniki_mainland_560.jpg" height="300px" width="900px"/></td>
		<td class="caption right">
		<p>Visit the metropolis of the North, Thessaloniki, with an intriguing multi-ethnic history and arty counter culture. It is a lively modern city, bustling with energy and verve. Built amphitheatrically around the sea, facing Mount Olympus on the distant horizon, it has always been a centre of different civilizations, cultures, nations and religions. Discover breathtaking Halkidiki with its clear waters and golden sand beaches, bays, little islands and green landscapes that will make your dream vacation come true! Don’t miss, the unique beauty of Serres nature, the picturesque cities of Drama, Kavala on the East and Kastoria and Naousa on the West.</p>
		</td>
	</tr>
	</table>
	
	<div class="heading" >
	<h2>Traditional Epirus</h2>
	</div>
	<table class="sectionTable" >
	<tr>
		<td  class=" caption left" style="width:70%;" >
		<p>Epirus lies in NW Greece, between the Pindos mountain range and the Ionian Sea. Its untouched mountainous mass of Pindos with its great virgin forests, the Dragon Lakes (the mythical mountain lakes) and the untamed slopes provide a plethora of activities (mountaineering, climbing, ski, hiking, mountain biking etc.) in a scenery of singular beauty, as well as the rivers of Epirus which offer other activities such as kayak, rafting, canoeing etc. Arachtos especially, is considered as one of the most beautiful and challenging rivers for kayaking, while Voidomatis runs through the impressive Vikos Gorge. All of this co-exists in harmony with the archaeological sites, castles, monasteries, churches and traditional villages. </p>
		</td>
		<td class=" right" style="width:30%;">
		<img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Ellada/epirus_rafting_560.jpg" height="300px" width="900px"/></td>
		</td>
	</tr>
	</table>
	<table class="sectionTable" >
	<tr>
		<td  class="left"><img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Limnes/dragon_lake_arrenes_540.jpg" height="300px" width="900px"/></td>
		<td class="caption right">
		<p>Pay a visit to Zagorochoria, a group of 46 villages located all over the slopes of the mountains. In close proximity, you can find Vikos Canyon, the second deepest in the world, with an ecosystem of 1.700 plants and 182 animals. Cross the historic stone bridges or Epirus, where legends and local traditions leave their mark on these architectural masterpieces of superb craftsmanship. Explore Dodoni, the place where the famous oracle used to be in ancient times, pay a visit at the famous Theater of Dodoni, the largest in antiquity and finally taste some of the most delicious feta, the cheese par excellence of Greece!</p>
	</td>
	</tr>
	</table>
	
	<div class="heading" >
	<h2>Thessaly</h2>
	</div>
	<table class="sectionTable" >
	<tr>
		<td  class=" caption left" style="width:70%;" >
		<p>Enjoy Thessaly, a region of sheer beauty with mountains, rivers, beaches, the popular Plastira Lake, Tempi valley, and last but not least the unique Meteora, the most photogenic spiritual site in Greece. Archeological areas, Byzantine monasteries and churches, traditional settlements and ski resorts complete the fascinating natural beauty of Thessaly and make it a popular holiday destination. </p>
	</td>
		<td class=" right" style="width:30%;">
		<img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Ellada/lake_plastira_mainalnd_560.jpg" height="300px" width="900px"/></td>
		</td>
	</tr>
	</table>
	<table class="sectionTable" >
	<tr>
		<td  class="left"><img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Ellada/thessaly_mainland_560.jpg" height="300px" width="900px"/></td>
		<td class="caption right">
		<p>Soaring like a sleepless guardian above the city of Volos, Mt Pelion is gorgeous throughout the year. Set against an idyllic backdrop of olive groves that shimmer in the sunlight, dense forests and lush fruit orchards, these 24 stone-built villages are the true gems of Pelion. Take the legendary “Mountzouris”, the traditional train of Pelion that connects Milies with Ano Lechona. It’s the perfect way to see part of the mountain and some other traditional villages. Visit Volos, the city of the Argonauts, where you will definitely pass by a tsipouro taverna (tsipouradika) as they are dispersed in every nook and cranny: almost 600 (!) of them bear the gastronomic stamp of the city and provide people with a favourite meeting point; that is the unrivalled landmark of Volos. </p>
		<p>Just a few kilometers to the West, lie the archaeological sites of Sesklo (the most ancient settlement of Europe, dating back to 6.000 BC) and Dimini, the most important prehistoric settlement in Greece and one of the most important ones of the New Stone Age worldwide</p>
		</td>
		</tr>
	</table>
	
	<div class="heading" >
	<h2>Thrace</h2>
	</div>
	<table class="sectionTable" >
	<tr>
		<td  class=" caption left" style="width:70%;" >
		<p>Thrace is an area of amazing natural beauty, a land where Greek legend has placed the mythical home of Orpheus. It is famous for its pristine, beautiful countryside that makes it a paradise for outdoor recreation, adventure and exploration. This part of Greece has it all: the Rodopi (Rhodope) mountain range and Mt. Saos on Samothrace Island in the Thracian Sea; the rivers Evros, Nestos and Ardas; Lakes Vistonida and Ismarida; Dadia forest and the Evros River Delta where internationally acclaimed wetlands are located; fertile valleys, dense forests and endless stretches of white sandy beaches. Archaeological sites include ancient Greek, Byzantine, medieval and Ottoman monuments that have all added to Thrace’s rich cultural heritage whose key characteristic is the peaceful co-existence of Christian and Muslim traditions</p>
		</td>
		<td class=" right" style="width:30%;">
		<img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Ellada/thrace_mainland_560.jpg" height="300px" width="900px"/></td>
		</td>
	</tr>
	</table>
	
	<div class="heading" >
	<h2>Central Greece</h2>
	</div>
	<table class="sectionTable" >
	<tr>
		<td  class="left"><img src ="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Ellada/delphi_mainland_560.jpg" height="300px" width="900px"/></td>
		<td class="caption right">
		<p>Central Greece, known as Roumeli, is part of the Greek mainland and has been inhabited since antiquity. There are forested mountain ranges, rivers, lakes, rich fauna and flora and remarkable archaeological sites. Visit the archaeological site of Delphi and the Oracle of god Apollo, picturesque seaside towns of Galaxidi and Itea, as well as beautiful Nafpaktos of great historical importance. The lagoon of Messolonghi, the largest Greek wetland, is a natural paradise that includes islets, dunes, forested banks and a rich flora and fauna that provide salt and fish to the locals. But the most precious gift of nature here is bottarga, in Greek avgotaracho, one of the few seafood products with a PDO (Protected Designation of Origin) award, a delicacy coming from the eggs of the female grey mullet.</p>
		</td>
	</tr>
	</table>
	<table class="sectionTable" >
	<tr>
		<td  class=" caption left" style="width:70%;" >
		<p>Do you seek the kind of thrill that will pump up your adrenalin? Karpenisi is the ideal destination as there is a multitude of activities for you throughout the year. So, don’t waste time, take a trip to the heart of Greek nature and see ravines with impressive waterfalls, dense forested areas and rapid river waters! If skiing or snowboarding is your thing, make a point of visiting Mt. Parnassos and nearby picturesque Arachova Village, the most cosmopolitan winter destination in Greece. Don’t miss the well-known archaeological sites at Orchomenos Village, Thebes, Plataiaes, and Chaeronea.</p>
		</td>
		<td class=" right" style="width:30%;">
		<img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Vouna/panta_vrehei_karpenisi_560.jpg" height="300px" width="900px"/></td>
		</td>
	</tr>
	</table>
	
	<div class="heading" >
	<h2>The land of Attica</h2>
	</div>
	<table class="sectionTable" >
	<tr>
		<td  class="left"><img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Ellada/acropolis_mainland_560.jpg" height="300px" width="900px"/></td>
		<td class="caption right">
		<p>Attica is known as one of the major ancient religious centres of Greece, the Acropolis being the most important of all. You will find major archaeological sites, Byzantine monuments spread around the Attican basin, within a short distance from Athens offering the option of daily trips to significant sights, such as the Temple of Poseidon in Sounio.</p>
		</td>
	</tr>
	</table>
	<table class="sectionTable" >
	<tr>
		<td  class=" caption left" style="width:70%;" >
		<p>Other archaeological areas include the Temple of Artemis in Vravrona, Amfiarion and the Thorikos site and Theater. </p>
		</td>
		<td class=" right" style="width:30%;">
		<img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Ellada/sounion_mainland_560.jpg" height="300px" width="900px"/></td>
		</td>
	</tr>
	</table>
	<table class="sectionTable" >
	<tr>
		<td  class="left"><img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Ellada/mikrolimano_mainland_560.jpg" height="300px" width="900px"/></td>
		<td class="caption right">
		<p>From Piraeus, the biggest port of Greece, and one of the most important ones of the Mediterranean, you can take the boat to the Aegean Islands. Walk up Kastella hill and enjoy the panoramic view of the city and the blue sea. </p>
		</td>
	</tr>
	</table>
		<div class="caption outerDiv">
		<p>Visit the Archaeological and Maritime Museums as well as the wonderful Neoclassical Municipal Theatre of Piraeus at the city centre. If you have time, stroll around and discover the local marketplace area. Another place of interest is the Metro Station of Piraeus, built in the early 20th century in the style of major European rail stations of that time. Admire the beautiful arched dome as well as paintings on the walls created by the students of Fine Arts School in Athens.</p>
		</div>
	</div>
</section>

</body>
</html>
