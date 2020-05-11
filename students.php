<?php
$json_str = file_get_contents("data/students.json");
$students = json_decode($json_str);//mang cac doi tuong stdClass
//chuan RESFUL - JSON [] thanh mang, {} doi tuong

//$students = [];
//$students[] = [
//"id" => 1,
//"name" => "Nguyễn Thanh Tuấn",
//"age" => 25,
//"point" => 8,
//"address" => "8 Tôn Thất Thuyết",
//"gender" => "Male"
//];
//$students[] = [
//"id" => 2,
//"name" => "Nguyễn Thanh Tùng",
//"age" => 1,
//"point" => 8,
//"address" => "8 Tôn Thất Thuyết",
//"gender" => "Male"
//];
//$students[] = [
//"id" => 3,
//"name" => "Nguyễn Minh Thắng",
//"age" => 24,
//"point" => 8,
//"address" => "8 Tôn Thất Thuyết",
//"gender" => "Male"
//];
//$students[] = [
//"id" => 4,
//"name" => "Nguyễn Tiến Đạt ",
//"age" => 24,
//"point" => 8,
//"address" => "8 Tôn Thất Thuyết",
//"gender" => "Male"
//];
