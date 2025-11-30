<?php
class shape {
    public function luas (){
        return 0;

    }

    public function keliling (){
        return 0;

    }
}

class lingkarang extends shape {
    public $radius;

    public function __construct($r)
    {
        $this->radius =$r;
    }
    public function luas()
    {
        return pi()*$this->radius*$this->radius;
    }
    public function keliling()
    {
        return 2*pi() * $this->radius;
    }

}
$luas = new shape;
$lingkarang = new lingkarang (4);
echo "luas lingkarang :" . $lingkarang->luas();

