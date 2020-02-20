<!DOCTYPE html>
<html>

<body>



    <?php

    // Q1
    echo "Q1: <br>";
    print "<i>\"Good Morning, Dave,\" said HAL</i> ";

    // Q2 
    $radius = 10;
    $area = $radius * 2 * pi();
    echo "<br>Q2: <br>";
    print "The Area for radius of 10 is: $area";

    // Q3
    echo "<br>Q3: <br>";
    $celFahr = 113.81;
    $Celsius = (5 / 9) * ($celFahr - 32);
    print "Current Fahrenheit is $celFahr convert to Celsius is: $Celsius";

    // Q4
    echo "<br>Q4: <br>";

    $para1 = " PHP is fun ";
    $str = preg_replace("/[^A-Za-z0-9]/", "", $para1);
    $count = strlen($str);
    print "\"$para1\" :  $count (number of chars)";

    // Q5
    echo "<br>Q5: <br>";
    $q5_str = "WDWWLWWWLDDWDLL";
    $q5_num = strpos("$q5_str", "WWW");
    $q5_num2 = $q5_num + 3;
    print "Found sequence at $q5_num in the sentence, and first letter after the first occurrence of the sequence is : $q5_str[$q5_num2]";

    // Q6
    echo "<br>Q6: <br>";
    $q6_str = "KayAk";
    function check_palindrome($string)
    {
        if ($string == strrev($string))
            return "Palindrome";
        else
            return "NOT Palindrome";
    }
    echo "Input string is \"$q6_str\", and it is ", check_palindrome('madam') . ".";



    // Q7
    echo "<br>Q7: <br>";
    $num = 7;
    function check_even_or_odd($int)
    {
        if ($int % 2 == 0)
            return "Even";
        else
            return "Odd";
    }

    echo "The number $num is ", check_even_or_odd($num) . ".";


    // Q8
    echo "<br>Q8: <br>";
    function check_leap_year()
    {
        if (date('L') == 1)
            return "<strong>It is a Leap Year.</strong>";
        else
            return "<strong>It is NOT a Leap Year.</strong>";
    }
    $result = "";
    echo check_leap_year();

    ?>

</body>

</html>