<?php
$x = "this is original.";

function globaltest(){
    $x = "This is copy.";
    echo "$x : is without globals function";
    echo "<br>";
    echo $GLOBALS ['x']. ": is with globals function";
}
globaltest();