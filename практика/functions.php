<h1>Функции</h1>
<?php
sayHello('Петя');
function sayHello($name){ //желательно распологать все функции сверху
    echo"<p>Привет, $name</p>";
    }

sayHello('Вася');
sayHello('Коля');
sayHello('Иван');
?>
<h2>Функции с несколькими параметрами</h2>
<?php
function fullName($fName, $oneName){
    echo"$fName $oneName";
}
fullName('Вася',  'Иванов');
?>
<h2>Функции с параметрами по умолчанию</h2>
<?php
function showUserInfo($fName, $oneName, $role = 'user'){
    echo"<p>$fName $oneName, роль - $role</p>";
}
showUserInfo('Коля', 'Петров', 'student');
showUserInfo('Ваня', 'Петров');
?>
<h2>Возвращаемое значение</h2>
<?php
function getUserInfo($fName, $oneName, $role = 'user')
{
    return "$fName $1Name,роль - $role";  
}
$info = getUserInfo('Иван','Иванов');
echo $info;
echo getUserInfo('Иван','Иванов');

function squareRect($1, $w)
{
    return $1 * $w;
}
$s = sqareRect(20,40);
echo 'Площадь -' . $s; 
?>