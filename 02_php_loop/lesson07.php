<?php
// 以下をfor文を使用して表示してください。
// ヒント: forの中でforを３回使用

// ********1
// *******121
// ******12321
// *****1234321
// ****123454321
// ***12345654321
// **1234567654321
// *123456787654321
// 12345678987654321

for($x = 1 ; $x <= 9  ; $x++){
  for($y = 9 ; $y > $x ; $y--){
      echo '*';
    }
    for($a = 1 ; $a <=$x ; $a++){
      echo $a;
    }
    for($d = 3 ; $d >=6-$a ; $d--){
      echo $d - (4 - $x);
    }
    echo '<br>';
}

?>