<?php
hanoi(2,"A", "B", "C");
echo '<br>';
hanoi(5,"A", "B", "C");

function hanoi($n, $a, $b, $c) {
    if ($n > 0) {
        hanoi($n-1, $a, $c, $b);
        echo $n .'番目の円盤を' . $a . 'から' .$b. 'に移動する';
        echo '<br>';
        hanoi($n-1, $c, $b, $a);
    }
}
?>
