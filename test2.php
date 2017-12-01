<?php

$referenceTable = array();
$referenceTable['val1'] = array(1, 2);
$referenceTable['val2'] = 3;
$referenceTable['val3'] = array(4, 5);

$testArray = array();

$testArray = array_merge($testArray, (array)$referenceTable['val1']);
var_dump($testArray);
$testArray = array_merge($testArray, (array)$referenceTable['val2']);
var_dump($testArray);

$name = 'John';
$name[10] = 'Doe';

echo $name;

var_dump(PHP_INT_MAX + 1);

echo "Sorting";

array(
    'a' => 'z1',
    'b' => 'za'
);


var_dump(0123 == 123);

var_dump(0123 === 123);

var_dump('0123' == 123);

    $x = NULL;
if('0xFF' == 255 ) {
    $x = (int)'0xFF';
    echo $x;
}