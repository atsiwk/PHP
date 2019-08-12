<?php

if (isset($_POST['q1'], $_POST['q2'], $_POST['q3'])) {

    if($_POST['q1'] == 'パイナップル') {
        $q1_answer = '○正解';
    } else {
        $q1_answer = '×不正解';
    }

    if($_POST['q2'] == array('甜瓜', '甘橙', '万寿果')) {
        $q2_answer = '○正解';
    } else {
        $q2_answer = '×不正解';
    }

    if($_POST['q3'] == '海豹') {
        $q3_answer = '○正解';
    } else {
        $q3_answer = '×不正解';
    }

} else {
     header('Location: quiz.php');
     exit;
     }


// ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>クイズ</title>
</head>
<style>
.answer {
    color:red;
}

.container {
    border:solid 1px #000;
    padding:20px;
    width:400px;
    margin:20px auto 0;
}

.answer-wrap {
    border:solid 1px #000;
    padding:15px;
    width:300px;
    margin-top:1rem;
    margin-bottom:1rem;

}

</style>
<body>
<div class="container">

    <h3>クイズの答え</h3>
    <p>Q1 <span class="answer"><?php echo htmlspecialchars($q1_answer) ?></span></p>
    <span>あなたの解答：<?php echo htmlspecialchars($_POST['q1']) ?></span>

    <p>Q2  </span><span class="answer"><?php echo htmlspecialchars($q2_answer) ?></span></p>
    <span>あなたの解答：
    <?php
        foreach ($_POST['q2'] as $a) {
            echo '「' . htmlspecialchars($a) . '」';
        }
     ?>


    <p>Q3 <span class="answer"><?php echo htmlspecialchars($q3_answer) ?></span></p>
    <span>あなたの解答：<?php echo htmlspecialchars($_POST['q3']) ?></span>


<!-- <div class="answer-wrap">
    <p class="answer">答え『パイナップル』</p>
    <p class="answer">答え『甜瓜』『甘橙』『万寿果』</p>
    <p class="answer">答え『海豹』</p>
</div> -->
<p><a href="quiz.php">もう一度解答する</a></p>

</div>
</body>
</html>