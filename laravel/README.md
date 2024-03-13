[toc]

## PHP的安装

这里安装的是7.3

```bash
brew tap shivammathur/php
brew install shivammathur/php/php@7.3
brew link php@7.3
```



## 第一个PHP程序

老规则，来一个hello.php

```php
<?php
 echo "hello, world\n";
?>
```

直接在命令行运行一下命令

```
php hello.php
```



## 输入输出

### 输入

输入可以使用```readline("请输入内容:")```函数

```php
<?php
$input = readline("请输入内容:");
echo $input."\n";
?>
```

### 输出

输出我们可以使用```echo```或者```print```，当然还有其他方式

```php
<?php
echo "hello, iceymoss\n";
print "hello, iceymoss\n";
?>
```

这里需要注意，我们不能直接使用echo打印数组，可以使用```print_r()```


## 数据类型

PHP的数据类型有：字符串，整型，浮点，布尔，数组，对象，NULL,资源类型，使用```var_dump()```会返回变量的数据类型和值，在日常开发调制中使用较多。

如果只需要获取数据类型，可以使用

```PHP
<?php
echo gettype(1.23);   //输出：double% 
?>
```

### 字符串

直接看实例：

```PHP
<?php
 $x = "hello, world";
 echo $x;   //输出：hello, world

 echo "\n";

 $x = "iceymoss";
 echo $x; //输出：iceymoss

 echo "\n";

 //连接字符串
 $str = "hello" . "world";
 echo $str;  //输出：helloworld

 echo "\n";

 $a = "abc";
 $b = "cdef$a";
 echo $b;  //输出：cdefabc  


 $a = "abc";
 $b = 'cdef$a';
 echo $b;  //输出：cdef$a

?>
```



### 整数

```php
<?php

$x = 1234;
var_dump($x);

$x = -432;
var_dump($x);

$x = 0x8c;
var_dump($x);

$x = 047;
var_dump($x);  //会自动转为十进制输出
?>
```

输出：

```
int(1234)
int(-432)
int(140)
int(39)
```



### 浮点

```php
<?php
$x = 10.3434;
var_dump($x);

$x = 2.4e3;
var_dump($x);

$x = 8E-5;
var_dump($x);

?>
```

输出：

```
float(10.3434)
float(2400)
float(8.0E-5)
```



### 布尔

```php
<?php
$x = false;
$x = true
?>
```



### 数组

数组可以在一个变量中存储多个值。

在以下实例中创建了一个数组， 然后使用 PHP var_dump() 函数返回数组的数据类型和值：

```php
<?php
$cars=array("Volvo","BMW","Toyota");
$arr = ["boo", "kill", "lis"];
var_dump($cars);
var_dump($arr);
?>
```

输出：

```
array(3) {
  [0]=>
  string(5) "Volvo"
  [1]=>
  string(3) "BMW"
  [2]=>
  string(6) "Toyota"
}
array(3) {
  [0]=>
  string(3) "boo"
  [1]=>
  string(4) "kill"
  [2]=>
  string(3) "lis"
}
```



### 对象

对象数据类型也可以用于存储数据。

在 PHP 中，对象必须声明。

首先，你必须使用class关键字声明类对象。类是可以包含属性和方法的结构。

然后我们在类中定义数据类型，然后在实例化的类中使用数据类型，看实例：

```php
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
```



### NULL

```php
<?php

$x = "hello";
$x = NULL;
var_dump($x);

echo "\n";
$arr = [54, 23, 12, 34];
$arr = NULL;
var_dump($arr);
?>
```



## EOF 使用说明

PHP EOF(heredoc)是一种在命令行shell（如sh、csh、ksh、bash、PowerShell和zsh）和程序语言（像Perl、PHP、Python和Ruby）里定义一个字符串的方法。

使用概述：

- 1. 必须后接分号，否则编译通不过。
- 2. **EOF** 可以用任意其它字符代替，只需保证结束标识与开始标识一致。
- **3. 结束标识必须顶格独自占一行(即必须从行首开始，前后不能衔接任何空白和字符)。**
- 4. 开始标识可以不带引号或带单双引号，不带引号与带双引号效果一致，解释内嵌的变量和转义符号，带单引号则不解释内嵌的变量和转义符号。
- 5. 当内容需要内嵌引号（单引号或双引号）时，不需要加转义符，本身对单双引号转义，此处相当与q和qq的用法

实例：

```php
<?php
echo <<<EOF
        <h1>我的第一个标题</h1>
        <p>我的第一个段落。</p>
EOF;
// 结束需要独立一行且前后不能空格

echo "\n";
$name="runoob";
$a= <<<EOF
        "abc"$name
        "123"
EOF;
// 结束需要独立一行且前后不能空格
echo $a;

?>
```



## 运算符

### PHP 算术运算符

