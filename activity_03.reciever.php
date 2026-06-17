<?php
  // This file receives form data submitted from activity_03.post.php
  $name    = isset($_POST['name'])    ? htmlspecialchars($_POST['name'])    : '';
  $email   = isset($_POST['email'])   ? htmlspecialchars($_POST['email'])   : '';
  $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Submission Received</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="top-header"></div>
  <nav>
    <a href="index.php">Home</a>
    <a href="about-us.php">About Us</a>
    <a href="gallery.php">Gallery</a>
    <a href="activity_01.php">Activities</a>
    <a href="mission-vision.php">Mission &amp; Vision</a>
  </nav>
  <div class="content">
    <h2>Submission Received</h2>
    <div class="news-item">
      <h4>Thank you, <?php echo $name; ?>!</h4>
      <p>We received your submission. We will get back to you at <strong><?php echo $email; ?></strong> soon.</p>
      <hr class="divider">
      <p><?php echo $message; ?></p>
      <hr class="divider">
      <p><a href="index.php">Go back to Home</a></p>
    </div>
  </div>
</body>
</html>