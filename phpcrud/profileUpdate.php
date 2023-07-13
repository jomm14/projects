<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
  // User is not logged in, redirect to the login page
  header('Location: login.php');
  exit;
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
  // Check if a file is uploaded
  if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['profile_picture'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];

    // Check if the uploaded file is an image
    $file_info = getimagesize($file_tmp);
    if ($file_info === false) {
      // Invalid file type
      $error_message = 'Invalid file type. Only image files are allowed.';
    } else {
      // Specify the directory to store the uploaded image
      $upload_directory = 'profile_pictures/';
      
      // Generate a unique file name for the uploaded image
      $new_file_name = uniqid('profile_', true) . '.' . pathinfo($file_name, PATHINFO_EXTENSION);
      
      // Set the file path for the uploaded image
      $file_path = $upload_directory . $new_file_name;

      // Move the uploaded file to the specified directory
      if (move_uploaded_file($file_tmp, $file_path)) {
        // Update the user's profile picture in the session
        $_SESSION['profile_picture'] = $file_path;
        
        // Update the user's profile picture in the database
        // TODO: Perform the necessary database update here
        
        // Display a success message
        $success_message = 'Profile picture updated successfully.';
      } else {
        // Failed to move the uploaded file
        $error_message = 'Error uploading the file. Please try again.';
      }
    }
  } else {
    // No file uploaded
    $error_message = 'No file uploaded.';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Change Profile Picture</title>
  <!-- Add your CSS styling here -->
  <style>
    .error {
      color: red;
    }

    .success {
      color: green;
    }
  </style>
</head>
<body>
  <h1>Change Profile Picture</h1>

  <?php if (isset($error_message)): ?>
    <div class="error"><?php echo $error_message; ?></div>
  <?php endif; ?>

  <?php if (isset($success_message)): ?>
    <div class="success"><?php echo $success_message; ?></div>
  <?php endif; ?>

  <form method="post" enctype="multipart/form-data" id="profileForm">
    <input type="file" name="profile_picture" accept="image/*">
    <button type="submit" name="submit">Upload</button>
    <a href="user.php">Home</a>
  </form>

  <script>
    // JavaScript code for updating the user profile picture without page refresh
    document.getElementById('profileForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the form from submitting normally

      var form = event.target;
      var formData = new FormData(form);

      var xhr = new XMLHttpRequest();
      xhr.open('POST', form.action, true);

      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          var response = xhr.responseText;
          var messageContainer = document.createElement('div');

          if (response.includes('success')) {
            messageContainer.className = 'success';
          } else {
            messageContainer.className = 'error';
          }

          messageContainer.innerHTML = response;
          form.appendChild(messageContainer);
        }
      };

      xhr.send(formData);
    });
  </script>
</body>
</html>

