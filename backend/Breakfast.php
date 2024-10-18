<?php
include("connectt.php");
$sql="Select * from `breakfast1` where id=5";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/x-icon" href="https://i.etsystatic.com/11979725/r/il/425b9a/1431687786/il_570xN.1431687786_w5a8.jpg">
        <title>Breakfast-Scrummy Park</title>
    </head>
    <style>
        .html {
              font-size: 62.5%;
            }

        body {
            font-family: "Poppins", sans-serif;
        }
        .background{
            background-image: url("https://wallpapercave.com/dwp2x/wp3724272.jpg");
            opacity: 100%;
            background-repeat: no-repeat;
            background-size: 140%;
        }
        .navbar{
            box-shadow: 0px 5px 10px 0px #bafbcc;
            overflow: hidden;
            width: 100%;
            background: #91dfc1;
            color: #000;
           
            height: 50px;
            font-size: 17px;
        }

        .navbar a{
            padding: 13px;
            color: black;
            text-align: center;
            text-decoration: none;
            float: left;    
        }

        .menubar{
            float: left;
            overflow: hidden;
        }

        .ddlbtn{
            font-size: 17px;  
            border: none;
            outline: none;
            padding: 14px 16px;
            background-color: inherit;
            font-family: "Poppins", sans-serif;
            margin: 0;
             color: #000;
            opacity: 0.95;
            
        }

        .navbar a:hover, .ddlbtn:hover{
            background-color: black;
            color: white;
        } 

        .ddl-items{
            padding: 13px 16px;
            background-color: #91dfc1;
            display: none;
            color: black;
            font-family:  "Poppins", sans-serif;
            position: absolute;
            box-shadow: 0 10px 13px 0 rgba(0, 0, 0, 0.5);
        }

        .ddl-items a{
            padding: 13px;
            background-color: #91dfc1;
            color: black;
            text-align: center;
            text-decoration: none;
            float: left;
        }

        .ddl-items a:hover, .ddlbtn:hover{
            color:white;
            background-color: black;
        }

        .menubar:hover .ddl-items{
            display: block;
        }
           
        table{
               background-color: rgb(164, 164, 214);
               margin-left: auto;
               margin-right: auto;
               margin-top: auto;
               border-radius: 4px;
               border-style: 2px solid black;
        }
        td{
               font-family: Italian;
               font-size: 25px;
               color: rgb(14, 14, 14); 
               padding: 3px;  
               width: 20%;
               text-align: center;               
        }
        th{
               font-size: 30px;
               color: rgb(112, 85, 85);
              
        }
        .submit{
                background-color: rgb(164, 164, 214);
                color: black;
                font-size: 20px;
                padding: 7px;
                font-family: italian;
                border-radius: 3px;
                margin-left: 680px;
        }  
        .reset{
                background-color: rgb(164, 164, 214);
                color: black;
                font-size: 20px;
                padding: 7px;
                font-family: italian;
                margin-left: 710px;
                border-radius: 3px;
        } 
        .submit:hover{
                background-color: rgb(164, 164, 214);
                color: black;
                transform: scale(1.2);
                font-size: 20px;
                padding: 7px;
                font-family: italian;
                border-radius: 3px;
                margin-left: 680px;
        }
        .reset:hover{
                background-color: rgb(164, 164, 214);
                color: black;
                transform: scale(1.2);
                font-size: 20px;
                padding: 7px;
                font-family: italian;
                margin-left: 710px;
                border-radius: 3px;
        }  
        .name{
                margin-left: auto;
                margin-right: auto;
                padding-top: 7px;
                padding-bottom: 0.1px;
                color: black;
                background-color: rgb(164,164,214);
                text-align: center;
                border: 2.5px;
                border-radius: 4px;
                width: 300px;
        } 
    </style>
    
    <body>
    <script>
        function find_total(){
            var breakfast_total = 0;
            var idly = document.getElementById("Idly");
            var dosa = document.getElementById("Dosa");
            var poori = document.getElementById("Poori");
            var chappathi = document.getElementById("Chappathi");
            var pongal = document.getElementById("Pongal");
            var vadai = document.getElementById("Vadai");
            var onion_dosa = document.getElementById("OnionDosa");
            var uthappam = document.getElementById("Uthappam");

            if(idly.checked == true){
                breakfast_total += 10*(document.getElementById("idly").value);
            }
            if(dosa.checked == true){
                breakfast_total += 20*(document.getElementById("dosa").value);
            }
            if(poori.checked == true){
                breakfast_total += 30*(document.getElementById("poori").value);
            }
            if(chappathi.checked == true){
                breakfast_total += 15*(document.getElementById("chappathi").value);
            }
            if(pongal.checked == true){
                breakfast_total += 25*(document.getElementById("pongal").value);
            }
            if(vadai.checked == true){
                breakfast_total += 8*(document.getElementById("vadai").value);
            }
            if(onion_dosa.checked == true){
                breakfast_total += 35*(document.getElementById("onionDosa").value);
            }
            if(uthappam.checked == true){
                breakfast_total += 30*(document.getElementById("uthappam").value);
            }
            document.getElementById("disp_total").innerHTML = "&#8377 "+breakfast_total;
            localStorage.setItem("amount",breakfast_total);console.log(breakfast_total);
        }

        function reset(){
            document.getElementById("idly").value = "";
            document.getElementById("dosa").value = "";
            document.getElementById("poori").value = "";
            document.getElementById("pongal").value = "";
            document.getElementById("chappathi").value = "";
            document.getElementById("onionDosa").value = "";
            document.getElementById("uthappam").value = "";
            document.getElementById("vadai").value = "";

            document.getElementById("Idly").checked = false;
            document.getElementById("Dosa").checked = false;
            document.getElementById("Poori").checked = false;
            document.getElementById("Pongal").checked = false;
            document.getElementById("Chappathi").checked = false;
            document.getElementById("OnionDosa").checked = false;
            document.getElementById("Uthappam").checked = false;
            document.getElementById("Vadai").checked = false;
            document.getElementById("disp_total").innerHTML="";
        }
    </script>

        <header>
            <div class="navbar">
                    <a href="Home.html">Home</a>
                    <a href="About.html">About</a>
                    <div class="menubar">
                        <button class="ddlbtn">Cuisine</button>
                            <div class="ddl-items">
                                <a href="Chinese.html">Chinese</a><br><hr width="100%">
                                <a href="Japanese.html">Japanese</a><br><hr width="100%">
                                <a href="Korean.html">Korean</a><br><hr width="100%">
                            </div>
                    </div>
                    <div class="menubar">
                        <button class="ddlbtn">Menu Card</button>
                            <div class="ddl-items">
                                <a href="Breakfast.html">Breakfast</a><br><hr width="100%">
                                <a href="Lunch.html">Lunch</a><br><hr width="100%">
                                <a href="Snacks.html">Snacks</a><br><hr width="100%">
                                <a href="Dinner.html">Dinner</a><br>
                            </div>
                    </div>
                    <a href="Reservation.html">Table resevation</a><br>
            </div>
            </header>
    
    </nav><br>
    <div class="background"> <br><br>
        <img src="https://i.etsystatic.com/11979725/r/il/425b9a/1431687786/il_570xN.1431687786_w5a8.jpg" 
        height="200px" style="border-radius: 50%;; display: block; margin-left: auto; margin-right: auto; height:15%;width: 17%;"> 
        <br><br><br> 
        <div class= "tableBorder">
            <form action="breakfast1.php" method="POST">
                <p class="name">Enter your name: 
                    <input type="text" name="name" id="name" value="<?php echo $row['name']?>" required><br><br></p>
            <table>
                <tr>
                    
                    <td style="color: #000; text-decoration: underline;">Items</td>
                    <td style="color: #000;text-decoration: underline">Amount</td>
                    <td style="color: #000;text-decoration: underline">Quantity</td>
                </tr>
                <tr>
                    <th colspan="3" style="font-style: italic;">Breakfast</th>
                </tr>
                <tr>
                    <td>Idly</td>
                    <td>&#8377 10 <input type="checkbox"    name="breakfast[]" id="Idly"></td>
                    <td><input type="number" id="idly"value="<?php echo $row['id']?>" min="0"></td>
                </tr>
                <tr>
                    <td>Dosa</td>
                    <td>&#8377 20 <input type="checkbox" value="dosa" name="breakfast[]"id="Dosa"></td>
                    <td><input type="number"  id="dosa" min="0"></td>
                </tr>
                <tr>
                    <td>Poori (1 set)</td>
                    <td>&#8377 30 <input type="checkbox" value="poori"  name="breakfast[]"id="Poori"></td>
                    <td><input type="number" id="poori" min="0"></td>
                </tr>
                <tr>
                    <td>Chappathi</td>
                    <td>&#8377 15 <input type="checkbox" value="chappathi" name ="breakfast[]"id="Chappathi"></td>
                    <td><input type="number" id="chappathi" min="0"></td>
                </tr>
                <tr>
                    <td>Pongal</td>
                    <td>&#8377 25 <input type="checkbox" value="pongal" name ="breakfast[]"id="Pongal"></td>
                    <td><input type="number" id="pongal" min="0"></td>
                </tr>
                <tr>
                    <td>Onion Dosa</td>
                    <td>&#8377 35 <input type="checkbox" value="onionDosa" name="breakfast[]"  id="OnionDosa"></td>
                    <td><input type="number" id="onionDosa" min="0"></td>
                </tr>
                <tr>
                    <td>Uthappam</td>
                    <td>&#8377 30 <input type="checkbox" value="uthappam" name="breakfast[]" id="Uthappam"></td>
                    <td><input type="number" id="uthappam" min="0"></td>
                </tr>
                <tr>
                    <td>Vadai</td>
                    <td>&#8377  8 <input type="checkbox"  value="vadai"  name="breakfast[]" id="Vadai"></td>
                    <td><input type="number" id="vadai" min="0"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td></td>
                    <td id="disp_total"></td>
                </tr>
            </table>
        </div>
    <br><br>
    <button name="submit" class="submit">Make Payment</button><br><br>
    </form>
    <button class="submit" onclick="find_total()" style="margin-left: 680px;">Display Total</button><br><br>
    <input type="reset" onclick="reset()" class="reset">
    </div>
    </body> 
    </html>
        
    
 