<?php
// 以下配列の中身をfor文を使用して表示してください。
// 表が縦横に伸びてもある程度対応できるように柔軟な作りを目指してください。
// 表示はHTMLの<table>タグを使用すること

/**
 * 表示イメージ
 *  _________________________
 *  |_____|_c1|_c2|_c3|横合計|
 *  |___r1|_10|__5|_20|___35|
 *  |___r2|__7|__8|_12|___27|
 *  |___r3|_25|__9|130|__164|
 *  |縦合計|_42|_22|162|__226|
 *  ‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾
 */

$arr = [
    'r1' => ['c1' => 10, 'c2' => 5, 'c3' => 20],
    'r2' => ['c1' => 7, 'c2' => 8, 'c3' => 12],
    'r3' => ['c1' => 25, 'c2' => 9, 'c3' => 130]
];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>テーブル表示</title>
<style>
table {
    border:1px solid #000;
    border-collapse: collapse;
}
th, td {
    border:1px solid #000;
}
</style>
</head>
<body>
    <!-- ここにテーブル表示 -->

    <table border="1">
<th>&nbsp;</th>
<?php

$td = array();
$tr = array();
foreach($arr as $key => $value){
    array_push($td , $key);
}
//var_dump($td);
foreach($arr[$td[0]] as $key => $value){
    array_push($tr , $key);
}
//var_dump($tr);
foreach($tr as $key){
    echo '<td><center>'.$key.'</center></td>';
}

    echo '<td>横合計'.'</td></tr>';


    // foreach($arr as $key => $value){
    //     echo '<td><center>'.$key.'</center></td>';
    //     foreach($value as $key2 => $value2){
    //         echo '<td><center>'.$value2.'</center></td>';
    //     }
    foreach($td as $key){
            echo '<td><center>'.$key.'</center></td>';
            foreach($arr[$key] as $key2 => $value2){
                echo '<td><center>'.$value2.'</center></td>';
            }

        $r_sum = array_sum($arr[$key]);
        echo '<td><center>'.$r_sum.'</center></td>';
        
        echo '</td></tr>';
    }


    echo '<td>'.'縦合計'.'</td>';
    $total_sum = 0;
    $array_count = count($arr);
    for($x = 1; $x <= $array_count; $x++){
      $c_sum = 0;
      foreach($arr as $total){
      $c_sum += $total['c'.$x];
      $total_sum += $total['c'.$x];
      }
      echo '<td><center>'.$c_sum.'</center></td>';
    }
echo '<td><center>'.$total_sum.'</center></td>';
    
?>

</table>

</body>
</html>