<!DOCTYPE html>
  <head>
    <title>Edit My Ranking</title>
    <style>body 
    {
      background-image: url("Images/Top and edit ranking background image.jpg");
      background-size: cover;      
    }
     </style>
  </head>
 <body>

<center> <h1 style="color:blue" >Edit My Top Ranking Of 2021</h1>
<br>

<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header"></div>
                    <p>Please complete the form below and submit to add a new ranking record to the database.</p>
                    <form action="Edit_Ranking.php" method="post">                        
                        <div class="form-group">
                            <label>Crisp</label><br>
                            <input type="text" name="crisp_id" class="form-control">
                        </div>
						            <div class="form-group">
                            <label>Manufacturer</label><br>
                            <input type="text" name="company_id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Position</label><br>
                            <input type="text" name="position" class="form-control">
                        </div>                        
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                    </div>
                    <p>To delete a row, please input the ranking ID of the row.</p>
                    <form action="Edit_Ranking.php" method="post">
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" name="position" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="remove" value="Remove">
                    </form>
                </div>
            </div>        
        </div>
    </div>
<?php

$link = mysqli_connect("localhost:3306", "root", "#UrG0T#","popular_crisps");
 
if($link === false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}
 

echo "<br><br><br><br><br><br>";

if(isset($_POST['submit']))
{    
     $crisp_id = $_POST['crisp_id'];
     $company_id = $_POST['company_id'];
     $position = $_POST['position'];
     $sql = "INSERT INTO ranking (crisp_id, company_id, position)
     VALUES ('$crisp_id','$company_id','$position')";
     if (mysqli_query($link, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($link);
     }
     
}
if(isset($_POST['remove']))
{    
     $position = $_POST['position'];
     $sql = "DELETE FROM ranking WHERE position = $position";
     if (mysqli_query($link, $sql)) {
        echo "Row has been deleted";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($link);
     }
     
}



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

<br>
<p><a href="Top_Ranking.php"> Go back to this table </a> </p>
<p><a href="Edit_Ranking.php"> Refresh </a> </p>
<p><a href="index.php">Go back to Home Page </a> </p>
<br>
</center>

</body>
</html>