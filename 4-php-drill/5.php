<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5t</title>
</head>
<body>
    
    <?php

        if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['english'])) {

            $age = $_GET['age'];
            $gender = $_GET['gender'];
            $english = $_GET['english'];

            if ($age < 12) {

                if ($english == "yes") {

                    if ($gender == "Woman") {
                        echo "Hello Girl!";
                    } else {
                        echo "Hello boy!";
                    }
                } else {
                    if ($gender == "Woman") {
                        echo "Aloha Girl!";
                    } else {
                        echo "Aloha boy!";
                    }
                }
        } elseif ($age >= 12 && $age <= 18) {

            if ($english == "yes") {

                if ($gender == "Woman") {
                    echo "Hello Miss Teen!";
                } else {
                    echo "Hello mister Teen!";
                }
            } else {
                if ($gender == "Woman") {
                    echo "Aloha Miss Teen!";
                } else {
                    echo "Aloha mister Teen!";
                }
            }
        } elseif ($age > 18 && $age <= 115) {

            if ($english == "yes") {

                if ($gender == "Woman") {
                    echo "Hello Madam!";
                } else {
                    echo "Hello Sir!";
                }
            } else {
                if ($gender == "Woman") {
                    echo "Aloha Madam!";
                } else {
                    echo "Aloha Sir!";
                }
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

        <label for="gender">Man or Woman?</label>
        <input type="radio" name="gender" value="Man">Man
        <input type="radio" name="gender" value="Woman">Woman
        <br>

        <label for="english">Parlez vous anglais?</label>
        <input type="radio" name="english" value="yes">Yes
        <input type="radio" name="english" value="no">No
        <br>

        <input type="submit" name="submit" value="Confirmez">
    </form>


</body>
</html>