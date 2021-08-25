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
    <h3 style="text-align:center; color:#FFC300; font-size:2.5vw;"><i>iPads</i></h3>
 
    

  <div class="column">
    <img src="ipad1.jpg"  style="width:100% ; height:100%;">
    <ul>
    <li>Apple iPad (7th Gen) 32 GB 10.2 inch with Wi-Fi Only (Gold)</li>
    <li>25.91 cm (10.2 inch) Full HD Display</li>
    <li>iPadOS 13.1 | Battery: Lithium Polyme</li>
    <li>8 MP Primary Camera | 1.2 MP Front</li>
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
    <img src="ipadpro.jpg" style="width:100%">
    <ul>
    <li>Apple iPad Pro (2018) 64 GB 11 inch with Wi-Fi Only (Silver)</li>
    <li>64 GB ROM</li>
    <li>12 MP Primary Camera | 7 MP Front</li>
    <li>Processor: A12x Bionic Chip, 64-bit Architecture with Neural Engine and Embedded M12 Co-processor </li>
    <li>price 71900</li>
   
    </ul> 
        <button class="block"; onclick="myFunction()"  ><a href="payment.php">BUY</a></button>

<script>
function myFunction() {
  confirm("Your order has been placed");
}
</script>

  
  </div>

  <div class="column">
    <img src="ipad2.jpg" style="width:100%">
    <ul>
    <li>Apple iPad Pro 64 GB 10.5 inch with Wi-Fi+4G (Space Grey)</li>
    <li>10.5 Retina display for stunning detail</li>
    <li>iOS 10 World's Most Advanced OS</li>
    <li>Processor: A10X Fusion Chip with 64‑bit Architecture with Embedded M10 Coprocessor</li>
    <li>price  Rs67490</li>
   
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