<?php

$phone = [
    "iphone" => [
        "iphone15" => 6100,
        "iphone14" => 5211
    ],
    "huawei" => [
        "mate60" => 8023
    ]
];

$str = json_encode($phone);
echo $str;

?>
