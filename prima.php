<?php 
    function getPrime() {
        $res = [];
        for ($i=3; $i <= 50; $i++) {
            $check = false; 
            for ($y=2; $y <= (int)sqrt($i); $y++) { 
                if ($i % $y == 0) {
                    $check = true;
                    break;
                }
            }
            if (!$check) {
                array_push($res, $i);
            }
        }
        return $res;    
    }
?>

<h2>
    <?php
        $primes = getPrime();
        foreach ($primes as $prime) {
            echo "$prime ";
        } 
    ?>
</h2>