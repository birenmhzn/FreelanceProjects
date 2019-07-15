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
<title>Home Page</title>
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
      <a href="mainCity.php">Main City</a>
      <a href="mainLand.php">Main Land</a>
    </div>
  </div> 
  <a href="#about">About</a>
  <a href="homepage.php" class="active">Home</a>
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
<div class="heading">
  <h1>GREECE</h1>
  <h3>The Royal Hayatt Tours.</h3>
  </div>
	  <div class="slideshow-container" style="right:2%;">

	<div class="mySlides fade">
	  <img src="img/greece1.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
	  <img src="img/greece4.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
	  <img src="img/greece5.jpg" style="width:100%">
	</div>

	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>

	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span> 
	  <span class="dot" onclick="currentSlide(2)"></span> 
	  <span class="dot" onclick="currentSlide(3)"></span> 
	</div>

	<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
		  slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
		  dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	}
</script>
</div>
</div>
	<section id="about">
	  <div class="container">
		 <div class="heading">
		  <h1>ABOUT GREECE</h1>
			<h2>HISTORY</h2>
		</div>
	<table class="sectionTable" >
	<tr>
		<td  class="left"><img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/histoty_510.jpg" height="400px" width="100%"/></td>
		<td class="caption right"><p>Today’s visitors to Greece have the opportunity to trace the “fingerprints” of Greek history from the Paleolithic Era to the Roman Period in the hundreds of archaeological sites, as well as in the archaeological museums and collections that are scattered throughout the country.</p>
		<p>The first traces of human habitation in Greece appeared during the Paleolithic Age (approx. 120000 - 10000 B.C.). During the Neolithic Age that followed (approx. 7000 - 3000 B.C.), a plethora of Neolithic buildings spread throughout the country. Buildings and cemeteries have been discovered in Thessaly (Sesklo, Dimini), Macedonia, the Peloponnese, etc.</p>
		<p>The beginning of the Bronze Age (approx. 3000-1100 B.C.) is marked by the appearance of the first urban centers in the Aegean region (Poliochni on Limnos). Flourishing settlements were found on Crete, Mainland Greece, the Cyclades and the Northeastern Aegean, regions where characteristic cultural patterns developed.</p>
		<p>At the beginning of the 2nd Millennium B.C., organized palatial societies appeared on Minoan Crete, resulting in the development of the first systematic scripts. The Minoans, with Knossos Palace as their epicenter, developed a communications network with races from the Eastern Mediterranean region, adopted certain elements and in turn decisively influenced cultures on the Greek mainland and the islands of the Aegean.</p>
		<p>On Mainland Greece, the Mycenean Greeks –taking advantage of the destruction caused on Crete by the volcanic eruption on Santorini (around 1500 B.C.)- became the dominant force in the Aegean during the last centuries of the 2nd Millennium B.C.. The Mycenean acropolises (citadels) in Mycenae, Tiryns, Pylos, Thiva, Glas, Athens and Iolcus, then comprised the centers of the bureaucratically organized kingdoms. </p>
		<p>The extensive destruction of the Mycenean centers around 1200 B.C. led to the decline of the Mycenean civilization and caused the population to migrate to the coastal regions of Asia Minor and Cyprus (1st Greek colonization).</p>
		</td>
	</tr>