| 运算符 | 名称             | 描述                                                         | 实例                         | 结果  |
| :----- | :--------------- | :----------------------------------------------------------- | :--------------------------- | :---- |
| x + y  | 加               | x 和 y 的和                                                  | 2 + 2                        | 4     |
| x - y  | 减               | x 和 y 的差                                                  | 5 - 2                        | 3     |
| x * y  | 乘               | x 和 y 的积                                                  | 5 * 2                        | 10    |
| x / y  | 除               | x 和 y 的商                                                  | 15 / 5                       | 3     |
| x % y  | 模（除法的余数） | x 除以 y 的余数                                              | 5 % 2 10 % 8 10 % 2          | 1 2 0 |
| -x     | 设置负数         | 取 x 的相反符号                                              | `<?php $x = 2; echo -$x; ?>` | -2    |
| ~x     | 取反             | x 取反，按二进制位进行"取反"运算。运算规则：`~1=-2;    ~0=-1;` | `<?php $x = 2; echo ~$x; ?>` | -3    |
| a . b  | 并置             | 连接两个字符串                                               | "Hi" . "Ha"                  | HiHa  |

实例:

```php
<?php
$x=10;
$y=6;
echo ($x + $y); // 输出16
echo "\n";  // 换行

echo ($x - $y); // 输出4
echo "\n";  // 换行

echo ($x * $y); // 输出60
echo "\n";  // 换行

echo ($x / $y); // 输出1.6666666666667
echo "\n";  // 换行

echo ($x % $y); // 输出4
echo "\n";  // 换行

echo -$x;  //输出-10
?>
```



### PHP 赋值运算符

在 PHP 中，基本的赋值运算符是 **=**。它意味着左操作数被设置为右侧表达式的值。也就是说，**$x = 5** 的值是 5。

| 运算符 | 等同于    | 描述                           |
| :----- | :-------- | :----------------------------- |
| x = y  | x = y     | 左操作数被设置为右侧表达式的值 |
| x += y | x = x + y | 加                             |
| x -= y | x = x - y | 减                             |
| x *= y | x = x * y | 乘                             |
| x /= y | x = x / y | 除                             |
| x %= y | x = x % y | 模（除法的余数）               |
| a .= b | a = a . b | 连接两个字符串                 |

实例：

```php
<?php
$y=20;
$y += 100;
echo $y; // 输出120
echo "\n";  // 换行

$z=50;
$z -= 25;
echo $z; // 输出25
echo "\n";  // 换行


$i=5;
$i *= 6;
echo $i; // 输出30
echo "\n";  // 换行

$j=10;
$j /= 5;
echo $j; // 输出2
echo "\n";  // 换行

$k=15;
$k %= 4;
echo $k; // 输出3
echo "\n";  // 换行

?>
```



### PHP 递增/递减运算符

| 运算符 | 名称   | 描述                |
| :----- | :----- | :------------------ |
| ++ x   | 预递增 | x 加 1，然后返回 x  |
| x ++   | 后递增 | 返回 x，然后 x 加 1 |
| -- x   | 预递减 | x 减 1，然后返回 x  |
| x --   | 后递减 | 返回 x，然后 x 减 1 |

实例：

```php
<?php
$x=10;
echo ++$x; // 输出11

$y=10;
echo $y++; // 输出10

$z=5;
echo --$z; // 输出4

$i=5;
echo $i--; // 输出5
?>
```



------

## PHP 比较运算符

比较操作符可以让您比较两个值：

| 运算符  | 名称       | 描述                                           | 实例               |
| :------ | :--------- | :--------------------------------------------- | :----------------- |
| x == y  | 等于       | 如果 x 等于 y，则返回 true                     | 5==8 返回 false    |
| x === y | 绝对等于   | 如果 x 等于 y，且它们类型相同，则返回 true     | 5==="5" 返回 false |
| x != y  | 不等于     | 如果 x 不等于 y，则返回 true                   | 5!=8 返回 true     |
| x <> y  | 不等于     | 如果 x 不等于 y，则返回 true                   | 5<>8 返回 true     |
| x !== y | 不绝对等于 | 如果 x 不等于 y，或它们类型不相同，则返回 true | 5!=="5" 返回 true  |
| x > y   | 大于       | 如果 x 大于 y，则返回 true                     | 5>8 返回 false     |
| x < y   | 小于       | 如果 x 小于 y，则返回 true                     | 5<8 返回 true      |
| x >= y  | 大于等于   | 如果 x 大于或者等于 y，则返回 true             | 5>=8 返回 false    |
| x <= y  | 小于等于   | 如果 x 小于或者等于 y，则返回 true             | 5<=8 返回 true     |

实例：

```php
<?php
$x=100;
$y="100";

var_dump($x == $y);
echo "\n";
var_dump($x === $y);
echo "\n";
var_dump($x != $y);
echo "\n";
var_dump($x !== $y);
echo "\n";

$a=50;
$b=90;

var_dump($a > $b);
echo "\n";
var_dump($a < $b);
?>
```



### PHP 比较运算符

比较操作符可以让您比较两个值：

