<?php
namespace FileManager;



class Image extends View
{
    private $name;
    
    public function __construct($name)
    {
        $this->name = $name;
        
    }

    public function getView()
    {
        return C::VIEW . 'image.php';
    }

    public function getTmp()
    {
        return [
            'file_name' => $this->name,
            'path' => C::URL . 'work/' . $this->name
        ];
    }

}