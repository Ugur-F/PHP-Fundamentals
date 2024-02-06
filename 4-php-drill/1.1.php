<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.1</title>
</head>
<body>

    <?php 
        
    // Correction de ce code 
    /*
        $room_is_filthy = true;

        if( write_your_condition_here ){
            echo "Yuk, Room is dirty : let's clean it up !";
            cleanup_room();
            echo "<br>Room is now clean!";
            $room_is_filthy = false;
        } else {
            echo "<br>Nothing to do, room is neat.";
        }
    */

    
            // 1.1 Clean your room Exercise 

            $room_is_filthy = true;

            if( $room_is_filthy == true ){
                echo "Yuk, Room is dirty : let's clean it up !";
                cleanup_room();
                echo "<br>Room is now clean!";
                $room_is_filthy = false;
            } else {
                echo "<br>Nothing to do, room is neat.";
            }
    ?>

</body>
</html>