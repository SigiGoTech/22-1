<?php
namespace FileManager;




class Dir extends View
{
    private $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getView()
    {
        return C::VIEW . 'empty.php';
    }

    public function getTmp()
    {
        return [
            'dir_name' => $this->name,
        ];
    }

}