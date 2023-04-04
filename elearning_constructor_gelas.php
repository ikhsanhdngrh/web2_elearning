<?php
class elearning {
    public $minum;

    function __construct($minum){
        $this-> minum = $minum;
    }
    function get_minum(){
        return $this -> minum;
    }
}

    $minum = new elearning("12 Gelas Sehari");
    echo $minum->get_minum();


?>