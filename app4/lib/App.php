<?php
namespace FileManager;

class App 
{
    static public function render()
    {
        require C::VIEW . 'top.php';
        $dirs = Files::it()->getDLinks();
        $files = Files::it()->getFLinks();
        require C::VIEW . 'file-list.php';
        $tmp = View::get()->getTmp(); // templeito kintamieji
        require View::get()->getView();

        require C::VIEW . 'bottom.php';
    }
}