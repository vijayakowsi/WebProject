
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Online Order</title>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

<link href="http://www.stitchmyfabric.com/gocart/themes/default/assets/css/css/bootstrap.min.css" type="text/css" rel="stylesheet" /><link href="http://www.stitchmyfabric.com/gocart/themes/default/assets/css/font-awesome.min.css" type="text/css" rel="stylesheet" /><link href="http://www.stitchmyfabric.com/gocart/themes/default/assets/css/style.css" type="text/css" rel="stylesheet" />    <link href="http://www.stitchmyfabric.com/gocart/themes/default/assets/css/homepage.css" type="text/css" rel="stylesheet" /><link href="http://www.stitchmyfabric.com/gocart/themes/default/assets/css/tab.css" type="text/css" rel="stylesheet" /><link href="http://www.stitchmyfabric.com/gocart/themes/default/assets/css/css/options.css" type="text/css" rel="stylesheet" /><link href="http://www.stitchmyfabric.com/gocart/themes/default/assets/css/simple-sidebar.css" type="text/css" rel="stylesheet" /><link href="http://www.stitchmyfabric.com/gocart/themes/default/assets/css/bootstrap-datepicker.css" type="text/css" rel="stylesheet" />    <link href="http://www.stitchmyfabric.com/gocart/themes/default/assets/css/bootstrap-select.min.css" type="text/css" rel="stylesheet" />      <link href="http://www.stitchmyfabric.com/gocart/themes/default/assets/css/responsive.css" type="text/css" rel="stylesheet" />    <link href="http://www.stitchmyfabric.com/gocart/themes/default/assets/css/jquery.prompt.css" type="text/css" rel="stylesheet" />
    <link href="http://www.stitchmyfabric.com/gocart/themes/default/assets/css/css/order_via_estore.css" type="text/css" rel="stylesheet" /><link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
</head>
<body class="order_via_estore_page" >
    <div id="wrapper">
<div class="container no-padding">
    <?php
// define variables and set to empty values
$brandErr = $tracknoErr = $ordernoErr = "";
$trackno = $brand = $orderno = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["orderno"])) {
    $ordernoErr = "Orderno is required";
  } else {
    $orderno = test_input($_POST["orderno"]);
  }
  
  if (empty($_POST["trackno"])) {
    $tracknoErr = "trackno is required";
  } else {
    $trackno = test_input($_POST["trackno"]);
  }
    
  if (empty($_POST["brand"])) {
    $brandErr = "Brand is Required";
  } else {
    $brand = test_input($_POST["brand"]);
  }

  
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

                <div class="col-md-12 heading-contant">
                        <h1><span class="pad-r-2"><img src="http://www.stitchmyfabric.com/gocart/themes/default/assets/img/step-1-icon.png" alt="1" class=""></span> Online store order details                 </h1>
                    </div>
        <div class="col-md-12 col-xs-12 block-text">            
            <p class="align-adjust-self">You have successfully completed Step 1.</p><p>Please provide us the details of your order placed on the online store as this will help us in receiving your fabric. </p>
            <div class="col-md-10 step2-content">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <span class="error">* required field.</span>
                    <div class="row">
                            <div class="col-sm-3">                               
                                <div class="col-xs-12 text-label">Order Number <span class="required">*</span> </div>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" name="orderno" />
                                <span class="error">* <?php echo $ordernoErr;?></span>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-sm-3 ">
                            <div class='col-xs-12 text-label '>
                            Brand Name<span class="required">*</span>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="brand" />
                            <span class="error">* <?php echo $brandErr;?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-xs-12 text-label">
                            Tracking Number
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="trackno" />
                            <span class="error">* <?php echo $tracknoErr;?></span>
                        </div>
                    </div>
             <div class="row step1-button-placed">
                <div>
                     <a href="model2.html"><input  name="submit" type="submit" value="Submit"></a>
             </div>
              </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
</body>
</html>
