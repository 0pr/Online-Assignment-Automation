<?php
$fullpath=$_SERVER['DOCUMENT_ROOT']."/assignmentautomation/sem2/".$_GET['name'];
//echo $fullpath;
if($fd=fopen($fullpath,"r"))
{
$fsize=filesize($fullpath);
$path_parts=pathinfo($fullpath);
/*pathinfo() returns an associative array containing information about path*/
//var_dump($path_parts);
header("content-disposition:attachment;filename=\"".$path_parts["basename"]."\"");
header("content-length:$fsize");
header("cache-control:private");
while(!feof($fd))
{
$buffer=fread($fd,$fsize);
echo $buffer;
}
fclose($fd);
exit;
}
?>
