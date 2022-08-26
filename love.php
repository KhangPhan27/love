:)))oce
<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
$time = date("H:i:s d.m.Y");
$losi = $_GET['answer'];
if($losi == '1'){
    $h = "Co";
} else {
    $h = "Khong";
}
///Chỗ này để lưu lại biến GET sang cho dễ làm, chạy web thực nhớ bỏ đi
$myfile = fopen("abc.txt", "w") or die("Unable to open file!");
$txt = $h. ' | ' . $time."\n";
fwrite($myfile, $txt);
fclose($myfile);