| 运算符  | 名称       | 描述                                           | 实例               |
| :------ | :--------- | :--------------------------------------------- | :----------------- |
| x == y  | 等于       | 如果 x 等于 y，则返回 true                     | 5==8 返回 false    |
| x === y | 绝对等于   | 如果 x 等于 y，且它们类型相同，则返回 true     | 5==="5" 返回 false |
| x != y  | 不等于     | 如果 x 不等于 y，则返回 true                   | 5!=8 返回 true     |
| x <> y  | 不等于     | 如果 x 不等于 y，则返回 true                   | 5<>8 返回 true     |
| x !== y | 不绝对等于 | 如果 x 不等于 y，或它们类型不相同，则返回 true | 5!=="5" 返回 true  |
| x > y   | 大于       | 如果 x 大于 y，则返回 true                     | 5>8 返回 false     |
| x < y   | 小于       | 如果 x 小于 y，则返回 true                     | 5<8 返回 true      |
| x >= y  | 大于等于   | 如果 x 大于或者等于 y，则返回 true             | 5>=8 返回 false    |
| x <= y  | 小于等于   | 如果 x 小于或者等于 y，则返回 true             | 5<=8 返回 true     |



### PHP 逻辑运算符

| 运算符   | 名称 | 描述                                         | 实例                                 |
| :------- | :--- | :------------------------------------------- | :----------------------------------- |
| x and y  | 与   | 如果 x 和 y 都为 true，则返回 true           | x=6 y=3 (x < 10 and y > 1) 返回 true |
| x or y   | 或   | 如果 x 和 y 至少有一个为 true，则返回 true   | x=6 y=3 (x==6 or y==5) 返回 true     |
| x xor y  | 异或 | 如果 x 和 y 有且仅有一个为 true，则返回 true | x=6 y=3 (x==6 xor y==3) 返回 false   |
| x && y   | 与   | 如果 x 和 y 都为 true，则返回 true           | x=6 y=3 (x < 10 && y > 1) 返回 true  |
| x \|\| y | 或   | 如果 x 和 y 至少有一个为 true，则返回 true   | x=6 y=3 (x==5 \|\| y==5) 返回 false  |
| ! x      | 非   | 如果 x 不为 true，则返回 true                | x=6 y=3 !(x==y) 返回 true            |



### 三元运算符

另一个条件运算符是"?:"（或三元）运算符 。

**语法格式**

```
(expr1) ? (expr2) : (expr3) 
```

对 expr1 求值为 TRUE 时的值为 expr2，在 expr1 求值为 FALSE 时的值为 expr3。

自 PHP 5.3 起，可以省略三元运算符中间那部分。表达式 expr1 ?: expr3 在 expr1 求值为 TRUE 时返回 expr1，否则返回 expr3。

实例：

```php
<?php
// 普通写法
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
echo $username, PHP_EOL;
 
// PHP 5.3+ 版本写法
$username = $_GET['user'] ?: 'nobody';
echo $username, PHP_EOL;
?>
```



## 条件语句

实例1：

```php
<?php
$age  = readline("输入年龄：");
if ($age < 18) {
    echo "未成年人禁止入内！";
}
?>
```

实例2：

```php
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
```



## Switch 语句

实例：

```php
<?php
$favcolor="red";
switch ($favcolor)
{
    case "red":
        echo "你喜欢的颜色是红色!";
        break;
    case "blue":
        echo "你喜欢的颜色是蓝色!";
        break;
    case "green":
        echo "你喜欢的颜色是绿色!";
        break;
    default:
        echo "你喜欢的颜色不是 红, 蓝, 或绿色!";
}
?>
```



## 数组

在PHP中数组有三种类型：

- **数值数组** - 带有数字 ID 键的数组
- **关联数组** - 带有指定的键的数组，每个键关联一个值 （类比Go中的map)
- **多维数组** - 包含一个或多个数组的数组



### 数值数组

实例1：

```php
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
```



### PHP 关联数组

关联数组是使用您分配给数组的指定的键的数组。

这里有两种创建关联数组的方法：

```php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
```

or:

```php
$age['Peter']="35";
$age['Ben']="37";
$age['Joe']="43";
```



随后可以在脚本中使用指定的键：

```php
<?php
$age=array("iceymoss"=>18,"Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "\n";
}
?>
```



### 数组排序函数

PHP 数组排序函数：

- sort() - 对数组进行升序排列
- rsort() - 对数组进行降序排列
- asort() - 根据关联数组的值，对数组进行升序排列
- ksort() - 根据关联数组的键，对数组进行升序排列
- arsort() - 根据关联数组的值，对数组进行降序排列
- krsort() - 根据关联数组的键，对数组进行降序排列

实例：

```php
<?php
$city = array(99, 10, 100, 10);
sort($city);
print_r($city);

$age=array("iceymoss"=>18,"Peter"=>35,"Ben"=>37,"Joe"=>43);
ksort($age);
print_r($age);

krsort($age);
print_r($age);

?>
```



## 未完待续



## 循环

PHP循环有以下种类：

- **while** - 只要指定的条件成立，则循环执行代码块
- **do...while** - 首先执行一次代码块，然后在指定的条件成立时重复这个循环
- **for** - 循环执行代码块指定的次数
- **foreach** - 根据数组中每个元素来循环代码块

### while循环

实例：

```php
<?php
$i = 0;
while($i < 100) {
    echo $i;
    echo "\n";
    $i++;
}
?>
```



### do...while语句

实例：

```php
<?php

$i = 0;
do {
    $i++;
    echo $i;
    echo "\n";
}
while($i < 10);
?>
```



### for 循环

实例：计算100的和

```php
<?php

$sum = 0;
for($i = 0; $i <= 100; $i++) {
    $sum += $i;
}

echo $sum;

?>
```



### foreach 循环

