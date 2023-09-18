<?php
$s = 23790;
$m = floor($s / 60);
$q = $s % 60;
$st = floor($m / 60);
echo "$st soat $m minut $q sekund";