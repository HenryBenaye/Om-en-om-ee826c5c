<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        tr {
            width: 70px;
            height: 70px;
        }

        td {
            width: 70px;
            height: 70px;
        }
    </style>
</head>

<body>
    <table>
        <?php
        echo "<table border='1'><br />";

        for ($row = 0; $row < 8; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 8; $col++) {
                $totaal = $row + $col;
                if ($totaal % 2 == 0) {
                    echo '<td bgcolor= #000000 height=100px width=100px></td>';
                } else {
                    echo '<td bgcolor= #ffffff height=100px width=100px></td>';
                }
            }


            echo "</tr>";
        }


        ?>
    </table>
</body>

</html>




<?php


?>