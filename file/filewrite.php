<?php
$fileName='C:\xampp\htdocs\PhpByHasinHayder\file\filewrite.txt';
/* $existingData = file_get_contents($fileName);
$fp=fopen($fileName, 'w');

fwrite($fp, $existingData);
fwrite($fp, "Morad Patwary\n");
fwrite($fp, "Morad Patwary\n");
fwrite($fp, "minhaj Patwary\n");
fwrite($fp, "ena Patwary\n");
fwrite($fp, "Abdur Rahaman\n");
fwrite($fp, "majharul islam\n");
fwrite($fp, "mehedi miraj\n");
fclose($fp); */
/* if(is_writable($fileName)){
$fp=fopen($fileName, 'a');
fwrite($fp, "Morad Patwary\n");
fwrite($fp, "Morad Patwary\n");
fwrite($fp, "minhaj Patwary\n");
fwrite($fp, "ena Patwary\n");
fwrite($fp, "Abdur Rahaman\n");
fwrite($fp, "majharul islam\n");
fwrite($fp, "mehedi miraj\n");
fclose($fp);
} */

// deffirent mode file opening

/* $fp= fopen($fileName, "r+");
$line = fgets($fp);
echo $line;
fwrite($fp, "uranus\n");
$line = fgets($fp);
echo $line;
fclose($fp); */

// file_get_contents and race condition file loc

// file_put_contents($fileName, "Mars\n");
// file_put_contents($fileName, "morad\n")
// file_put_contents($fileName, "morad\n", FILE_APPEND);
// file_put_contents($fileName, "ena\n", FILE_APPEND);
// file_put_contents($fileName, "mehedi\n", FILE_APPEND);
file_put_contents($fileName, "morad\n", FILE_APPEND | LOCK_EX);
file_put_contents($fileName, "mehedi\n", FILE_APPEND | LOCK_EX);

?>