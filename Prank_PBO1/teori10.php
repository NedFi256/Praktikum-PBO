<?php
class ibu {
    protected function penyabar (){
        echo "sifat ibu penybar\n";
    }
}
trait ayah {
    protected function tegas(){
        echo "sifat ayah tegas\n";
    }
}
trait nenek{
    protected function loyal(){
        echo "sifatnya nenek loyal\n";
    }
}

interface paman{
    function peminjam();
}

abstract class teman {
    abstract public function kontol();
}

class anak extends ibu implements paman{
    function __construct(){
    $this->ceksikap();
    $this->peminjam();
    $this->kontol();
    anak :: welcome();
}
    use ayah;
    use nenek;
    private $nama = "daus";
    public static $message ="welcome";
    private function ceksikap(){
        echo "nama anak: ".$this->nama;
        $this->tegas();
        $this->penyabar();
        $this->loyal();
    }
    function peminjam(){
        echo "paman suka minjam uang"; 
    }
    public function kontol(){
        echo "temen kontol ";
    }

    public static function welcome(){
    echo self :: $message."\n";
}
}
$anak = new anak();


?>