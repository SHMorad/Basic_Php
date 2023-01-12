<?php
// Source Youtube

/* $fileName ='file.txt';
$file = fopen($fileName,'r');
echo fread($file, filesize($fileName));
fclose($file); */

$fileName='C:\xampp\htdocs\PhpByHasinHayder\file\file.txt';
// if(is_readable($fileName)){
// $fileName='/c/xampp/htdocs/PhpByHasinHayder/file/file.txt';//not working
// $fileName ="file.txt";
// $fp=fopen($fileName,'r');
// echo $line=fgets($fp);
// echo $line=fgets($fp,4);
// fclose($fp);

$fp=fopen($fileName, 'r');

while($line=fgets($fp)){
    echo $line;
}
// rewind($fp);
// fseek($fp, 4);
// fseek($fp, -1,SEEK_END);
// while($line=fgets($fp)){
//     echo $line."-";
// }
$data = file($fileName);
print_r($data);
fclose($fp);

$data2 =file_get_contents($fileName);
echo $data2;
// }
?>