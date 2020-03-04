<html>

<head>
    <style>
    table#t01 tr:nth-child(even) {
        background-color: tan;
    }

    table#t01 tr:nth-child(odd) {
        background-color: grey;
    }

    table#t01 th {
        background-color: springgreen;
        color: rgb(141, 133, 133);
    }
    </style>
</head>

<body>
    <div>
        <br>
        Part 1:
        <?php


        $font = $_POST["font"];
        $style = $_POST["style"];
        $color = $_POST["color"];
        $text_box = $_POST["text_box"];



        function convert_User_Input($font)
        {
            if ($font == "A") {
                $font = "Arial";
            } elseif ($font == "f") {
                $font = "fantasy";
            } else {
                $font = "cursive";
            }
            return $font;
        }


        echo "<div style ='font-family: $font;font-weight: $style;font-style:$style;color:$color'> $text_box</div>";





        ?>
    </div>
    <div>
        <hr>
        <br>
        Part 2:

        <form action="action_page.php" method="post">
            How many hours want to display: <input type="text" pattern="^[0-9]*$" name="hours_to_show" value=12>
            <input type="submit">
        </form>
        <table id="t01" width="400px" cellspacing="1px" cellpadding="1px" border="1px">
            <?php
            $hours_to_show = $_POST["hours_to_show"];




            date_default_timezone_set("America/New_York");
            echo "Date: " . date("Y-m-d");

            echo " Time: " . date("h:i:sa");
            //echo $date->format('Y-m-d H:i:s');




            echo $time; //11:09



            // table
            echo '<th height=auto width=40% bgcolor=blue>' . 'Time' . '</th>';
            echo '<th height=auto width=80% bgcolor=green>' . 'Task' . '</th>';
            echo '<th height=auto width=40% bgcolor=yellow>' . 'Contact Info' . '</th>';
            echo '<th height=auto width=40% bgcolor=red>' . 'Assigned Person' . '</th>';

            for ($row = 1; $row <= $hours_to_show + 1; $row++) {

                date_default_timezone_set("America/New_York");

                $timestamp = strtotime(date('h')) + 60 * 60 * $row;

                $time = date('h:i:sa', $timestamp);




                echo "<tr>";
                $add = $current + 60 * 60 * $row;
                for ($r = $var1; $r <= $var1; $r++) {
                    echo "<td >$time</td>";
                    echo "<td ></td>";
                    echo "<td ></td>";
                    echo "<td ></td>";
                }


                echo "</tr>";
            }


            ?>
    </div>
    </table>










</body>




</html>