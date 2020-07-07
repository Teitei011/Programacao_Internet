<?php

$ds = DIRECTORY_SEPARATOR; $uploadFolder = '/profiles';
if (!empty($_FILES)) {
  $tempFileName = $_FILES['file']['tmp_name'];
  $destPath = dirname( __FILE__ ) . $ds. $uploadFolder . $ds;
  $destFile =  $destPath. $_FILES['file']['name'];
  move_uploaded_file($tempFileName,$destFile);
}

?>
