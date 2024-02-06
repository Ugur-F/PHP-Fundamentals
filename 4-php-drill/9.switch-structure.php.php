<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9</title>
</head>
<body>
    
    <?php 
        $weather = 'storm';

        switch ($weather) {
            case 'rain':
                echo "Take an umbrella";
                break;
            case 'storm':
                echo "Don't get out today!";
                break;
            default:
                echo "Weather will be ok to day";
        }
    ?>

</body>
</html>