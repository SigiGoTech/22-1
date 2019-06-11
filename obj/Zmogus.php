<?php
class Zmogus extends Namas
{
    public $vardas;
    public $pavarde;
    public $amzius;
    private static $object;

    // Singeltono paternas
    public static function create($v, $p)
    {
        return self::$object ?? self::$object = new self($v, $p);
    }

    private function __construct($v, $p)
    {
        $this->vardas = $v;
        $this->pavarde = $p;
        $this->amzius = rand(40, 60);
    }

    public function get_aukstus()
    {
        return $this->aukstu_skaicius;
    }

    public function get_namo_stoga()
    {
        return $this->stogas;
    }

    public function la() 
    {
        echo 'As zmogus';
    }

}