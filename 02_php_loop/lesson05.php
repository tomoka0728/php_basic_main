﻿<?php
// 以下をfor文を使用して表示してください。

// 9
// 98
// 987
// 9876
// 98765
// 987654
// 9876543
// 98765432
// 987654321

for($x = 9; $x >= 1; $x--){
  for($y = 9; $y >= $x; $y--){
    echo $y;
  }
  echo "<br>";
}


?>