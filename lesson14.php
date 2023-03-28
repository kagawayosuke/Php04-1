<?php
// ランダムで生成された0〜99の数値10個を配列に格納してください。
// また格納された配列の中身をループ構文を使用せず表示確認してください。

$randArray = array();
for($i = 0; $i < 10; $i++ ) {
array_push($randArray, mt_rand(0, 99));
}
var_dump($randArray);

?>