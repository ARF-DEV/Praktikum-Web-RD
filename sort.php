<?php
    function getSortedItem($list) {
        $n = count($list);

        for ($i=0; $i < $n; $i++) { 
            for ($j=$i + 1; $j < $n; $j++) { 
                if ($list[$i] > $list[$j]) {
                    $temp = $list[$i];
                    $list[$i] = $list[$j];
                    $list[$j] = $temp;
                }
            }
        }
        return $list;
    }
?>

<ol>
    <?php
        $listArray = ["larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat"];
        $res = getSortedItem($listArray);
        foreach($res as $item) {
            echo "<li><h3>$item</h3></li>";
        }
    ?>
</ol>