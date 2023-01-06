<?php
// 以下は1から引数の数字までを順番に表示するプログラムです。
// その数が3で割り切れるなら"アホ"、5で割り切れるなら"わん"、
// 両方で割り切れるなら"アホわん"
// と表示してください。
// 判定は関数に記述し、関数を呼び出して結果表示すること
// 両方で割り切れるケースは15の倍数とはせずに条件を重ねて設定してください。

// 表示例）
// 1
// 2
// 3 アホ
// 4
// 5 わん
// 6 アホ
// 7
// 8
// 9 アホ
// 10 わん
// 11
// 12 アホ
// 13
// 14
// 15 アホわん
// .
// .
// 以下省略

function nabeatsu($i)
{
    // この関数内に処理を記述

for($j = 1; $j <= $i; $j++){
  if ($j % 3 == 0 && $j % 5 == 0){
    echo $j.'アホわん<br>';
  }elseif($j % 3 == 0){
    echo $j.'アホ<br>';
  }elseif($j % 5 == 0){
    echo $j.'わん<br>';
  }else{
    echo $j.'<br>';
  }
}

//以下のコードでも成功しました

    // for($j = 1; $j <= $i; $j++){

    //   $aho = ($j % 3 == 0);
    //   $wan = ($j % 5 == 0);
    //   $ahowan = ($aho && $wan);
        
    //     switch ($j){

    //         case $ahowan:
    //             echo $j.'アホわん<br>';
    //             break;
    //         case $aho:
    //             echo $j.'アホ<br>';
    //             break;
    //         case $wan:
    //             echo $j.'わん<br>';
    //             break;
    //         default:
    //             echo $j.'<br>';
    //     }
    // }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>世界のナベアツプログラム</title>
</head>
<body>
    <section>
        <!-- ここに結果表示 -->
        <?php
        nabeatsu(15)
        ?>
    </section>
</body>
</html>