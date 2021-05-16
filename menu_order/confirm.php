<?php
// 注文確認画面

require_once("init.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Menu order</title>
</head>
<body>
  <h3>注文確認</h3>

  <?php $totalPrice ?>
  <?php foreach ($items as $item): ?>
    <?php $orderCount = $_POST[$item->getName()] ?>
    <p>
      <span><?php echo $item->getName() ?></span>
      <span><?php echo $orderCount ?>個</span>
      <span>¥<?php echo $item->getTotalPrice($orderCount) ?></span>
    </p
    <?php $totalPrice += $item->getTotalPrice($orderCount) ?>
  <?php endforeach ?>

  <p>合計: ¥<?php echo $totalPrice ?></p>
</body>
</html>
