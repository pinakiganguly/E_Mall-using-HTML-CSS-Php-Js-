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
    <h3 style="text-align:center; color:#FFC300; font-size:2.5vw;"><i>Smart watch</i></h3>
 
    

  <div class="column">
    <img src="apple.jpg"  style="width:100% ; height:100%;">
    <ul>
    <li>Apple Watch Series 3 GPS - 42 mm Space Grey Aluminium Case with Black Sport Band  (Black Strap Regular)</li>
    <li>GPS and Altimeter</li>
    <li>Voice Based Siri</li>
    <li>Smart Coaching</li>
    <li>Breathe Apps</li>
    <li>Touchscreen</li>
    <li>price  Rs23900</li>
    
    </ul>
    
    
    <button class="block"; onclick="myFunction()"  ><a href="payment.php">BUY</a></button>

<script>
function myFunction() {
  confirm("Your order has been placed");
}
</script>

</div>
  <div class="column">
    <img src="gear.jpg" style="width:100%">
    <ul>
    <li>Samsung Gear Sport black Smartwatch  (Black Strap 43mm))</li>
    <li>Touchscreen|Fitness & Outdoor</li>
    <li>Circle|black</li>
    <li>SM-R600NZKAXAR|Gear Sport</li>
    <li>price 18,850</li>
   
    </ul> 
        <button class="block"; onclick="myFunction()"  ><a href="payment.php">BUY</a></button>

<script>
function myFunction() {
  confirm("Your order has been placed");
}
</script>

  
  </div>

  <div class="column">
    <img src="band.jpg" style="width:100%">
    <ul>
    <li>Mi Smart Band 3i  (Black Strap, Size : Regular)</li>
    <li>Model Number---XMSH09HM</li>
    <li>Material--Thermoplastic polyurethane (TPU)</li>
    <li>Display Time/Date, Alarm Clock, Timer, Call and Text Alerts, App Notifications, Sedentary Reminders, Weather Forecast, Call Rejection, Find Your Phone (Android)</li>
    <li>Compatible---iPhone, Android Phones</li>
    <li>price  Rs1,299</li>
   
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