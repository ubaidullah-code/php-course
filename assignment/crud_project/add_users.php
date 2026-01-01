<?php
include './config/databaseConnection.php';
?>

<?php
$success = [];
$error = []  ;
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['handleSubmit'])) {

  $success['username'] = $_POST['username'] ?? '';
  $success['pass']  = $_POST['userpass'] ?? "";
  if ($success['username']=== "") {
    $error['username'] = 'Please fill the User Name';
  }
  if ($success['pass']=== "") {
    $error['userpass'] = 'Please fill the Password ';
  }

  if(empty($error)){
    $sqlQuery = "INSERT INTO users (userName , password) VALUES (?,?)";
    $result = $conn->prepare($sqlQuery);
    $result->bind_param('ss', $success['username'], $success['pass']);
    $result->execute();
    echo 'user Successfully added';
    header("Location: add_users.php?success=1");
    exit;
  }
}


?>


<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Form</title>
  <link rel="stylesheet" href="style.css">
  <style>
    p {
      color: red;
    }
  </style>

</head>

<body>
  <h1>
    Register Form
  </h1>
  <form action="" method="post" class="main">
    <label>
      User Name
      <input type="text" name="username" placeholder="Please Enter Your Name">
    </label>
    <p><?= $error["username"] ?? '' ?></p>
    <label>
      Password
      <input type="password" name="userpass" placeholder="Please Enter Your Password">
    </label>
    <p><?= $error['userpass'] ?? "" ?></p>
    <div>
      <button class="innerButt" type="submit" name="handleSubmit">Sign up</button>
    </div>
  </form>
  <div>
    <div>
      <form action="" method="post">

        <button class="butt" type="submit" name="allUser">All users</button>
      </form>
    </div>
  </div>

  <?php
  if (isset($_POST['allUser'])) {
    header('location: users.php');
    exit;
  }
  ?>
</body>

</html>