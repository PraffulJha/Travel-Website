<?php
error_reporting(0);
?>
<html>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="uploadfile" value=""/><br>
<input type="submit" name="submit" value="Upload file"/>
</form>
</html>
<?php
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "student/".$filename;
move_uploaded_file($tempname,$folder);
?> 