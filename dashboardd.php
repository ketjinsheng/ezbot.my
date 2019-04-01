<!DOCTYPE html>


<head>
    <link rel="stylesheet" href="dashboard.scss">
    <html lang='en-US'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Koinage.cc</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="tt.js"></script>
</head>

<body class="html">
    <div class="header1">
        <div class="language">
            <div></div>
            <p>Language:</p>
            <p>English | Mandarin</p>
        </div>
        <p id = "wallet"></p>
        <div class="second">
            <div>
                <img src="logo.png" alt="Koinagewallet">
            </div>
            <div>
                <a class="ss2" href="fordevelopers.html">FOR DEVELOPERS</a>
                <a class="ss2" href="support.html">SUPPORT</a>
                <a class="ss2" href="security.html">SECURITY</a>
            </div>
            <div>
                <p class="ss1-1">WALLET</p>
                <a class="ss1" onclick="logout()">LOGOUT</a>
            </div>
        </div>
    </div>
    <div class="hidden" >
        <div id="eth" >
            <p id = "eth_ad"></p>
            <p id = "eth_ap"></p>
            <p id = "eth_tp"></p>
        </div> 
        <div id="ltc">
            <p id = "ltc_ad"></p>
            <p id = "ltc_ap"></p>
            <p id = "ltc_tp"></p>
        </div> 
        <div id="btc">
            <p id = "btc_ad"></p>
            <p id = "btc_ap"></p>
            <p id = "btc_tp"></p>
        </div> 
        <div id="bch">
            <p id = "bch_ad"></p>
            <p id = "bch_ap"></p>
            <p id = "bch_tp"></p>
        </div> 
        <div id="usdt">
            <p id = "usdt_ad"></p>
            <p id = "usdt_ap"></p>
            <p id = "usdt_tp"></p>
        </div> 
        <div id="je">
            <p id = "je_ad"></p>
            <p id = "je_ap"></p>
            <p id = "je_tp"></p>
        </div> 
    </div>
    <div> 
        <script>$(document).ready(function(){wallet();});</script>
        
    </div> 
    <div class="container1">
        <div class="con-1">
            <div>
                <h2>Show Balance</h2>
            </div>
            <div>
                <form class="con1-2">Select your favorite PAIR:
                    <select id="mySelect">
                        <option value="" selected></option>
                        <option value="BCH" id="show_bch">BCH</option>
                        <option value="BTC" id="show_btc">BTC</option>
                        <option value="USDT" id="show_usdt">USDT</option>
                        <option value="ETH" id="show_eth">ETH</option>
                        <option value="JE" id="show_je">JE</option>
                        <option value="LTC" id="show_ltc">LTC</option>
                    </select>
                </form>
            </div>
            <div class="con1-3">
                <button onclick="myFunction()" class="dropbtn" ><b>show balance</b></button>
            </div>
        </div>
        <div class="con-2">
            <div>
                <h2>Create Wallet</h2>
            </div>
            <div class="con2-2">
                <form>Select your PAIR for create wallet:
                    <select id="mySelect1">
                        <option value="" selected></option>
                        <option value="BCH" id="create_bch">BCH</option>
                        <option value="OMNI" id="create_btc">BTC</option>
                        <option value="OMNI" id="create_usdt">USDT</option>
                        <option value="ETH" id="create_eth">ETH</option>
                        <option value="ETH" id="create_je">JE</option>
                        <option value="LTC" id="create_ltc">LTC</option>
                    </select>
                </form>
            </div>
            <div class="con2-3">
                <button onclick="myFunction1()" class="dropbtn" ><b>create wallet</b></button>
            </div>
        </div>
    </div>
    <div class="show1">
            <h2>Your Address</h2>
            <p id="change">----<p>
    </div>
    <div class="show2">
        <h2>Your API Key</h2>
        <p id="change1">----</p>
    </div>
    <div class="container2">
        <div>
            <h2 id = "total_balance">_________</h2>
            <p>Total Balance</p>
        </div>
        <div>
            <h2 id = "pending_withdraw">_________</h2>
            <p>Pending Withdraw</p>
        </div>
    </div>
    <div class="container3">
        <div class="con3-1">
            <form class="con3-1-1">
                <h1>WithDraw</h1>
                <label for="to_address"></label>
                <input class="con3-input" type="text" placeholder="To Address" name="to_address" id="a" required><br><br>
                <label for="amounts"></label>
                <input class="con3-input" type="text" placeholder="Enter Amounts" name="amounts" id="b" required><br><br>
                <p id="k" >
                <p id="l" >
                <p id="m" >
            </form>
            <div class="con3-1-2">
                <button type="submit" onclick="withdraw()" id="withdraw">Send</button>
            </div>
        </div>
    </div>
    <div class="end">
        <img src="symbols.png" alt="symbols" class="symbols">
    </div>
    <div class="end2">
        <h5>Copyright Ⓡ 2019 Koinage.com All rights reserved.</h5>
    </div>
    <script>
        var email = sessionStorage.getItem("email");
        // console.log(url1)
        var url = o;
        function wallet(){
        var data = null;
        var xhr = new XMLHttpRequest();
        var t ="";
        var wallet=["ltc","bch","omni","eth"];
        var user_w=[];
        var user_rw=[];

        // var eth = sessionStorage.getItem("ETH");
        xhr.addEventListener("readystatechange", function () {
        if (email==null) {
            window.location="index.php";
            alert("Please Log In Your Account");
        }
        else if (this.readyState === 4) {
            t=JSON.parse(this.responseText);
            
            t=t.data;
            
            for (k=0;k<t.length;k++){
                if(t[k]['type'].toLowerCase()=="eth"){
                    document.getElementById("eth_ap").innerHTML = t[k].apiKey;
                    document.getElementById("eth_ad").innerHTML = t[k].address;
                    document.getElementById("eth_tp").innerHTML = t[k].type.toLowerCase();
                    document.getElementById("eth").style.display = "inline-block" ;
                    document.getElementById("je_ap").innerHTML = t[k].apiKey;
                    document.getElementById("je_ad").innerHTML = t[k].address;
                    document.getElementById("je_tp").innerHTML = "je";
                    document.getElementById("je").style.display = "inline-block" ;
                    user_w.push("eth");
                }
                else if(t[k]['type'].toLowerCase()=="ltc"){
                    document.getElementById("ltc_ap").innerHTML = t[k].apiKey;
                    document.getElementById("ltc_ad").innerHTML = t[k].address;
                    document.getElementById("ltc_tp").innerHTML = t[k].type.toLowerCase();
                    document.getElementById("ltc").style.display = "inline-block" ;
                    user_w.push("ltc");
                }else if(t[k]['type'].toLowerCase()=="bch"){
                    document.getElementById("bch_ap").innerHTML = t[k].apiKey;
                    document.getElementById("bch_ad").innerHTML = t[k].address;
                    document.getElementById("bch_tp").innerHTML = t[k].type.toLowerCase();
                    document.getElementById("bch").style.display = "inline-block" ;
                    user_w.push("bch");
                }
                else if(t[k]['type'].toLowerCase()=="omni"){
                    document.getElementById("btc_ap").innerHTML = t[k].apiKey;
                    document.getElementById("btc_ad").innerHTML = t[k].address;
                    document.getElementById("btc_tp").innerHTML = "btc";
                    document.getElementById("btc").style.display = "inline-block" ;
                    document.getElementById("usdt_ap").innerHTML = t[k].apiKey;
                    document.getElementById("usdt_ad").innerHTML = t[k].address;
                    document.getElementById("usdt_tp").innerHTML = "usdt";
                    document.getElementById("usdt").style.display = "inline-block" ;
                    user_w.push("omni");
                }
                // document.getElementById("ETH").innerHTML=t[k].address
                // sessionStorage.setItem.setItem("ETH",t[k].address)
                // console.log(t[k].address)
                }
                // console.log(user_w[0])
                // if (user_w[0] in wallet ){
                //     alert("exist");
                //     }
                // for (i =0;i<wallet.length;i++){
                for (j=0;j<wallet.length;j++){
                    if (user_w.includes(wallet[j]) ){
                        console.log(wallet[j])
                        if (wallet[j].toLowerCase()=="omni"){
                            document.getElementById("create_btc").style.visibility="hidden"
                            document.getElementById("create_usdt").style.visibility="hidden"
                        }else if (wallet[j].toLowerCase()=="eth"){
                            document.getElementById("create_je").style.visibility="hidden"
                            document.getElementById("create_eth").style.visibility="hidden"
                        }
                        else{
                            document.getElementById("create_"+wallet[j]).style.visibility="hidden"
                        }
                    }else{
                        console.log(wallet[j] +" not in the list")
                        if (wallet[j].toLowerCase()=="omni"){
                            document.getElementById("show_btc").style.visibility="hidden"
                            document.getElementById("show_usdt").style.visibility="hidden"
                        }else if (wallet[j].toLowerCase()=="eth"){
                            document.getElementById("show_je").style.visibility="hidden"
                            document.getElementById("show_eth").style.visibility="hidden"
                        }
                        else{
                            document.getElementById("show_"+wallet[j]).style.visibility="hidden"
                        }
                    }
                }
                // document.getElementById("bbb").style.visibility="hidden"
                // }
                
            // document.getElementById("demo").innerHTML = t[0].address;
            }
        });
        xhr.open("GET", url+"account?label="+email);
        // xhr.open("GET", url+"account?label=kra@gmail.com");
        xhr.send(data);
        }
        function myf(i){
            if (i=="BTC"){
                document.getElementById("change").innerText  = document.getElementById("btc_ad").innerText;
                document.getElementById("change1").innerText  = document.getElementById("btc_ap").innerText;
                j=document.getElementById("btc_ap").innerText;
                checkbalance(j,i)
                document.getElementById("withdraw").style.visibility  = "visible";
                document.getElementById("k").value = document.getElementById("btc_ad").innerText;
                document.getElementById("l").value = document.getElementById("btc_ap").innerText;
                document.getElementById("m").value = i;
            }else if (i=="USDT"){
                document.getElementById("change").innerText  = document.getElementById("usdt_ad").innerText;
                document.getElementById("change1").innerText  = document.getElementById("usdt_ap").innerText;
                j=document.getElementById("usdt_ap").innerText;
                checkbalance(j,i)
                document.getElementById("withdraw").style.visibility  = "visible";
                document.getElementById("k").value = document.getElementById("usdt_ad").innerText;
                document.getElementById("l").value = document.getElementById("usdt_ap").innerText;
                document.getElementById("m").value = i;
            }else if (i=="BCH"){
                document.getElementById("change").innerText  = document.getElementById("bch_ad").innerText;
                document.getElementById("change1").innerText  = document.getElementById("bch_ap").innerText;
                j=document.getElementById("bch_ap").innerText;
                checkbalance(j,i)
                document.getElementById("withdraw").style.visibility  = "visible";
                document.getElementById("k").value = document.getElementById("bch_ad").innerText;
                document.getElementById("l").value = document.getElementById("bch_ap").innerText;
                document.getElementById("m").value = i;
            }
            else if (i=="LTC"){
                document.getElementById("change").innerHTML = document.getElementById("ltc_ad").innerText;
                document.getElementById("change1").innerHTML = document.getElementById("ltc_ap").innerText;
                j=document.getElementById("ltc_ap").innerText;
                checkbalance(j,i)
                document.getElementById("withdraw").style.visibility  = "visible";
                document.getElementById("k").value = document.getElementById("ltc_ad").innerText;
                document.getElementById("l").value = document.getElementById("ltc_ap").innerText;
                document.getElementById("m").value = i;
            }else if (i=="ETH"){
                document.getElementById("change").innerHTML =document.getElementById("eth_ad").innerText;
                document.getElementById("change1").innerHTML =document.getElementById("eth_ap").innerText;
                j=document.getElementById("eth_ap").innerText;
                checkbalance(j,i)
                document.getElementById("withdraw").style.visibility  = "visible";
                document.getElementById("k").value = document.getElementById("eth_ad").innerText;
                document.getElementById("l").value = document.getElementById("eth_ap").innerText;
                document.getElementById("m").value = i;
            }else if (i=="JE"){
                document.getElementById("change").innerHTML =document.getElementById("je_ad").innerText;
                document.getElementById("change1").innerHTML =document.getElementById("je_ap").innerText;
                j=document.getElementById("je_ap").innerText;
                checkbalance(j,i)
                document.getElementById("withdraw").style.visibility  = "visible";
                document.getElementById("k").value = document.getElementById("je_ad").innerText;
                document.getElementById("l").value = document.getElementById("je_ap").innerText;
                document.getElementById("m").value = i;
            }
        }
        function myFunction() {
            x=document.getElementById("mySelect")
            console.log(x.value)
            myf(x.value)
        }
        function myFunction1(){
            y=document.getElementById("mySelect1")
            console.log(y.value)
            y=y.value.toLowerCase();
            var data = null;
            var xhr = new XMLHttpRequest();
            var t ="";

            // var eth = sessionStorage.getItem("ETH");
            xhr.addEventListener("readystatechange", function () {
            if (this.readyState === 4) {
                t=JSON.parse(this.responseText)
                t=t.data
            }
            });
            xhr.open("GET", url+"CreateApiKey?type="+y+"&label="+email);
            // xhr.open("GET",url+"CreateApiKey?type="+y+"&label=kra@gmail.com");
            xhr.send(data);
            location.reload();
        }
        
        function withdraw(){
            var xhttp = new XMLHttpRequest();
            var toAdd = document.getElementById("a").value;
            var amounts = document.getElementById("b").value;
            var k = document.getElementById("k").value;
            var l = document.getElementById("l").value;
            var m = document.getElementById("m").value;
            var xx = url+"Withdraw?api_key="+ l +"&from_addresses="+ k +"&to_addresses="+ toAdd +"&amounts="+ amounts +"&network="+ m;
            xhttp.onreadystatechange = function() {
                
                var resp = JSON.parse(this.responseText);
                console.log(resp)
                if (resp.data.txStatus == "success") {
                    alert("success");
                }else if (resp.data.txStatus == "failed") {
                    alert("failed");
                }
            }
            xhttp.open("GET", xx, true);
            xhttp.send();
        }
        function checkbalance(i,j){
            var data = null;
            var xhr = new XMLHttpRequest();
            var t ="";

            // var eth = sessionStorage.getItem("ETH");
            xhr.addEventListener("readystatechange", function () {
            if (this.readyState === 4) {
                t=JSON.parse(this.responseText)
                t=t.data
                
                // console.log(t.data.hotwalletBalance)
                
                document.getElementById("total_balance").innerHTML =t.totalBalance.toFixed(8);
                document.getElementById("pending_withdraw").innerHTML =t.pendingWithdraw.toFixed(8);
                // console.log(t.pending_withdraw)
            }
            });
            // xhr.open("GET", "http://1.32.63.61:8051/api/v1/wallet/CreateApiKey?type="+y+"&label=kelvinyou2@yahoo.com");
            xhr.open("POST", url+"summary?api_key="+i+"&network="+j);
            xhr.send(data);
        }
        function logout() {
            sessionStorage.removeItem('email');
            window.location="index.php";
        }
    </script>
</body>
</html>
