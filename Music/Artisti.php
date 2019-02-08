<html>
	<head>
   	   <title>OMS</title>
   	   <link type="text/css" rel="stylesheet" href="style.css"/>
   	</head>
   	   <body>  

   	   	<div class="Header">
   	   		<div class="nalt">
        <img src="images/12.png" alt="12" />
        <h1><span style="color: #87a310">Online Music Store</h1>

    </div>
	</div>

      <div class="nav">
        
        <div class="nav1">
            <ul>
                <li id="active"><a href="Index.php">Main Page</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="index.php?logout='1'">Log Out</a></li>
                <li><a href="artisti.php">Artisti</a></li>
            </ul>
        </div>
    </div>

    <div class="hehe">
        <form action="add.php" method="post" name="form1">
            <table width="25%" border="0">
                <p>Shto Kengen Tuaj Te Preferuar</p>
                <tr> 
                    <td>Artisti</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr> 
                    <td>Rating?</td>
                    <td><input type="text" name="age"></td>
                </tr>
                <tr> 
                    <td>Kenga</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr> 
                    <td></td>
                    <td><input type="submit" name="Submit" value="ShtoKengen"></td>
                </tr>
            </table>
        </form>
    
    <button class="deletebutton"><a href="delete.php">Delete</a></button>
</div>
  
</body>
</html>
<?php
//including the database connection file
include_once("config.php");

if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    // checking empty fields
    if (empty($name) || empty($age) || empty($email)) {
        if (empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if (empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }

        if (empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }

        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");

        //display success message
        echo "<font color='green'>Data added successfully.";
        header("refresh:0.2; url=/music/index.php");
    }
}
?>