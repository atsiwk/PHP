<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<style>
    table, td ,th {
        border: solid 1px #555;
        padding:0;
    }
    td,th {
        width:30px;
        height:30px;
        text-align:center;
        box-sizing:border-box;
    }
    .bgc {
        background-color: #fcc;
    }
</style>

</head>
<body>
        <h1>九九表</h1>

        <table>
        <tr>
        <th>&nbsp;</th>
        <?php
        for ($a=1 ;$a < 10 ; $a++) {
            echo '<th>' . $a .'</th>';
        }
        ?>
        </tr>
        <?php
            for ($a=1 ;$a < 10 ; $a++) {
                echo '<tr>';
                echo '<th>' . $a . '</th>';
                for ($i=1 ;$i < 10 ; $i++) {
                    if ($a % 2 == 0 || $i % 2 == 0) {
                    echo '<td class="bgc">';
                    } else {
                        echo '<td>';
                    }
                    echo $a*$i;
                    echo '</td>';
                }
                echo '</tr>';
            }
        ?>
        </table>
</body>
</html>