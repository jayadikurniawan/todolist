<?php
session_start();
require("../model/koneksi.php");
$username = $_SESSION['username'];

$query = "SELECT * FROM user WHERE username='$username'";
$result = $mysqli->query($query);

$tasks = array();
while ($row = $result->fetch_assoc()) {
  $tasks[] = $row;
}

// Check if a user is found
if (count($tasks) > 0) {
  $user = $tasks[0];
}

if (isset($_FILES['fileInput'])) {
  $_SESSION['action'] = 'update';
  $fileTmp = $_FILES['fileInput']['tmp_name'];
  $fileName = $_FILES['fileInput']['name'];
  $targetFolder = "../images/";

  $newFileName = $_SESSION['username'] . '.' . pathinfo($fileName, PATHINFO_EXTENSION);
  $targetPath = $targetFolder . $newFileName;

  $existingFiles = glob($targetFolder . $_SESSION['username'] . '.*');



  $allowedExtensions = array('png', 'jpg', 'jpeg');
  $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

  if (in_array($fileExtension, $allowedExtensions) && ($fileExtension == 'png' || $fileExtension == 'jpg'|| $fileExtension == 'jpeg')) {
    foreach ($existingFiles as $existingFile) {
      unlink($existingFile); // Menghapus file dengan nama yang sama
    }
    if (move_uploaded_file($fileTmp, $targetPath)) {
      $_SESSION['action'] = 'updateImg-done';
      header('Location: ../view/v_profile.php');
      exit;
    } else {
      $_SESSION['action'] = 'updateImg-error';
      header('Location: ../view/v_profile.php');
      exit;
    }
  } else {
    $_SESSION['action'] = 'updateImg-errorFormat';
    header('Location: ../view/v_profile.php');
    exit;
  }
}





$imagePathPNG = "../images/" . $_SESSION['username'] . ".png";
$imagePathJPG = "../images/" . $_SESSION['username'] . ".jpg";
$imagePathJPEG = "../images/" . $_SESSION['username'] . ".jpeg";


if (file_exists($imagePathPNG)) {
  $imagePath = $imagePathPNG;
} else if (file_exists($imagePathJPG)) {
  $imagePath = $imagePathJPG;
} else if (file_exists($imagePathJPEG)) {
  $imagePath = $imagePathJPEG;
} else {
  $imagePath = "../images/default.png";
}
