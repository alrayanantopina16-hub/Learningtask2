<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    .login-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80vh;
    }
    .login-box {
      background: #fff;
      padding: 2rem 2.5rem;
      border-radius: 8px;
      width: 320px;
    }
    .login-box h2 {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 20px;
      text-transform: uppercase;
      color: #cc0000;
    }
    .login-box label {
      font-size: 13px;
      font-weight: bold;
      display: block;
      margin-bottom: 4px;
    }
    .login-box input {
      width: 100%;
      padding: 8px 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 16px;
    }
    .login-box button {
      width: 100%;
      padding: 10px;
      background: #cc0000;
      color: #fff;
      font-size: 14px;
      font-weight: bold;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .login-box button:hover { background: #aa0000; }
    .error {
      color: #cc0000;
      font-size: 13px;
      margin-bottom: 12px;
    }
  </style>
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

  <div class="login-wrapper">
    <div class="login-box">
      <h2>Login</h2>

      <?php
        // Show error if login failed
        if (isset($_GET['error']) && $_GET['error'] == 1) {
          echo '<p class="error">Login failed. Incorrect username or password.</p>';
        }
      ?>

      <form action="login_receiver.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter username" required />

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter password" required />

        <button type="submit">Login</button>
      </form>
    </div>
  </div>

</body>
</html>