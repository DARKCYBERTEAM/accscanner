<?php
/*Color*/
$green = "\033[92m";
$red = "\033[91m";
$cyan = "\033[36m";
$yellow = "\033[93m";
$bold = "\033[5m";
$white = "\033[0m";
/*Form*/
$date   = date('d-M-Y H:i');
//system("clear");
echo $yellow . "
____   ____ _____
|  _ \ / ___|_   _|
| | | | |     | |
| |_| | |___  | |
|____/ \____| |_|
";
echo $red . "==================================";
echo $bold . $green . "\nCoder   : ./Mr.404_FouNd
Team    : DARKCYBERTEAM
Code    : PHP
Version : 0.1.2.3
Greet'z : Cvar2018 < > v!3wstr1ng\n";
echo $bold . $green . "DMYH    : $date\n";
echo $red . "==================================\n";
echo $bold . $cyan . "Menghitung  : ";
$count = trim(fgets(STDIN,1024));
echo $bold . $cyan . "Menunda     : ";
$sleep = trim(fgets(STDIN,1024));
for($x = 0; $x < $count; $x++){
$str = file_get_contents("http://namegenerators.org/fake-name-generator-us/");
$var = '/<div class="col2">(.*?)<\/div>/s';
preg_match_all($var, $str, $matches);
echo $red . "\n===============INFO===============\n";
echo $bold . $cyan . "[name : ".str_replace("</span>", "", str_replace('<span class="name">', "", $matches[1][3]))."]".
		" [address : ".$matches[1][8]."]".
		" [phone : ".$matches[1][9]."]\n";
echo $red . "================CC================\n";
echo $bold . $cyan . "[email : ".$matches[1][10]."]".
		" [card number : ".str_replace(" ", "", $matches[1][14])."]".
		" [cvv : ".$matches[1][16]."]".
		" [exp-date : ".$matches[1][15]."]\n";
	sleep($sleep);
}
?>
