<?php
// 以下をfor文を使用して表示してください。

// 987654321
// 98765432
// 9876543
// 987654
// 98765
// 9876
// 987
// 98
// 9

for($x = 0; $x <= 9; $x++){
    for($y = 9; $y >= $x + 1; $y--){
        echo $y;
    }
    echo '<br>';
}

?>