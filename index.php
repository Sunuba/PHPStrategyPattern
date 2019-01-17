<?php require_once ('vendor/autoload.php');


use Sams\Engineer;
use Sams\Triangle;
use Sams\Rectangle;
use Sams\Circle;


echo 'Calculate Triangle: ' . (new Engineer())->calculateArea (10, 10, new Triangle()) . '<br>';
echo 'Calculate Rectangle: ' . (new Engineer())->calculateArea (10, 10, new Rectangle()) . '<br>';
echo 'Calculate Circle: ' . (new Engineer())->calculateArea (10, 0, new Circle()) . '<br>';
