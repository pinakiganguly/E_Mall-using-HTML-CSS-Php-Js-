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
    <h3 style="text-align:center; color:#FFC300; font-size:2.5vw;"><i>Televisions</i></h3>
 
    
<div class="row">
  <div class="column">
    <img src="sony.jpg"  style="width:100%;height:50%;;">
    <ul>
    <li>Sony Bravia X8500F 108cm (43 inch) Ultra HD (4K) LED Smart Android TV  (KD-43X8500F)</li>
    <li>57 inches bezel-less display</li>
    <li>Operating System: Android (Google Assistant & Chromecast in-built</li>
    <li>Resolution: Ultra HD (4K) 3840 x 2160 Pixels</li>
    <li>price  Rs67000</li>
   
    </ul>
    <button class="block"; onclick="myFunction()"  ><a href="payment.php">BUY</a></button>

<script>
function myFunction() {
  confirm("Your order has been placed");
}
</script>
    
  </div>
  <div class="column">
    <img src="lg.jpg"  style="width:100% ; height:100%;">
    <ul>
    <li>Operating System:Operating System: WebOS</li>
    <li>32 inch display</li>
    <li>Resolution: Full HD 1920 x 1080 Pixels</li>
    <li>Refresh Rate: 50 Hz</li>
    <li>price  Rs28000</li>
    
    </ul>
    
    
    <button class="block"; onclick="myFunction()"  ><a href="payment.php">BUY</a></button>

<script>
function myFunction() {
  confirm("Your order has been placed");
}
</script>

</div>
  <div class="column">
    <img src="one+.jpg" style="width:100%">
    <ul>
    <li>One plus TV</li>
    <li>Resolution: 4K Ultra HD (3840x2160) | Motion Rate 480 Hertz</li>
    <li>Sound : 50 Watts Output | Alluring sound | Dolby Atmos | Full range 2 Speaker | 2 Sub-woofer</li>
    <li>Display : QLED 120% NTSC | Bezel Less Design | Support HDR10，HDR10+，HLG decode, Dolby vision certification | </li>
    <li>price  Rs72889</li>
   
    </ul> 
        <button class="block"; onclick="myFunction()"  ><a href="payment.php">BUY</a></button>

<script>
function myFunction() {
  confirm("Your order has been placed");
}
</script>

  
  </div>
</div>


<div class="row">
  <div class="column">
    <img src="huawei.jpg"  style="width:100%">
    <ul>
    <li>Huawei 65 in, LED TV.</li>
    <li>4K Resolution, 3840 x 2160 pixels.</li>
    <li>Wifi, Ethernet</li>
    <li>Smart TV</li>
    <li>price  Rs62100</li>
    </ul>
    <button class="block"; onclick="myFunction()"  ><a href="payment.php">BUY</a></button>

<script>
function myFunction() {
  confirm("Your order has been placed");
}
</script>

  </div>
  <div class="column">
    <img src="mi.jpg"  style="width:100%">
    <ul>
    <li>32 inch Mi LED Smart TV 4A PRO 80 cm (32) with Android</li>
    <li>8.0 inches (14.48 cm) bezel-less display</li>
    <li>Operating System: Android (Google Assistant & Chromecast in-built)</li>
    <li>Resolution: HD Ready 1366 x 768 Pixels</li>
    <li>Sound Output: 20 W</li>
    <li>Supported Apps: Hotstar|Youtube</li>
    <li>price  Rs12499</li>
   
    </ul> 
    
    
    <button class="block"; onclick="myFunction()"  ><a href="payment.php">BUY</a></button>

<script>
function myFunction() {
  confirm("Your order has been placed");
}
</script>


  </div>
  <div class="column">
    <img src="philips.jpg" style="width:100%">
    <ul>
    <li>Philips 139cm (55 inch) Ultra HD (4K) LED Smart TV  (55PUT6103S/94)</li>
    <li>Operating System: Linux based</li>
    <li>Resolution: Ultra HD (4K) 3840 x 2160 Pixels</li>
    <li>price  Rs43000</li>
   
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