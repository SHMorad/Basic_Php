<?php
/* $foods =[
    'vagitable' => "korolla, mula, carrot, begun",
    'fruits' => "mango, kola, tomato, alu",
    'drink' => "cocakols, water, milk, pepsi"
];
// echo $foods['fruits'];

foreach ($foods as $key => $value) {
    echo $key."=". $value."\n";
} */


/* $vagetables = 'brinjal, brocoli, carrot, capsicam, potato,sweet-potato';

echo $vagetables; */



// Convert string to array
/* $vagetables =explode(', ', 'brinjal, brocoli, carrot, capsicam, potato, sweet-potato');
// echo $vagetables;
foreach ($vagetables as $key => $value) {
    echo $key ."=". $value."\n";
} */


// convert array to string
/* $vagetables =explode(', ', 'brinjal, brocoli, carrot, capsicam, potato, sweet-potato');
$vagetables =join(', ', $vagetables);
echo $vagetables; */

/* $vagetables =preg_split('/(, |,)/', 'brinjal, brocoli, carrot,capsicam,potato, sweet-potato');
// echo $vagetables[0];
print_r($vagetables); */

/* $student = array(
    'fname'=> "morad",
    'lname'=>"patawary",
    'age'=>22,
    'class'=>'Diploma Cse',
    'Department' => 'CMT'
);
// print_r($student);
// echo $student['fname']." ".$student['lname'];
// printf("%s %s\n", $student['fname'], $student['lname']);

$serialized =serialize($student);
echo $serialized;

echo "\n";

$newStudent = unserialize($serialized);
// echo $newStudent;
print_r($newStudent);
echo "\n";
echo "\n";

$jsonData = json_encode($student);
echo $jsonData;

echo "\n";
echo "\n";

$student2=json_decode($jsonData, true);
// echo $student2;
print_r($student2) */

/* $person =array(
    'fname' => "morad",
    'lname' => "patwary"
);
// Deep Copy
// copy by value
$newPerson = &$person;
print_r($newPerson);
$newPerson['lname'] ='sahadat';
print_r($person);
print_r($newPerson);


// shallow Copy 
// copy by refarence

function printData(&$person){
    $person['fname'] .= "changed";
    print_r($person);
}
printData($person);
print_r($person); */

// remove Assosiative array
/* 
$person = array("fname"=>"morad", "lname"=>"patawary");
print_r($person);
unset($person["lname"]);
print_r($person); */

// Describe Empty value

/* $name =0;
if(isset($name)){
    echo "Name is Set";
}else{
    echo "Name is Not Set";
}
echo "\n";
if(!empty($name)){
    echo "Name is Set";
}else{
    echo "Name is Not Set";
}
echo "\n";
if(isset($name) && is_numeric($name)||$name !=''){
    echo "Name is Set and it's not Empty";
}else{
    echo "Name is Not Set and it's Empty";
}
 */

//  sorting array

/* $fruits = array('a'=>"apple", 'b'=>"banana", 'o'=>"orange", 'p'=>"plum", 'd'=>"dates", 'k'=>"guava", 'c'=>"cat");
$numbers =[11,2,7,21,1,3,8,25]; */
// print_r($fruits);
// print_r($numbers);
/* sort($fruits);
print_r($fruits); */

/* sort($numbers);
print_r($numbers); */

/* asort($numbers);
print_r($numbers); */

/* asort($numbers, SORT_STRING);
print_r($numbers); */

/* asort($fruits);
print_r($fruits); */

/* // sort($fruits);
foreach ($fruits as $fruit) {
   echo $fruit."\n";
}
 */

/*  asort($fruits);
foreach ($fruits as $fruit) {
    echo $fruit."\n";
 } */


 /* rsort($fruits);
foreach ($fruits as $fruit) {
    echo $fruit."\n";
 } */


//  $random = array("apple", "Apple", "banana", "Banana", "Pinapple");
/*  sort($random);
 print_r($random); */

/*  sort($random,SORT_STRING | SORT_FLAG_CASE);
 print_r($random); */

//  Searching array
/* 
$fruits = array('a'=>"apple", 'b'=>"banana", 'o'=>"orange", 'p'=>"plum", 'd'=>"dates", 'k'=>"guava", 'c'=>"cat");
$numbers =[11,2,7,21,"56", 1,3,8,25];

if(in_array(56, $numbers, true)){
    echo "56 is Found";
}else{
    echo "Number is Not Found";
}
echo PHP_EOL;


$offset = array_search(56, $numbers);
echo $offset;
echo PHP_EOL;
if(key_exists('b', $fruits)){
    echo "key b exists";
}else{
    echo "Key is Not Exists";
} */

// two index and assosiated array defarance and intersection

/* $numbers1 =array(1,4,3,66,54,7,23,1,2);
$numbers2 = array(88,3,21,44,3,28,1,2,27);

$fruits1 = array('a'=>"apple", 'b'=> "banana", 'c'=>"lemon");
$fruits2 = array('d'=>"pinapple", 'b'=>"malta", 'g'=>"graps", 'c'=>"lemon");

$common=array_intersect($numbers1,$numbers2);
// print_r($common);
$commonf=array_intersect_assoc($fruits1,$fruits2);
print_r($commonf); */


// array utility

/* $numbers=array(1,2,3,4,5,6,7,8,9,10,11);
function square($n){
    printf("square of %d is %d\n",$n,$n*$n);
}
function cube($n){
    return $n*$n*$n;
}
array_walk($numbers, 'square');
$new_array=array_map('cube', $numbers);
print_r($numbers);
print_r($new_array);

function even($n){
    return $n%2==0;
}
function odd($n){
    return $n%2==1;
}

$isEven = array_filter($numbers, 'even');
$isOdd = array_filter($numbers, 'odd');
print_r($isEven);
print_r($isOdd);

$name = ['sujon', 'kabir', 'selim', 'rone', 'morad', 'mehedi', 'majharul'];
function filterByName($name){
    return $name[0] =='s'||$name[0]=='m';
}

$newname= array_filter($name, 'filterByName');
print_r($newname); */

/* 
// Array Reduce

$numbers = array(1,2,3,4,5,6,7,8,9,10);
function sum($oldvalue, $newvalue){
    return $oldvalue + $newvalue;
}
$sum= array_reduce($numbers, 'sum');
echo $sum;
echo PHP_EOL;
function evenOdd($oldvalue, $newvalue){
   if ($newvalue % 2==0) {
    return $oldvalue+$newvalue;
   }
}

$evenOdd= array_reduce($numbers, 'evenOdd');
echo $evenOdd; */

/* // Assign value to array
$color = array(122,233,65, 34);
list($red,$green, $blue,$pinik)=$color;
echo $pinik; */

// range function and stepping
// $numbers = array(12, 13, 14, 15, 16, 17, 18, 19, 20);
/* $numbers = array();
for($i=12; $i<21; $i++){
    array_push($numbers, $i);
}
print_r($numbers); */
/* $numbers =range(12,20);
print_r($numbers); */

foreach (range(0,50,7) as $key => $evenNumber) {
    if($evenNumber>0){
    echo $evenNumber."\n";
    }
}
?>