//JavaScript file for sidebar
$("#sidebar-toggle").click(function(e) { 
	// JS function called when user click on button which id has sidebar-toggle
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});