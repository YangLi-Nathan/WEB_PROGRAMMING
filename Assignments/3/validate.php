<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="stylesheet.css" />
    <link href="style.css" rel="stylesheet" type="text/css">

    <title>HW3</title>
    <h1>Form Validation</h1>
    <p>HTML5 and Server-Side Validation</p>
</head>

<body>
    <div class="pageContainer centerText">

        <form action="validateConfirm.php" method="post" autocomplete="on" class="forms">

            <label for="inputEmail">Email:</label>
            <input type="text" name="email" required placeholder="Email" autofocus maxlength="50"
                value="<?php echo htmlspecialchars($email); ?>"><br>

            <label for="inputName">First Name:</label>
            <input type="text" name="name" required placeholder="First Name" autofocus maxlength="20"
                pattern="[A-Za-z'-]{2,20}" title="First Name" value="<?php echo htmlspecialchars($name); ?>"><br>

            <label for="inputName">Birthday:</label>
            <input type="text" name="birthday" required placeholder="mm/dd/yyy" title="birthday dd/mm/yyyy"
                value="<?php echo htmlspecialchars($birthday); ?>"><br>

            <label for="inputName">Age:</label>
            <input type="text" name="age" required placeholder="Age" pattern="[1-9][0-9]?" title="age (1-99)"
                value="<?php echo htmlspecialchars($age); ?>"><br>

            <label for="inputName">State:</label>
            <input type="text" name="state" required placeholder="ST" pattern="[A-Za-z]{2}"
                title="2-Character State Abbreviation" value="<?php echo $state; ?>"><br>
            <label for="inputName">Zip:</label>
            <input type="text" name="zip" required placeholder="ZIP" maxlength="5" pattern="[0-9]{5}"
                title="5-digit zip" value="<?php echo $zip; ?>"><br>

            <input type="submit" value="Submit">
            <div> <button type="submit" formnovalidate>Submit without HTML5 validation</button>
            </div>

        </form>

        <div><a href="?">Reload page</a></div>


    </div>

</body>

</html>