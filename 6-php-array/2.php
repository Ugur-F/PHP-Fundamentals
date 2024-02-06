<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<body>
    
    <?php 
    
        $me = array('hobbies' => array('jeux-video', 'MMA', 'manger', 'dormir'));

        echo 'tablau $me';
        echo '<pre>';
        print_r($me);
        echo '</pre>';


        $mother = array('hobbies' => array('cuisiner', 'dormir'));

        // echo 'tableau $mother'
        // echo '<pre>';
        // print_r($mother);
        // echo '</pre>';


        $me['mother'] = $mother;

        echo 'tablau $me + $mother intégrer';
        echo '<pre>';
        print_r($me);
        echo '</pre>';

    ?>

</body>
</html>