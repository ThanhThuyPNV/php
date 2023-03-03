<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
 
<?php
const REQUIRED_MSG = "is required";
 
// định nghĩa các biến và set giá trị mặc định là blank
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
 
// xác thực form bằng PHP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name " . REQUIRED_MSG;
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
   
  if (empty($_POST["email"])) {
    $emailErr = "Email " . REQUIRED_MSG;
  } else {
    if (!preg_match("/^[a-zA-Z][\\w-]+@([\\w]+\\.[\\w]+
          |[\\w]+\\.[\\w]{2,}\\.[\\w]{2,})$/", $email)) {
      $emailErr = "Invalid email format"; 
    }
  }
     
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*
          [-a-z0-9+&@#\/%=~_|]/i", $website)) {
      $websiteErr = "Invalid URL"; 
    }
  }
 
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
 
  if (empty($_POST["gender"])) {
    $genderErr = "Gender " . REQUIRED_MSG;
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
 
<h2>Ví dụ Validate Form trong PHP</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <table>
    <tr>
      <td>Name:</td>
      <td><input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
      </td>
    </tr>
    <tr>
      <td>E-mail:</td>
      <td><input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
      </td>
    </tr>
    <tr>
      <td>Website:</td>
      <td><input type="text" name="website">
        <span class="error"><?php echo $websiteErr;?></span>
      </td>
    </tr>
    <tr>
      <td>Comment:</td>
      <td><textarea name="comment" rows="5" cols="40"></textarea></td>
    </tr>
    <tr>
      <td>Gender:</td>
      <td>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr;?></span>
      </td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="submit" value="Submit"></td>
    </tr>
  </table>
</form>
 
<?php
echo "<h2>Thông tin bạn đã nhập:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
 
</body>
</html>