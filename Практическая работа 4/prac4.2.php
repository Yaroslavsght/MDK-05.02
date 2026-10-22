<h2>Задание 1</h2>
<?php
$nums = ['one' => 'один','two' => 'два', 'three' => 'три', 'four' => 'четыре', 'five' => 'пять', 'six' => 'шесть', 'seven' => 'семь', 'eight' => 'восемь', 'nine' => 'девять', 'ten' => 'десять'];
foreach($nums as $key => $value){
    echo "$key - $value <br>";
}
?>
<h2>Задание 2</h2>
<form>
    <p>Введите слово на английском:</p>
    <input name="word">
    <input type="submit">
</form>
<?php
if(isset($_GET['word'])){
    $k = $_GET['word'];
    $ISF = False;
    foreach($nums as $eng => $rus){
        if($rus === $k){
            echo $k . ' - ' . $eng . '<br>';
            $ISF = True;
            break;
        }
        }
        if (!$ISF){
            echo $k . ' - в словаре нет такого слова';
        }
}
?>