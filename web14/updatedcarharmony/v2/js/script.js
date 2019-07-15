function onSubmit() 
{ 
    var fields = $("input[type='checkbox']").serializeArray(); 
    if (fields.length <= 0 || fields.length == 1) 
    { 
        alert('Select at least 2 likes.'); 
        // cancel submit
        return false;
    } 
}

// register event on form, not submit button
$('#updateform').submit(onSubmit)