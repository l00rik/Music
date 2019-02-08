<html>
    <head>
        <title>OMS</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
    </head>
    <body>  



    </table>

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
    <?php
//including the database connection file
    include_once("config.php");

    if (isset($_POST['Submit'])) {
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $age = mysqli_real_escape_string($mysqli, $_POST['age']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);

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
            echo "<font color='green'>Artisti u shtua me sukses";
            header('location: index.php');
        }
    }
    ?>
</body>
</html>
