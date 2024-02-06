<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<body>
    
    <?php 
    
        $me = array('hobbies' => array('jeux-video', 'MMA', 'manger', 'dormir'));

        echo 'tablau $me';
        echo '<pre>';
        print_r($me);
        echo '</pre>';


        $mother = array('hobbies' => array('cuisiner', 'dormir'));

        $me['mother'] = $mother;

        echo 'tablau $me + $mother intégrer';
        echo '<pre>';
        print_r($me);
        echo '</pre>';

        // suite..

        //total mother
        $nbrMotherHobbies = count($mother['hobbies']);
        echo "Ma mère à $nbrMotherHobbies hobbies <br>";

        // total me
        $nbrMeHobbies = count($me['hobbies']);
        echo "J'ai $nbrMeHobbies hobbies <br>";

        //total total
        $totalHobbies = $nbrMotherHobbies + $nbrMeHobbies;
        echo "Au total, nous avons $totalHobbies hobbies."


    ?>

</body>
</html>