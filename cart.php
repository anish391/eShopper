<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	include 'config.php';
	session_start();
	if( isset($_SESSION['user']) ) {
	$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);
	}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Cart | E-Shopper</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/price-range.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head>
    <!--/head-->

    <body>
        <header id="header">
            <!--header-->
            <div class="header-middle">
                <!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="index.php"><img src="images/home/logo.png" alt="" /></a>
                            </div>

                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="contact.php"><i class="fa fa-user"></></i> Contact Us</a></li>
                                    <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                    <?php
								if( !isset($_SESSION['user']) ){
									echo "<li><a href='login.php'><i class='fa fa-lock'></i> Login</a></li>";
								}
								else{
								echo "<li class='dropdown'>
									<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
									<span class='glyphicon glyphicon-user'></span>&nbsp;Hi, $userRow[userName] &nbsp;<span class='caret'></span></a>
									<ul class='dropdown-menu'>
										<li><a href='logout.php?logout'><span class='glyphicon glyphicon-log-out'></span>&nbsp;Sign Out</a></li>
									</ul>
								</li>";
								}
								?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header-middle-->
        </header>
        <!--/header-->

        <section id="cart_items">
            <div class="container">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Shopping Cart</li>
                    </ol>
                </div>
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Item</td>
								<td class="description"></td>
                                <td class="price">Price</td>
                                <td class="total">Total</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
						if(isset($_SESSION["cart_products"])) //check session var
						{
							$total = 0; //set initial total value
				
							foreach ($_SESSION["cart_products"] as $cart_itm)
							{
								$product_name = $cart_itm["name"];
								$product_price = $cart_itm["price"];
								$product_image = $cart_itm["image"];
								$product_code = $cart_itm["id"];
								echo "<form method='post' action='cart_update.php'>
									<tr>
									<td class='cart_product'>
										<a href=''><img height='110px' width='110px' src='$product_image' alt=''></a>
									</td>
									<td class='cart_description'>
										<h4><a href=''>$product_name</a></h4>
									</td>
									<td class='cart_price'>
										<p>₹$product_price</p>
									</td>
									<td class='cart_total'>
										<p class='cart_total_price'>₹$product_price</p>
									</td>
									<td class='cart_delete'>
										<input name='remove_code[]' type='image' src='images/home/cross.png' alt='Submit' value = '$product_code'>
									</td>
								</tr>";
								$total = $total + (int)$product_price;
								}
							}
							$tax = $total*0.05;
							$grand_total = $total + $tax;
							echo "
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id='do_action'>
		<div class='container'>
			<div class='heading'>
				<h3>What would you like to do next?</h3>
			</div>
			<div class='row'>
				<div class='col-sm-6'>
					<div class='total_area'>
						<ul>
							<li>Cart Sub Total <span>₹$total</span></li>
							<li>Tax <span>₹$tax</span></li>
							<li>Total <span>₹$grand_total</span></li>
						</ul>
							<a class='btn btn-default update' href='index.php'>< Continue Shopping</a>
							<a class='btn btn-default check_out' href=''>Check Out</a>
					</div>
				</div>
			</div>
		</div>
		</form>
	</section>"; 
	?>
                                <header id="header">
                                    <!--header-->
                                    <div class="header_top">
                                        <!--header_top-->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-6 ">
                                                    <div class="contactinfo">
                                                        <ul class="nav nav-pills">
                                                            <li>
                                                                <a href=""><img src="images/home/logo_small.png" height="20px" width="20px"></a>
                                                            </li>
                                                            <li><a href="">E-Shopper</a></li>
                                                            <li><a href=""> - </a></li>
                                                            <li><a href="">Shopping Made Easy</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="social-icons pull-right">
                                                        <ul class="nav navbar-nav">
                                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </header>



                                <script src="js/jquery.js"></script>
                                <script src="js/bootstrap.min.js"></script>
                                <script src="js/jquery.scrollUp.min.js"></script>
                                <script src="js/jquery.prettyPhoto.js"></script>
                                <script src="js/main.js"></script>
    </body>

    </html>