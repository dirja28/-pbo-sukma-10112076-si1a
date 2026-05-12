<?php

function checkNum($number) {
    if ($number > 1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}

try {
    checkNum(2);
    echo "Number is valid.";
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage();
}
?>