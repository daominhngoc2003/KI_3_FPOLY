<?php
    $n = 10000;
    $so = 1;
    for($i=2;$i<=$n;$i++){
        for($j=2;$j<=$i-1;$j++){
            if($i%$j==0){
                $so = 0;
            }

        }
        if($so == 1){
            echo "$i <br />";
        }
        $so = 1;
    }
?>