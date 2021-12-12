<!DOCTYPE html>
  <head>
    <title>Edit Crisps</title>
    <style>body 
    {
      background-image: url("Images/Top and edit crisp background image.jpg");
      background-size: cover;      
    }
     </style>
  </head>
 <body>

<center> <h1 style="color:blue" >Edit The Top Crisp Of 2021</h1>
<br>
<!--This creates the form and the buttons-->
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header"></div>
                    <p>Please complete the form below and submit to add a new crisp record to the database.</p>
                    <form action="Edit_Crisps.php" method="post">
                        
                        <div class="form-group">
                            <label>Crisps Name</label><br>
                            <input type="text" name="crisp_name" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Crisp Manufacturer</label><br>
                            <input type="text" name="crisp_manufacturer" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Crisp Area</label><br>
                            <input type="text" name="crisp_area" class="form-control">
                        </div>                        
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                    </div>
                    <p>To delete a row, please input the crisp ID of the row.</p>
                    <form action="Edit_Crisps.php" method="post">
                        <div class="form-group">
                            <label>Crisp ID</label>
                            <input type="text" name="crisp_ID" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="remove" value="Remove">
                    </form>
                </div>
            </div>        
        </div>
    </div>
<?php
//The sql connect
$link = mysqli_connect("localhost:3306", "root", "#UrG0T#","popular_crisps");
 
if($link === false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
}
 

echo "<br><br><br><br><br><br>";
//This adds a new row
if(isset($_POST['submit']))
{    
     $crisp_name = $_POST['crisp_name'];
     $crisp_manufacturer = $_POST['crisp_manufacturer'];
     $crisp_area = $_POST['crisp_area'];
     $sql = "INSERT INTO crisps (name, manufacturer, area)
     VALUES ('$crisp_name','$crisp_manufacturer','$crisp_area')";
     if (mysqli_query($link, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($link);
     }
     
}
//This removes a row
if(isset($_POST['remove']))
{    
     $crisp_ID = $_POST['crisp_ID'];
     $sql = "DELETE FROM crisps WHERE id = $crisp_ID";
     if (mysqli_query($link, $sql)) {
        echo "Row has been deleted";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($link);
     }
     
}


//code for the table
$result = mysqli_query($link,"SELECT * FROM crisps");

echo "<table border='1'>
<tr>
<th>  &emsp;&emsp;&emsp;&emsp;Crisp ID&emsp;&emsp;&emsp;&emsp;  </th>
<th>  &emsp;&emsp;&emsp;&emsp;Crisp Name&emsp;&emsp;&emsp;&emsp;  </th>
<th>  &emsp;&emsp;&emsp;&emsp;Crisp Manufacturer&emsp;&emsp;&emsp;&emsp;   </th>
<th>  &emsp;&emsp;&emsp;&emsp;Crisp Area&emsp;&emsp;&emsp;&emsp;   </th>
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

<br>
<p><a href="Top_Crisps.php"> Go back to this table </a> </p>
<p><a href="Edit_Crisps.php"> Refresh </a> </p>
<p><a href="index.php">Go back to Home Page </a> </p>
<br>
</center>

</body>
</html>