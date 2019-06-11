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
        require C::VIEW . 'bottom.php';
    }
}