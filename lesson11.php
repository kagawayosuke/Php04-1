<?php

// 多次元配列で配列の中に連想配列を作り、

// name,age,genderを格納したデータがあります。

// このデータを元に

// 田中25男
// 鈴木20男
// 佐藤23女

// という形でループ構文を使用して出力してください。
// 上記処理後、鈴木の年齢のみを下部に出力してください。

$array = [
  'name' => ['田中','鈴木','佐藤'],
  'age' => [25, 20, 23],
  'gender' => ['男','男','女']
  ];

  foreach($array["name"] as $key => $val) {

    echo $val.$array["age"][$key].$array["gender"][$key]."\n";

  }

  echo $array['age'][1];


?>