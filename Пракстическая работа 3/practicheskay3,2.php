<h1>Циклы</h1>
<h1>Задача 1</h1>
<?php
$starNumber = 7; //стартовое значение 
$multiplier = 7; //множитель
$Q = 5; //количество чисел
echo"стартовое число = $starNumber <br> мультипликатор = $multiplier <br>длина прогрессии: $Q чисел <br> геометрическая прогрессия; ";
for($i = 0; $i < $Q; $i++){ //цикл выполняется $Q раз
    echo $starNumber . " "; //вывод текущего числа на экран
    $starNumber = $starNumber * $multiplier;
}
?>
<h2>Задача 2</h2>
<?php
$lastnumber = 5;
$sum = 0;
echo"число для которого складываем включительно: " . $lastnumber . "<br>переменная для накопления суммы " . $sum;
for($i = 1; $i <= $lastnumber; $i++){
    $sum += $i;
}
echo "<br>сумма чисел от 1 до " . $lastnumber . " равна " . $sum;
?>