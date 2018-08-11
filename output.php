<?php

/**
 * 
 * 常用的输出函数
 * 
 * echo 	输出字符串
 * print_r 	输出字符串，数组，对象
 * var_dump 输出字符串、数据、对象 的详细信息（包括元素的数据类型）
 * printf、sprintf	格式化输出字符串,可将参数转为字符串、科学计数法、二进制数、八进制、十进制数、十六进制数、浮点数、ASCII等格式输出
 * fprintf、vfprintf  把格式化的字符串写入指定的输出流
 * vsprintf 把格式化字符写入变量中
 *
 */


$str = "test";

echo $str,'<br>';//test
print_r($str);   //test
echo "<br>";
var_dump($str);  //string(4) "test"
echo "<br>";
printf('==%s-%d',$str,44);// test-44
echo "<br>";
printf('==%x,==%s,==%e,==%E,==%c',18,'string test',120000,0.00121212,50);//12
echo "<br>";

$arr = ['1','2','3','4','5'];

print_r($arr);//Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
echo "<br>";
var_dump($arr);//array(5) { [0]=> string(1) "1" [1]=> string(1) "2" [2]=> string(1) "3" [3]=> string(1) "4" [4]=> string(1) "5" }
echo "<br>";








