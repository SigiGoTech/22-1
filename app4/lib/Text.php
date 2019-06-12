<?php
namespace FileManager;



class Text extends View
{
    private $content, $name;
    
    public function __construct($name)
    {
        $path = C::WORK . $name;
        $this->content = file_get_contents($path);
        $this->name = $name;
        
    }

    public function getView()
    {
        return C::VIEW . 'text.php';
    }

    public function getTmp()
    {
        return [
            'file_name' => $this->name,
            'content' => $this->content
        ];
    }

}