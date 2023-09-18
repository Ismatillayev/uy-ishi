<?php
$a = 245;
$b =  $a % 10;
$o =(floor( $a / 10) )%10;
$y =  floor($a / 100);
$c = $y+$o+$b;
echo $c;