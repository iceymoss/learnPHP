<?php
class Car
{
    var $color;
    var $weight;
    var $price;

    function __construct($color = "green", $weight = 2.5, $price = 13434.532423) {
        $this->color = $color;
        $this->price = $price;
        $this->weight = $weight;
    }

    function what_color() {
        return $this->color;
    }

    function what_weight() {
        return $this->weight;
    }

    function what_price() {
        return $this->price;
    }
}

//实例化对象
$xiaomiSU7 = new Car("blue", 1.5, 9.9999);
echo $xiaomiSU7->price;
$xiaomiSU7->price = 19.9999;
echo "\n";
print_r($xiaomiSU7);
?>
