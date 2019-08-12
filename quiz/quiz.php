
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>クイズ</title>
</head>
<style>
.error {
    color:red;
}

.container {
    border:solid 1px #000;
    padding:20px;
    width:400px;
    margin:20px auto 0;

}
</style>

<body>

<div class="container">
<h3>漢字クイズ</h3>

    <form action="answer.php" method="post">
        <p>Q1 鳳梨はなんと読む？</p>
        <input type="text" name="q1" value="">
        <p class="error"><?php echo $error['q1'] ?></p>

        <p>Q2 下記から果物の漢字をすべて選びなさい。</p>
        <input type="checkbox" id="2-1" name="q2[]" value="甘藍"> <label for="2-1">甘藍</label>
        <input type="checkbox" id="2-2" name="q2[]" value="甜瓜"> <label for="2-2">甜瓜</label>
        <input type="checkbox" id="2-3" name="q2[]" value="甘橙"> <label for="2-3">甘橙</label>
        <input type="checkbox" id="2-4" name="q2[]" value="万寿果"> <label for="2-4">万寿果</label>
        <p class="error"><?php echo $error['q2'] ?></p>

        <p>Q3 アザラシの漢字はどれ？</p>
        <input type="radio" id="3-1" name="q3" value="海豹"><label for="3-1">海豹</label>
        <input type="radio" id="3-2" name="q3" value="海豚"><label for="3-2">海豚</label>
        <input type="radio" id="3-3" name="q3" value="海象"><label for="3-3">海象</label>
        <p class="error"><?php echo $error['q3'] ?></p>

        <input type="submit" name='submit' value="答えを確認する">
    </form>
    </div>
</body>
</html>