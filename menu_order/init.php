<?php
// Menuクラスを初期化する

require_once("menu.php");

$apple = new Menu("リンゴ", 150);
$banana = new Menu("バナナ", 100);
$orange = new Menu("オレンジ", 180);

$items = [
  $apple,
  $banana,
  $orange,
];
?>
