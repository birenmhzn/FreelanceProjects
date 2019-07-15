function partner() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("hide-partner");
    if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }
}
function validateForm() {
    var name = document.forms["myForm"]["name"].value;
    var address = document.forms["myForm"]["address"].value;
    var email = document.forms["myForm"]["email"].value;
    var date = document.forms["myForm"]["dob"].value;
    var occupation = document.forms["myForm"]["occupation"].value;
    var gender = document.forms["myForm"]["gender"].value;
    if (name == "") {alert("Name must be filled out");return false;}
    else if(address == "") {alert("Name must be filled out");return false;}
    else if(email == "") {alert("Name must be filled out");return false;}
    else if(date == "") {alert("Name must be filled out");return false;}
    else if(occupation == "") {alert("Name must be filled out");return false;}
    else if(gender == "") {alert("Name must be filled out");return false;}
}
function display_preferred_accommodation(){
    var dis = document.getElementById("preferred_accommodation");
    dis.style.display = "block";
}
function preferred_modes_of_travel(){
    var dis = document.getElementById("preferred_modes_of_travel");
    dis.style.display = "block";    
}
function preferred_travel_environment(){
    var dis = document.getElementById("preferred_travel_environment");
    dis.style.display = "block";      
}
function display_child_div(){
    var myselect = document.getElementById("display_child_div1");
    //alert(myselect.options[myselect.selectedIndex].value);
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
}

