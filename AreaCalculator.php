<?php

namespace App;

interface Calculator {
    public function calculate($w, $h);
}

class Triangle implements Calculator {

    public function calculate($w, $h)
    {
        return 1/2*($w*$h);
    }
}

class Rectangle implements Calculator {

    public function calculate($w, $h)
    {
        return $w*$h;
    }
}

class Circle implements Calculator {

    public function calculate($w, $h)
    {
        return pi ()*($w/2)*($w/2);
    }
}

class Person {

    public function calculateArea($w, $h, Calculator $calculator)
    {
        return $calculator->calculate($w, $h);
    }
}

echo (new Person())->calculateArea (10, 0, new Circle());
