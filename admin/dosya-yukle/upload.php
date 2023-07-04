<?php
define("UPLOAD_DIR", "./");
define("ERROR", "STOP! Error time! I have no idea what caused this." );

// The upload form
if ($_SERVER["REQUEST_METHOD"] == "GET") {
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
 <input type="file" name="myFile"/>
 <br/>
 <input type="submit" value="Upload"/>
</form>

<?php
}
// File upload action
else if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_FILES["myFile"])) {
    $myFile = $_FILES["myFile"];
    if ($myFile["error"] !== UPLOAD_ERR_OK) {
        echo $ERROR;
        exit;
    }
    // Check the filename is safe
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

    // Grab file from the temp dir
    $success = move_uploaded_file($myFile["tmp_name"], UPLOAD_DIR . $name);
    if (!$success) {
        echo $ERROR;
        exit;
    }
    echo "Dosya Bağlantınız:  <a href=$name>https://www.yenigunisg.com.tr/admin/dosya-yukle/$name</a> ";
}
?>
