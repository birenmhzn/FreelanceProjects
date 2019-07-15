function partner() {//js code for partner id to hide and show partner field after click on check box
    var checkBox = document.getElementById("marriedCheck");
    var text = document.getElementById("hide-partner");
    if (checkBox.checked == true){//if click
        text.style.display = "block";//code for show content
    } else {
       text.style.display = "none";//code for hide content
    }
}
function display_preferred_accommodation(){

    var name=document.getElementById("name").value;//get value from input field name
    var address=document.getElementById("address").value;//get value from input field address
    var dob=document.getElementById("dob").value;//get value from input field dob
    var email=document.getElementById("email").value;//get value from input field email
    var occupation=document.getElementById("occupation").value;//get value from input field occupation

	var married = document.getElementById("marriedCheck").checked;//get value from input field married
	
	if(married){
		    var partner_name=document.getElementById("partner_name").value;//get value from input field partner name
			var partner_occupation=document.getElementById("partner_occupation").value;//get value from input field partner occupation
			var partner_dob=document.getElementById("partner_dob").value;//get value from input field partner dob
			var partner_gender=document.getElementById("partner_gender").value;//get value from input field partner gender
			
			var how_active=document.getElementById("how_active").value;//get value from input field how active

			if(name != "" && address != "" && dob != "" && email != "" && occupation != "" && partner_gender != "" && partner_dob != "" && partner_occupation != "" && partner_name != "" && how_active != "")
			{   
				var dis1 = document.getElementById("index");
				dis1.style.display = "none";
				var dis2 = document.getElementById("preferred_accommodation");
				dis2.style.display = "block";
			}
			else
			{
				alert("All fields must be filled out.");
			}
	} else{
			var how_active=document.getElementById("how_active").value;

			if(name != "" && address != "" && dob != "" && email != "" && occupation != "" && how_active != "")
			{   
				var dis1 = document.getElementById("index");
				dis1.style.display = "none";
				var dis2 = document.getElementById("preferred_accommodation");
				dis2.style.display = "block";
			}
			else
			{
				alert("All fields must be filled out.");
			}
	}
	    
}

