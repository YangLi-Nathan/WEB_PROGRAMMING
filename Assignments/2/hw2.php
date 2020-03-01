<!DOCTYPE html>
<html>

<body>
<!-- QUESTION 1-->
<div>
    Question 1:
    <?php
    // require 'functions.php';

    function CharlieAteMyLunch()
    {
        function isBitten()
        {
            return rand(0, 1);
        }

        if (isBitten()) {
            return "Charlie ate my lunch!";
        } else {
            return "Charlie did not eat my lunch!";
        }
    }

    echo CharlieAteMyLunch();
    ?>
</div>

<!-- QUESTION 2-->
<div>
    Question 2:
    <form action="hw2.php" method="post">
        Please enter an INTEGER:<input type="text" pattern="^[0-9]*$" name="name">
        <input type="submit">
    </form>
    <table width="400px" cellspacing="1px" cellpadding="1px" border="1px">
        <?php
        // user input = var1
        $var1 = $_POST["name"];


        // checker board

        for ($row = 1; $row <= $var1; $row++) {
            echo "<tr>";
            for ($column = 1; $column <= $var1; $column++) {
                $total = $row + $column;
                if ($total % 2 == 0) {
                    echo "<td height=35px width=35px bgcolor=red></td>";
                } else {
                    echo "<td height=35px width=35px bgcolor=black></td>";
                }
            }
            echo "</tr>";
        }
        ?>
</div>
<!-- QUESTION 3-->
<div>
    Question 3:
    <?php
    $month = array(
        'January', 'February', 'March', 'April',
        'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
    );
    echo "<br>--------------------------<br/>";
    // for loop print all the elments in the array
    for ($x = 0; $x <= count($month); $x++) {
        echo "For loop: $month[$x] <br>";
    }
    echo "--------------------------<br>";
    // for loop sorted
    sortArray_forloop($month);
    // sort  for loop function
    function sortArray_forloop($month)
    {
        sort($month);
        for ($x = 0; $x <= count($month); $x++) {
            echo "SORTED For loop: $month[$x] <br>";
        }
    }

    // for each print all elements in the array
    echo "--------------------------<br>";
    foreach ($month as $value) {
        echo "foreach: $value<br />";
    }
    echo "--------------------------<br>";

    // sort for each function
    sortArray_foreach($month);
    function sortArray_foreach($month)
    {
        sort($month);
        foreach ($month as $value) {
            echo "SORTED foreach: $value<br />";
        }
    }

    ?>
</div>

<div>

<!-- QUESTION 4-->
    Question 4:
    <?php

    $names = array('Chama Gaucha - Average Cost $', 'Aviva by Kameel - Average Cost $',
        'Bone\'s Restaurant - Average Cost $', 'Umi Sushi Buckhead - Average Cost $', 'Fandangles - Average Cost $',
        'Capital Grille - Average Cost $', 'Canoe - Average Cost Cost $', 'One Flew South - Average Cost $',
        'Fox Bros.BBQ - Average Cost $', 'South City Kitchen Midtown - Average Cost $');


    $price = array('40.50', '15.00', '65.00', '40.50', '30.00', '60.50', '35.50', '21.00', '15.00', '29.00');








    ?>





</div>


</body>

</html>