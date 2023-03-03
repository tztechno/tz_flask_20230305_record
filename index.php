<!DOCTYPE html>
<html>
<head>
    <title>8x8 Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            height: 800px;
        }

        td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>
    <table>
        <tbody>
            <?php
            for ($i = 1; $i <= 8; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 8; $j++) {
                    echo "<td></td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
