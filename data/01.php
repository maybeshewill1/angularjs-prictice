<?php
//向客户端输出多个员工该信息以jason格式
header('Content-Type: application/json');

$emplist=[];
$emplist[]=[
'eno'=>101,
'ename'=>'tofm',
'salary'=>rand(1000,10000)
];
$emplist[]=[
'eno'=>102,
'ename'=>'tom',
'salary'=>rand(1000,10000)
];
$emplist[]=[
'eno'=>103,
'ename'=>'tosm',
'salary'=>rand(1000,10000)
];
$emplist[]=[
'eno'=>104,
'ename'=>'tosm',
'salary'=>rand(1000,10000)
];
$str=json_encode($emplist);
echo $str;
?>