<?php

class Box {
    private $length;
    private $width;
    private $height;

    function __construct(float $length, float $width, float $height) {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    function getVolume() {
        return $this->length * $this->width * $this->height;
    }

    function getSurfaceArea() {
        return 2 * $this->length * $this->width +
            2 * $this->length * $this->height +
            2 * $this->width * $this->height;
    }

    function getLateralSurfaceArea() {
        return 2 * $this->length * $this->height +
            2 * $this->width * $this->height;
    }

    public function __toString() {
        $volume = number_format($this->getVolume(), 2, '.', '');
        $surfaceArea = number_format($this->getSurfaceArea(), 2, '.', '');
        $lateralSurfaceArea = number_format($this->getLateralSurfaceArea(), 2, '.', '');

        return "Surface Area - {$surfaceArea}\nLateral Surface Area - {$lateralSurfaceArea}\nVolume - {$volume}";
    }
}