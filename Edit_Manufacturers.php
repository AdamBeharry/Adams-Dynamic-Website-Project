<!DOCTYPE html>
  <head>
    <title>Edit Manufacturers</title>
    <style>body 
    {
      background-image: url("Images/Top and edit manufacture background image.jpg");
      background-size: cover;      
    }
     </style>
  </head>
 <body>

<center> <h1 style="color:blue" >Edit The Top Manufacturers Of 2021</h1>
<br>

<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header"></div>
                    <p>Please complete the form below and submit to add a new manufacturers record to the database.</p>
                    <form action="Edit_Manufacturers.php" method="post">                        
                        <div class="form-group">
                            <label>Manufacturers Name</label><br>
                            <input type="text" name="manufacturers_name" class="form-control">
                        </div>
						            <div class="form-group">
                            <label>Manufacturers Founded</label><br>
                            <input type="text" name="manufacturers_founded" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Manufacturers Headquarters</label><br>
                            <input type="text" name="manufacturers_headquarters" class="form-control">
                        </div>                        
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                    </div>
                    <p>To delete a row, please input the manufactures ID of the row.</p>
                    <form action="Edit_Manufacturers.php" method="post">
                        <div class="form-group">
                            <label>Manufacturers ID</label>
                            <input type="text" name="manufacturers_id" class="form-control">
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
     $manufacturers_name = $_POST['manufacturers_name'];
     $manufacturers_founded = $_POST['manufacturers_founded'];
     $manufacturers_headquarters = $_POST['manufacturers_headquarters'];
     $sql = "INSERT INTO manufacturers (name, founded, headquarters)
     VALUES ('$manufacturers_name','$manufacturers_founded','$manufacturers_headquarters')";
     if (mysqli_query($link, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($link);
     }
     
}
if(isset($_POST['remove']))
{    
     $manufacturers_id = $_POST['manufacturers_id'];
     $sql = "DELETE FROM manufacturers WHERE id = $manufacturers_id";
     if (mysqli_query($link, $sql)) {
        echo "Row has been deleted";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($link);
     }
     
}



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

<br>
<p><a href="Top_Manufacturers.php"> Go back to this table </a> </p>
<p><a href="Edit_Manufacturers.php"> Refresh </a> </p>
<p><a href="index.php">Go back to Home Page </a> </p>
<br>
</center>

</body>
</html>