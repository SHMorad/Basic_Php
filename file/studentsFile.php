<?php
$fileName='C:\xampp\htdocs\PhpByHasinHayder\file\studentsFile.txt';

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
// file write into foreach loop

/* $fp = fopen($fileName, "w");
foreach($students as $student){
    $data = sprintf("%s ,%s ,%s ,%s ,%s\n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll'],);
    fwrite($fp,$data);
}
fclose($fp); */


// file read into while loop

/* $fp = fopen($fileName, "r");
while($data=fgets($fp)){
   $student =explode(",",$data);
   printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);

} */


// file read fputcsv method

/* $fp = fopen($fileName, "w");
foreach($students as $student){
 fputcsv($fp,$student);
} */


// file read fgetcsv method

/* $fp = fopen($fileName, "r");
while($student=fgetcsv($fp)){
    printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
 
 } */

//  file data insert
/*  $newStudent= array(
        'fname'=>"ismail",
        'lname'=>"Hossain",
        'age'=>"29",
        'class'=>"Degree",
        'roll'=>"190"
 );
 $fp = fopen($fileName, "a");
 fputcsv($fp,$newStudent); */


// file data delete
/*  $data= file($fileName);
 unset($data[2]);
 print_r($data);
 $fp=fopen($fileName,'w');
 foreach($data as $line){
    fwrite($fp,$line);
 }
fclose($fp); */


// serializeData
/* $data = serialize($students);
file_put_contents($fileName,$data,FILE_APPEND | LOCK_EX); */


// unserialize Data

/* $dataFromFile = file_get_contents($fileName);
$allStudent = unserialize($dataFromFile);
print_r($allStudent); */


?>