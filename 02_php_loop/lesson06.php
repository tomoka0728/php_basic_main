﻿<?php
// 以下をfor文を使用して表示してください。

// 987654321
// 87654321
// 7654321
// 654321
// 54321
// 4321
// 321
// 21
// 1

for($x = 0; $x <= 9; $x++){
    for($y = 9; $y > $x; $y--){
        echo $y-$x;
    }
    echo '<br>';
}

?>