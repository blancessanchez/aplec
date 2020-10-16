<?php
    // passed by value reference
    function increment(&$a) {
        $a++;
        echo $a;
    }
    $a = 5;
    increment($a);

    // normal function
    function inc($b) {
        $b++;
        echo '<br>' . $b;
    }
    $b = 5;
    inc($b);

    // simple echo
    echo 'Hello';
