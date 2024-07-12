<!DOCTYPE html>
<html>
<head>
  <title>Form Example</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="form-container">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"><br><br>
      <label for="age">Age:</label>
      <input type="number" id="age" name="age"><br><br>
      <label for="height">Height:</label>
      <input type="number" id="height" name="height" step="0.1"><br><br>
      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email"><br><br>
      <input type="submit" value="Submit">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $age = (int) $_POST['age'];
        $height = (float) $_POST['height'];
        $email = $_POST['email'];

        echo "You entered: <br>";
        echo "Name: $name <br>";
        echo "Age: $age <br>";
        echo "Height: $height <br>";
        echo "Email Address: $email <br>";
      }
    ?>
  </div>
</body>
</html>
