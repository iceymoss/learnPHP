<?php

$str = '{"iphone":{"iphone15":6100,"iphone14":5211},"huawei":{"mate60":8023}}';

var_dump(json_decode($str));
var_dump(json_decode($str, true));

?>