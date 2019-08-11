<?php
// 曜日を文字列で配列に格納
$weekday = array('日','月', '火', '水', '木', '金', '土');

//カレンダーに表示する年月を取得します。
if (isset($_GET['y']) && isset($_GET['m'])) {
    $year = $_GET['y'];
    $month = $_GET['m'];

} else { // 現在の年月を取得
    $year = date('Y'); //date('Y')で年を取得
    $month = date('n'); //date('n')で月を取得
}

$firstDayOfWeek = date('w', mktime(0, 0, 0, $month,1 ,$year)); //１日の曜日 date('w')で曜日を数字で取得

//月末日を取得
$lastDay = date('t'); //date('t')で月末を取得
$lastDayOfWeek = date('w', mktime(0, 0, 0, $month,$lastDay ,$year)); //月末の曜日を数字で取得

$calendar = array(); //日、曜日を格納する変数を定義

for ($i = 1; $i <= $lastDay; $i++) {
    $weekInt = date('w', mktime(0, 0, 0, $month ,$i ,$year)); //date('w')で曜日を数字で取得
    $calendar[] = $i; //１日～月末までの日を格納
}

//前月、翌月を定義
$target_date = $year.'-'.$month.'-1';
$prevYear = date('Y', strtotime($target_date." -1 month"));
$prevMonth = date('n', strtotime($target_date." -1 month"));
$nextYear = date('Y', strtotime($target_date." +1 month"));
$nextMonth = date('n', strtotime($target_date." +1 month"));

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPでカレンダー</title>
</head>

<style>
body {
    text-align:center;
}

table,  td {
    border:solid 1px #000;
    border-collapse: collapse;
}

table  {
    width:250px;
    margin:0 auto;

    text-align:center;
}
</style>


<body>
<h3>カレンダー</h3>
<p>
    <a href="./calendar.php?y=<?php echo $prevYear ?>&m=<?php echo $prevMonth ?>">前月へ</a>
    <a href="./calendar.php">今月へ</a>
    <a href="./calendar.php?y=<?php echo $nextYear ?>&m=<?php echo $nextMonth ?>">翌月へ</a>
</p>

    <table>
        <tr>
            <th colspan="7"><?php echo $year.'年'.$month.'月' ?></th> //年月を表示
        </tr>

        <tr>
        <?php
        foreach ($weekday as $youbi) { //日～土を表示
           echo '<th>'.$youbi.'</th>';
        }
        ?>
        </tr>

        <tr>
        <?php
        for ($b = 1; $b <= $firstDayOfWeek; $b++) { //１行目に空白セルを追加
            echo '<td></td>';
        }

        foreach ($calendar as $day) {
            echo '<td>'.$day.'</td>'; // 日を表示

            if (date('w', mktime(0, 0, 0, $month ,$day ,$year)) == 6) { //土曜日の場合（6の場合）に改行
                echo '</tr><tr>';
            }
        }

        for ($b = 1; $b <= 6 -$lastDayOfWeek; $b++) {　//最終行に空白セルを追加
            echo '<td></td>';
        }
        ?>
        </tr>

    </table>
</body>
</html>
