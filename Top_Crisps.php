<!DOCTYPE html>
  <head>
    <title>Top Crisps</title>
    <style>body 
    {
      background-image: url("Images/Top and edit crisp background image.jpg");
      background-size: cover;
    }
     </style>
  </head>
  <body>

<center> 
<h1 style="color:blue" >The Top Crisps Of 2021</h1>
<br>

</div>
<?php
//Links sql and php together
//selects the database
$link = mysqli_connect("localhost:3306", "root", "#UrG0T#","popular_crisps");
 
if($link === false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}
 
//selects the specific table
$sql = "select * from crisps";
$result = mysqli_query($link, $sql);

echo "<br><br>";

//shows the table
$result = mysqli_query($link,"SELECT * FROM crisps");

echo "<table border='1'>
<tr>
<th>  &emsp;&emsp;&emsp;&emsp;Crisps ID&emsp;&emsp;&emsp;&emsp;  </th>
<th>  &emsp;&emsp;&emsp;&emsp;Crisps Name&emsp;&emsp;&emsp;&emsp;  </th>
<th>  &emsp;&emsp;&emsp;&emsp;Crisps Manufacturer&emsp;&emsp;&emsp;&emsp;   </th>
<th>  &emsp;&emsp;&emsp;&emsp;Crisps Area&emsp;&emsp;&emsp;&emsp;   </th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><center>" .$row['id'] . "</center></td>";
echo "<td><center>" . $row['name'] . "</center></td>";
echo "<td><center>" . $row['manufacturer'] . "</center></td>";
echo "<td><center>" . $row['area'] . "</center></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link);

echo "<br>";

?>

<p><a href="Edit_Crisps.php"> Edit this table </a> </p>
<p><a href="Top_Crisps.php"> Refresh </a> </p>
<p><a href="index.php">Go back to Home Page </a> </p>
</center>
</body>
</html>