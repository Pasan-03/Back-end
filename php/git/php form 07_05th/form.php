<!DOCTYPE html>
<html>
<head>
  <title>Form Example</title>
  <style>
    /* Add a background blended with two colors */
   .form-container {
      background-image: linear-gradient(to bottom, #f0f0f0, #e0e0e0);
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
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
      <label for="address">Address:</label>
      <textarea id="address" name="address"></textarea><br><br>
      <input type="submit" value="Submit">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "You entered: <br>";
        echo "Name: $name (text) <br>";
        echo "Age: $age (integer) <br>";
        echo "Height: $height (float) <br>";
        echo "Address: $address (text) <br>";
      }
   ?>
   <?php
  // PHP code to process the form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = (int) $_POST['age'];
    $height = (float) $_POST['height'];
    $address = $_POST['address'];
  }
?>
  </div>
</body>
</html>