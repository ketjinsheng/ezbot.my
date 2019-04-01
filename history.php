<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
    
<head>
    <link rel="stylesheet" href="history.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div class="dates">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script>
            $( function() {
              $( "#datepicker" ).datepicker();
            } );
    </script>

<script>
        $( function() {
          $( "#tdatepicker" ).datepicker();
        } );
        </script>

    <title>History</title>
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

      <div class="control-to">
        <p>To: <input type="text" id="datepicker" class="to"></p>
    </div>    

        <div class="control-from">
        <p>From: <input type="text" id="tdatepicker" class="from"></p>
    </div>


    <div class="control-table">
    <table class="trading">
        <tr>
            <th>A</th>
            <th>B</th>
            <th>C</th>
            <th>D</th>
            <th>E</th>
        </tr>

        <tr>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
            <td>E</td>
        </tr>

        <tr>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
            <td>E</td>
        </tr>

        <tr>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
            <td>E</td>
        </tr>
    </table>
  </div>




</body>

</html>