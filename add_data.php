
<?php
$newdata = $_GET['w1'];
$myfile = fopen("data.txt", "r+") or die("Unable to open file!");
ftruncate($myfile, 0);
$text = fwrite($myfile,$newdata);
fclose($myfile);


$myfile = fopen("backup_data.txt", "r+") or die("Unable to open file!");
ftruncate($myfile, 0);
$text = fwrite($myfile,$newdata);
fclose($myfile);


header("Location:index2.php");
exit();

?>