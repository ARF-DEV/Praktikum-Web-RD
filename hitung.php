<?php 

    Class Cart {
        var int $n_mangga, $n_jambu, $n_salak;
        var int $harga_mangga = 15000;
        var int $harga_jambu = 13000;
        var int $harga_salak = 10000;
        public function __construct($n_mangga, $n_jambu, $n_salak) {
            $this->n_mangga = $n_mangga;
            $this->n_jambu = $n_jambu;
            $this->n_salak = $n_salak;
        }

        public function getTotal() {
            $result = $this->n_jambu * $this->harga_jambu;
            $result += $this->n_mangga * $this->harga_mangga;
            $result += $this->n_salak * $this->harga_salak;

            echo $result;
        }
    }


    $mangga = $_POST['mangga'];
    $salak = $_POST['salak'];
    $jambu = $_POST['jambu'];

    
    $newCart = new Cart($mangga, $jambu, $salak);

    return $newCart->getTotal();

?>