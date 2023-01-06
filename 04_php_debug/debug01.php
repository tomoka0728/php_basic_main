<?php
// デバック練習
// 氏名入力時に入力内容が表示されるようにプログラムを完成させてください。
// プログラム内にバグが含まれているので正常に動くように修正してください。
// $_POSTの挙動は調べてみてください。

//var_dump($_POST);

if (isset($_POST['last_name']) && isset($_POST['first_name'])) {
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    if ($last_name != null && $first_name != null) {
        echo '私の名前は'.$last_name.$first_name.'です。';
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>デバック練習</title>
</head>
<body>
    <section>
    <form action='./debug01.php' method="post">
        <label>姓</label>
        <input type="text" name="last_name"/>
        <label>名</label>
        <input type="text" name="first_name" />
        <input type="submit" value="送信する"/>
    </form>
    </section>
</body>
</html>
