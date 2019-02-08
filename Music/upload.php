<?php
include_once("config.php");

if (isset($_POST['Submit'])) {
    $mp3name = $_POST['mp3name'];

if ( empty($mp3) ) {
        

        if (empty($mp3)) {
            echo "<font color='red'>Mp3 field is empty.</font><br/>";
        }

       

        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    }
else {
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO uploadfile(username,mp3,mp3name) VALUES('$username','$mp3','$mp3name)')");

        //display success message
        echo "<font color='green'>Data added successfully.";
        header("refresh:0.2; url=/music/index.php");
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="index.php" method="post" enctype= "multipart/form-data">
            <table width="25%" border="0">
                <tr> 
                    <td>Username</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr> 
                    <td>Emri i Kenges</td>
                    <td><input type="text" name="mp3name"></td>
                </tr>
                <tr> 
                    <td>Linku i Kenges</td>
                    <td><input type="file" name="mp3"></td>
                </tr>
                <tr> 
                    <td></td>
                    <td><input type="submit" name="Submit" value="submit" id="submit"></td>
                </tr>
            </table>
        </form>
</body>
</html>

