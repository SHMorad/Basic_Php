<?php
/* // hereDoc
$name = "moard Patwary";
$heredoc=<<<EOD
data1
    data2
        {$name}
more data 
EOD;

echo $heredoc;

// Now Dock

$nowdoc=<<<'EOD'
data1
    data2
        {$name}
more data 
EOD;

echo $nowdoc; */

// Ascii Char Value

/* echo ord('A');
echo PHP_EOL;
echo ord('a');
echo PHP_EOL;
echo chr(65);
echo PHP_EOL;
echo chr(97); */

// string Char Access

/* $string = "Hello World";
echo $string[0];
echo $string[-5];
echo PHP_EOL;

echo substr($string,1,4);
echo PHP_EOL;
$length=strlen($string);
echo $length;
echo PHP_EOL;

echo substr($string,$length-3);
echo PHP_EOL;
echo substr($string, -3);
 */

// string reverse


/* 
$string = "Hello World";
$length = strlen($string)-1;
// echo $length;
for($i = $length; $i>=0; $i--){
    echo $string[$i];
}

echo PHP_EOL;
$length = strlen($string);
for($i = 1; $i<=$length; $i++){
    echo $string[$i * -1];
}

echo PHP_EOL;
echo strrev($string); */

// string tokenizetion

/* $string ="Hello World, How are you";
$parts = explode(",", $string);
print_r($parts);
echo PHP_EOL;
$orginal = join(" ", $parts);
echo $orginal;
echo PHP_EOL;
$orginal2 = implode(" ", $parts);
echo $orginal2;
echo PHP_EOL;
$parts2 = strtok($string, " ,");
// echo $posts2;
while($parts2 !== false){
    echo $parts2."\n";
    $parts2 = strtok(" ,");
}

$parts3 = preg_split("/ |,/", $string);
print_r($parts3); */

// finding string

/* $string = "Quick brown Fox fox jups over the lazy dog";
echo strpos($string, "fox");
echo PHP_EOL;
echo stripos($string, "fox");//case insansitive
echo PHP_EOL;
echo stripos($string, "fox",13);

$offset = strpos($string, "Quick");
if($offset !==false){
    echo "\n word was Found";

}else{
    echo "\n word was Not Found";
}
$offset2 = strrpos($string, "fox");
echo PHP_EOL;
echo $offset2;
 */

//  Searching and replaceing in string

/* 
$string = "Quick brown Brown Fox fox jups over the lazy dog";
$replacedString = str_replace('brown', 'Brown', $string);
$replacedString2 = str_ireplace('brown', 'Brown', $string);
echo $replacedString;
echo PHP_EOL;
echo $replacedString2;
echo PHP_EOL;
echo $string;
echo PHP_EOL;
$replacedString3=str_replace('brown','red',$string,$morad);
$replacedString4=str_ireplace('brown','red',$string,$countes);
echo $replacedString3;
echo PHP_EOL;
echo "Total Replacement : {$countes}";
echo PHP_EOL;
echo $replacedString4;
echo PHP_EOL;
echo "Total Replacement : {$countes}";
echo PHP_EOL;
$string=str_replace(array('brown','fox','dog'), array('red','cat',"hen"), $string, $count);
$string2=str_ireplace(array('brown','fox','dog'), array('red','cat',"hen"), $string, $counter);
echo $string;
echo PHP_EOL;
echo "Total Replacement : {$count}";
echo PHP_EOL;
echo $string2;
echo PHP_EOL;
echo "Total Replacement : {$counter}"; */


// string trim

/* $string = "  hello\n";
echo $string;
echo "Data";
echo PHP_EOL;
$string=trim($string,' ');
echo $string;
echo PHP_EOL;
echo "Data"; */

// string worad Wrap

/* $string="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium voluptatem dolorum iusto rem. Nostrum sit nihil eos quis mollitia cumque culpa deserunt eaque, dolore repudiandae aperiam repellat doloribus minima expedita.";
echo $string;
echo PHP_EOL;
echo wordwrap($string,26);
$string2="Lorem ipsum dolor sit amet, consecteturerererrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr adipisicing elit. Laudantium voluptatem dolorum iusto rem. Nostrum sit nihil eos quis mollitia cumque culpa deserunt eaque, dolore repudiandae aperiam repellat doloribus minima expedita.";
echo wordwrap($string2, 26,"\n",true); */

// string nl2br

/* $string ="Lorem, ipsum dolor\n sit amet consectetur \nadipisicing elit. Nobis, illo qui. Cumque quam expedita \nad. Incidunt, quam. Quaerat officia praesentium\n debitis provident, minima similique quo obcaecati earum reiciendis.\n Maiores, necessitatibus.";

echo $string;
echo nl2br($string); */

// string sscanf

/* $name = "Morad Patwary 01640638628";
$parts=sscanf($name, "%s %s %11d");
print_r($parts);
echo PHP_EOL;
sscanf($name, "%s %s %11s", $fname, $lname, $phone);
echo $fname;
echo PHP_EOL;
echo $lname;
echo PHP_EOL;

$hexcolor="#ff2f44";
sscanf($hexcolor, "#%2x%2x%2x",$red, $green,$blue);
echo $green; */

?>
