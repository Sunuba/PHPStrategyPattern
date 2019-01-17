<?php


namespace Sams;


class Engineer {

    public function calculateArea($w, $h, Calculator $calculator)
    {
        return $calculator->calculate($w, $h);
    }
}