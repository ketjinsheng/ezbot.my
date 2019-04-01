

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="profile.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

    <title>Profile</title>

    <!-- <script>
     var i = 0,images = [
       "../logos/BAT.png",
       "../logos/BCH.png",
       "../logos/BITCOIN.png",
       "../logos/BYTE.png",
       "../logos/CND.png",
       "../logos/DECRED.png",
       "../logos/ETH.png",
       "../logos/ICON.png",
       "../logos/IOTA.png",
       "../logos/LITE.png",
       "../logos/MANA.png",
       "../logos/MONERO.png",
       "../logos/NANO.png",
       "../logos/NEM.png",
       "../logos/OMG.png",
       "../logos/POPULOUS.png",
       "../logos/PROXIMA-X.png",
       "../logos/PUNDIX.png",
       "../logos/RIPPLE.png",
       "../logos/STELLAR.png",
       "../logos/STRATIS.png",
       "../logos/TRON.png",
       "../logos/ZIL.png",
       "../logos/ZRX.png",
     ]
    </script> -->

</head>
<body>

        <nav>
            <div class="title-blank">
                
                <h1 class="control-bot"> 
                <a href="home.php" class="bot-manager">Bot Manager</a>
                </h1>
                
                <div class="control-logout">
                <a href="logout.php" class="logout">Logout</a>
                </div>
                
                <div class="control-dashboard">
                <a href="home.php" class="dashboard">Dashboard</a>
                </div>
                
                <div class="control-history">
                <a href="history.php" class="history">History</a>
                </div>
                
                <div class="control-profile">
                <a href="profile.php" class="profile">Profile</a>
                </div>
                
            </div>
                
                
        </nav>
        
<div class="c1">
    <div class="c2">
          <!-- <div class="pa">
            <img src="logos/ADA.png" alt="" id="slide" width="200" height="100">
            <button onclick="mySlide('');"><</button>
            <button onclick="mySlide('');">></button>
          </div> -->
            <table class="pft"> 
         
              <tr>       
                <td> Email </td>
                <td><span id="email"></span></td>
              </tr> 

              <tr>
                <td>Username </td>
                <td><span id="username"></span></td>
              </tr>

                <tr>
                  <h1 id="apikey"></h1>               
                </tr>
            </table>
       </div>
</div>

  <script>
      $(document).ready(function() {
        $.ajax({
          url: 'http://ec2-13-251-157-200.ap-southeast-1.compute.amazonaws.com:8004/api/user/getinfo',
          type: 'POST',
          data: '{"email" : "jansonketjin@gmail.com"}',
          dataType: 'json',
          success: function(data) {
            document.getElementById("email").innerHTML=data.data.user.email;
            document.getElementById("username").innerHTML=data.data.user.username;
            document.getElementById("apikey").innerHTML=data.data.user.apikey;
            // console.log(data);
            // console.log(data.data.user.email);
          }
        });  
      })
  </script>

</body>
</html>