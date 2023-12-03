<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">
	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- Bootstrap CSS -->
	<link href="css/style.css" rel="stylesheet">
	<title>Checkout</title>
</head>

<body>
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="home.blade.php">
							<img src="images/icons/logo.png" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png" />
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="home.blade.php">Home</a>
								</li>

								<li>
									<a href="menu.blade.php">Menu</a>
								</li>

								<li>
									<a href="reservation.blade.php">Reservation</a>
								</li>

								<li>
									<a href="gallery.blade.php">Gallery</a>
								</li>

								<li>
									<a href="about.blade.php">About</a>
								</li>

								<li>
									<a href="Cart.blade.php">Cart</a>
								</li>

								<li>
									<a href="contact.blade.php">Contact</a>
								</li>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Start Hero Section -->
	<div class="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="intro-excerpt">
						<h1>Checkout</h1>
					</div>
				</div>
				<div class="col-lg-7">
				</div>
			</div>
		</div>
	</div>
	<!-- End Hero Section -->
	<div class="untree_co-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-12">
					<div class="border p-4 rounded" role="alert">
						Returning customer? <a href="#">Click here</a> to login
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 mb-5 mb-md-0">
					<h2 class="h3 mb-3 text-black">Billing Details</h2>
					<div class="p-3 p-lg-5 border bg-white">
						<div class="form-group">
							<label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
							<select id="c_country" class="form-control">
								<option value="1">Select a country</option>
								<option value="2">bangladesh</option>
								<option value="3">Algeria</option>
								<option value="4">Afghanistan</option>
								<option value="5">Ghana</option>
								<option value="6">Albania</option>
								<option value="7">Bahrain</option>
								<option value="8">Colombia</option>
								<option value="9">Dominican Republic</option>
							</select>
						</div>
						<div class="form-group row">
							<div class="col-md-6">
								<label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_fname" name="c_fname">
							</div>
							<div class="col-md-6">
								<label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_lname" name="c_lname">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<label for="c_companyname" class="text-black">Company Name </label>
								<input type="text" class="form-control" id="c_companyname" name="c_companyname">
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-12">
								<label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
							</div>
						</div>

						<div class="form-group mt-3">
							<input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
						</div>

						<div class="form-group row">
							<div class="col-md-6">
								<label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_state_country" name="c_state_country">
							</div>
							<div class="col-md-6">
								<label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
							</div>
						</div>

						<div class="form-group row mb-5">
							<div class="col-md-6">
								<label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_email_address" name="c_email_address">
							</div>
							<div class="col-md-6">
								<label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
							</div>
						</div>

						<div class="form-group">
							<label for="c_create_account" class="text-black" data-bs-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> Create an account?</label>
							<div class="collapse" id="create_an_account">
								<div class="py-2 mb-4">
									<p class="mb-3">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
									<div class="form-group">
										<label for="c_account_password" class="text-black">Account Password</label>
										<input type="email" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
									</div>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="c_ship_different_address" class="text-black" data-bs-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Ship To A Different Address?</label>
							<div class="collapse" id="ship_different_address">
								<div class="py-2">

									<div class="form-group">
										<label for="c_diff_country" class="text-black">Country <span class="text-danger">*</span></label>
										<select id="c_diff_country" class="form-control">
											<option value="1">Select a country</option>
											<option value="2">bangladesh</option>
											<option value="3">Algeria</option>
											<option value="4">Afghanistan</option>
											<option value="5">Ghana</option>
											<option value="6">Albania</option>
											<option value="7">Bahrain</option>
											<option value="8">Colombia</option>
											<option value="9">Dominican Republic</option>
										</select>
									</div>


									<div class="form-group row">
										<div class="col-md-6">
											<label for="c_diff_fname" class="text-black">First Name <span class="text-danger">*</span></label>
											<input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
										</div>
										<div class="col-md-6">
											<label for="c_diff_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
											<input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-12">
											<label for="c_diff_companyname" class="text-black">Company Name </label>
											<input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
										</div>
									</div>

									<div class="form-group row  mb-3">
										<div class="col-md-12">
											<label for="c_diff_address" class="text-black">Address <span class="text-danger">*</span></label>
											<input type="text" class="form-control" id="c_diff_address" name="c_diff_address" placeholder="Street address">
										</div>
									</div>

									<div class="form-group">
										<input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
									</div>

									<div class="form-group row">
										<div class="col-md-6">
											<label for="c_diff_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
											<input type="text" class="form-control" id="c_diff_state_country" name="c_diff_state_country">
										</div>
										<div class="col-md-6">
											<label for="c_diff_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
											<input type="text" class="form-control" id="c_diff_postal_zip" name="c_diff_postal_zip">
										</div>
									</div>

									<div class="form-group row mb-5">
										<div class="col-md-6">
											<label for="c_diff_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
											<input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address">
										</div>
										<div class="col-md-6">
											<label for="c_diff_phone" class="text-black">Phone <span class="text-danger">*</span></label>
											<input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone" placeholder="Phone Number">
										</div>
									</div>

								</div>

							</div>
						</div>

						<div class="form-group">
							<label for="c_order_notes" class="text-black">Order Notes</label>
							<textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
						</div>

					</div>
				</div>
				<div class="col-md-6">

					<div class="row mb-5">
						<div class="col-md-12">
							<h2 class="h3 mb-3 text-black">Coupon Code</h2>
							<div class="p-3 p-lg-5 border bg-white">

								<label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
								<div class="input-group w-75 couponcode-wrap">
									<input type="text" class="form-control me-2" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
									<div class="input-group-append">
										<button class="btn btn-black btn-sm" type="button" id="button-addon2">Apply</button>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="row mb-5">
						<div class="col-md-12">
							<h2 class="h3 mb-3 text-black">Your Order</h2>
							<div class="p-3 p-lg-5 border bg-white">
								<table class="table site-block-order-table mb-5">
									<thead>
										<th>Product</th>
										<th>Total</th>
									</thead>
									<tbody>
										<tr>
											<td>Top Up T-Shirt <strong class="mx-2">x</strong> 1</td>
											<td>$250.00</td>
										</tr>
										<tr>
											<td>Polo Shirt <strong class="mx-2">x</strong> 1</td>
											<td>$100.00</td>
										</tr>
										<tr>
											<td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
											<td class="text-black">$350.00</td>
										</tr>
										<tr>
											<td class="text-black font-weight-bold"><strong>Order Total</strong></td>
											<td class="text-black font-weight-bold"><strong>$350.00</strong></td>
										</tr>
									</tbody>
								</table>

								<div class="border p-3 mb-3">
									<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

									<div class="collapse" id="collapsebank">
										<div class="py-2">
											<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>

								<div class="border p-3 mb-3">
									<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

									<div class="collapse" id="collapsecheque">
										<div class="py-2">
											<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>

								<div class="border p-3 mb-5">
									<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

									<div class="collapse" id="collapsepaypal">
										<div class="py-2">
											<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>

								<div class="form-group">
									<button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='thankyou.html'">Place Order</button>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- </form> -->
		</div>
	</div>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="home.blade.php" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="menu.blade.php" class="txt19">Menu</a>
			</li>

			<li class="t-center m-b-13">
				<a href="gallery.html" class="txt19">Gallery</a>
			</li>

			<li class="t-center m-b-13">
				<a href="about.html" class="txt19">About</a>
			</li>

			<li class="t-center m-b-13">
				<a href="blog.html" class="txt19">Blog</a>
			</li>

			<li class="t-center m-b-33">
				<a href="contact.html" class="txt19">Contact</a>
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="reservation.html" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Reservation
				</a>
			</li>
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<!-- - -->
			<h4 class="txt20 m-b-33">Gallery</h4>

			<!-- Gallery -->
			<div class="wrap-gallery-sidebar flex-w">
				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-01.jpg" alt="GALLERY" />
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-02.jpg" alt="GALLERY" />
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-03.jpg" alt="GALLERY" />
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-05.jpg" alt="GALLERY" />
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-06.jpg" alt="GALLERY" />
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-07.jpg" alt="GALLERY" />
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-09.jpg" alt="GALLERY" />
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-10.jpg" alt="GALLERY" />
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-11.jpg" alt="GALLERY" />
				</a>
			</div>
		</div>
	</aside>


	<!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Contact Us
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							8th floor, 379 Hudson St, New York, NY 10018
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							(+1) 96 716 6879
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							contact@site.com
						</li>
					</ul>

					<!-- - -->
					<h4 class="txt13 m-b-32">
						Opening Times
					</h4>

					<ul>
						<li class="txt14">
							09:30 AM – 11:00 PM
						</li>

						<li class="txt14">
							Every Day
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Latest twitter
					</h4>

					<div class="m-b-25">
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
						<a href="#" class="txt15">
							@colorlib
						</a>

						<p class="txt14 m-b-18">
							Activello is a good option. It has a slider built into that displays the featured image in the slider.
							<a href="#" class="txt15">
								https://buff.ly/2zaSfAQ
							</a>
						</p>

						<span class="txt16">
							21 Dec 2017
						</span>
					</div>

					<div>
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
						<a href="#" class="txt15">
							@colorlib
						</a>

						<p class="txt14 m-b-18">
							Activello is a good option. It has a slider built into that displays
							<a href="#" class="txt15">
								https://buff.ly/2zaSfAQ
							</a>
						</p>

						<span class="txt16">
							21 Dec 2017
						</span>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-38">
						Gallery
					</h4>

					<!-- Gallery footer -->
					<div class="wrap-gallery-footer flex-w">
						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-01.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-02.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-03.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-04.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-04.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-05.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-06.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-07.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-08.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-08.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-09.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-10.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-11.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-12.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-12.jpg" alt="GALLERY">
						</a>
					</div>

				</div>
			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2018 All rights reserved | This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer Section -->

	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
		$(".parallax100").parallax100();
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>