<?php
//El nombre por defecto 
$nombre = isset($argv[1])? $argv[1]: "Mundo";
@print "Hola {$nombre}\n";
?>
