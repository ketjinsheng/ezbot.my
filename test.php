<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>LOGIN PAGE</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="ezbot.css">
<meta charset="UTF-8">
</head>
<body>
<div class="heading">
  <div class="img">
    <img src="obot.png" alt="logo" class="logo">
    <img src="textwhite.png" alt="logo" class="logo1">
 </div>
  <div class="button">
   <a href="login.php" class="setting1">Login</a>
   <a href="signup.php" class="setting2">Sign Up</a>
  </div>
</div>


 
<div class="container1">
  <div class="container2">

	<form method="post" enctype="multipart/form-data" action="login.php">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>
        </form>
  </div>
</div>

<div class="end">
  <img src="symbols6.png" alt="symbols" class="symbol6">
</div>
</body>
</html>
<script>
 function Change() {
            var xhttp = new XMLHttpRequest();
            var email = document.getElementById("account").value;
            var pwd = document.getElementById("password").value;
            var oldpwd = document.getElementById("oldPwd").value;
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var resp=JSON.parse(this.responseText);
                    if (resp.msg == "success") {
                    alert("SUCCESS!");
                    window.location="http://koinage.cc/setting.html";
                    }else if (resp.msg != "success") {
                    alert("failed");
                    }
                }
                
            }
            xhttp.open("POST", "http://1.32.63.61:8491/api/v1/account/updatePwd" , true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("account="+email+"&pwd="+pwd+"&oldPwd="+oldpwd);
        }


</script>
</body>
</html>