<?php

$arr = array(1, 2, 3, 4);
foreach($arr as $value) {
    echo "value:$value". PHP_EOL;
}

$x = array("Google","Runoob","Taobao");
foreach ($x as $value)
{
    echo $value . PHP_EOL;
}

$x = ["Chinese" => 120, "Math" => 145, "English" =>130];
foreach ($x as $key => $value) {
    echo "$key: $value" . PHP_EOL;
}

?>
