<!DOCTYPE html>
<html>

<body>
    <!-- QUESTION 1-->
    <div>
        Question 1:
        <?php
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
    <hr>
    <!-- QUESTION 2-->
    <div>
        Question 2:
        <form action="hw2.php" method="post">
            Please enter an INTEGER to display checker board:<input type="text" pattern="^[0-9]*$" name="name">
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
        </table>
    </div>
    <!-- QUESTION 3-->
    <hr>
    <div>
        Question 3:
        <?php
        $month = array(
            'January', 'February', 'March', 'April',
            'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
        );
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
                echo "SORTED foreach: $value </br>";
            }
        }

        ?>
    </div>
    <!-- QUESTION 4 -->
    <hr>
    <div>
        Question 4:

        (Please see table below: )
        <table width="80%" cellspacing="1px" cellpadding="1px" border="1px">
            <?php

            $top_rest = array(
                'Chama Gaucha - Average Cost' => '40.50',
                'Aviva by Kameel - Average Cost' => '15.00',
                'Bone\'s Restaurant - Average Cost' => '65.00',
                'Umi Sushi Buckhead - Average Cost' => '40.50',
                'Fandangles - Average Cost' => '30.00',
                'Capital Grille - Average Cost' => '60.50',
                'Canoe - Average Cost Cost' => '35.50',
                'One Flew South - Average Cost' => '21.00',
                'Fox Bros.BBQ - Average Cost' => '15.00',
                'South City Kitchen Midtown - Average Cost' => '29.00'
            );

            echo '<th>' . 'Restaurant Name' . '</th>';
            echo '<th>' . 'Average Price' . '</th>';

            // for loop to print out all the restaurant name and average price
            foreach ($top_rest as $key => $value) {
                echo '<tr>';
                echo '<td>' . $key . '</td>';
                echo '<td>' . '$' . $value . '</td>';
                echo '</tr>';
            }
            // sort by price function
            function sort_by_price($top_rest)
            {
                asort($top_rest);
                foreach ($top_rest as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $key . '</td>';
                    echo '<td>' . '$' . $value . '</td>';
                    echo '</tr>';
                }
            }

            echo '<th>' . 'Restaurant Name' . '</th>';
            echo '<th>' . 'Sorted by Average Price' . '</th>';
            sort_by_price($top_rest);


            // sort by Name function
            function sort_by_name($top_rest)
            {
                ksort($top_rest);
                foreach ($top_rest as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $key . '</td>';
                    echo '<td>' . '$' . $value . '</td>';
                    echo '</tr>';
                }
            }

            echo '<th>' . 'Sorted by Restaurant Name' . '</th>';
            echo '<th>' . 'Average Price' . '</th>';
            sort_by_name($top_rest);


            ?>


        </table>



    </div>
    <!-- QUESTION 5 -->
    <hr>
    Question 5:

    <div>
        <form action="hw2.php" method="post">
            How many Hamburguer you have ordered? :
            <input type="text" pattern="^[0-9]*$" name="name1">
            <br>
            How many Chocolate Milk Shake you have ordered? :
            <input type="text" pattern="^[0-9]*$" name="name2">
            <br>
            How many Coke Cola you have ordered? :
            <input type="text" pattern="^[0-9]*$" name="name3">
            <br>
            <input type="submit">

        </form>

        <?php

        # variables
        $var1 = $_POST["name1"];
        $var2 = $_POST["name2"];
        $var3 = $_POST["name3"];

        $hamburguer = array('Hamburguer', 4.95, $var1);
        $shake = array('Chocolate Milk', 1.95, $var2);
        $soda = array('Coke', 0.85, $var3);
        $tax_rate = 0.075;
        $tip_rate = 0.16;

        $subtotal = ($hamburguer[1] * $var1);
        $subtotal = $subtotal + ($shake[1] * $var2);
        $subtotal = $subtotal + ($soda[1] * $var3);

        $tax = $subtotal * $tax_rate;
        $tip = $subtotal * $tip_rate;
        $total = $subtotal + $tip + $tax;

        ?>

        <table width="80%" border="1" cellspacing="0" cellpadding="4">
            <tr>
                <th>Item</th>
                <th>Unit Price</th>
                <th>Qty</th>
                <th>Item Subtotal</th>
            </tr>
            <tr>
                <td><?php echo "$hamburguer[0]"; ?></td>
                <td><?php echo "$hamburguer[1]"; ?></td>
                <td><?php echo "$hamburguer[2]"; ?></td>
                <td><?php $ham_subtotal = ($hamburguer[1] * $var1);
                    print "\$$ham_subtotal"; ?></td>
            </tr>
            <tr>
                <td><?php echo "$shake[0]"; ?></td>
                <td><?php echo "$shake[1]"; ?></td>
                <td><?php echo "$shake[2]"; ?></td>
                <td><?php $sha_subtotal = ($shake[1] * $var2);
                    print "\$$sha_subtotal"; ?></td>
            </tr>
            <tr>
                <td><?php echo "$soda[0]"; ?></td>
                <td><?php echo "$soda[1]"; ?></td>
                <td><?php echo "$soda[2]"; ?></td>
                <td><?php $sod_subtotal = ($soda[1] * $var3);
                    print "\$$sod_subtotal"; ?></td>
            </tr>
            <tr>
                <td colspan="3">&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="3" align="right">Subtotal</td>
                <td><?php echo "\$$subtotal"; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="right">Tax, 7.5%</td>
                <td><?php echo "\$$tax"; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="right">Tip</td>
                <td><?php echo "\$$tip"; ?></td>
            </tr>
            <tr>
                <th colspan="3" align="right">Total</th>
                <td><?php echo "\$$total"; ?></td>
            </tr>
        </table>

    </div>


</body>

</html>