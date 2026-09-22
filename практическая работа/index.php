<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>изучаем php</h1>
    <h2>вывод на экран</h2>
    <p>команда echo</p>
    <?php
    echo "это PHP"; //коментарий в echo
    /* многострочный коментарий */
    ?>
    <P>сокращённый echo</p>
    <?= 'Ещё раз PHP' ?>
    <p>вывод чисел</p>
    <?= 33.3 ?>
    <h2>переменная</h2>
    <p>обьявление переменной</p>
    <?php
    $num=55;
    $n = $num + 33;
    echo "n = $n, num = $num";
    ?>
    <h2>арифметические операции</h2>
    <p><?= '+ - * / ** %' ?></p>
    <h2>использование скобок</h2>
    <p>Приоритет операции</p>
  <?php  echo 5 + 5 * 5 - 5 ; ?>
  <h2>Пример:</h2>
  <p>a+b/c при a=10, d=20, c=15</p>
  <?php
      $a = 10;
      $b = 20;
      $c = 15;
      $res = ($a + $b) / $c;
      echo "Результат:  $res";
</body>
</html>