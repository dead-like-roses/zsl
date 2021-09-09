<?php

echo PHP_VERSION;

echo 2**10, '<br>';

$x=230.43;
$xx=100;

echo $x<=>$xx,'<br>';

if($x == $xx) {
    echo "rowne";
} else {
    echo "nie rowne";
}
echo "<br>";
if($x === $xx) {
    echo "rowne";
} else {
    echo "nie rowne";
}