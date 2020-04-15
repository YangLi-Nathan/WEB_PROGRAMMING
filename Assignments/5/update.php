<?php
	$user = "yli48";
	$password = "yli48";
    $database = "yli48";
    $servername = "localhost";

    $conn = new mysqli($servername, $user, $password,$database);


    $purchseNO=$_POST["purchseNO"];
    $supplierID=$_POST["supplierID"];
    $date=$_POST["date"];
    $quantity=$_POST["quantity"];
    $description=$_POST["description"];
    $price=$_POST["price"];

    $sql ="INSERT INTO `Purchases`(`purchase no`,`supplierID`,`Date`,`Quantity`,`Description`,`Price`) values ('$purchseNO','$supplierID','$date','$quantity','$description','$price')";

    if ($conn->query($sql) == TRUE) {
        header('Location: display.php');
    } else {
        echo '<script>alert("New record was NOT created! Duplicate Purchase ID or there was something wrong! Please try again.")
        location="newpurchase.html";
        </script>';
    }
    mysqli_close($con);

?>