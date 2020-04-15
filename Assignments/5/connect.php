<!DOCTYPE html>

<?php
    #ini_set("display_errors","On");
    #error_reporting(E_ALL);
	$user = "yli48";
	$password = "yli48";
    $database = "yli48";
    $servername = "localhost";

    $conn = new mysqli($servername, $user, $password,$database);

	#$rs = mysql_select_db($database, $conn) or die($msg="Cannot connect to $database");

	if($conn)
	{
		$msg="Congratulations $user, you connected to MySQL";
	}
	#if($rs)
	#{
	#	$msg=$msg . "<br />Congratulations $user, you also connected to $database database";
	#}
?>


<head>
    <meta charset="utf-8">
    <title>Connecting User</title>
</head>

<body>
    <h3><?php echo($msg);  ?></h3>

</body>

</html>