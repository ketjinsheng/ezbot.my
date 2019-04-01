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
<link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <title>Bot Manager</title>
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


   <button onclick="document.getElementById('id01').style.display='block'" class="new">+</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
     <form action="" method="post" class="modal-content">
        <div class="control-newbot">
             <h1 class="newbot">New Bot</h1>
        </div> <br> <br>

       

        <div class="control-botname">
            <h2 class="botname">Bot Name 
            <input type="text" placeholder="Enter name" class="input-botname">
            </h2>
        </div> <br>

       

        <div class="control-indicator">
            <h2 class="indicator">Indicator</h2>
            <input type="radio" checked="checked" name="radio" class="radio">normal
            <input type="radio" checked="checked" name="radio" class="radio">normal
            <input type="radio" checked="checked" name="radio" class="radio">normal
            <input type="radio" checked="checked" name="radio" class="radio">normal
        </div>
        <br>

      
        <div class="control-normalsetting">
            <h2 class="normalsetting">Normal Setting</h2>
        </div> 

        <div class="control1">
        <div class="control-buyzone">
            <h2 class="buyzone">Buy Zone
                <input type="number" placeholder="Entry Value" class="input-buyzone">
            </h2>
        </div><br><br>

        <div class="control-amount">
            <h2 class="amount">Amount
                <input type="number" step="0.01" placeholder="0.00" class="input-amount">
            </h2>
        </div><br>

        <div class="control-stoploss">
            <h2 class="stoploss">Stop Loss
                <input type="number" placeholder="Stop Loss" class="input-stoploss">
            </h2>
        </div>

        <div class="control-target-1">
            <h2 class="target-1">Target 1 
                <input type="number" placeholder="First sell target" class="input-target-1">
            </h2>
        </div><br>

        <div class="control-target-2">
            <h2 class="target-2">Target 2
                <input type="number" placeholder="Second sell target" class="input-target-2">
            </h2>
        </div><br>
    </div>


        <div class="control-exchange">
           <h2 class="exchange">Exchange :
        </div>
            <br>
             
        <div class="control-bar-exchange">
        <select class="bar-exchange">
            <option value="BINANCE" >BINANCE</option>
        </select>  
        </h2>  
        </div>

        <div class="control-API-KEY">
            <input type="text" class="API-KEY" required="required" placeholder="API KEY">
        </div><br>
           
        <div class="control-SECRET-KEY">
            <input type="text" class="SECRET-KEY" required="required" placeholder="SECRET KEY">
        </div><br>

        <div class="control-TRADING-PAIR">
            <input type="text" class="TRADING-PAIR" required="required" placeholder="TRADING PAIR">
        </div><br>

        <div class="control-active">
        <input type="checkbox" checked="checked" name="active" class="active"> Active
        </div><br>

        <div class="control-button">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="submitbtn">Submit</button>
        </div><br>

    </form>

</div>
</div>


</body>
</html>