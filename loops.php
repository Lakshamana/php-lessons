<?php
    $n = 1;
    while ($n < 10) {
        echo $n, '<br/>';
        if ($n < 5) {
            $n++;
            continue;
        }
        echo 'next: '.($n + 1), '<br/>';
        $n++;
    }
?>