<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == null || x == "") {
        alert("This must be filled out");
        return false;
    }

var y = document.forms["myForm"]["fresult"].value;
    if (y == null || y == "") {
        alert("Result must be filled out");
        return false;
    }

var z = document.forms["myForm"]["fcomment"].value;
    if (z == null || z == "") {
        alert("Comment must be filled out");
        return false;
    }
}


</script>
</head>
<body>

<form name="myForm" action="demo_form.asp"
onsubmit="return validateForm()" method="post">
Name: <input type="text" name="fname">
Result: <input type="text" name="fresult">
Comment: <input type="text" name="fcomment">
<input type="submit" value="Submit">
</form>

</body>
</html>
