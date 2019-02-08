<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="stylee.css">
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
        <div class="content">
            <!-- notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success" >
                    <h3>
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>

            <!-- logged in user information -->
            <?php if (isset($_SESSION['username'])) : ?>
                <p>Welcome : <strong><?php echo $_SESSION['username']; ?></strong></p>
            <?php endif ?>
        </div>





        <script>





            window.addEventListener('load', onDocLoaded, false);


            function onChosenFileChange(evt)
            {
                var fileType = this.files[0].type;

                if (fileType.indexOf('audio') != -1)
                    loadFileObject(this.files[0], onSoundLoaded);

                else if (fileType.indexOf('image') != -1)
                    loadFileObject(this.files[0], onImageLoaded);

                else if (fileType.indexOf('video') != -1)
                    loadFileObject(this.files[0], onVideoLoaded);
            }

            function loadFileObject(fileObj, loadedCallback)
            {
                var reader = new FileReader();
                reader.onload = loadedCallback;
                reader.readAsDataURL(fileObj);
            }

            function onSoundLoaded(evt)
            {
                byId('sound').src = evt.target.result;
                byId('sound').play();
            }




            function handleFiles(event) {
                var files = event.target.files;
                $("#audio").attr("src", URL.createObjectURL(files[0]));
                document.getElementById("player").load();
                document.getElementById("player").play();
            }

            document.getElementById("file").addEventListener("change", handleFiles, false);

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <div class="kong">
            <strong> <p>  Muzika 1 </p></strong>

            <audio id="player" controls>
                <
                <source src="Lyrical Son x Ledri Vula x Mc Kresha - Menemadhe (Official Video).mp3" id="audio" />
            </audio>
            <strong> <p>  Muzika 2</p></strong>
            <audio id="player" controls>

                <source src="Lyrical Son x Ledri Vula x Mc Kresha - Menemadhe (Official Video).mp3" id="audio" />
            </audio>
            <strong> <p> Muzika 3</p></strong>
            <audio id="player" controls>

                <source src="Lyrical Son x Ledri Vula x Mc Kresha - Menemadhe (Official Video).mp3" id="audio" />
            </audio>

            <strong> <p>  Muzika 4</p></strong>
            <audio id="player" controls>

                <source src="Lyrical Son x Ledri Vula x Mc Kresha - Menemadhe (Official Video).mp3" id="audio" />
            </audio>

            <strong> <p> Muzika 5 </p></strong>
            <audio id="player" controls>

                <source src="Lyrical Son x Ledri Vula x Mc Kresha - Menemadhe (Official Video).mp3" id="audio" />
            </audio>

        </div>


    </body>
</html>



