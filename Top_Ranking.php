<!DOCTYPE html>
  <head>
    <title>My Top Ranking</title>
    <style>body 
    {
      background-image: url("Images/Top and edit ranking background image.jpg");
      background-size: cover;
    }
     </style>
  </head>
  <body>

<center> 
<h1 style="color:blue" >My Top ranking Of 2021</h1>
<br>

</div>
<?php
$link = mysqli_connect("localhost:3306", "root", "#UrG0T#","popular_crisps");
 
if($link === false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}
 
$sql = "select * from ranking";
$result = mysqli_query($link, $sql);

echo "<br><br>";

$result = mysqli_query($link,"SELECT * FROM ranking");

echo "<table border='1'>
<tr>
<th>  &emsp;&emsp;&emsp;&emsp;Crisp&emsp;&emsp;&emsp;&emsp;  </th>
<th>  &emsp;&emsp;&emsp;&emsp;Manufacturer&emsp;&emsp;&emsp;&emsp;  </th>
<th>  &emsp;&emsp;&emsp;&emsp;Position&emsp;&emsp;&emsp;&emsp;   </th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><center>" .$row['crisp_id'] . "</center></td>";
echo "<td><center>" . $row['company_id'] . "</center></td>";
echo "<td><center>" . $row['position'] . "</center></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link);

echo "<br>";

?>

<p><a href="Edit_Ranking.php"> Edit this table </a> </p>
<p><a href="Top_Ranking.php"> Refresh </a> </p>
<p><a href="index.php">Go back to Home Page </a> </p>
</center>
</body>
</html>