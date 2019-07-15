function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}


function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    var y = document.forms["myForm"]["email"].value;
    var z = document.forms["myForm"]["msg"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    else if (y == "") {
        alert("Name must be filled out");
        return false;
    }
    else if (z == "") {
        alert("Name must be filled out");
        return false;
    }
}