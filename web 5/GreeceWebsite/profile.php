
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link href="css/style.css" rel="stylesheet">
<script type="text/javascript">
function validateForm(){
	var firstName = document.signForm.fName.value;
	var lastName = document.signForm.lName.value;
	var genderM = document.signForm.gender_male.value;
    var genderF = document.signForm.gender_female.value;

	var email = document.signForm.mail.value;
	var password = document.signForm.psw.value;
	var age = document.signForm.age1.value;
	
	var dancing = document.signForm.hobby1.checked;
	var partying = document.signForm.hobby2.checked;
	var photography = document.signForm.hobby3.checked;
	var reading  = document.signForm.hobby4.checked;
	

		if(firstName == ""){
			document.getElementById("sNotice").innerHTML ="First Name feild is empty.";
			retrun false;
		}
		
		if(laststName == ""){
			document.getElementById("sNotice").innerHTML ="Last Name feild is empty.";
			retrun false;
		}
		
		if(genderM.checked==false && genderF.checked==false )
       {
            document.getElementById("sNotice").innerHTML ="You must select male or female";
            return false;
       }
	   
	   if(email == ""){
			document.getElementById("sNotice").innerHTML ="Email feild is empty.";
			retrun false;
		}
		
		if(password == ""){
			document.getElementById("sNotice").innerHTML ="Password feild is empty.";
			retrun false;
		}
		
		if(age == ""){
			document.getElementById("sNotice").innerHTML ="Age feild is empty.";
			retrun false;
		}
		
		if(dancing.hecked == false && partying.checked == false && photography == false && reading == false ){
		 document.getElementById("sNotice").innerHTML ="You must select atleast one hobby.";
            return false;
		}
		var atPos = email.indexOf("@");
		var dotPos = email.lastIndexOf(".");
		if(atPos >1 || dotPos < atPos+ || dotPos+2 >= email.length){
			document.getElementById("sNotice").innerHTML ="Email is invalid.";
			retrun false;
		}
		
		document.getElementById("sNotice").innerHTML ="";
			retrun true;>
</script>
</head>

<body bgcolor="#2988f1">
<div class="homeSection">
<div class="topnav" id="myTopnav">
  <a href="logout.php">Logout</a>
  <a href="profile.php" class="active">Profile</a>  
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
<div id="sWrapper">
<div id="sHeader">Update Profile</div>
<form name="signForm" action="registraion.php" method="Post" onsubmit="retrun validateForm()">
<div class="sRow">
<div class="sLabel">First Name</div>
	<div class="sInput">
	 <input type="text" class="inputCls" name="ftName"><br>
	</div>
</div>

<div class="sRow">
<div class="sLabel">Last Name</div>
	<div class="sInput">
	 <input type="text" class="inputCls" name="lName"><br>
	</div>
</div>

<div class="sRow">
<div class="sLabel">Gender</div>
	<div class="sInput">
	  <input type="radio" name="gender_male" value="male">Male
      <input type="radio" name="gender_female" value="female">Female<br>
	</div>
</div>

<div class="sRow">
<div class="sLabel">Email</div>
	<div class="sInput">
	 <input type="email" class="inputCls" name="mail"><br>
	</div>
</div>

<div class="sRow">
<div class="sLabel">Password</div>
	<div class="sInput">
	 <input type="password" class="inputCls" name="psw"><br>
	</div>
</div>

<div class="sRow">
<div class="sLabel">Age</div>
	<div class="sInput">
	 <input type="text" class="inputCls" name="age1"><br>
	</div>
</div>

<div class="sRow">
<div class="sLabel">Hobbies</div>
	<div class="sInput">
	 <input type="checkbox"  name="hobby" value="Dancing">Dancing
	 <input type="checkbox"  name="hobby" value="Partying">Partying
	 <input type="checkbox"  name="hobby" value="Photography">Photography
	 <input type="checkbox"  name="hobby" value="Reading">Reading
<br><br>
	</div>
</div>

<div class="sRow">
<input type="submit" value="Update">
</div>
</form>
<!-- To Show error-->
<div id="sNotice"></div>
</div>
</body>
</html>
</body>
</html>
