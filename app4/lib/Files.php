<?php
namespace FileManager;

class Files
{
    private $fileList = [];
    private $dirList = [];

    private $fileLink = '';
    private $dirLink = '';

    private static $i;
    
    public static function it($dir = C::WORK)
    {
        return self::$i ?? self::$i = new self($dir);
    }

    private function __construct($dir)
    {
        $this->readAllFiles($dir);
        $this->linkGenerator();

    }


    public function getFLinks()
    {
        return $this->fileLink;
    }

    public function getDLinks()
    {
        return $this->dirLink;
    }

    private function readAllFiles($dir)
    { 
        //jeigu gale nera slaso - pridedam
        $last_letter  = $dir[strlen($dir)-1]; 
        $dir  = ($last_letter == '\\' || $last_letter == '/') ? $dir : $dir.DIRECTORY_SEPARATOR; 
        // atidarom direktorija
            if ($handle = opendir($dir)) { 
                //skaitom viska paeiliui ir priskiriam $file
            while (false !== ($file = readdir($handle))) { 
                // ismetam is listo taskus ir dvitaskius
              if ($file == '.' || $file == '..') { 
                continue; 
              } 
              $file  = $dir.$file; // sujungiam faila su folderiu
              if (is_dir($file)) { // ar failas nes sarasas maisytas
                $this->dirList[]  = basename($file); // sudarom failu sarasa
              } elseif (is_file($file)) { 
                $this->fileList[]  = basename($file); // sudarom folderiu sarasa
              } 
            } 
            closedir($handle); // uzdarom atidaryta folderi
          }
      }

      private function linkGenerator()
      {
        foreach ($this->fileList as $val) {
            $this->fileLink .= '<a href="?file='.$val.'">'.$val.'</a>'."\n";
        }
        foreach ($this->dirList as $val) {
            $this->dirLink .= '<a href="?dir='.$val.'">'.$val.'</a>'."\n";
        }
      }
}