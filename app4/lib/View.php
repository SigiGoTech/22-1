<?php
namespace FileManager;

abstract class View
{

    public static $view = '';
    private static $i;
    private static $text = ['txt','hlf','lng','diz','html'];
    private static $img = ['jpg', 'png', 'gif'];
    
    public abstract function getView();
    
    public abstract function getTmp();
    
    public static function get()
    {
        if (isset($_GET['file'])) {
            $ext = pathinfo($_GET['file'], PATHINFO_EXTENSION);
            if (in_array($ext, self::$text)) {
                return self::$i ?? self::$i = new Text($_GET['file']);
            }
            elseif (in_array($ext, self::$img)) {
                return self::$i ?? self::$i = new Image($_GET['file']);
            }
            else {
                die("error");
            }
        }
        if (isset($_GET['dir'])) {
            return self::$i ?? self::$i = new Dir($_GET['dir']);
        }

    }

}