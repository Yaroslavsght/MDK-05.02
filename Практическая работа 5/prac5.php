<?php
$str = '(ynoki)mg';
function haygatting($str){
    $result = '';
    $len = strlen($str);
    $start = 0;

    for ($i = 0; $i < $len; $i++)
        if ($str[$i] == '('){
            $start = $i + 1;
        }  elseif ($str[$i] == ')' && $start != -1);
        
}