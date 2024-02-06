<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<body>
    
    <?php 
        if (isset($_GET['age'])) {
            $age = $_GET['age'];

            if ($age < 12) {
                echo "Hello kiddo!";

            } elseif ($age >= 12 && $age <= 18) {
                echo "Hello Teenager !";

            } elseif ($age > 18 && $age <= 115) {
                echo "Hello Adult !";
                
            } else {
                echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
        }
    ?>

    <form method="get" action="">
        <label for="age">Entrez votre age :</label>
        <input type="number" name="age">
        <input type="submit" name="submit" value="Confirmer">
    </form>


</body>
</html>

