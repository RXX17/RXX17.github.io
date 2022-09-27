<html>
<head>
<title>
What is your personality type? Quiz bucket quizzes
</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
Who is your favourite villain?:<br />
Jaykant Shirke (Singham) <input type="radio" name="attributes[]" value="Jaykant" /><br />
Maleficent<input type="radio" name="attributes[]" value="Maleficent" /><br />
Megamind <input type="radio" name="attributes[]" value="radio" /><br />
Why would I like something bad? <input type="radio" name="attributes[]" value="None" /><br />
Joker (Batman), Moriarty (Sherlock Holmes)<input type="radio" name="attributes[]" value="Joker" /><br />
Captain Hook<input type="radio" name="attributes[]" value="Hook" /><br />
<br />
<input type="submit" name="s" value="OK" />
</form>

<?php
 if (array_key_exists('s', $_GET)) {
   $description = join (" ", $_GET['attributes']);
   if($description=="Jaykant")
{echo "Sharmi";}
if($description=="Maleficent")
{echo "Nazifa";}
 };
?>

<?php

echo"<div class="po"> </div>";

?>


</body>
</html>