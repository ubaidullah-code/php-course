<?php
include './config/databaseConnection.php';
?>

<?php
  $sqlQuery = "SELECT * FROM users";
$result = $conn->query($sqlQuery);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Users</title>
  <link rel="stylesheet" href="./style.css">
<style>

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table thead th {
      color: white;
    }

    
    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: left;
    }
    thead tr > th {
      background-color: darkcyan;
    }
    tbody tr:hover{
      background-color: #F6F0D7;
    }
    tbody button , button{
      padding: 4px 8px ;
      margin-left: 4px;
      font-size: 18px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
    tbody button:first-child{
      background-color: red;
      color: white;
    }
    form > button{
      margin: 10px 0px 0px 10px;
      background-color: purple;
      color: white;

    }
  </style>
</head>

<body>
  <h1>All Users</h1>

  <table>
    <thead>
      <tr>
        <th >User Name</th>
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
          <form method=post action=deleteQuery.php>
          <button name=handleDelete>Delete</button>
          <button>Edit</button>
          <input type=hidden name=delete_user value='{$user['user_id']}'/>
          </form>
          </td>";
          echo '</tr>';
        }
      }
      else {
      echo "<tr><td style='text-align: center' colspan='3'>No users found</td></tr>";
    }
      ?>

    </tbody>
  </table>
  <form action="add_users.php" method="post">
    <button>Add users</button>
  </form>

</body>

</html>