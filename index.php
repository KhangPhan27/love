<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
$time = date("H:i:s d.m.Y");
$losi = $_GET['answer'];
///Chỗ này để lưu lại biến GET sang cho dễ làm, chạy web thực nhớ bỏ đi
$myfile = fopen("abc.txt", "a") or die("Unable to open file!");
$txt = $losi. ' | ' . $time."\n";
fwrite($myfile, $txt);
fclose($myfile);
