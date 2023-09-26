<?php
class addNumber{
public function add($num1,$num2){
    $sum = $num1 +$num2;
    echo "the sum two number : $sum";

}

}
$addition = new addNumber();
$addition->add(100,200);
?>