function CheckFunction(){
	document.getElementById("checkbox").checked = true;
	document.getElementById("checkbutton").disabled = true;
	document.getElementById("checkbox").disabled = true;
}
function UncheckFunction(){
	document.getElementById("checkbox").checked = false;
	document.getElementById("checkbutton").disabled = false;
	document.getElementById("checkbox").disabled = false;
}