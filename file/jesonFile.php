<?php
$fileName='C:\xampp\htdocs\PhpByHasinHayder\file\jesonFile.txt';

$students =array(
    array(
        'fname'=>"morad",
        'lname'=>"patwary",
        'age'=>"22",
        'class'=>"seven",
        'roll'=>"14"
    ),
    array(
        'fname'=>"abdur",
        'lname'=>"rahaman",
        'age'=>"25",
        'class'=>"two",
        'roll'=>"38"
    ),
    array(
        'fname'=>"mehedi",
        'lname'=>"Hasan",
        'age'=>"23",
        'class'=>"nine",
        'roll'=>"3"
    ),
    array(
        'fname'=>"majharul",
        'lname'=>"Hossain",
        'age'=>"21",
        'class'=>"eight",
        'roll'=>"12"
    ),
    array(
        'fname'=>"ena",
        'lname'=>"patwary",
        'age'=>"08",
        'class'=>"one",
        'roll'=>"1"
    ),
    array(
        'fname'=>"ibrahim",
        'lname'=>"Hossain",
        'age'=>"21",
        'class'=>"seven",
        'roll'=>"19"
    ),
);

// writing Jeson formate Data

/* $encodedDaa=json_encode($students);
file_put_contents($fileName,$encodedDaa,LOCK_EX); */

// reading jeson formate data
/* $data=file_get_contents($fileName);
$allStudents=json_decode($data);
print_r($allStudents);
echo $allStudents[1]->fname; */

$data=file_get_contents($fileName);
$allStudents=json_decode($data,true);
print_r($allStudents);
echo $allStudents[1]['fname'];
?>