<?php
    $lNum = (int)$_POST["left"];
    $rNum = (int)$_POST["right"];
    $hasilTa = $lNum + $rNum;
    $hasilKu = $lNum - $rNum;
    $hasilKa = $lNum * $rNum;
    $hasilBa = $lNum / $rNum;
    $hasilMo = $lNum % $rNum;


    ?>
    
    <h1><?php echo $lNum ?> + <?php echo $rNum ?> = <?php echo $hasilTa ?></h1>
    <h1><?php echo $lNum ?> - <?php echo $rNum ?> = <?php echo $hasilKu ?></h1>
    <h1><?php echo $lNum ?> * <?php echo $rNum ?> = <?php echo $hasilKa ?></h1>
    <h1><?php echo $lNum ?> / <?php echo $rNum ?> = <?php echo $hasilBa ?></h1>
    <h1><?php echo $lNum ?> % <?php echo $rNum ?> = <?php echo $hasilMo ?></h1>