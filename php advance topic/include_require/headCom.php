<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Header Example</title>

  <!-- Internal CSS -->
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #0d6efd;
      color: white;
      padding: 15px 40px;
    }

    .header-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
    }

    nav ul li a {
      text-decoration: none;
      color: white;
      font-size: 16px;
      transition: color 0.3s;
    }

    nav ul li a:hover {
      color: #ffd700;
    }
  </style>
</head>

<body>

  <header>
    <div class="header-container">
      <div class="logo">MyWebsite</div>

      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
    <?php
      $num1 = 50;
      $name = "abdullah";

    ?>
</body>
</html>
