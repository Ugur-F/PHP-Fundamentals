<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10</title>
</head>
<body>
    
    <form method="get" action="">
            <label for="gender">Man or Woman?</label>
            <input type="radio" name="gender" value="Man">Man
            <input type="radio" name="gender" value="Woman">Woman
            <br>      
            <input type="submit" name="submit" value="Submit">
    </form>

    <?php  
    
        if (isset($_GET['gender'])) {

            $gender = $_GET['gender'];

            $hello = ($gender == "Man") ? "Hello sir!" : "Hello madam!";
            echo $hello;

        }
    ?>

</body>
</html>