<?php


namespace AppBundle\Controller\Services;

class Counter {

    private $f;

    public function __construct()
    {
        $this->f=function() {
            return '';
        };
    }

    public function __toString() {

        return "test";
    }


}