主要用来遍历数组，实例：

```php
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
```



## 函数

命名方式和大部分编程语言一样：

- 函数的名称应该提示出它的功能
- 函数名称以字母或下划线开头（不能以数字开头）

实例：

```php
<?php

function hello() {
    echo "hello, function";
}

hello();

?>

```



### 函数-参数

直接填写形参即可，不需要像静态语言那样添加数据类型。

实例：

```php
<?php
function add($x, $y) {
    echo $x + $y;  //输出：120
}

add(100, 20) 

?>
```



### 函数 - 返回值

如需让函数返回一个值，请使用 return 语句。

实例：

```php
<?php

function add($x, $y) {
    return $x + $y;
}

echo add(100, 20);  //输出：120

?>
```



### 变量函数

这个就有点像Go中的函数类型， 例如：

```go
package main

import "fmt"

func getName(name string) func() string {
	return func() string {
		return name
	}
}

func main() {
	name := getName("iceymoss")
	n := name() //在指定地方执行
	fmt.Println(n)
}
```

PHP的这样的，实例：

```php
<?php

//function add($x, $y) {
//    return $x + $y;
//}
//
//echo add(100, 20);

function foo(){
    echo "In foo()<br />\n";
}

function bar($arg = '')
{
    echo "In bar(); argument was '$arg'.<br />\n";
}

// 使用 echo 的包装函数
function echoit($string)
{
    echo $string;
}

$func = 'foo';
$func();        // 调用 foo()

$func = 'bar';
$func('test');  // 调用 bar()

$func = 'echoit';
$func('test');  // 调用 echoit()

?>
```



## 魔术常量

有八个魔术常量它们的值随着它们在代码中的位置改变而改变。

例如 __LINE__ 的值就依赖于它在脚本中所处的行来决定。这些特殊的常量不区分大小写，如下：

### __LINE__

文件中当前行号，实例：

```php
<?php

echo '这是第 " '  . __LINE__ . ' " 行'; //输出：这是第 " 3 " 行

?>
```

### __FILE__

文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名。

实例：

```php
<?php

echo '该文件位于 " '  . __FILE__ . ' " ';  //输出：该文件位于 " /Users/iceymoss/php/learnPHP/magic_const.php " 

?>

```



### DIR

文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。

实例：

```php
<?php
echo '该文件位于 " '  . __DIR__ . ' " '; //输出：该文件位于 " /Users/iceymoss/php/learnPHP " 
?>
```



### NAMESPACE

```php
<?php
namespace MyProject;
 
echo '命名空间为："', __NAMESPACE__, '"'; // 输出 "MyProject"

?>
```

