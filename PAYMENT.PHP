<!DOCTYPE html>
<head>
        <link rel="stylesheet" href="css/payment.css">\

        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css">

</head>
<body>


        <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="delivery.php">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>        
            <span> <input type="text" id="fname" name="firstname" placeholder="YOUR NAME" required></span>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <span><input type="text" id="email" name="email" placeholder="@GMAIL.com"required></span>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <span><input type="text" id="adr" name="address" placeholder="XYZ"required></span>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <span><input type="text" id="city" name="city" placeholder="CITY"required></span>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <span><input type="text" id="state" name="state" placeholder="NY"required></span>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
               <span> <input type="text" id="zip" name="zip" placeholder="00000"required></span>
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
            <input type="text" id="cname" name="cardname" placeholder="">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="month">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
       
        <input href="delivery.php" type="submit"  value="Continue to checkout" class="btn"><br>

        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as for cash on delivery than checkout below 
        </label>

                
      </form>
    </div>
  </div>
  

  </div>
</div>
</body>
</html>