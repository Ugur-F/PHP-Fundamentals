<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>5-php-exercice-generateur-excuses</title>
</head>
<body>
    
    <form method="get" action="5-php-exercice-generateur-excuses.php">
        <h2>Fake Excuses Notes Generator</h2>
        
        <label for="ChildName">Name of the child:</label>
        <br>
        <input type="text" id="ChildName" name="ChildName" required>
        
        <p>Gender:</p>
        <input type="radio" id="boy" name="gender" value="boy" required> Boy
        <input type="radio" id="girl" name="gender" value="girl" required> Girl
        <br><br>

        <label for="TeacherName">Teacher:</label>
        <br>
        <input type="text" id="TeacherName" name="TeacherName" required>
        <br><br>

        <label for="date"> Absence Date:</label>
        <input type="date" id="date" name="date" required>
        <br><br>
        
        <label for="illness">Choose a reason:</label>
        <br>
        <input type="radio" id="illness" name="reason" value="illness" required> Illness
        <br>
        <input type="radio" id="death" name="reason" value="death of the pet (or a family member)" required> Death of the pet (or a family member)
        <br>
        <input type="radio" id="extracurricular" name="reason" value="significant extra-curricular activity" required> Significant extra-curricular activity
        <br>
        <input type="radio" id="dumb" name="reason" value="Too dumb" required> Too dumb
        <br><br>

        <div id="buttonContainer">
        <input type="submit" id="submit" name="submit" value="Generate">
        </div>
    </form>


    <div id="GeneratedExcuse">
    <?php

        $excuses = array(
            "illness" => array(
                "I'm sorry, but my child is feeling under the weather and won't be able to attend school today.",
                "Unfortunately, my child has come down with an illness, and it's best for them to stay home.",
                "Due to a sudden illness, my child won't be able to make it to school today.",
                "My child is running a fever and experiencing flu-like symptoms, so they need to rest at home.",
                "I regret to inform you that my child has contracted a contagious illness, and we're taking precautions.",
            ),
            "death of the pet (or a family member)" => array(
                "My child is going through a difficult time due to the loss of a family pet.",
                "We've had a family tragedy with the loss of a pet, and my child needs some time to cope.",
                "There's been a sad incident in our family with the passing of a pet.",
                "My child is mourning the loss of a beloved family pet and is not in a condition to attend school.",
                "We're dealing with the sudden death of a close family member, which is affecting my child's well-being.",
            ),
            "significant extra-curricular activity" => array(
                "My child has an important extracurricular event that they can't miss today.",
                "There's a significant extracurricular activity that my child must attend.",
                "My child has a special event for their extracurricular activity today.",
                "My child is participating in a competitive extracurricular event that requires their presence.",
                "We've made prior commitments to a significant extracurricular event, and my child's participation is essential.",
            ),
            "Too dumb" => array(
                "My child is feeling overwhelmed by the schoolwork, and we need to address this issue.",
                "We've noticed some difficulties in my child's understanding, and we're taking steps to address it.",
                "Due to academic struggles, my child needs a break to catch up on their studies.",
                "My child is experiencing challenges in keeping up with the curriculum, and we're seeking additional support.",
                "We're concerned about my child's academic progress and are working on a plan to improve their performance.",
            )
        );

        $childName = isset($_GET['ChildName']) ? $_GET['ChildName'] : "";
        $gender = isset($_GET['gender']) ? $_GET['gender'] : "";
        $teacherName = isset($_GET['TeacherName']) ? $_GET['TeacherName'] : "";
        $date = isset($_GET['date']) ? $_GET['date'] : "";
        $reason = isset($_GET['reason']) ? $_GET['reason'] : "";

        if ($reason && array_key_exists($reason, $excuses)) {
            $selectedApology = $excuses[$reason][array_rand($excuses[$reason])];

            $apologyLetter = "Dear $teacherName,\n\n";
            $apologyLetter .= "I am writing to inform you that my $gender, $childName, will not be able to attend school on $date.\n\n";
            $apologyLetter .= "The reason for absence is: $reason.\n\n";
            $apologyLetter .= "Apology: $selectedApology\n\n";
            $apologyLetter .= "Sincerely,\nParent";

            echo "<h2>Generated Excuse</h2>";
            echo nl2br($apologyLetter);
        } else {
            echo "<h2>Please fill out the form to generate an excuse note.</h2>";
        }

    ?>
    </div>


</body>
</html>