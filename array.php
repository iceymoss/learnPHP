<?php
$city = array("广州", "深圳", "北京", "上海");
echo $city[0];  //广州
echo $city[2];  //北京
echo count($city); //4

//遍历数组
for ($i = 0; $i < count($city); $i++) {
    echo $city[$i];
    echo "\n";
}
?>
