﻿<?php

// 配列に日本,アメリカ,イギリス,フランスを
// 格納し、forecah文を使って順番に
// 「要素番号:国名」を出力してください。

$country = ['日本', 'アメリカ', 'イギリス', 'フランス'];

foreach($country as $key => $value){
  echo ' 「 '.$key;
  echo ' : '.$value;
  echo ' 」 ';
  echo "\n";
}

?>