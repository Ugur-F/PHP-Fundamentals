<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
</head>
<body>
    
    <?php 
    
        $me = array('hobbies' => array('jeux-video', 'MMA', 'manger', 'dormir'));

        echo 'tableau $me';
        echo '<pre>';
        print_r($me);
        echo '</pre>';


        $mother = array('hobbies' => array('cuisiner', 'dormir'));

        $me['mother'] = $mother;

        echo 'tableau $me + $mother intégrer';
        echo '<pre>';
        print_r($me);
        echo '</pre>';

        //

        //total mother
        $nbrMotherHobbies = count($mother['hobbies']);
        echo "Ma mère à $nbrMotherHobbies hobbies <br>";

        // total me
        $nbrMeHobbies = count($me['hobbies']);
        echo "J'ai $nbrMeHobbies hobbies <br>";

        //total total
        $totalHobbies = $nbrMotherHobbies + $nbrMeHobbies;
        echo "Au total, nous avons $totalHobbies hobbies.<br><br>";

         // suite..
         echo "Suite : ajoutez taxidermie dans ma liste des hobbies<br><br>";

         $me['hobbies'][] = 'Taxidermy';
 
         echo 'tableau $me';
         echo '<pre>';
         print_r($me);
         echo '</pre>';
 



    ?>

</body>
</html>