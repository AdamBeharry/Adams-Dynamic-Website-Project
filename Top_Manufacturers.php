<!DOCTYPE html>
  <head>
    <title>Top Manufacturers</title>
    <style>body 
    {
      background-image: url("Images/Top and edit manufacture background image.jpg");
      background-size: cover;
    }
     </style>
  </head>
  <body>

<center> 
<h1 style="color:blue" >The Top Manufacturers Of 2021</h1>
<br>

</div>
<?php
$link = mysqli_connect("localhost:3306", "root", "#UrG0T#","popular_crisps");
 
if($link === false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}
 
$sql = "select * from manufacturers";
$result = mysqli_query($link, $sql);

echo "<br><br>";

$result = mysqli_query($link,"SELECT * FROM manufacturers");

echo "<table border='1'>
<tr>
<th>  &emsp;&emsp;&emsp;&emsp;Manufacturers ID&emsp;&emsp;&emsp;&emsp;  </th>
<th>  &emsp;&emsp;&emsp;&emsp;Manufacturers Name&emsp;&emsp;&emsp;&emsp;  </th>
<th>  &emsp;&emsp;&emsp;&emsp;Manufacturers Founded&emsp;&emsp;&emsp;&emsp;   </th>
<th>  &emsp;&emsp;&emsp;&emsp;Manufacturers Headquarters&emsp;&emsp;&emsp;&emsp;   </th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><center>" .$row['id'] . "</center></td>";
echo "<td><center>" . $row['name'] . "</center></td>";
echo "<td><center>" . $row['founded'] . "</center></td>";
echo "<td><center>" . $row['headquarters'] . "</center></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link);

echo "<br>";

?>

<p><a href="Edit_Manufacturers.php"> Edit this table </a> </p>
<p><a href="Top_Manufacturers.php"> Refresh </a> </p>
<p><a href="index.php">Go back to Home Page </a> </p>
</center>
</body>
</html>