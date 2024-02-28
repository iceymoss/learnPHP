<?php

function div($x, $y) {
    if($y == 0){
        throw new Exception("父母不能为零");
    }
    return $x/$y;

}

try {
    div(100, 0);
}
catch(Exception $e) {
    echo "计算错误：". $e->getMessage();
}

?>
