<?php

///muestro el array numerico original
$array1 = array(1,2,3,4,5,6);
var_export ($array1);
echo '----';
 
//elimino el tercer elemento del array y muestro el array
unset($array1[2]);
var_export ($array1);
echo '----';
 
//elimino el primer y segundo elemento del array y muestro el array
unset($array1[0],$array1[1]);
var_export ($array1);
echo '----';

