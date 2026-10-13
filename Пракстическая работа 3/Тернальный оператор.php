<h2>Задача 1</h2>
<?php
$a=15;
$b=10;
echo "a = " . $a . "<br>b = " . $b;
$res = $a < $b ? 'a меньше b - ' . $a+$b : 'a больше или равно b - ' . $a*$b;
echo "<br>Результат: " . $res;
?>
<h2>Задача 2</h2>
<form>
    <p>Введите число:</p>
    <input name="number">
    <input type="submit">
</form>
<?php
if(isset($_GET['number'])){
    $n = $_GET['number'];
    echo ($n%2 === 0) ? 'четное' : 'нечетное';
}
?>
<h2>Задача 3</h2>
<form>
    <p>Введите число:</p>
    <input name="numb">
    <input type="submit">
</form>
<?php
if(isset($_GET['numb'])){
    $sum = $_GET['numb'];
    echo ($sum > 1000) ? 'Сумма более 1000, скидка 10%Ж:' . ($sum*0.90) : 'Сумма менее 1000, скидка 5%: '. ($sum*0.95);
}
?>