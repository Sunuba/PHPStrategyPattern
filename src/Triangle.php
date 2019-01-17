<?php


namespace Sams;


class Triangle implements Calculator {

    public function calculate($w, $h)
    {
        return 1/2*($w*$h);
    }
}