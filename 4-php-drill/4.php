<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
</head>
<body>
    
    <?php 
       if (isset($_GET['age']) && isset($_GET['gender'])) {

            $age = $_GET['age'];
            $gender = $_GET['gender'];

    if ($age < 12) {
        if ($gender == "Woman") {
            echo "Hello little girl!";
        } else {
            echo "Hello little boy!";
        }
    } elseif ($age >= 12 && $age <= 18) {
        if ($gender == "Woman") {
            echo "Hello Miss Teen!";
        } else {
            echo "Hello mister Teen!";
        }
    } elseif ($age > 18 && $age <= 115) {
        if ($gender == "Woman") {
            echo "Hello Madam!";
        } else {
            echo "Hello Sir!";
        }
    } else {
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}
    ?>


    <form method="get" action="">
        <label for="age">Entrez votre age :</label>
        <input type="number" name="age">
        <br>
        <label for="genre">Man or Woman?</label>
        <input type="radio" name="gender" value="Man">Man
        <input type="radio" name="gender" value="Woman">Woman
        <br>
        <br>
        <input type="submit" name="submit" value="Confirmer">
    </form>

</body>
</html>