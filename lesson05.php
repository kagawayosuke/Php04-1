﻿<?php
// 連想配列の要素name, age, genderに
// 田中,25,男
// という値を格納し、

// 田中
// 25歳・男性

// という形で出力してください。

$array = [
 'name'=>['田中'],
 'age'=>['25'],
 'gender'=>['男']
];

echo $array['name'][0],"\n", $array['age'][0].'歳・', $array['gender'][0]
?>
