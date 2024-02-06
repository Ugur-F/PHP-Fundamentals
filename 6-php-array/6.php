<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6</title>
</head>
<body>
    
    <?php 
    
        $me = array(
            'age'=> 23 ,
            'firstname' => 'Ugur' ,
            'lastname'  => 'Firat' ,
            'favourite_movies' => array('Harry Potter', 'Lord of the rings', 'Pirates of the caribbean'),
            'hobbies' => array('jeux-video', 'MMA', 'manger', 'dormir', 'taxidermie')
        );
    
        echo 'Tableau $me';
        echo '<pre>';
        print_r($me);
        echo '</pre>';


        $soulmate = array(
            'age'=> 30 ,
            'firstname' => 'Ariana' ,
            'lastname'  => 'Grande' ,
            'favourite_movies' => array('Taken', 'Taken 2', 'Taken 3'),
            'hobbies' => array('jeux-video', 'Theatre', 'manger', 'dormir', 'chanter')
        );

        echo 'Tableau $soulmate';
        echo '<pre>';
        print_r($soulmate);
        echo '</pre>';

        // Calcul de l'intersection des hobbies
        $possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);

        // Calcul de la fusion des hobbies (fusion sans doublons)
        $possible_hobbies_via_merge = array_unique(array_merge($me['hobbies'], $soulmate['hobbies']));

        echo "<br><br>Hobbies communs (Intersection) :";
        echo '<pre>';
        print_r($possible_hobbies_via_intersection);
        echo '</pre>';

        echo "Tous les hobbies combinés (Fusion) :";
        echo '<pre>';
        print_r($possible_hobbies_via_merge);
        echo '</pre>';

    ?>

</body>
</html>
