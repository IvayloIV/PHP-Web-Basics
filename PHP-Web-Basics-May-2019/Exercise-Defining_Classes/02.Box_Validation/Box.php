<?php

class Box {
    private $length;
    private $width;
    private $height;

    function __construct(float $length, float $width, float $height) {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function getLength() {
        return $this->length;
    }

    private function setLength($length) {
        if ($length <= 0) {
            throw new Error('Length cannot be zero or negative.');
        }

        $this->length = $length;
    }

    public function getWidth() {
        return $this->width;
    }

    private function setWidth($weight) {
        if ($weight <= 0) {
            throw new Error('Width cannot be zero or negative.');
        }

        $this->width = $weight;
    }

    public function getHeight() {
        return $this->height;
    }

    private function setHeight($height) {
        if ($height <= 0) {
            throw new Error('Height cannot be zero or negative.');
        }

        $this->height = $height;
    }

    public function getVolume() {
        return $this->length * $this->width * $this->height;
    }

    public function getSurfaceArea() {
        return 2 * $this->length * $this->width +
            2 * $this->length * $this->height +
            2 * $this->width * $this->height;
    }

    public function getLateralSurfaceArea() {
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