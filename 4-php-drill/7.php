<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7</title>
</head>
<body>

    <form method="get" action="">
        <label for="age">Please type your age :</label>
        <input type="number" name="age">
        <br>

        <label for="gender">Man or Woman?</label>
        <input type="radio" name="gender" value="Man">Man
        <input type="radio" name="gender" value="Woman">Woman
        <br>

        <label for="Name">Enter your name:</label>
        <input type="text" name="name">
        <br>
     
        <input type="submit" name="submit" value="Submit">
    </form>


    <?php

        if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['name'])) {

            $gender = $_GET['gender'];
            $age = $_GET['age'];
            $name = $_GET['name'];

            $message = "Sorry, you don't fit the criteria.";

            if ($gender == "Woman" && $age >= 21 && $age <= 40) {
                $message = "Welcome to the team, $name!";
            }

            echo $message;
        }        

    ?>
    
</body>
</html>