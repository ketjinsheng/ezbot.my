<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="signup.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
  
</head>

<?php
// include('db_config.php')
// connect to the database

$servername = "localhost";
$username = "kk";
$password = "kk211299";
$dbname = "jedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id, username, password FROM EZ";
$result = $conn->query($sql);

//1. get value from input
$uservalue=$_GET['username'];
$passwordvalue=$_GET['password'];


echo $_GET['username'];
echo $_GET['password'];
//2 pass value to DB

$query = "INSERT INTO EZ (username, password) 
          VALUES('$uservalue','$passwordvalue')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - username: " . $row["username"]. " " . $row["password"]. "<br>";
  }
} else {
  echo "0 results";
}
//3 check if username != '', then pass value to DB



$conn->close();

?>
<body>
<div class="heading">
  <div class="img">
    <img src="obot.png" alt="logo" class="logo">
    <img src="textwhite.png" alt="logo" class="logo1">
 </div>
  <div class="button">
   <a href="index.php" class="setting1">Login</a>
   <a href="signup.php" class="setting2">Sign Up</a>
  </div>
</div>
<div class="container1">
<div class="container2">  
    
    <form method="get" action="">
          <h1>Sign Up</h1><br>
          <div class="input-group">
           <label for="username">Username</label>
          <input type="text" class="username" placeholder="Enter Username" name="username" value="<?php echo $username;?>" >
          <span class="error">* <?php echo $nameErr;?></span>
         
        </div>
        <div class="input-group">
          <label for="psw">Password</label>
          <input type="password" class="psw" placeholder="Enter Password" name="password" >
          <span class="error">* <?php echo $nameErr;?></span>
          </div>
         <div class="input-group">
            <button type="submit"class="signupbtn" name="reg_user">Sign Up</button>
        </div>
        
        <p>Already a member? <a href="login.php">Sign in</a> </p>

  	 
      </form>
    </div>
  </div>
    
<div class="end">
  <img src="symbols6.png" alt="symbols" class="symbol6">
</div>
</body>
</html>

