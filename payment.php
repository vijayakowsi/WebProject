<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="pay.css">

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.js"></script>

 <script type="text/javascript" src="pay.js"></script>
</head>
<body >
<style>
select {
background-repeat:no-repeat;
background-position:300px;
width:353px;
padding:12px;
margin-top:8px;
line-height:1;
border-radius:3px;
font-size:20px;
-webkit-appearance:none;
outline:none
}
</style>
<h2 >Payment Form</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form  onsubmit = "validate()" action="insert.php" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text"  required minlength = "5" name="name" placeholder="First">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text"  name="email" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" placeholder="Email">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Address">
            
            <div class="row">
              <div class="col-50">
                <label for="city"><i class="fa fa-institution"></i> City</label>
            <select >
            <option >--- Choose City here ---</option>
            <option >Chennai</option>
            <option >coimbatore</option>
            <option >Dindukal</option>
            <option >Erode</option>
            <option >Hosur</option>
            <option >Karur</option>
            <option >Karaikudi</option>
            <option >Kanchipuram</option>
            <option >Madurai</option>
            <option >Namakkal</option>
            <option >Salem</option>
            <option >Tiruchirappalli</option>
            <option >Thoothukkudi</option>
            <option >Tirunelveli</option>
            <option >vellore</option>
            <option >Kanyakumari</option>
            </select>
          </div>
        </div>

            <div class="row">
              <div class="col-50">
                <label for="phn">Phone</label>
                <input type="text"  name="phn" required pattern = "[9][1][-][0-9]{10}" placeholder="Phone Number">

              </div>
              <div class="col-50">
                <label for="zip">PIN code</label>
                <input type="text" required minlength="6" name="pin" placeholder="code">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" name="card" placeholder="Card Name">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" required pattern = "[0-9]{4}[-][0-9]{4}[-][0-9]{4}[-][0-9]{4}" placeholder="xxxx-xxxx-xxxx-xxxx">
            <label for="expmonth">Exp Month</label>
            <select>
            <option value="">--Month--</option>
<option value="1">Jan</option>
<option value="2">Feb</option>
<option value="3">Mar</option>
<option value="4">Apr</option>
<option value="5">May</option>
<option value="6">Jun</option>
<option value="7">Jul</option>
<option value="8">Aug</option>
<option value="9">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <select>
                <option value="0">-Enter year-</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    <option value="2026">2026</option>
    <option value="2027">2027</option>
    <option value="2028">2028</option>
    <option value="2029">2029</option>
    <option value="2030">2030</option>
    <option value="2031">2031</option>
</select>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" required minlength="3" name="cvv" placeholder="xxx">
              </div>
            </div>
          </div>
          
        </div>
        <input type="submit" value="Continue Payment" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:blue"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>

</body>
</html>
