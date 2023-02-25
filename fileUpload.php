<html>

<head>
    <title>File Upload</title>
</head>

<body>
    <center>
        <h2>File Uploader</h2>
        <form enctype="multipart/form-data" action="fileUpload.php" method="post">
            Choose file to upload : <input type="file" name="fileUp" size="30" />
            <input type="submit" name="upload" value="Upload File" /> <br>
        </form>
        <?php
            include("connect.php");
            $destination = "uploadedFile";

            if (isset($_POST["upload"])) {
                if ($_FILES["fileUp"]["error"] > 0) {
                    echo "Error : " . $_FILES["fileUp"]["error"] . "<br />";
                } else {
                    echo "Filename : " . $_FILES["fileUp"]["name"] . "<br />";
                    echo "Type : " . $_FILES["fileUp"]["type"] . "<br />";
                    echo "Size : " . number_format(($_FILES["fileUp"]["size"] / 1024), 2) . "<br />";
                    echo "Stored in : " . $_FILES["fileUp"]["tmp_name"] . "<br />";

                    
                    $tmp_name = $_FILES["fileUp"]["tmp_name"];
                    $filename = $_FILES["fileUp"]["name"];

                    move_uploaded_file($tmp_name, "$destination/$filename");
                    mysqli_query($conn, "INSERT INTO tblstudent (imageName) VALUES ('$filename')");
                    mysqli_close($conn);
                    echo "<font color='red'>File has been saved!</font>";
                }
            }
        ?>
    </center>
</body>

</html>