</table>
	<div class="caption outerDiv" >
	<p>After approximately two centuries of economic and cultural inactivity, which also became known as the Dark Years (1150 - 900 B.C.), the Geometric Period then followed (9th - 8th Century B.C.). This was the beginning of the Greek Renaissance Years. This period was marked by the formation of the Greek City-States, the creation of the Greek alphabet and the composition of the Homeric epics (end of the 8th Century B.C.).</p>
	<p>The Archaic Years that subsequently followed (7th - 6th Century B.C.) were a period of major social and political changes. The Greek City-States established colonies as far as Spain to the west, the Black Sea to the north and N. Africa to the south (2nd Greek colonization) and laid the foundations for the acme during the Classical Period. </p>
	<p>The Classical Years (5th - 4th Century B.C.) were characterized by the cultural and political dominance of Athens, so much so that the second half of the 5th Century B.C. was subsequently called the “Golden Age” of Pericles. With the end of the Peloponnesian War in 404 B.C., Athens lost its leading role.
	New forces emerged during the 4th Century B.C. The Macedonians, with Philip II and his son Alexander the Great, began to play a leading role in Greece. Alexander’s campaign to the East and the conquest of all the regions as far as the Indus River radically changed the situation in the world, as it was at that time.</p>
	<p>After the death of Alexander, the vast empire he had created was then divided among his generals, leading to the creation of the kingdoms that would prevail during the Hellenistic Period (3rd - 1st Century B.C.). In this period the Greek City-States remained more or less autonomous, but lost much of their old power and prestige. The appearance of the Romans on the scene and the final conquest of Greece in 146 B.C. forced the country to join the vast Roman Empire. 
	During the Roman occupation period (1st Century B.C. - 3rd Century A.D.), most of the Roman emperors, who admired Greek culture, acted as benefactors to the Greek cities, and especially Athens. 
	Christianity, the new religion that would depose Dodekatheon worshipping, then spread all over Greece through the travels of Apostle Paul during the 1st Century A.D. The decision by Constantine the Great to move the capital of the empire from Rome to Constantinople (324 A.D.), shifted the focus of attention to the eastern part of the empire. This shift marked the beginning of the Byzantine Years, during which Greece became part of the Byzantine Empire. </p>
	<p>After 1204, when Constantinople was taken by Western crusaders, parts of Greece was apportioned out to western leaders, while the Venetians occupied strategic positions in the Aegean (islands or coastal cities), in order to control the trade routes. The reoccupation of Constantinople by the Byzantines in 1262 marked the last stages of the empire’s existence.
	The Ottomans gradually began to seize parts of the empire from the 14th Century A.D., and completed the breakup of the empire with the capture of Constantinople in 1453. Crete was the final area of Greece that was occupied by the Ottomans in 1669. 
	Around four centuries of Ottoman domination then followed, up to the beginning of the Greek War of Independence in 1821. Numerous monuments from the Byzantine Years and the Ottoman Occupation Period have been preserved, such as Byzantine and Post-Byzantine churches and monasteries, Ottoman buildings, charming Byzantine and Frankish castles, various other monuments as well as traditional settlements, quite a few of which retain their Ottoman and partly Byzantine structure.
	The result of the Greek War of Independence was the creation of an independent Greek Kingdom in 1830, but with limited sovereign land. 
	During the 19th C. and the beginning of the 20th C., new areas with compact Greek populations were gradually inducted into the Greek State. Greece’s sovereign land would reach its maximum after the end of Word War I in 1920, with the substantial contribution of then Prime Minister Eleftherios Venizelos. The Greek State took its current form after the end of World War II with the incorporation of the Dodecanese Islands.
	In 1974, after the seven-year dictatorship period a referendum was held and the government changed from a Constitutional Monarchy to a Presidential Parliamentary Democracy, and in 1981 Greece became a member of the European Union.</p>
	</div>
	
	
	<div class="heading" >
	<h2>CIVILIZATION</h2>
	</div>
	<table class="sectionTable" >
	<tr>
		<td  class="caption left" style="width:70%;">
		<p>The first traces of human habitation in Greece appeared during the Paleolithic Age (approx. 120000 - 10000 B.C.). During the Neolithic Age that followed (approx. 7000 - 3000 B.C.), a plethora of Neolithic buildings spread throughout the country. Buildings and cemeteries have been discovered in Thessaly (Sesklo, Dimini), Macedonia, the Peloponnese, etc.</p>
		<p>The beginning of the Bronze Age (approx. 3000-1100 B.C.) is marked by the appearance of the first urban centers in the Aegean region (Poliochni on Limnos). Flourishing settlements were found on Crete, Mainland Greece, the Cyclades and the Northeastern Aegean, regions where characteristic cultural patterns developed.</p>
		<p>At the beginning of the 2nd Millennium B.C., organized palatial societies appeared on Minoan Crete, resulting in the development of the first systematic scripts. The Minoans, with Knossos Palace as their epicenter, developed a communications network with races from the Eastern Mediterranean region, adopted certain elements and in turn decisively influenced cultures on the Greek mainland and the islands of the Aegean.</p>
		<p>On Mainland Greece, the Mycenean Greeks –taking advantage of the destruction caused on Crete by the volcanic eruption on Santorini (around 1500 B.C.)- became the dominant force in the Aegean during the last centuries of the 2nd Millennium B.C.. The Mycenean acropolises (citadels) in Mycenae, Tiryns, Pylos, Thiva, Glas, Athens and Iolcus, then comprised the centers of the bureaucratically organized kingdoms. </p>
		<p>The extensive destruction of the Mycenean centers around 1200 B.C. led to the decline of the Mycenean civilization and caused the population to migrate to the coastal regions of Asia Minor and Cyprus (1st Greek colonization).</p>
		<p>During the historical years, the civilisations of the Geometric Period (9th – 8th Century B.C.) and the Archaic Period (7th – 6th Century B.C.) were considered to be the forerunners of the culture found in the Classical Period (5th – 4th Century B.C.). The Classical works of art, with their ideal proportions and beauty, expressed the philosophical ideals of their times, and were the model of the European Renaissance Era of the 15th Century A.D. Greek civilisation developed during the subsequent Hellenistic Years (3rd – 1st Century B.C.) and the Roman Years (1st Century B.C. – 3rd Century A.D.), within the framework of large kingdoms and an empire respectively.</p>
		<p>Today’s visitors to Greece have the opportunity to trace the “fingerprints” of Greek history from the Paleolithic Era to the Roman Period in the hundreds of archaeological sites, as well as in the archaeological museums and collections that are scattered throughout the country.</p>
		</td>
		<td class="right" style="width:30%;">
		<img src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/culture/MUSEUM%20OF%20CYCLADIC%20ART_agoni%20grammi_450.jpg" height="400px" width="100%"/></td>
	</tr>
	</table>
	<div class="caption outerDiv">
		<p>Greek civilisation again flourished -within the framework of an empire- during the Byzantine Years (early, middle and late - 4th – 15th Century A.D.), while civilisation in more recent times was marked by the Ottoman occupation and the emergence of the new Hellenic State after the Greek War of Independence (1821-1830).
		   A visit to archaeological sites, museums and monuments throughout the country provides a vivid picture of the civilisations in Greece and their accomplishments in arts and technology from the Prehistoric Era to modern times.
		  The traditional heritage of a country is the sum of the cultural and material achievements bequeathed by previous generations.Folk culture for the Greek people, rich in music, dances, poetry and theatre, is part of their every day life.  All over the country have been created many specialized museums and cultural organisations aiming to preserve and study the Greek traditional heritage.</p>
	</div>
	
	<div class="heading" >
	<h2>GEOGRAPHY</h2>
	</div>
	<table class="sectionTable" >
	<tr>
		<td  class="left"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Greece_topo.jpg/420px-Greece_topo.jpg" height="400px" width="100%"/></td>
		<td class="caption right">
		<p>Greece is located in south-eastern Europe, on the southern end of the Balkan Peninsula (Haemus peninsula); it lies at the meeting point of three continents – Europe, Asia and Africa. Greece borders to the North on Bulgaria and the Former Yugoslav Republic of Macedonia (F.Y.R.O.M.), to the Northwest on Albania, to the Northeast on Turkey; to the West it is washed by the Ionian Sea; to the South by the Mediterranean Sea and to the East by the Aegean Sea.
			The total area of Greece is 131,957 km2 and consists of three main geographic areas:
			a peninsular mainland (that extends from the region of Central Greece on the South to the region of Thrace on the North) being the biggest geographic feature of the country
			the Peloponnese peninsula that is separated from the mainland by the canal of the Corinth Isthmus,
			and around 6.000 islands and islets, scattered in the Aegean and Ionian Sea, most of them grouped in clusters, that constitute the unique Greek archipelago. Crete, Rhodes, Corfu, the Dodecanese and the Cyclades are some of the famous and popular islands and island clusters in Greece.
			Eighty percent of the country consists of mountains or hills, making Greece one of the most mountainous countries of Europe; furthermore, it has 16.000 kilometres of coastline of which 7500 are found around the thousands islands of the Greek archipelago, a truly unparalleled phenomenon on the European continent.</p></td>
	</td>
	</tr>
	</table>
	
	<div class="heading" >
	<h2>BEFORE YOU TRAVEL GREECE</h2>
	</div>
	<div class="caption outerDiv" >
	Before you travel in Greece, it is advisable to bear in mind the following:<br>
		<ul type="circle">
		<li>Depending on your country of origin, you might need a passport and a visa; you could obtain a visa through the Greek consulate nearest to your residence.</li>
		<li>Call your bank or your credit card company to let them know that you will be using it in Greece.</li>
		<li>The Electric Current in Greece is 230V AC (50Hz). Appliances from North America require a transformer and British ones an adaptor.</li>
		<li>In order to have access to necessary health care, tourists from member states of the European Union (EU) wishing to visit Greece must be holders of the European Health Card (EHIC) or any other legal Community document issued by their competent social security agency. Tourists from countries other than the member states of the European Union must consult their social security agency for information before travelling.</li>
		<li>Contact your phone company in order to make sure that your can use your mobile phone in Greece.</li>
		<li>As a consumer, you are protected by Greek consumer protection law for all transactions you make while travelling in the country.</li>
		</ul>
	</div>
	</div>
</section>
</div>
</body>
</html>
