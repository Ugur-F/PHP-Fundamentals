<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8</title>
</head>
<body>
    
    <form method="get" action="">
        <label for="note">Note:</label>
        <select name="note">
            <?php for ($i = 1; $i <= 20; $i++) { ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
        </select>
        <input type="submit" name="submit" value="Submit">
    </form>
    
    <?php
        if (isset($_GET['note'])) {

            $note = $_GET['note'];

            if ($note < 4) {
                echo "This work is really bad. What a dumb kid!";
            } elseif ($note >= 5 && $note <= 9) {
                echo "This is not sufficient. More studying is required.";
            } elseif ($note == 10) {
                echo "Barely enough!";
            } elseif ($note >= 11 && $note <= 14) {
                echo "Not bad!";
            } elseif ($note >= 15 && $note <= 18) {
                echo "Bravo, bravissimo!";
            } elseif ($note >= 19 && $note <= 20) {
                echo "Too good to be true : confront the cheater!";
            }
        }
    ?>

</body>
</html>