<?php
// 注文画面

require_once("init.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Menu order</title>
</head>
<body>
  <h3>Menu</h3>

  <form action="confirm.php" method="post">
    <?php foreach ($items as $item): ?>
      <span><?php echo $item->getName() ?></span>
      <span>¥<?php echo $item->getTaxInPrice() ?></span>
      <div>
        <input type="text" value="0" name="<?php echo $item->getName()  ?>">
        <span>個</span>
      </div>
      <p></p>
    <?php endforeach ?>
    <input type="submit" value="注文する">
  </form>
</body>
</html>
