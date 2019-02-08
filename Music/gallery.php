<html>
    <head>
        <title>OMS</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
    </head>


    <script>
        function getVote(int) {
            if (window.XMLHttpRequest) {

                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("poll").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "poll_vote.php?vote=" + int, true);
            xmlhttp.send();
        }


    </script>

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
        <div class="All">

            <div id="abc">
                <h1>Most Streamed Songs </h1>
                <iframe width="200" height="150" src="https://www.youtube.com/embed/cedoBlUvBlI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="200" height="150" src="https://www.youtube.com/embed/BA6g_EdvNfE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="200" height="150" src="https://www.youtube.com/embed/QlRWZuKPVoo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>
                <iframe width="200" height="150" src="https://www.youtube.com/embed/KTybYuIxzFI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="200" height="150" src="https://www.youtube.com/embed/8cQGzbu98HU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="200" height="150" src="https://www.youtube.com/embed/KeUE04wIgIw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class "vota">
                 <div id="poll">
                    <h3>Singer of the Week?</h3>
                    <form>
                        Era_istrefi
                        <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
                        <br>Ledri_Vula
                        <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
                    </form>
                </div>
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

            <div class="songss">
                <h1>Download Songs</h1>
                <audio id="player" controls>
                    <source src="Lyrical Son x Ledri Vula x Mc Kresha - Menemadhe (Official Video).mp3" id="audio" />
                </audio><br>
                <br>
                <audio id="player" controls>

                    <source src="Lyrical Son x Ledri Vula x Mc Kresha - Menemadhe (Official Video).mp3" id="audio" />
                </audio>


                </script>

            </div>

    </body>
</html>

<div class="Footer">
    <p>2019 OMS.All Rights Reserved.</p>
    <p>ONLINE MUSIC STORE </p>
    <p>Terms Of Use   Privacy Policy  About Our Ads</p>
</div>




