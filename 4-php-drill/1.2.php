<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.2</title>
</head>
<body>
    
    <?php 
        // 1.2 Clean your room Exercise, improved

        // Create the array of possible states
        $possible_states = ["very durty", "durty", "clean"];

        // When testing, change the index value to navigate to the possible array values
        $room_filthiness = $possible_states[0]; 

        if( $room_filthiness == $possible_states[0] ){
            echo "Yuk, Room is Disgusting! Let's clean it up !";
        } else if( $room_filthiness == $possible_states[1] ){
            echo "Yuk, Room is dirty : let's clean it up !";
        // ...
        } else {
            echo "<br>Nothing to do, room is neat.";
        }
    ?>

</body>
</html>