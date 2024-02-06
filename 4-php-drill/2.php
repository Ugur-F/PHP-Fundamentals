<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<body>
    
    <?php


        $now = date("H:i:sa");


        if ($now >="5:00:00" AND $now<"9:00:00"){
            echo ("Good morning !");

        } else if ($now >"9:00:00" AND $now<"12:00:00"){
            echo("Good day!");

        } else if ($now >"12:00:00" AND $now < "16:00:00")
            echo ("Good afternoon !");

        else if ($now > "16:00:00" AND $now <"21:00:00")
            echo ("Good evening");

        else {
            echo("Good night");
        }

        echo("<br>Current time is $now");


    ?>

</body>
</html>