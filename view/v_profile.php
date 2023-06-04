<?php
require("../controller/c_profile.php");
?>


<!DOCTYPE html>
<html>

<head>
  <title>Edit Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css'>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="../style/profile.css">
  <?php
  if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
  }
  ?>
  <script src="https://kit.fontawesome.com/c0eb346a17.js" crossorigin="anonymous"></script>


</head>


<body>

  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
    <a href="v_dashboard.php" class="w3-bar-item w3-button" style="padding-left: 20%;"><i class="fa-solid fa-list-check" style="margin-right: 10px;"></i> Task</a>
    <a href="v_profile.php" class="w3-bar-item w3-button" style="padding-left: 20%;"><i class="fa-solid fa-user" style="margin-right: 10px;"></i> Profile</a>
    <div class="bottom">
      <a href="v_faq.php" class="w3-bar-item w3-button" style="padding-left: 20%;"><i class="fa-regular fa-circle-question" style="margin-right: 10px;"></i> FAQ</a>
      <a href="../controller/c_logout.php" class="w3-bar-item w3-button" style="padding-left: 20%;"><i class="fa-solid fa-arrow-right-from-bracket" style="margin-right: 10px;"></i>Log Out</a>
    </div>
  </div>

  <div id="main">

    <div class="w3-teal" style="display: flex;">
      <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
      <div class="w3-container">
        <h1>My Profile</h1>

      </div>
    </div>



    <div class="notification-box flex flex-col items-end justify-center fixed w-full z-50 p-3"></div>

    <div class="w3-row <?php echo (isset($_SESSION['action']) && $_SESSION['action']) != 'update' ? 'w3-animate-bottom' : ''; ?>">

      <div class="w3-half w3-container">
        <form class="form-image" method="post" enctype="multipart/form-data" id="uploadForm">
          <div class="avatar-upload">
            <div class="avatar-edit">
              <input type='file' name="fileInput" id="fileInput" />
              <label for="fileInput"></label>
            </div>
            <div class="avatar-preview">
              <div id="imagePreview" style="background-image: url(<?php echo $imagePath; ?>);">
              </div>
            </div>
          </div>
        </form>
        <h1><?php echo isset($user['username']) ? $user['username'] : ''; ?></h1>
      </div>

      <div class="w3-half w3-container">
        <h2>Edit Profile</h2>
        <form class="form-profile" method="POST" action="../controller/c_login.php" autocomplete="off">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" value="<?php echo isset($user['username']) ? $user['username'] : ''; ?>" readonly><br>

          <label for="password">Password:</label>
          <input type="text" id="password" name="password" value="<?php echo isset($user['password']) ? $user['password'] : ''; ?>"><br>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>"><br>

          <label for="telepon">Telepon:</label>
          <input type="tel" id="telepon" name="telepon" value="<?php echo isset($user['telepon']) ? $user['telepon'] : ''; ?>"><br><br>

          <div class="buttons">
            <input class="w3-button save-btn" type="submit" name="update" value="Save">
            <input onclick="document.getElementById('id01').style.display='block'" class="w3-button deleteAcc-btn" type="button" name="delete" value="Delete Account">

            <!-- notif -->
            <div id="id01" class="w3-modal">
              <div class="w3-modal-content w3-animate-top w3-card-4">
                <header class="w3-container w3-teal">
                  <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                  <h2>Confirmation Message</h2>
                </header>
                <div class="w3-container">
                  <p>Are you sure you want to <strong style="color:red;">Delete</strong> this account? </p><br>
                  <div class="Modal-btn">
                    <input class="w3-button save-btn" type="submit" name="delete" value="Yes, I'm sure.">
                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button">Cancel</span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </form>

      </div>
    </div>
    <script src="../javascript/profile.js"></script>

  </div>






  <script>
    document.getElementById('fileInput').addEventListener('change', function() {
      document.getElementById('uploadForm').submit();
    });
  </script>

  <script>
    function w3_open() {
      document.getElementById("main").style.marginLeft = "15%";
      document.getElementById("mySidebar").style.width = "15%";
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("openNav").style.display = 'block';
    }

    function w3_close() {
      document.getElementById("main").style.marginLeft = "0%";
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("openNav").style.display = "inline-block";
    }

    function getFileName() {
      var fileInput = document.getElementById("fileInput");
      var fileName = fileInput.files[0].name;
      console.log(fileName);
    }
  </script>



  <?php
  if (isset($_SESSION['action'])) {
    if ($_SESSION['action'] == 'update') {
      echo "<script>sendNotification('success', 'Your profile has been updated!');</script>";
    }
    if ($_SESSION['action'] == 'updateImg-done') {
      echo "<script>sendNotification('success', 'Your profile Picture has been updated!');</script>";
    }
    if ($_SESSION['action'] == 'updateImg-error') {
      echo "<script>sendNotification('warning', 'Oops, There's an error while uploading.');</script>";
    }
    if ($_SESSION['action'] == 'updateImg-errorFormat') {
      echo "<script>sendNotification('warning', 'Invalid file format (only JPG / JPEG / PNG)!');</script>";
    }
    $_SESSION['action'] = '';
  }
  ?>

</body>

</html>