[更多可参考](https://www.runoob.com/php/php-magic-constant.html)



## 命名空间

**菜鸟教程**：PHP 命名空间(namespace)是在 PHP 5.3 中加入的，目的是解决重名问题，PHP中不允许两个函数或者类出现相同的名字，否则会产生一个致命的错误。

PHP 命名空间可以解决以下两类问题：

1. 用户编写的代码与PHP内部的类/函数/常量或第三方类/函数/常量之间的名字冲突。

2. 为很长的标识符名称(通常是为了缓解第一类问题而定义的)创建一个别名（或简短）的名称，提高源代码的可读性。



### 定义命名空间

默认情况下，所有常量、类和函数名都放在全局空间下，就和PHP支持命名空间之前一样。

命名空间通过关键字```namespace``` 来声明。如果一个文件中包含命名空间，它必须在其它所有代码之前声明命名空间。

语法格式如下:

```php
<?php  
// 定义代码在 'MyProject' 命名空间中  
namespace MyProject;  
 
// ... 代码 ...  

```

也可以在同一个文件中定义不同的命名空间代码，如：

```php
<?php  
namespace MyProject;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }

namespace AnotherProject;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }
?>  
```

对于多个命名空间，可以这样优化：

```php
<?php
namespace MyProject {
    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function connect() { /* ... */  }
}

namespace AnotherProject {
    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function connect() { /* ... */  }
}
?>
```



## 面向对象

### 三大特征

- 封装（Encapsulation）：指将对象的属性和方法封装在一起，使得外部无法直接访问和修改对象的内部状态。通过使用访问控制修饰符（public、private、protected）来限制属性和方法的访问权限，从而实现封装。
- 继承（Inheritance）：指可以创建一个新的类，该类继承了父类的属性和方法，并且可以添加自己的属性和方法。通过继承，可以避免重复编写相似的代码，并且可以实现代码的重用。
- 多态（Polymorphism）：指可以使用一个父类类型的变量来引用不同子类类型的对象，从而实现对不同对象的统一操作。多态可以使得代码更加灵活，具有更好的可扩展性和可维护性。在 PHP 中，多态可以通过实现接口（interface）和使用抽象类（abstract class）来实现。



### 面向对象内容

- **类** − 定义了一件事物的抽象特点。类的定义包含了数据的形式以及对数据的操作。
- **对象** − 是类的实例。
- **成员变量** − 定义在类内部的变量。该变量的值对外是不可见的，但是可以通过成员函数访问，在类被实例化为对象后，该变量即可成为对象的属性。
- **成员函数** − 定义在类的内部，可用于访问对象的数据。
- **继承** − 继承性是子类自动共享父类数据结构和方法的机制，这是类之间的一种关系。在定义和实现一个类的时候，可以在一个已经存在的类的基础之上来进行，把这个已经存在的类所定义的内容作为自己的内容，并加入若干新的内容。
- **父类** − 一个类被其他类继承，可将该类称为父类，或基类，或超类。
- **子类** − 一个类继承其他类称为子类，也可称为派生类。
- **多态** − 多态性是指相同的函数或方法可作用于多种类型的对象上并获得不同的结果。不同的对象，收到同一消息可以产生不同的结果，这种现象称为多态性。
- **重载** − 简单说，就是函数或者方法有同样的名称，但是参数列表不相同的情形，这样的同名不同参数的函数或者方法之间，互相称之为重载函数或者方法。
- **抽象性** − 抽象性是指将具有一致的数据结构（属性）和行为（操作）的对象抽象成类。一个类就是这样一种抽象，它反映了与应用有关的重要性质，而忽略其他一些无关内容。任何类的划分都是主观的，但必须与具体的应用有关。
- **封装** − 封装是指将现实世界中存在的某个客体的属性与行为绑定在一起，并放置在一个逻辑单元内。
- **构造函数** − 主要用来在创建对象时初始化对象， 即为对象成员变量赋初始值，总与new运算符一起使用在创建对象的语句中。
- **析构函数** − 析构函数(destructor) 与构造函数相反，当对象结束其生命周期时（例如对象所在的函数已调用完毕），系统自动执行析构函数。析构函数往往用来做"清理善后" 的工作（例如在建立对象时用new开辟了一片内存空间，应在退出前在析构函数中用delete释放）。



### 类定义

```php
<?php
class phpClass {
  var $var1;
  var $var2 = "constant string";
  
  function myfunc ($arg1, $arg2) {
     [..]
  }
  [..]
}
?>

```

解析如下：

- 类使用 **class** 关键字后加上类名定义。
- 类名后的一对大括号({})内可以定义变量和方法。
- 类的变量使用 **var** 来声明, 变量也可以初始化值。
- 函数定义类似 PHP 函数的定义，但函数只能通过该类及其实例化的对象访问。

实例：

```php
<?php
class Site {
    /* 成员变量 */
    var $url;
    var $title;

    /* 成员函数 */
    function setUrl($par){
        $this->url = $par;
    }

    function getUrl(){
        echo $this->url . PHP_EOL;
    }

    function setTitle($par){
        $this->title = $par;
    }

    function getTitle(){
        echo $this->title . PHP_EOL;
    }
}
$runoob = new Site; //实例化，new一个对象
$taobao = new Site;
$google = new Site;

// 调用成员函数，设置标题和URL
$runoob->setTitle( "菜鸟教程" );
$taobao->setTitle( "淘宝" );
$google->setTitle( "Google 搜索" );

$runoob->setUrl( 'www.runoob.com' );
$taobao->setUrl( 'www.taobao.com' );
$google->setUrl( 'www.google.com' );

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();

?>
```



### 构造函数

构造函数是一种特殊的方法。主要用来在创建对象时初始化对象， 即为对象成员变量赋初始值，在创建对象的语句中与 **new** 运算符一起使用。

```php
function __construct( $par1, $par2 ) {
        $this->url = $par1;
        $this->title = $par2;
    }
```

实例：

```php
<?php
class Site {
    /* 成员变量 */
    var $url;
    var $title;

    function __construct( $par1, $par2 ) {
        $this->url = $par1;
        $this->title = $par2;
    }

    /* 成员函数 */
    function setUrl($par){
        $this->url = $par;
    }

    function getUrl(){
        echo $this->url . PHP_EOL;
    }

    function setTitle($par){
        $this->title = $par;
    }

    function getTitle(){
        echo $this->title . PHP_EOL;
    }
}
$runoob = new Site('www.runoob.com', '菜鸟教程');
$taobao = new Site('www.taobao.com', '淘宝');
$google = new Site('www.google.com', 'Google 搜索');

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();

?>
```



### 析构函数

析构函数(destructor) 与构造函数相反，当对象结束其生命周期时（例如对象所在的函数已调用完毕），系统自动执行析构函数。

PHP 5 引入了析构函数的概念，这类似于其它面向对象的语言，其语法格式如下：

```php
void __destruct ( void )
```

实例：

```php
<?php
class MyDestructableClass {
    function __construct() {
        print "构造函数\n";
        $this->name = "MyDestructableClass";
    }

    function __destruct() {
        print "销毁 " . $this->name . "\n";
    }
}

$obj = new MyDestructableClass(); 
?>
```

输出：

```
构造函数
销毁 MyDestructableClass
```



### 继承

PHP 使用关键字 **extends** 来继承一个类，PHP 不支持多继承，格式如下：

```php
class Child extends Parent {
   // 代码部分
}
```

实例：

```php
<?php
class Site {
    /* 成员变量 */
    var $url;
    var $title;

    function __construct( $par1, $par2 ) {
        $this->url = $par1;
        $this->title = $par2;
    }

    /* 成员函数 */
    function setUrl($par){
        $this->url = $par;
    }

    function getUrl(){
        echo $this->url . PHP_EOL;
    }

    function setTitle($par){
        $this->title = $par;
    }

    function getTitle(){
        echo $this->title . PHP_EOL;
    }
}

// 子类扩展站点类别
class Child_Site extends Site
{
    var $category;

    function setCate($par)
    {
        $this->category = $par;
    }

    function getCate()
    {
        echo $this->category . PHP_EOL;
    }
}

$child = new Child_Site('www.runoob.com', '菜鸟教程');
$child->getUrl();
$child->getTitle();
$child->setCate("apply");
$child->getCate();
?>
```

输出：

```
www.runoob.com
菜鸟教程
apply
```



### 方法重写

如果从父类继承的方法不能满足子类的需求，可以对其进行改写，这个过程叫方法的覆盖（override），也称为方法的重写。

实例中重写了 getUrl 与 getTitle 方法：

```php
<?php
class Site {
    /* 成员变量 */
    var $url;
    var $title;

    function __construct( $par1, $par2 ) {
        $this->url = $par1;
        $this->title = $par2;
    }

    /* 成员函数 */
    function setUrl($par){
        $this->url = $par;
    }

    function getUrl(){
        echo $this->url . PHP_EOL;
    }

    function setTitle($par){
        $this->title = $par;
    }

    function getTitle(){
        echo $this->title . PHP_EOL;
    }
}

// 子类扩展站点类别
class Child_Site extends Site
{
    var $category;

    function setCate($par)
    {
        $this->category = $par;
    }

    function getCate()
    {
        echo $this->category . PHP_EOL;
    }
    function getUrl() {
        echo $this->url . PHP_EOL;
        return $this->url;
    }

    function getTitle(){
        echo $this->title . PHP_EOL;
        return $this->title;
    }

}

$child = new Child_Site('www.runoob.com', '菜鸟教程');
$url = $child->getUrl();
$title = $child->getTitle();
$child->setCate("apply");
$child->getCate();

echo "data:$url, $title"

```



### 访问控制

PHP 对属性或方法的访问控制，是通过在前面添加关键字 public（公有），protected（受保护）或 private（私有）来实现的。

- **public（公有）：**公有的类成员可以在任何地方被访问。
- **protected（受保护）：**受保护的类成员则可以被其自身以及其子类和父类访问。
- **private（私有）：**私有的类成员则只能被其定义所在的类访问。

#### 属性的访问控制

类属性必须定义为公有，受保护，私有之一。如果用 var 定义，则被视为公有。

实例：

```php
<?php
/**
 * Define MyClass
 */
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public; // 这行能被正常执行
echo $obj->protected; // 这行会产生一个致命错误
echo $obj->private; // 这行也会产生一个致命错误
$obj->printHello(); // 输出 Public、Protected 和 Private


/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // 可以对 public 和 protected 进行重定义，但 private 而不能
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj2 = new MyClass2();
echo $obj2->public; // 这行能被正常执行
echo $obj2->private; // 未定义 private
echo $obj2->protected; // 这行会产生一个致命错误
$obj2->printHello(); // 输出 Public、Protected2 和 Undefined

?>
  
```



### 方法的访问控制

类中的方法可以被定义为公有，私有或受保护。如果没有设置这些关键字，则该方法默认为公有。

```php
<?php
/**
 * Define MyClass
 */
class MyClass
{
    // 声明一个公有的构造函数
    public function __construct() { }

    // 声明一个公有的方法
    public function MyPublic() { }

    // 声明一个受保护的方法
    protected function MyProtected() { }

    // 声明一个私有的方法
    private function MyPrivate() { }

    // 此方法为公有
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$myclass = new MyClass;
$myclass->MyPublic(); // 这行能被正常执行
$myclass->MyProtected(); // 这行会产生一个致命错误
$myclass->MyPrivate(); // 这行会产生一个致命错误
$myclass->Foo(); // 公有，受保护，私有都可以执行


/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // 此方法为公有
    function Foo2()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate(); // 这行会产生一个致命错误
    }
}

$myclass2 = new MyClass2;
$myclass2->MyPublic(); // 这行能被正常执行
$myclass2->Foo2(); // 公有的和受保护的都可执行，但私有的不行

class Bar 
{
    public function test() {
        $this->testPrivate();
        $this->testPublic();
    }

    public function testPublic() {
        echo "Bar::testPublic\n";
    }
    
    private function testPrivate() {
        echo "Bar::testPrivate\n";
    }
}

class Foo extends Bar 
{
    public function testPublic() {
        echo "Foo::testPublic\n";
    }
    
    private function testPrivate() {
        echo "Foo::testPrivate\n";
    }
}

$myFoo = new foo();
$myFoo->test(); // Bar::testPrivate 
                // Foo::testPublic
?>

```



### 常量

可以把在类中始终保持不变的值定义为常量。在定义和使用常量的时候不需要使用 $ 符号。

常量的值必须是一个定值，不能是变量，类属性，数学运算的结果或函数调用。

自 PHP 5.3.0 起，可以用一个变量来动态调用类。但该变量的值不能为关键字（如 self，parent 或 static）。

```php
<?php
class MyClass
{
    const constant = '常量值';

    function showConstant() {
        echo  self::constant . PHP_EOL;
    }
}

echo MyClass::constant . PHP_EOL;

$classname = "MyClass";
echo $classname::constant . PHP_EOL; // 自 5.3.0 起

$class = new MyClass();
$class->showConstant();

echo $class::constant . PHP_EOL; // 自 PHP 5.3.0 起
?>

```



## 多维数组

直接看实例：

```php
<?php
// 二维数组:
$cars = array
(
    array("Volvo",100,96),
    array("BMW",60,59),
    array("Toyota",110,100)
);

var_dump($cars[0]);

?>
```



关联数组:

```php
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

var_dump($phone);

?>
```



## 日期

### date() 函数

PHP date() 函数可把时间戳格式化为可读性更好的日期和时间。

```php
string date ( string $format [, int $timestamp ] )
```

date() 函数的第一个必需参数 *format* 规定了如何格式化日期/时间。

这里列出了一些可用的字符：

- d - 代表月中的天 (01 - 31)
- m - 代表月 (01 - 12)
- Y - 代表年 (四位数)

实例：

```php
<?php

echo date("y/m/d");
echo "\n";
echo date("y-m-d h:m:s");

?>
```



## 文件处理

### 打开文件

实例：

```php
<?php

$file = fopen("./myfile.txt", "r");

?>
```



文件可能通过下列模式来打开：

| 模式 | 描述                                                         |
| :--- | :----------------------------------------------------------- |
| r    | 只读。在文件的开头开始。                                     |
| r+   | 读/写。在文件的开头开始。                                    |
| w    | 只写。打开并清空文件的内容；如果文件不存在，则创建新文件。   |
| w+   | 读/写。打开并清空文件的内容；如果文件不存在，则创建新文件。  |
| a    | 追加。打开并向文件末尾进行写操作，如果文件不存在，则创建新文件。 |
| a+   | 读/追加。通过向文件末尾写内容，来保持文件内容。              |
| x    | 只写。创建新文件。如果文件已存在，则返回 FALSE 和一个错误。  |
| x+   | 读/写。创建新文件。如果文件已存在，则返回 FALSE 和一个错误。 |

**注释：**如果 fopen() 函数无法打开指定文件，则返回 0 (false)。



### 关闭文件

实例：

```php
<?php

$file = fopen("./myfile.txt", "r");
var_dump($file);

fclose($file);

?>
```



### 逐行读取文件

使用```fgets() ```

**注意：**在调用该函数之后，文件指针会移动到下一行。

实例：

```php
<?php
$file = fopen("./myfile.txt", "r") or exit("无法打开文件!");
// 读取文件每一行，直到文件结尾
while(!feof($file))
{
    echo fgets($file);
}
fclose($file);
?>
```



### 逐字符读取文件

使用```fgetc() ```

**注意：**在调用该函数之后，文件指针会移动到下一个字符。

实例：

```php
<?php
$file=fopen("./myfile.txt","r") or exit("无法打开文件!");
while (!feof($file))
{
    echo fgetc($file);
}
fclose($file);
?>
```



## 错误处理

### die()函数

使用die()来处理我们预知的错误，如实例：

```php
<?php
if(!file_exists("welcome.txt"))
{
    die("文件不存在");
}
else
{
    $file=fopen("welcome.txt","r");
}
?>
```

当文件不存在时，输出：

```
文件不存在
```

他不会输出：

```
PHP Warning:  fopen(welcome.txt): failed to open stream: No such file or directory in /Users/iceymoss/php/learnPHP/file_demo2.php on line 2
```



### 自定义错误处理

语法：

```php
error_function(error_level,error_message,
error_file,error_line,error_context)
```

实例：

```php
<?php
// 错误处理函数
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr";
}

// 设置错误处理函数
set_error_handler("customError");

// 触发错误
echo($test);
?>
```

输出：

```php
Error: [8] Undefined variable: test
```



### 异常处理

异常用于在指定的错误发生时改变脚本的正常流程。

当异常被抛出时，其后的代码不会继续执行，PHP 会尝试查找匹配的 "catch" 代码块。

以下示例如果不处理异常：

```php
<?php
// 创建一个有异常处理的函数
function checkNum($number)
{
    if($number>1)
    {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}

// 触发异常
checkNum(2);
?>
```

输出：
```
$ php error2.php 
PHP Fatal error:  Uncaught Exception: Value must be 1 or below in /Users/iceymoss/php/learnPHP/error2.php:7
Stack trace:
#0 /Users/iceymoss/php/learnPHP/error2.php(13): checkNum(2)
#1 {main}
  thrown in /Users/iceymoss/php/learnPHP/error2.php on line 7

Fatal error: Uncaught Exception: Value must be 1 or below in /Users/iceymoss/php/learnPHP/error2.php:7
Stack trace:
#0 /Users/iceymoss/php/learnPHP/error2.php(13): checkNum(2)
#1 {main}
  thrown in /Users/iceymoss/php/learnPHP/error2.php on line 7

```



### Try、throw 和 catch机制

1. Try - 使用异常的函数应该位于 "try" 代码块内。如果没有触发异常，则代码将照常继续执行。但是如果异常被触发，会抛出一个异常。
2. Throw - 里规定如何触发异常。每一个 "throw" 必须对应至少一个 "catch"。
3. Catch - "catch" 代码块会捕获异常，并创建一个包含异常信息的对象。

实例：

```php
<?php
// 创建一个有异常处理的函数
function checkNum($number)
{
    if($number>1)
    {
        throw new Exception("变量值必须小于等于 1");
    }
    return true;
}

// 在 try 块 触发异常
try
{
    checkNum(2);
    // 如果抛出异常，以下文本不会输出
    echo '如果输出该内容，说明 $number 变量';
}
// 捕获异常
catch(Exception $e)
{
    echo 'Message: ' .$e->getMessage();
}
?>
```

实例：

```php
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
```



### 自定义Exception

这个自定义的 customException 类继承了 PHP 的 exception 类的所有属性，可向其添加自定义的函数

实例：

```php
<?php
class customException extends Exception
{
    public function errorMessage()
    {
        // 错误信息
        $errorMsg = '错误行号 '.$this->getLine().' in '.$this->getFile()
            .': <b>'.$this->getMessage().'</b> 不是一个合法的 E-Mail 地址';
        return $errorMsg;
    }
}

$email = "someone@example...com";

try
{
    // 检测邮箱
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
    {
        // 如果是个不合法的邮箱地址，抛出异常
        throw new customException($email);
    }
}

catch (customException $e)
{
//display custom message
    echo $e->errorMessage();
}
?>
```



多个异常

```php
<?php
class customException extends Exception
{
    public function errorMessage()
    {
        // 错误信息
        $errorMsg = '错误行号 '.$this->getLine().' in '.$this->getFile()
        .': <b>'.$this->getMessage().'</b> 不是一个合法的 E-Mail 地址';
        return $errorMsg;
    }
}
 
$email = "someone@example.com";
 
try
{
    // 检测邮箱
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
    {
        // 如果是个不合法的邮箱地址，抛出异常
        throw new customException($email);
    }
    // 检测 "example" 是否在邮箱地址中
    if(strpos($email, "example") !== FALSE)
    {
        throw new Exception("$email 是 example 邮箱");
    }
}
catch (customException $e)
{
    echo $e->errorMessage();
}
catch(Exception $e)
{
    echo $e->getMessage();
}
?>
```



## 处理json

## JSON 函数

| 函数            | 描述                                          |
| :-------------- | :-------------------------------------------- |
| json_encode     | 对变量进行 JSON 编码                          |
| json_decode     | 对 JSON 格式的字符串进行解码，转换为 PHP 变量 |
| json_last_error | 返回最后发生的错误                            |

实例:

```php
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
```

输出：

```json
{"iphone":{"iphone15":6100,"iphone14":5211},"huawei":{"mate60":8023}}%
```



实例：

```php
<?php

$str = '{"iphone":{"iphone15":6100,"iphone14":5211},"huawei":{"mate60":8023}}';

var_dump(json_decode($str));
var_dump(json_decode($str, true));

?>
```

输出：

```
object(stdClass)#2 (2) {
  ["iphone"]=>
  object(stdClass)#1 (2) {
    ["iphone15"]=>
    int(6100)
    ["iphone14"]=>
    int(5211)
  }
  ["huawei"]=>
  object(stdClass)#3 (1) {
    ["mate60"]=>
    int(8023)
  }
}
array(2) {
  ["iphone"]=>
  array(2) {
    ["iphone15"]=>
    int(6100)
    ["iphone14"]=>
    int(5211)
  }
  ["huawei"]=>
  array(1) {
    ["mate60"]=>
    int(8023)
  }
}

```



## PHP包管理工具

简单来说，如果你熟悉 Go Modules，那么你可以将 Composer 看作是 PHP 世界中的等效工具，它通过 `composer.json` 文件（类似于 Go 的 `go.mod` 文件）来管理项目的依赖。

### 安装

我这里下载最新版本，使用以下命令：

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

加载到全局：

```bash
sudo mv composer.phar /usr/local/bin/composer
```



使用一下命令查看是否安装成功：

```bash
composer -v 
```

看到以下信息说明安装成功

```bash
   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 2.7.1 2024-02-09 15:26:28

Usage:
  command [options] [arguments]

```



##  Laravel框架

**Laravel 中文文档**：Laravel 是一个 Web 应用框架， 有着表现力强、语法优雅的特点。Web 框架为创建应用提供了一个结构和起点，你只需要专注于创造，我们来为你处理细节。

Laravel 致力于提供出色的开发体验，同时提供强大的特性，例如完全的依赖注入，富有表现力的数据库抽象层，队列和计划任务，单元和集成测试等等。

无论你是刚刚接触 PHP 和 Web 框架的新人，亦或是有着多年经验的老手， Laravel 都是一个可以与你一同成长的框架。我们将帮助你迈出成为 Web 开发者的第一步，或是将你的经验提高到下一个等级。我们迫不及待的想看看你的作品。



### 第一个Laravel 项目

在使用Laravel 之前我们要确保我们的设备安装了PHP和Composer，使用使用以下命令：

```bash
composer create-project laravel/laravel example-app
```

进入目录，启动服务（原神启动）：

```
cd example-app

php artisan serve

```

接着我们就可以访问```http://localhost:8000```

[更多参考][https://www.runoob.com/php/php-oop.html]
