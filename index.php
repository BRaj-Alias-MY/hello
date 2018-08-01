<?php
echo "<h1>List of User/ AMAZON EC2 Server Hosting with PHP + MYSQL </h1>";
$con = new mysqli('localhost','root','vikram26.26','mytest');
$sql = "select * from students";
$result = $con->query($sql);
echo "<table><tr><th>User ID</th><th>User Name</th></tr>";
while($row=$result->fetch_object())
{
echo "<tr>";
 echo "<td>". $row->name . "</td>";
 echo '</tr';
}
echo "</table>";
?>
