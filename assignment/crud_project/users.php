<?php
include './config/databaseConnection.php';
?>

<?php
  $sqlQuery = "SELECT * FROM users";
  $result = $conn->query($sqlQuery);
if($_SERVER['REQUEST_METHOD'] === "POST")
{
  $sqlQuery = "SELECT * FROM users";
  $result = $conn->query($sqlQuery);

}

?>
<?php 
$openModal = false;
$values = [];
 $editId;
if(isset($_POST['handlEdit']))
  {
    $openModal = true;
  $editId = $_POST['edit_user'];
  setcookie("editId",$editId);
  $sqlQuery = "SELECT * FROM users WHERE user_id = $editId";
    $result = $conn->query($sqlQuery);
    if ($result) {
     while ($user = $result->fetch_assoc()) {
     $values['username'] = $user['userName'];
     $values['pass']  = $user['password'];
    

     }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Users</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
    }

    h1 {
      box-shadow: 1px 0px 8px black;
      padding: 6px 4px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 18px;
    }

    table thead th {
      color: white;
    }


    th,
    td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: left;
    }

    thead tr>th {
      background-color: darkcyan;
    }

    tbody tr:hover {
      background-color: #F6F0D7;
    }
    tbody   div{
      display: flex;
      align-items: center;
      gap: 4px;
      
    } 
    tbody  div button , .anotherPage > button{
      padding: 5px 8px;
      border: 1px solid;
      border-radius: 6px;
      font-size: 18px;
    }
    tbody tr div form > button:first-child{
      background-color: purple;
      color: white;
    }


    .anotherPage>button {
      margin: 10px 0px 0px 10px;
      background-color: purple;
      color: white;

    }

    .model {
      display: flex;
      flex-direction: column;
      padding: 10px ;
      border-radius: 8px;
      gap: 5px;
      width: 40%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      visibility: hidden;
      box-shadow: 2px 2px 8px black;

    }

    label {
      display: flex;
      flex-direction: column;
      width: 100%;
      font-size: 18px;
      gap: 8px;
    }

    input {
      font-size: 18px;
      border-radius: 7px;
      border: 1px solid;
      padding: 6px 3px;
    }
    
    .innerButt {
      width: 100%;
      border-radius: 7px;
      background-color: red;
      padding: 5px 8px;
      border:1px solid;
      color: white;
       font-size: 18px;
       background-color:tomato;
    }
    .overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  background: rgba(0, 0, 0, 0.4);
  visibility: hidden;
  z-index: 4;
}

.model {
  z-index: 5;
  background: white;
}

  </style>
</head>

<body>
  <h1>All Users</h1>

  <table>
    <thead>
      <tr>
        <th>User Name</th>
        <th>Created At</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result->num_rows > 0) {
        while ($user = $result->fetch_assoc()) {
          echo '<tr>';
          echo  "<td>{$user['userName']}</td>";
          echo "<td>{$user['created_at']}</td>";
          echo "<td>
          <div>
          
          <form method=post class=delete action=deleteQuery.php>
          <button name=handleDelete>Delete</button>
          <input type=hidden name=delete_user value='{$user['user_id']}'/>
          </form>
          <form method=post >
          <input type=hidden name=edit_user value='{$user['user_id']}'/>
          <button type='submit' name=handlEdit  >Edit</button>
          </form>

          </div>
          </td>";
          echo '</tr>';
        }
      } else {
        echo "<tr><td style='text-align: center' colspan='3'>No users found</td></tr>";
      }
      ?>

    </tbody>
  </table>
  <form class="anotherPage" action="add_users.php" method="post">
    <button>Add users</button>
  </form>

  <form action=editQuery.php method="post" class="model">
    <h2 style="text-align: center;">Edit Form</h2>
    <label>
      User Name
      <input type="text" name="username" value="<?= htmlspecialchars($values['username']?? "") ?>" placeholder="Please Enter Your Name">
    </label>
   
    <label>
      Password
      <input type="text"value="<?= htmlspecialchars($values['pass']?? "") ?>" name="userpass" placeholder="Please Enter Your Password">
    </label>
    
    <div>
      <button class="innerButt" type="submit" name="handleSubmit">Sign up</button>
    </div>
  </form>
  <div class="overlay"></div>
<?php if ($openModal): ?>
<script>
  window.onload = function () {
    document.querySelector(".model").style.visibility = "visible";
    document.querySelector(".overlay").style.visibility = "visible";
  };
</script>
<?php endif; ?>

<script>
  // Close modal when clicking overlay
  document.querySelector(".overlay").addEventListener("click", () => {
    document.querySelector(".model").style.visibility = "hidden";
    document.querySelector(".overlay").style.visibility = "hidden";
    // window.location.reload();
  });
</script>



</body>

</html>