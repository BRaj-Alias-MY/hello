<?php
echo "<h1>Hello</h1>";
$con = new mysqli('localhost','root','vikram26.26','mytest');
$sql = "select * from students";
$result = $con->query($sql);
while($row=$result->fetch_object())
{
 echo $row->name;
 echo '<br>';
}
?>
