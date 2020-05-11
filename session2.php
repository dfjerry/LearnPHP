<?php
//array trong php: ko gioi han so luong phan tu giong voi javascrip,
//array php là sự kết hợp của array javascrip và hashmap của java
$ary = []; //khai bao mang
$ary[0] = 10;
$ary[1] = 'T1907M';
$ary[] = 3.14;//Tu dong nạp vào vị trí index tiếp theo, ở TH này là i = 2,
for ($i = 0; $i < count($ary); $i++){
    echo $ary[$i];
}
foreach ($ary as $e){//nguoc lai voi java, c#
    echo $e;
}

$ary["point"] = 300;
$ary[] = 11;
var_dump($ary);//log ra tat ca gia tri

$arr = [];
$arr[] = 1;
$arr[] = $ary;
$arr[] = 'hello';

$student = [
    "name" => "Hoang Trong Ha",
    "age" => 15,
    "id" => 1
];//mảng kiểu hashmap => hay dùng để định nghĩa dữ liệu cho 1 phần tử
$student["point"] = 10;
var_dump($student);
if($student["point"] > 5){
    echo $student["name"];
}else{
    echo "Khong cho sinh vien";
}

//dinh nghia 1 ham -- giong het javascrip
alert("hihi");
sendMesseger();
sendMesseger("Hello world!");
function alert($x){//tham so co the nap gia tri mac dinh ban dau
    echo "Thong bao khan cap".$x;
}
function sendMesseger($msg = "haha"){
    echo $msg;
}