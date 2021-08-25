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
    <h3 style="text-align:center; color:#FFC300; font-size:2.5vw;"><i>PHONES</i></h3>
 
    
<div class="row">
  <div class="column">
    <img src="redmi5.jpg"  style="width:100%;height:50%;;">
    <ul>
    <li>Operating System. Android v7.1.2 (Nougat) Upgradable to v8.1 (Oreo)</li>
    <li>5.7 inches (14.48 cm) bezel-less display</li>
    <li>Qualcomm Snapdragon 450 Tru-Octa Core Processor. 2 GB RAM. ...</li>
    <li>12 MP Rear Camera</li>
    <li>3300 mAh battery</li>
    <li>price  Rs13000</li>
   
    </ul>
    <button class="block"; onclick="myFunction()"  ><a href="payment.php">BUY</a></button>

<script>
function myFunction() {
  confirm("Your order has been placed");
}
</script>
    
  </div>
  <div class="column">
    <img src="redmi7.jpg"  style="width:100% ; height:100%;">
    <ul>
    <li>Operating System. Android v9.1.2 (Nougat) Upgradable to v8.1 (Oreo)</li>
    <li>6.7 inches (15.48 cm) bezel-less display</li>
    <li>Qualcomm Snapdragon 469 Tru-Octa Core Processor. 2 GB RAM. ...</li>
    <li>15 MP Rear Camera</li>
    <li>5000 mAh battery</li>
    <li>price  Rs25000</li>
    
    </ul>
    
    
    <button class="block"; onclick="myFunction()"  ><a href="payment.php">BUY</a></button>

<script>
function myFunction() {
  confirm("Your order has been placed");
}
</script>

</div>
  <div class="column">
    <img src="ap.jpg" style="width:100%">
    <ul>
    <li>Apple iPhone 11 Pro (Midnight Green, 64 GB)</li>
    <li>64 GB ROM </li>
    <li>14.73 cm (5.8 inch) Super Retina XDR Display</li>
    <li>12MP + 12MP + 12MP | 12MP Front Camera</li>
    <li>A13 Bionic Chip Processor</li>
    <li>Supports wireless charging</li>
    <li>price  Rs99,990</li>
   
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
    <img src="samgalaxyA60.jpg"  style="width:100%">
    <ul>
    <li>Operating System. Android v9.1.2 (Nougat) Upgradable to v9.1 (Oreo)</li>
    <li>8.0 inches (14.48 cm) bezel-less display</li>
    <li>Qualcomm Snapdragon 651 Tru-Octa Core Processor. 6 GB RAM. ...</li>
    <li>12 MP Rear Camera</li>
    <li>3300 mAh battery</li>
    <li>price  Rs26000</li>
    </ul>
    <button class="block"; onclick="myFunction()"  ><a href="payment.php">BUY</a></button>

<script>
function myFunction() {
  confirm("Your order has been placed");
}
</script>

  </div>
  <div class="column">
    <img src="redminote8.jpg"  style="width:100%">
    <ul>
    <li>Operating System. Android v9.1.2 (Nougat) Upgradable to v10.1 (Oreo)</li>
    <li>8.0 inches (14.48 cm) bezel-less display</li>
    <li>Qualcomm Snapdragon 651 Tru-Octa Core Processor. 6 GB RAM. ...</li>
    <li>12 MP Rear Camera</li>
    
    <li>3300 mAh battery</li>
    <li>price  Rs10000</li>
   
    </ul> 
    
    
    <button class="block"; onclick="myFunction()"  ><a href="payment.php">BUY</a></button>

<script>
function myFunction() {
  confirm("Your order has been placed");
}
</script>


  </div>
  <div class="column">
    <img src="gp.jpg" style="width:100%">
    <ul>
    <li>Operating System. Android v10.1.2 (Pie) Upgradable to v8.1 (Oreo)</li>
    <li>8.0 inches (14.48 cm) notch display</li>
    <li>Qualcomm Snapdragon 651 Tru-Octa Core Processor. 4 GB RAM. ...</li>
    <li>16 MP Rear Camera</li>
    <li>3600 mAh battery</li>
    <li>price  Rs15000</li>
   
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