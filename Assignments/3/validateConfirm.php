<!DOCTYPE html>
<html>

<head>
    <title>Validation Confirm</title>
    <link rel="stylesheet" href="stylesheet.css" />

</head>

<body>

    <?php
    include('validationUtilities.php');
    // variables
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $date = $_POST['birthday'];
    $state = $_POST['state'];
    $age = $_POST['age'];
    $zip = $_POST['zip'];

    // boolean
    $isValid = true;

    // server validation check

    if (!fIisValidEmail($email)) {
        echo "Invalid email<br>";
        $isValid = false;
    }

    if (!fIsValidRange($age, 1, 99)) {
        echo "Enter Age in between (1-99)<br>";
        $isValid = false;
    }
    if (!fIsValidZipcode($zip)) {
        echo "Zip code should be numeric & length of 5<br>";
        $isValid = false;
    }
    if (!isValidDate($date)) {
        echo "Enter date in MM/DD/YYYY format<br>";
        $isValid = false;
    }

    if (!$isValid) {
        //at least one element not valid. print a message and stop execution
        echo "<br><br>
        <p><input type='button' class='button' value='<< Go Back <<' onClick='history.back()'><br></p>";
        exit();
    }

    echo "
    <div class='center'>
    <h3>All inputs have valid formats!</h3>
    Email: $email <br>
    First name: $fname <br>
    Age:$age<br>
    State: $state <br>
    Zip:$zip<br>
    ";

    ?>




</body>

</html>