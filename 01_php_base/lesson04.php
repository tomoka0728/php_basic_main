<?php
// 連想配列のkey
// name, age, genderに
// 山田,  20,  女性
// という値を格納し、

// 山田
// 20歳・女性

// という形で出力してください。


$array = [
    'name' => '山田',
    'age' => 20,
    'gender' => '女性',
];

echo($array['name']."<br>");
echo($array['age']."歳・" .$array['gender']);


//改行に「/n」を使ったのですが、ブラウザで反応しなかったので<br>使っています。
?>