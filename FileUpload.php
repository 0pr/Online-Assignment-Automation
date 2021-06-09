<?php
if(isset($_POST['sb1']))
{
if($_FILES['upfile1']['error']==0)
{
$tmpname=$_FILES['upfile1']['tmp_name'];
$tpath=$_SERVER['DOCUMENT_ROOT']."project/sem1/".$_FILES['upfile1']['name'];
if(move_uploaded_file($tmpname,$tpath))
{
echo "File Uploaded Sucessfully....";
}
else
{
echo "File not uploaded!!<br>";
}
}
}
elseif(isset($_POST['sb2']))
{
if($_FILES['upfile2']['error']==0)
{
$tmpname=$_FILES['upfile2']['tmp_name'];
$tpath=$_SERVER['DOCUMENT_ROOT']."project/sem2/".$_FILES['upfile2']['name'];
if(move_uploaded_file($tmpname,$tpath))
{
echo "File Uploaded Sucessfully....";
}
else
{
echo "File not uploaded!!<br>";
}
}
}
elseif(isset($_POST['sb3']))
{
if($_FILES['upfile3']['error']==0)
{
$tmpname=$_FILES['upfile3']['tmp_name'];
$tpath=$_SERVER['DOCUMENT_ROOT']."project/sem3/".$_FILES['upfile3']['name'];
if(move_uploaded_file($tmpname,$tpath))
{
echo "File Uploaded Sucessfully....";
}
else
{
echo "File not uploaded!!<br>";
}
}
}
elseif(isset($_POST['sb4']))
{
if($_FILES['upfile4']['error']==0)
{
$tmpname=$_FILES['upfile4']['tmp_name'];
$tpath=$_SERVER['DOCUMENT_ROOT']."project/sem4/".$_FILES['upfile4']['name'];
if(move_uploaded_file($tmpname,$tpath))
{
echo "File Uploaded Sucessfully....";
}
else
{
echo "File not uploaded!!<br>";
}
}
}
elseif(isset($_POST['sb5']))
{
if($_FILES['upfile5']['error']==0)
{
$tmpname=$_FILES['upfile5']['tmp_name'];
$tpath=$_SERVER['DOCUMENT_ROOT']."project/sem5/".$_FILES['upfile5']['name'];
if(move_uploaded_file($tmpname,$tpath))
{
echo "File Uploaded Sucessfully....";
}
else
{
echo "File not uploaded!!<br>";
}
}
}
elseif(isset($_POST['sb6']))
{
if($_FILES['upfile6']['error']==0)
{
$tmpname=$_FILES['upfile6']['tmp_name'];
$tpath=$_SERVER['DOCUMENT_ROOT']."project/sem6/".$_FILES['upfile6']['name'];
if(move_uploaded_file($tmpname,$tpath))
{
echo "File Uploaded Sucessfully....";
}
else
{
echo "File not uploaded!!<br>";
}
}
}
elseif(isset($_POST['sb7']))
{
if($_FILES['upfile7']['error']==0)
{
$tmpname=$_FILES['upfile7']['tmp_name'];
$tpath=$_SERVER['DOCUMENT_ROOT']."project/sem7/".$_FILES['upfile7']['name'];
if(move_uploaded_file($tmpname,$tpath))
{
echo "File Uploaded Sucessfully....";
}
else
{
echo "File not uploaded!!<br>";
}
}
}
elseif(isset($_POST['sb8']))
{
if($_FILES['upfile8']['error']==0)
{
$tmpname=$_FILES['upfile8']['tmp_name'];
$tpath=$_SERVER['DOCUMENT_ROOT']."project/sem8/".$_FILES['upfile8']['name'];
if(move_uploaded_file($tmpname,$tpath))
{
echo "File Uploaded Sucessfully....";
}
else
{
echo "File not uploaded!!<br>";
}
}
}
else echo"";
?>
