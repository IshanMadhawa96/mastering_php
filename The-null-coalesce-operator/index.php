<?php
/*PHP 7 set out to 
resolve one of the most common usage patterns, by introducing the null coalesce 
operator(??)*/
$a =null;
$b = 10;
echo 'null coalesce operator(??) in php';
echo '<br>';
echo $a ?? 20;
echo '<br>';
echo $a ?? $b ??30;