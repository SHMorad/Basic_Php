<?php
date_default_timezone_set("Asia/Dhaka");
// lecture 1
// unix epoch january/1/1997 -- 12:00AM
// unix timeStamp current time--- to unix epoch

/* echo time();
echo PHP_EOL;
echo microtime(true); //true, false */

/* $strartTime = microtime(true);
factorial(100);
// sleep(3);
$endTime = microtime(true);
$executionTime = $endTime - $strartTime;
echo $executionTime;
function factorial($n){
    $result =1;
    for($i=1; $i<=$n; $i++){
        $result *= $i;
    }
    return $result;
} */

// PHP Date Formate
/* echo date('d-m-y');
echo PHP_EOL;
echo date('d-M-Y');
echo PHP_EOL;
echo date('d-F-Y');
echo PHP_EOL;
echo date('dS-F-Y');
echo PHP_EOL;
echo date('dS-M-Y h:i:s');
echo PHP_EOL;
echo date('dS-M-Y h:i:s a');
echo PHP_EOL;
echo date('dS-M-Y H:i:s A'); */


// unix & Gmt Time Stamp

/* echo time();
echo PHP_EOL;
echo mktime(0,0,0,8,1,2023);
echo PHP_EOL;
date_default_timezone_set("Asia/Dhaka");
echo mktime(0,0,0,8,1,2023);
echo PHP_EOL;
echo gmmktime(0,0,0,1,8,2023);
echo PHP_EOL; */

// date Time convert to string

/* echo mktime(0,0,0,8,1,2023);
echo PHP_EOL;
echo strtotime("8 january, 2023");
echo PHP_EOL;
echo time();
echo PHP_EOL;
echo strtotime("now");
echo PHP_EOL;
echo strtotime("+3days");
echo PHP_EOL;
echo strtotime("+2 weeks 7 days 24 hours 86400 seconds")-strtotime("now");
echo date('H:i:s A',strtotime('13 August 2005 11:12:05 PM')); */


// OOP Date Time

$d1=new DateTime('20 May 2007');
$d2=new DateTime('27 jun 2013');

$difference = date_diff($d1,$d2);
echo $difference->format('%y Year %m Month %d Days');






?>