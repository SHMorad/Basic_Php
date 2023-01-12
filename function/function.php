<?php
/* function isEven($n){
    if ($n % 2 == 0) {
        return true;
    }
    return false;
} */

/* function serve($foodtype="cofee", $numberofItems="1 cup"){
    echo "{$numberofItems} of {$foodtype} has been serve";
} */

/* function sum(int $x,int $y,int $z):int{
    return $x+$y+$z;
}
echo sum(1,2,3); */

/* function sum(int ...$numbers){
    $result = 0;
    for ($i=0; $i <count($numbers); $i++) { 
        $result += $numbers[$i];
    }
    return $result;
}
echo sum(1,2,3,4,5); */

/* function doTaskA(){
    echo "Task A Done\n";
}
function doTaskB(){
    echo "Task B Done\n";
}
function doTaskC(){
    echo "Task C Done\n";
}
function doTaskD(){
    echo "Task D Done\n";
}
function doTaskE(){
    echo "Task E Done\n";
}
function allTask()
{
    doTaskA();
    // doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}
allTask(); */

//recursive function // recursion

function printN($i){
    if ($i>10) {
        return;
    }
    echo $i."\n";
    $i++;
    printN($i);
}
printN(1);