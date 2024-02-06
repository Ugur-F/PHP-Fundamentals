<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- 1 -->
    <h3>Exo 1</h3>
    <form method="post">
        <label for="word">Entrez un mot :</label>
        <input type="text" id="word" name="word">
        <input type="submit" value="Confirmer">
    </form>

    <?php
        if (!empty($_POST["word"])) {
            echo "En majuscule : " . ucfirst($_POST["word"]);
        }
    ?>

    <!-- 2 -->
    <?php
        echo "<h3>Exo 2</h3>";
        echo "<p>Année actuelle : " . date("Y") . "</p>";
    ?>

    <!-- 3 -->
    <?php 
        function displayHours(){
            date_default_timezone_set('Europe/Paris');
            echo date("H:i:s");
        }

        echo "<h3>Exo 3</h3>";
        echo displayHours();
    ?>
    


    <!-- 4 -->
    <?php 
        function sum($a, $b) {
            return $a + $b;
        }

        echo "<h3>Exo 4</h3>";
        echo sum(2, 3) . '<br>';
        echo sum(6, 4) . '<br>';
        echo sum(23, 27) . '<br>';
    ?>

    <!-- 4² -->
    <h3>Exo 4²</h3>
    <form action="" method="get">
        Nombre 1: <input type="text" name="nbr1"><br>
        Nombre 2: <input type="text" name="nbr2"><br>
        <input type="submit" value="Addition">
    </form>

    <?php 
        function somme($a, $b) {
            if (is_numeric($a) && is_numeric($b)) {
                return $a + $b;
            } else {
                return "Error: argument is not a number.";
            }
        }
        
        
        if (isset($_GET['nbr1']) && isset($_GET['nbr2'])) {
            $nbr1 = $_GET['nbr1'];
            $nbr2 = $_GET['nbr2'];
        
            echo somme($nbr1, $nbr2) . '<br>'; 
        }
    ?>
    
    <!-- 5 -->
    <h3>Exo 5</h3>
    <?php
        function fAccro($phrase) {
            $mots = explode(' ', $phrase); //divise la phrase en mots
            $acronyme = '';
        
            foreach ($mots as $mot) {
                // Prend la première lettre de chaque mot
                $acronyme .= $mot[0];
            }
        
            // Convertit en majuscules
            return strtoupper($acronyme);
        }
        
        echo fAccro("In code we trust!"); // ICWT
        
    ?>

    <!-- Exo 6 -->
    <h3>Exo 6</h3>
    <?php
        function remplaceAE($texte) {
            return str_replace("ae", "æ", $texte);
        }

        echo remplaceAE("caecotrophie");
    ?>

    <!-- Exo 6² -->
    <h3>Exo 6²</h3>
    <?php
        function remplaceAE2($texte) {
            return str_replace("æ", "ae", $texte);
        }

        echo remplaceAE2("cæcotrophie");
    ?>

    <!-- Exo 7 -->
    <h3>Exo 7</h3>
    <form method="post">
        <select name="class">
            <option>Notice</option>
            <option>Warning</option>
            <option>Error</option>
        </select>
        <input type="text" id="message" name="message">
        <input type="submit" value="Confirmer">
    </form>

    <?php
        function createMSG($class, $msg){
            return feedback($msg, $class);
        }

        if (!empty($_POST["message"])) {
            echo createMSG($_POST["class"], $_POST["message"]);
        }

        function feedback($msg, $class) {
            $style = '';
        
            switch ($class) {
                case 'Warning':
                    $style = 'color: orange;';
                    break;
                case 'Notice':
                    $style = 'color: blue;';
                    break;
                case 'Error':
                    $style = 'color: red;';
                    break;
                default:
                    $style = 'color: black;';
                    $classToAdd = 'Info'; // Classe par défaut
            }
        
            return "<div class='$class' style='$style'>$msg</div>";
        }
    ?>


    <!-- Exo 8 -->
    <?php

        function generateWord($minLength, $maxLength) {

            $length = rand($minLength, $maxLength);
            $characters = 'abcdefghijklmnopqrstuvwxyz';
            $word = '';

            for ($i = 0; $i < $length; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $word .= $characters[$index];
            }

            return $word;
        }
            
        if (isset($_POST['generate'])) {
            $word1 = generateWord(1, 5);
            $word2 = generateWord(7, 15);
        } else {
            $word1 = '';
            $word2 = '';
        }
            
            // 
    ?>
            
    <h3>Exo 8</h3>

    <p>  <?php echo $word1; ?></p>
    <p> <?php echo $word2; ?></p>

    <form method="post">
        <button type="submit" name="generate">Generate</button>
    </form>
    


    <!-- Exo 9 -->
    <h3>Exo 9</h3>

    <?php
            
        $str = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
        $str = strtolower($str);
        echo $str; 
            
    ?>

    <!-- Exo 10 -->
    <h3>Exo 10</h3>
    <?php
        // Volume of a cone which ray is 5 and height is 2 
        $volume = 5 * 5 * 3.14 * 2 * (1/3);  
        echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';  
        // Volume of a cone which ray is 3 and height is 4  
        $volume = 3 * 3 * 3.14 * 4 * (1/3);  
        echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />'; 


        function calculate_cone_volume($radius, $height) {
            return $radius * $radius * 3.14 * $height * (1/3);
        }

        $volume1 = calculate_cone_volume(5, 2);
        echo 'The volume of a cone with a radius of 5 and height of 2 = ' . $volume1 . ' cm<sup>3</sup><br />';

        $volume2 = calculate_cone_volume(3, 4);
        echo 'The volume of a cone with a radius of 3 and height of 4 = ' . $volume2 . ' cm<sup>3</sup><br />';
    ?>
            

    


</body>
</html>