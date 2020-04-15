<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style/display.css">
</head>

<body>

    <!-- Navigation Bar -->
    <div class="topnav">
        <a class="active" href="https://codd.cs.gsu.edu/~yli48/Assignments/5/index.html">Home</a>
        <a href="https://codd.cs.gsu.edu/~yli48/Assignments/5/display.php">Display</a>
        <a href="https://codd.cs.gsu.edu/~yli48/Assignments/5/newpurchase.html">New Purchases</a>
        <a href="https://codd.cs.gsu.edu/~yli48/Assignments/5/query.html">Search</a>
    </div>

    <br>
    <hr>
    <?php
	$user = "yli48";
	$password = "yli48";
    $database = "yli48";
    $servername = "localhost";
    $conn = new mysqli($servername, $user, $password,$database);
    $supplierID=$_GET["supplierID"];

    $sql ="SELECT date, description, price FROM Purchases WHERE supplierID ='$supplierID';";
    $result = $conn->query($sql);


    if (mysqli_num_rows($result) != 0)
    {

        echo "<table border='1'>";
        $i = 0;
        while($row = $result->fetch_assoc())
        {
            if ($i == 0) {
              $i++;
              echo "<tr>";
              foreach ($row as $key => $value) {
                echo "<th>" . $key . "</th>";
              }
              echo "</tr>";
            }
            echo "<tr>";
            foreach ($row as $value) {
              echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

    } else {
        echo '<script>alert("There was something wrong! Please try again.")
        location="query.html";
        </script>';
    }
    mysqli_close($con);

?>

</body>

</html>