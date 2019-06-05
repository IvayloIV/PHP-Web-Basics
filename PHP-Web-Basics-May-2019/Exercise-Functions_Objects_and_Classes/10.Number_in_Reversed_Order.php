<?php

class DecimalNumber {
    public $numStr;

    function __construct($numStr) {
        $this->numStr = $numStr;
    }

    function reverseNum() {
        return strrev($this->numStr);
    }
}

$n = readline();
$d = new DecimalNumber($n);
echo $d->reverseNum();