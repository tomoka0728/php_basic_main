<?php
// 100円のチョコレートを1個
// 50円のアメを3個買いました。

// 各値段の計算を変数に代入し、
// その合計を$sumと言う変数に代入して
// 「○○○円です。」という形で出力してください。



function sum($snac1, $snac2){
    return $snac1 + $snac2 * 3 ."円です。";
}

$chocolate = 100;
$candy = 50;
$sum = sum( $chocolate, $candy );

echo $sum;

?>