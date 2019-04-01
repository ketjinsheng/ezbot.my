

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>LOGIN PAGE</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="login.css">
<meta charset="UTF-8">
</head>
<body>
<div class="heading">
  <div class="img">
  <a href="index.php"><img src="obottt.png" alt="logo" class="logo"></a>
 </div>
  <div class="button">
  <a href="index.php" class="setting">Home</a>
   <a href="login.php" class="setting">Login</a>
	 <a href="signup.html" class="setting">Sign Up</a>
	 <a href="about-us.html" class="setting">About Us</a>
  
  </div>
</div>

 
<div class="container1">
  <div class="container2">

	<form>
  <img src="person.png" alt="logo" class="login-logo">
  
  <!-- <div class="form-group">
           
           <input type="text" name="username" class="form-control style2" placeholder="Username">
         
       </div>     -->
            <div class="form-group">
           
                <input type="text" name="email" id="a" class="form-control style2" placeholder="Email">
							
            </div>    
            <div class="form-group">

                <input type="password" name="password" id="b" class="form-control style2" placeholder="Password">
                
            </div>
            <div class="form-group">
               <button type="submit" onclick="login()">Login</button>
            </div>
            <p>Don't have an account? <a href="signup.html">Sign up now</a>.</p>
        </form>
  </div>
</div>


<script>
    function login(){
      console.log("In signup")
      event.preventDefault();
      var eml = document.getElementById("a").value;
      var pass = document.getElementById("b").value; 
      var xhttp = new XMLHttpRequest();
      console.log(eml,pass)

      xhttp.onreadystatechange = function() {
       console.log(xhttp.readyState, xhttp.status) 
       var resp=JSON.parse(xhttp.responseText);
       console.log(resp)

       if (xhttp.readyState == 4 && xhttp.status == 200) { 
           
      //  console.log(this.responseText)
        // sessionStorage.setItem(email, name);  
        var resp=JSON.parse(xhttp.responseText);
    
          if(resp.data.status == true){
            window.location="profile.php";
          }else if  (resp.msg!=="sucess"){
            alert ("failed");
          }
  
       }
    }
    xhttp.open("POST", "http://ec2-13-251-157-200.ap-southeast-1.compute.amazonaws.com:8004/api/user/login", true);
    xhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8","A");
    var reqObject = {
      email : eml,
      password : pass
    }

    xhttp.send(JSON.stringify(reqObject)); 
}
</script>

<div class="end">
  <img src="symbols6.png" alt="symbols" class="symbol6">
</div>
</body>
</html>