function preferred_modes_of_travel(){

    var preferred_accommodation_room=document.getElementById("preferred_accommodation_room").value;//get value from input field preferred_accommodation_room
    var preferred_accommodation_bed_breakfast_with=document.getElementById("preferred_accommodation_bed_breakfast_with").value;
    //get value from input field preferred_accommodation_bed_breakfast_with
    if(preferred_accommodation_room != "" && preferred_accommodation_bed_breakfast_with != "")
    {
        var dis1 = document.getElementById("index");
        dis1.style.display = "none";
        var dis2 = document.getElementById("preferred_accommodation");
        dis2.style.display = "none";
        var dis3 = document.getElementById("preferred_modes_of_travel");
        dis3.style.display = "block"; 
    }
    else
    {
        alert("All fields must be filled out.");
    }   
}
function preferred_travel_environment2(){

    var preferred_modes_of_travel_air = document.getElementById("preferred_modes_of_travel_air").value;//get value from input field preferred_modes_of_travel_air
    var preferred_modes_of_travel_water = document.getElementById("preferred_modes_of_travel_water").value;//get value from input field preferred_modes_of_travel_water

    if(preferred_modes_of_travel_air != "" && preferred_modes_of_travel_water != "")
    {
        var dis1 = document.getElementById("index");
        dis1.style.display = "none";
        var dis2 = document.getElementById("preferred_accommodation");
        dis2.style.display = "none";
        var dis3 = document.getElementById("preferred_modes_of_travel");
        dis3.style.display = "none"; 
        var dis = document.getElementById("preferred_travel_environment");
        dis.style.display = "block";  
    }
    else
    {
        alert("All fields must be filled out.");
    }     
}
function preferred_travel_environment(){

    var preferred_destination_africa=document.getElementById("preferred_destination_africa").value;//get value from input field preferred_destination_africa
    var preferred_destination_asia=document.getElementById("preferred_destination_asia").value;//get value from input field preferred_destination_asia
    var preferred_destination_central_america=document.getElementById("preferred_destination_central_america").value;//get value from input field preferred_destination_central_america
    var preferred_destination_europe=document.getElementById("preferred_destination_europe").value;//get value from input field preferred_destination_europe
    var preferred_destination_europe_union=document.getElementById("preferred_destination_europe_union").value;//get value from input field preferred_destination_europe_union
    var preferred_destination_middle_east=document.getElementById("preferred_destination_middle_east").value;//get value from input field preferred_destination_middle_east
    var preferred_destination_north_america=document.getElementById("preferred_destination_north_america").value;//get value from input field preferred_destination_north_america
    var preferred_destination_oceania=document.getElementById("preferred_destination_oceania").value;//get value from input field preferred_destination_oceania
    var preferred_destination_south_america=document.getElementById("preferred_destination_south_america").value;//get value from input field preferred_destination_south_america
    var preferred_destination_the_caribbean=document.getElementById("preferred_destination_the_caribbean").value;//get value from input field preferred_destination_the_caribbean

    if(preferred_destination_africa != "" && preferred_destination_asia != "" && preferred_destination_central_america != "" && preferred_destination_europe != "" && preferred_destination_europe_union != "" && preferred_destination_middle_east != "" && preferred_destination_north_america != "" && preferred_destination_oceania != "" && preferred_destination_south_america != "" && preferred_destination_the_caribbean != "")
    {
        var dis1 = document.getElementById("index");
        dis1.style.display = "none";
        var dis2 = document.getElementById("preferred_accommodation");
        dis2.style.display = "none";
        var dis3 = document.getElementById("preferred_modes_of_travel");
        dis3.style.display = "none"; 
        var dis = document.getElementById("preferred_travel_environment");
        dis.style.display = "block";  
    }
    else
    {
        alert("All fields must be filled out.");
    }     
}

