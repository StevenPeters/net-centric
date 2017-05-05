<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="main.css">
        <title>Calendar</title>
    </head>
    <body>
        <?php
        createCalendar(2, 31);
        
        function createCalendar($startDay, $numDays) {
            echo "<table>";
            echo "<tr id = dayRow>";
            echo "<th> Sunday </th>";
            echo "<th> Monday </th>";
            echo "<th> Tuesday </th>";
            echo "<th> Wednesday </th>";
            echo "<th> Thursday </th>";
            echo "<th> Friday </th>";
            echo "<th> Saturday </th>";
            echo "</tr>";
            echo "<tr>";
            for ($i = 1; $i < ($startDay + $numDays); $i++) {
                if ($i - $startDay + 1 < 1) {
                    echo "<th></th>";
                    continue;
                }
                
                echo "<th>" . ($i - $startDay + 1) . "</th>";
                
                if ($i % 7 == 0) {
                    echo "</tr>";
                    echo "<tr>";
                }
                
                if ($i == ($startDay + $numDays) - 1 && (7 - $i % 7) != 7) {
                    for ($j = 0; $j < (7 - $i % 7); $j++) {
                        echo "<th></th>";
                    }
                }
            }
            echo "</tr>";
        }
        ?>
    </body>
</html>

