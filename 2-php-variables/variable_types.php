<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
</head>
<body>

<!-- VARIABLES -->
<?php
  $firstName = "Ugur";
  $age = 23;
  $eyesColor = "Brown";

  $family = array("Father", "Mother", "Sister");
  $hungry = true;

?>

<!-- NAME -->
<p>Hi! My name is <?php echo $firstName ?>.</p>

<!-- AGE -->
<p>I am <?php echo $age ?>. </p>

<!-- EYES COLOR -->
<p>My eyes are <?php echo $eyesColor ?>.</p>

<!-- FAMILY -->
<p>The first person in my family is <?php echo $family[0] ?>.</p>

<?php 
if ($hungry == true) {
  echo "I'm hungry!";
} else {
  echo "I'm not hungry!";
}

?>


</body>
</html>