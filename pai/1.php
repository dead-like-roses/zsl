<?php
echo "tekst <br>";
echo "pain";
$name="Ola";
echo "imie: $name <br>";
$calkowite=343456;
$binarne= 0b10101;
$oct=011;
$hex=0x11;
$x=0.10;
$prawda=true;
$falsz=false;
echo gettype($x);

echo <<< E
    <hr>Imię: $name<br>
    <hr>
E;

$text = <<< E
    <hr>Imię: $name<br>
    <hr>
E;

echo $text;

echo <<< 'E'
  <hr>Imię: $name<br>
    <hr>
E;

echo "X"."D";

?>