function display_child_div(){
    var myselect = document.getElementById("display_child_div1");
    var o=myselect.options[myselect.selectedIndex].value;

    switch(o)
    {
        case "1":
            document.getElementById("child-group1").innerHTML ="<link href='css/style.css' rel='stylesheet'><center><div class='container' style='width:100%;'><center><h1>Children : 1</h1><br><input class='inloc' type='text' name='children_name1' placeholder='Enter Child Name'  ><br><input class='inloc' type='date' name='children_date1'  ><br><select class='inloc' name='children_gender1'  ><option value='gender'>GENDER</option><option value='male'>MALE</option><option value='female'>FEMALE</option></select></center></div></center>";
        break;
        case "2":
            document.getElementById("child-group2-1").innerHTML ="<link href='css/style.css' rel='stylesheet'><center><div class='container' style='width:100%;'><center><h1>Children : 1</h1><br><input class='inloc' type='text' name='children_name1' placeholder='Enter Child Name'  ><br><input class='inloc' type='date' name='children_date1'  ><br><select class='inloc' name='children_gender1'  ><option value='gender'>GENDER</option><option value='male'>MALE</option><option value='female'>FEMALE</option></select></center></div></center>";
            document.getElementById("child-group2-2").innerHTML ="<link href='css/style.css' rel='stylesheet'><center><div class='container' style='width:100%;'><center><h1>Children : 2</h1><br><input class='inloc' type='text' name='children_name2' placeholder='Enter Child Name'  ><br><input class='inloc' type='date' name='children_date2'  ><br><select class='inloc' name='children_gender2'  ><option value='gender'>GENDER</option><option value='male'>MALE</option><option value='female'>FEMALE</option></select></center></div></center>";
        break;
        case "3":
            document.getElementById("child-group3-1").innerHTML ="<link href='css/style.css' rel='stylesheet'><center><div class='container' style='width:100%;'><center><h1>Children : 1</h1><br><input class='inloc' type='text' name='children_name1' placeholder='Enter Child Name'  ><br><input class='inloc' type='date' name='children_date1'  ><br><select class='inloc' name='children_gender1'  ><option value='gender'>GENDER</option><option value='male'>MALE</option><option value='female'>FEMALE</option></select></center></div></center>";
            document.getElementById("child-group3-2").innerHTML ="<link href='css/style.css' rel='stylesheet'><center><div class='container' style='width:100%;'><center><h1>Children : 2</h1><br><input class='inloc' type='text' name='children_name2' placeholder='Enter Child Name'  ><br><input class='inloc' type='date' name='children_date2'  ><br><select class='inloc' name='children_gender2'  ><option value='gender'>GENDER</option><option value='male'>MALE</option><option value='female'>FEMALE</option></select></center></div></center>";
            document.getElementById("child-group3-3").innerHTML ="<link href='css/style.css' rel='stylesheet'><center><div class='container' style='width:100%;'><center><h1>Children : 3</h1><br><input class='inloc' type='text' name='children_name3' placeholder='Enter Child Name'  ><br><input class='inloc' type='date' name='children_date3'  ><br><select class='inloc' name='children_gender3'  ><option value='gender'>GENDER</option><option value='male'>MALE</option><option value='female'>FEMALE</option></select></center></div></center>";
        break;
        case "4":
            document.getElementById("child-group4-1").innerHTML ="<link href='css/style.css' rel='stylesheet'><center><div class='container' style='width:100%;'><center><h1>Children : 1</h1><br><input class='inloc' type='text' name='children_name1' placeholder='Enter Child Name'  ><br><input class='inloc' type='date' name='children_date1'  ><br><select class='inloc' name='children_gender1'  ><option value='gender'>GENDER</option><option value='male'>MALE</option><option value='female'>FEMALE</option></select></center></div></center>";
            document.getElementById("child-group4-2").innerHTML ="<link href='css/style.css' rel='stylesheet'><center><div class='container' style='width:100%;'><center><h1>Children : 2</h1><br><input class='inloc' type='text' name='children_name2' placeholder='Enter Child Name'  ><br><input class='inloc' type='date' name='children_date2'  ><br><select class='inloc' name='children_gender2'  ><option value='gender'>GENDER</option><option value='male'>MALE</option><option value='female'>FEMALE</option></select></center></div></center>";
            document.getElementById("child-group4-3").innerHTML ="<link href='css/style.css' rel='stylesheet'><center><div class='container' style='width:100%;'><center><h1>Children : 3</h1><br><input class='inloc' type='text' name='children_name3' placeholder='Enter Child Name'  ><br><input class='inloc' type='date' name='children_date3'  ><br><select class='inloc' name='children_gender3'  ><option value='gender'>GENDER</option><option value='male'>MALE</option><option value='female'>FEMALE</option></select></center></div></center>";
            document.getElementById("child-group4-4").innerHTML ="<link href='css/style.css' rel='stylesheet'><center><div class='container' style='width:100%;'><center><h1>Children : 4</h1><br><input class='inloc' type='text' name='children_name4' placeholder='Enter Child Name'  ><br><input class='inloc' type='date' name='children_date4'  ><br><select class='inloc' name='children_gender4'  ><option value='gender'>GENDER</option><option value='male'>MALE</option><option value='female'>FEMALE</option></select></center></div></center>";
        break;
        case "0":
            
        document.getElementById( 'child-group1' ).style.display = 'none';
        document.getElementById( 'child-group2-1' ).style.display = 'none';
        document.getElementById( 'child-group2-2' ).style.display = 'none';
        document.getElementById( 'child-group3-1' ).style.display = 'none';
        document.getElementById( 'child-group3-2' ).style.display = 'none';
        document.getElementById( 'child-group3-3' ).style.display = 'none';
        document.getElementById( 'child-group4-1' ).style.display = 'none';
        document.getElementById( 'child-group4-2' ).style.display = 'none';
        document.getElementById( 'child-group4-3' ).style.display = 'none';
        document.getElementById( 'child-group4-4' ).style.display = 'none';
        break;
    }

    if (o==1) 
    {
        document.getElementById( 'child-group1' ).style.display = 'block';
        document.getElementById( 'child-group2-1' ).style.display = 'none';
        document.getElementById( 'child-group2-2' ).style.display = 'none';
        document.getElementById( 'child-group3-1' ).style.display = 'none';
        document.getElementById( 'child-group3-2' ).style.display = 'none';
        document.getElementById( 'child-group3-3' ).style.display = 'none';
        document.getElementById( 'child-group4-1' ).style.display = 'none';
        document.getElementById( 'child-group4-2' ).style.display = 'none';
        document.getElementById( 'child-group4-3' ).style.display = 'none';
        document.getElementById( 'child-group4-4' ).style.display = 'none';
    }
    else if (o==2)
    {
        document.getElementById( 'child-group2-1' ).style.display = 'block';
        document.getElementById( 'child-group2-2' ).style.display = 'block';
        document.getElementById( 'child-group1' ).style.display = 'none';
        document.getElementById( 'child-group3-1' ).style.display = 'none';
        document.getElementById( 'child-group3-2' ).style.display = 'none';
        document.getElementById( 'child-group3-3' ).style.display = 'none';
        document.getElementById( 'child-group4-1' ).style.display = 'none';
        document.getElementById( 'child-group4-2' ).style.display = 'none';
        document.getElementById( 'child-group4-3' ).style.display = 'none';
        document.getElementById( 'child-group4-4' ).style.display = 'none';
    }
    else if (o==3)
    {
        document.getElementById( 'child-group3-1' ).style.display = 'block';
        document.getElementById( 'child-group3-2' ).style.display = 'block';
        document.getElementById( 'child-group3-3' ).style.display = 'block';
        document.getElementById( 'child-group1' ).style.display = 'none';
        document.getElementById( 'child-group2-1' ).style.display = 'none';
        document.getElementById( 'child-group2-2' ).style.display = 'none';
        document.getElementById( 'child-group4-1' ).style.display = 'none';
        document.getElementById( 'child-group4-2' ).style.display = 'none';
        document.getElementById( 'child-group4-3' ).style.display = 'none';
        document.getElementById( 'child-group4-4' ).style.display = 'none';
    }
    else if (o==4)
    {
        document.getElementById( 'child-group4-1' ).style.display = 'block';
        document.getElementById( 'child-group4-2' ).style.display = 'block';
        document.getElementById( 'child-group4-3' ).style.display = 'block';
        document.getElementById( 'child-group4-4' ).style.display = 'block';
        document.getElementById( 'child-group1' ).style.display = 'none';
        document.getElementById( 'child-group2-1' ).style.display = 'none';
        document.getElementById( 'child-group2-2' ).style.display = 'none';
        document.getElementById( 'child-group3-1' ).style.display = 'none';
        document.getElementById( 'child-group3-2' ).style.display = 'none';
        document.getElementById( 'child-group3-3' ).style.display = 'none';
    }
    else if (o===0)
    {
        document.getElementById( 'child-group1' ).style.display = 'none';
        document.getElementById( 'child-group2-1' ).style.display = 'none';
        document.getElementById( 'child-group2-2' ).style.display = 'none';
        document.getElementById( 'child-group3-1' ).style.display = 'none';
        document.getElementById( 'child-group3-2' ).style.display = 'none';
        document.getElementById( 'child-group3-3' ).style.display = 'none';
        document.getElementById( 'child-group4-1' ).style.display = 'none';
        document.getElementById( 'child-group4-2' ).style.display = 'none';
        document.getElementById( 'child-group4-3' ).style.display = 'none';
        document.getElementById( 'child-group4-4' ).style.display = 'none';
    }
}

