<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>
<body>
    
    <?php 
    
        $me = array(
            'age'=> 23 ,
            'firstname' => 'Ugur' ,
            'lastname'  => 'Firat' ,
            'favourite_movies' => array('Harry Potter', 'Lord of the rings', 'Pirates of the caribbean'),
            'hobbies' => array('jeux-video', 'MMA', 'manger', 'dormir')
        );
    
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
        echo "Au total, nous avons $totalHobbies hobbies. <br> <br>";

        // ajout taxidermie
        echo "Ajoutez taxidermie dans ma liste des hobbies<br>";

        $me['hobbies'][] = 'Taxidermy';

        echo 'tableau $me';
        echo '<pre>';
        print_r($me);
        echo '</pre>';

        echo "<br><br>";
        //modification du nom de famille
        $me['lastname'] = 'Durand';

        echo "Modification du nom de famille <br><br>";
        echo 'tableau $me';
        echo '<pre>';
        print_r($me);
        echo '</pre>';



    ?>

</body>
</html>