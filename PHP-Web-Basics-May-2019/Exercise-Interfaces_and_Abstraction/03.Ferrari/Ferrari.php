<?php

class Ferrari implements Car {
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $model;

    /**
     * @var int
     */
    public static $objNum;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->model = '488-Spider';
        self::$objNum++;
    }

    public function useBrakes()
    {
        return 'Brakes!';
    }

    public function pushGasPedal()
    {
        return 'Zadu6avam sA!';
    }

    public static function forUrl(string $str, string $rep = '-') {
        return strtolower(preg_replace('/\s/', $rep, $str));
    }

    public function __toString()
    {
        $objNum = self::$objNum;
        $forUrlName = self::forUrl($this->name);
        return "{$this->model}/{$this->useBrakes()}/{$this->pushGasPedal()}/{$forUrlName}/ inst. {$objNum}";
    }
}