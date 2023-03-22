<?php
// 多次元配列で配列の中に連想配列を作り、
// name,age,genderを格納したデータがあります。

// このデータを元に

// 田中25男
// 鈴木20男
// 佐藤23女

// という形でループ構文を使用して出力してください。
// 上記処理後、鈴木の年齢のみを下部に出力してください。
$array = [ ['田中',25,'男'], ['鈴木',20,'男'], ['佐藤',23,'女'] ];

foreach($array as $vals){
   echo $vals[0].''.$vals[1].$vals[2].'';
   echo "\n";
}
echo $array[1][1];

?>