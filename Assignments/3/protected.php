<?php
session_start();
# redirect back to login page
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit;
}
if (isset($_POST['abandon'])) {
    session_unset();
    header("location: login.php");
    exit;
}
?>
<html>

<head>
    <title>Protected.php Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    if (!isset($_SESSION['username'])) {
        header("location: login.php");
        exit;
    }
    if (isset($_POST['abandon'])) {
        session_unset();
        header("location: login.php");
        exit;
    }
    ?>
    <div class="pageContainer centerText">
        <h2>Protected.php Page</h2>
        <hr>
        <h2>Welcome <?php echo $_SESSION['username'] ?></h2>
        <img src="images/1.jpg" style="width:400px;height:auto;" />
        <br>
        This session will be timeout after 24 mins of inactivity<br><br>
        <form method="post" class="formLayout">
            <div class="formGroup">
                <input type="hidden" name="abandon" value="true">
                <label> </label>
                <button type="submit">Logout</button>
            </div>
        </form>

    </div>
</body>

</html>