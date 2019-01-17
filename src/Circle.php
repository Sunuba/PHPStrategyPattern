<?php


namespace Sams;


class Circle implements Calculator {

    public function calculate($w, $h)
    {
        return pi ()*($w/2)*($w/2);
    }
}