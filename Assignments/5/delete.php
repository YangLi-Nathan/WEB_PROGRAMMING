<?php
	$user = "yli48";
	$password = "yli48";
    $database = "yli48";
    $servername = "localhost";
    $conn = new mysqli($servername, $user, $password,$database);
    $supplierID=$_POST["supplierID"];

    $sql ="DELETE FROM Purchases WHERE supplierID='$supplierID'";
    #$result = $conn->query($sql);

    if ($conn->query($sql) == TRUE) {
        header('Location: display.php');
    } else {
        echo '<script>alert("New record was NOT created! There was something wrong! Please try again.")
        location="newpurchase.html";
        </script>';
    }

    mysqli_close($con);

?>