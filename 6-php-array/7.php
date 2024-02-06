<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7</title>
</head>
<body>
    
    <?php 
    
        $web_development = array(
            'frontend' => array(),
            'backend' => array(),
        );
        
        $web_development['frontend'][] = 'xhtml';
        $web_development['backend'][] = 'Ruby on Rails';
        $web_development['frontend'][] = 'CSS';
        $web_development['frontend'][] = 'Flash';
        $web_development['frontend'][] = 'Javascript';
        
        
        echo '<pre>';
        print_r($web_development);
        echo '</pre>';
        
        $web_development['frontend'][0] = 'html';
        
        echo '<pre>';
        print_r($web_development);
        echo '</pre>';
        
        unset($web_development['frontend'][2]);
        
        echo '<pre>';
        print_r($web_development);
        echo '</pre>';
    
    ?>

</body>
</html>