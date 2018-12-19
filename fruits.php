<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	include 'config.php';
	if( isset($_SESSION['user']) ) {
	$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);
	}
?>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Fruits & Vegetables| E-Shopper</title>
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

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Category</h2>
                            <div class="panel-group category-products" id="accordian">
                                <!--category-productsr-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="dairy.php">Dairy</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="fruits.php">
                                                <font color="orange">Fruits & Vegetables</font>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="grains.php">Grains</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="de.php">Daily Essentials</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="beverages.php">Beverages</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="spices.php">Spices</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="others.php">Others</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!--/category-products-->
                        </div>
                    </div>
                    <div class="col-sm-9 padding-right">
                        <div class="features_items">
                            <!--features_items-->
                            <h2 class="title text-center">Products</h2>
                            <?php
						$results = $mysqli->query("SELECT id, name, category, img, price FROM products WHERE category = 'fv'");
						if($results){ 
							//fetch results set as object and output HTML
							while($obj = $results->fetch_object())
							{
								echo"
								<div class='col-sm-4'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
										<form method='post' action='cart_update.php'>
											<div class='productinfo text-center'>
												<img height='268px' width='249px' src='{$obj->img}' alt='' />
												<h2>₹{$obj->price}</h2>
												<p>{$obj->name}</p>
												<input type='hidden' name='category' value='add' />
												<input type='hidden' name='id' value='{$obj->id}' />
												<button type='submit' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</button>
											</div>
											<div class='product-overlay'>
												<div class='overlay-content'>
													<h2>₹{$obj->price}</h2>
													<p>{$obj->name}</p>
													<button type='submit' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</button>
												</div>
											</div>
											</form>
										</div>
									</div>
							</div>";
							}
						}
						?>
                        </div>
                        <!--features_items-->
                    </div>
                </div>
            </div>
        </section>

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