<?php 
function calculateTax($price, $tax=0.2) {
    $total = $price + $price * $tax;
    return $total;

}

echo calculateTax(10,0.3);


?>