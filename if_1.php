<?php

$gender = readline("请输入您的性别：");
if ($gender == "男") {
    echo "你的编号：1";
} else if ($gender == "女") {
    echo "你的编号：0";
} else {
    echo "你的编号为：-1";
}
?>
