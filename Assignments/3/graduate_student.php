<!DOCTYPE html>
<html>

<head>
    <title>Grduate Student Tasks</title>
    <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="pageContainer centerText">
        <form action='graduate_student.php' method=POST>
            <label for="TEXT1">Please enter some words: </label>
            <input type="text" name="input1"><br>
            <input type="submit" name="submit1" value="Submit"> <br>
            <label for="text2"> Please enter some words: </label>
            <input type="text" name="input2"><br>
            <label for="character">Remove sequence of character: </label>
            <input type="text" name="character"><br>
            <input type="submit" name="submit2" value="Submit"><br>

        </form>
    </div>
    <?php


  if (isset($_POST['submit1'])) {

    $str = $_POST['input1'];

    print("1st part: User Input: " . $str . "<br>");
    print("Repeated character: <br>");
    $str = str_replace(' ', '', $str);
    $str = strtolower($str);
    $arr = str_split($str);
    $rep = array_count_values($arr);
    foreach ($rep as $key => $value) {
      print($key . " = " . $value . '<br>');
    }
  }
  if (isset($_POST['submit2'])) {
    $str2 = $_POST['input2'];
    $character = $_POST['character'];

    print("2nd part: User Input: " . $str2 . " remove character " . $character . "<br>");
    print("result: <br>");
    $str3 = NULL;
    $y = 0;
    for ($i = 0; $i < strlen($str2); $i++) {
      if ($str2[$i] != $character) {
        $str3 = $str3 . $str2[$i];
        $y++;
      }
    }

    print($str3);
  }

  ?>


</body>

</html>