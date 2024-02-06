<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- 1 -->
    <?php 
    
        // $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

        // foreach ($pronouns as $key => $pronoun){
        //     $end = ($key == 2) ? "s" : "";
        //     echo "{$pronoun} code{$end} <br>";
        // }        
    
    ?>

    <!-- 2 -->
    <?php 

        // $number = 1;
        // while ($number < 121) {
        //     echo "{$number} <br>" ;
        //     $number++;
        // }

    ?>


    <!-- 3 -->
    <?php 

        // for ($i = 1; $i<121; $i++){
        //     echo "{$i}<br>";
        // }

    ?>

    <!-- 4 -->
    <?php 

        // $names = ['aa','bé','cé','dé','ee','èf'];
        // foreach ($names as $name){
        //     echo $name;
        //     echo '<br>';
        // }

    ?>

    <!-- 5 -->
    <?php

        // $countries = ['France','Belgium','Italy','Switzerland','Germany','Luxemburg','Spain','Denmark','Norway','Sweden'];
        // echo "<select name=\"country\">";
        // foreach ($countries as $country){
        //     $lowerCountry = strtolower($country);
        //     echo "<option value=\"{$lowerCountry}\">{$country}</option>";
        // }
        // echo "</select><br>";
    ?>

    <!-- 6 -->
    <?php

        $countries = [
            "BE" => "Belgium", 
            "FR" => "France", 
            "DE" => "Germany", 
            "NL" => "Netherlands", 
            "ES" => "Spain", 
            "IT" => "Italy", 
            "PT" => "Portugal", 
            "GB" => "United Kingdom", 
            "IE" => "Ireland", 
            "DK" => "Denmark", 
            "GR" => "Greece", 
            "SE" => "Sweden", 
            "FI" => "Finland", 
            "SK" => "Slovakia", 
            "LU" => "Luxembourg", 
            "SI" => "Slovenia", 
            "MT" => "Malta", 
            "CY" => "Cyprus", 
            "EE" => "Estonia", 
            "LV" => "Latvia", 
            "LT" => "Lithuania", 
            "CZ" => "Czech Republic", 
            "HU" => "Hungary", 
            "AT" => "Austria", 
            "PL" => "Poland"
        ];

        echo "<select name=\"countryISO\">";
        
        foreach ($countries as $key => $country){
            echo "<option value=\"{$key}\">{$country}</option>";
        }
        echo "</select>";

    ?>

</body>
</html>