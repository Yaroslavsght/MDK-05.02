<h2>Задание 1</h2>
<?php
$mas = [[1,2,3,4],[1,2,3,4],[1,2,3,4]];
foreach($mas as $groupe){
    foreach($groupe as $num){
        echo $num . ' ';
    }
    echo'<br>';
}
?>
<h2>Задание 2</h2>
<?php
$mat = [];
$curnum = 10;
for ($i = 0; $i < 9; $i++){
    for ($j = 0; $j < 9; $j++){
        $mat[$i][$j] = $curnum * $curnum;
        $curnum++;
    }
}
echo  "<table border='1' style='border-collapse:  collapse; text-align: center;'>";
foreach($mat as $row){
    echo "<tr>";
    foreach($row as $value){
        echo "<td style='padding: 10px;'>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<h2>Задача 3</h2>
