<!-- <?php
    require 'process.php';
?> -->
<?php
    $data = [];
    $errors = [];
  if($_SERVER["REQUEST_METHOD"] === "POST")
  {
      $data['firstname'] = $_POST['firstname'] ?? "";
      $data['email'] = $_POST['email'] ?? "";
      $data['website'] = $_POST['website'] ?? "";
      $data['comment'] = $_POST['comment'] ?? "";
      $data['gender'] = $_POST['gender'] ?? "";
      if(empty($data['firstname'])){
        $errors['firstname'] = 'please fill the firstname';
      }
      if(empty($data['email'])){
        $errors['email'] = 'please fill the email';
      }
      if(empty($data['website'])){
        $errors['website'] = 'please fill the website';
      }
      if(empty($data['gender'])){
        $errors['gender'] = 'please select your gender';
      }
}
?>
<html>
    <head>
        <title>
            Form Validation
        </title>
        <style>
            p{
                color: red;
            }
        </style>
    </head>
    <body>
        <h1>Form Validation</h1>
        <form method="post">
            <label>
                First Name:
                <input value="<?= htmlspecialchars($data['firstname']?? "")?>" type="text" name=firstname>
                <p><?= $errors['firstname'] ?? '' ?></p>
            </label>
                <label>
                E-mail:
                <input value="<?= htmlspecialchars($data['email']?? "")?>" type="email" name=email>
                <p><?= $errors['email'] ?? '' ?></p>
            </label>
            <label>
                Website:
                <input type="text" name=website value="<?= htmlspecialchars($data['website']?? "")?>">
                <p><?= $errors['website']??""?></p>
            </label>
            <label>
                Comment:
                <textarea name="comment"><?= htmlspecialchars($data['comment']?? "")?></textarea>
            </label>
            <br>
            <label>
                Gender:
                <input type="radio" name="gender" value=female <?php if(isset($data['gender']) && $data['gender'] === "female" ) echo "checked";?> >Female
                <input type="radio" name="gender" value=male <?php if(isset($data['gender']) && $data['gender'] === "male" ) echo "checked";?>  >Male
                <input type="radio" name="gender" value=other <?php if(isset($data['gender']) && $data['gender'] === "other" ) echo "checked";?>  >Other
                <p><?=$errors['gender'] ?? "" ?></p>
            </label>
            <button type=submit name=handlesubmit>Submit</button>
        </form>
        <div>
            <h1>result of form submit</h1>
            <?php
            if(isset($_POST['handlesubmit']))
            {
                echo $data['firstname']."<br>";
                echo $data['email']."<br>";
                echo $data['website']."<br>";
                echo $data['comment']."<br>";
                echo $data['gender']."<br>";
            }
            ?>
        </div>
    </body>
</html>