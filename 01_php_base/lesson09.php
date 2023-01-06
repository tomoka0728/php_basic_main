<?php
// 配列に「10,60,90,70,50」を点数として格納し
// それぞれをif文で

// 80点以上なら「優」
// 60点以上なら「良」
// 40点以上なら「可」
// それ以下なら「不可」

// という形で区別し、
// ○○点は「○」です。と出力してください。


$score = [ 10 , 60 , 90 , 70 , 50 ];

foreach( $score as $value ){
    if( $value >= 80 ){
        echo $value ."点は「優」です<br>";

    }elseif( $value >= 60 ){
        echo $value ."点は「良」です<br>";
        
    }elseif( $value >= 40 ){
        echo $value ."点は「可」です<br>";

    }else{
        echo $value ."点は「不可」です<br>";
    }
}


?>