<?php

function int_to_roman($num)
{
    $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $Value = '';
    while ($num > 0) {
        foreach ($map as $roman => $int) {  
            if ($num >= $int) {
                $num -= $int;
                $Value .= $roman;
                break;
            }
        }
    }
    return $Value;
}

echo(int_to_roman(58))

?>
