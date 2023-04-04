<?php
class perkalian {
    var $bil1;
    var $bil2;

    function __construct($bil1,$bil2){
        $this-> bil1 = $bil1;
        $this-> bil2 = $bil2;
    }
    function hasil_perkalian(){
        $hasil =  $this -> bil1 * $this ->bil2;
        return $hasil;
    }
}

    $isi = new perkalian(20,20);
    echo "Hasilnya adalah ".$isi->hasil_perkalian();


?>