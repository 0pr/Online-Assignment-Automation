?php
session_start();//session starts
if(isset($_POST['sub1']))
{
if ((!empty($_POST['nm'])) && !empty($_POST['pwd']))
{
$name=$_POST['nm'];
$password=$_POST['pwd'];
include 'db.php';//database application connection
$qry="select * from student where name='$name' and password='$password'";//query
$resultset=mysqli_query($link,$qry);
while($res=mysqli_fetch_row($resultset))//returns 1 i.e the no. of entry
{
$_SESSION['Name']=$res[0];
$_SESSION['ROLL']=$res[1];
echo"
<script type=\"text/javascript\">
window.open('student3.html','_top');
</script>
";
}
echo("Invalid id or password");
}
else
echo "Insert values";
}
else if(isset($_POST['sub2']))
{
if ((!empty($_POST['nm'])) && !empty($_POST['pwd']))
{
$name=$_POST['nm'];
$password=$_POST['pwd'];
include 'db.php';//database application connection
$qry="select * from teacher where name='$name' and password='$password'";//query
$resultset=mysqli_query($link,$qry);
while($res=mysqli_fetch_row($resultset))//returns 1 i.e the no. of entry
{
$_SESSION['Name']=$res[0];
$_SESSION['ID']=$res[1];
echo"
<script type=\"text/javascript\">
window.open('faculty3.html','_top');
</script>
";
}
echo "invalid";
}
else
echo "Insert values";
}
?>
