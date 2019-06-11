<?php
class Namas
{
    public $aukstu_skaicius = 38;
    protected $stogas = 'cerpes';
    public static $pastoge = 'yra';

    public static function valio()
    {
        echo '<h1>VALIO</h1>';
        echo self::$pastoge;
    }

    
    public function get_stogas()
    {
        return $this->stogas;
    }

    public function set_stogas($tipas)
    {
        if ($tipas == 'skarda' || $tipas == 'cerpes') {
            $this->stogas = $tipas;
        }
        else {
            echo 'blogas stogas';
        }
        
    }

    public function la()
    {
        echo 'As namas';
    }


}