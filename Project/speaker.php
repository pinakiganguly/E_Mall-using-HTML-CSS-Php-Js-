<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
 
  
}


.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 14px 14px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: #ddd;
  color: black;
}


h1 {
            
            
            text-align: center;
            font-size:5vw;
            color:green;
            
   }
</style>
</head>
<body>  
<h1 ><i>Welcome to Electra</i></h1>
    <h3 style="text-align:center; color:#FFC300; font-size:2.5vw;"><i>Speakers</i></h3>
 
    

  <div class="column">
    <img src="ghome.jpg"  style="width:100% ; height:100%;">
    <ul>
    <li>Google Home  (White)</li>
    <li>Play Music from Popular Streaming Services</li>
    <li>W x H: 9.63 cm x 14.28 cm</li>
    <li>Ask Questions, Set Daily Reminders or Get News Updates</li>
    <li>Works with Upto 6 Users with Personalised Settings</li>
    <li>price  Rs7999</li>
    
    </ul>
    
    
    <button class="block"; onclick="myFunction()"  ><a href="payment.php">BUY</a></button>

<script>
function myFunction() {
  confirm("Your order has been placed");
}
</script>

</div>
  <div class="column">
    <img src="echo.jpg" style="width:100%">
    <ul>
    <li>All-new Amazon Echo (3rd Gen) – Improved sound, powered by Dolby (Black)</li>
    <li>Premium speaker powered by Dolby for 360° audio with crisp vocals and dynamic bass response</li>
    <li>Alexa is always ready to help in both English & Hindi</li>
    <li>With 4 microphones, Alexa can hear you across the room </li>
    <li>price 9,999</li>
   
    </ul> 
        <button class="block"; onclick="myFunction()"  ><a href="payment.php">BUY</a></button>

<script>
function myFunction() {
  confirm("Your order has been placed");
}
</script>

  
  </div>

  <div class="column">
    <img src="mivi.jpg" style="width:100%">
    <ul>
    <li>Mivi Roam 5 W Portable Bluetooth Speaker  (Black, Stereo Channel)</li>
    <li>1 speaker with charging cable</li>
    <li>Wireless Bluetooth Speaker</li>
    <li>Portable-Yes|Bluetooth-yes|Memory card slot-No</li>
    <li>price  Rs1,179</li>
   
    </ul> 
    <button class="block"; onclick="myFunction()"  ><a href="payment.php">BUY</a></button>

<script>
function myFunction() {
  confirm("Your order has been placed");
}
</script>


<p id="demo"></p>
  </div>
</div>

    
   

 
    
</body>
</html>