<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<title>Propcare Rental Self-Drive Cars and Bikes</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

	<!-- Customized Bootstrap Stylesheet -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="css/style.css" rel="stylesheet">

   <!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</head>

<body>


	<!-- Navbar Start -->
	<nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
		<a href="index.html" class="navbar-brand">
			<h1 class="text-uppercase text-primary mb-1">Propcare - Self Drive</h1>
		</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
			<div class="navbar-nav ml-auto py-0">
				<a href="index.php" class="nav-item nav-link active">Home</a>
				<a href="about.php" class="nav-item nav-link">About</a>
				<a href="car_details.php" class="nav-item nav-link">Cars</a>
				<a href="contact.php" class="nav-item nav-link">Contact</a>
			</div>
		</div>
	</nav>
</div>
</div>
<!-- Navbar End -->


<!-- Search Start -->
<div class="container">
	<div class="container-fluid bg-white pt-3 px-lg-5">

		<div class="contact-form">
			<form method="POST">
				<div id="success"></div>
				<form name="sentMessage" id="contactForm" novalidate="novalidate">

					<div class="row mx-n2">
						<div class="col-xl-2 col-lg-4 col-md-6 px-2" >
							<div class=" mb-3" style="height: 50px; ">
								<input type="text" class="form-control p-4 radius" name="name" placeholder="Name" required="required" data-validation-required-message="Name" />
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-md-6 px-2">
							<div class=" mb-3" style="height: 50px;">
								<input type="text" class="form-control p-4 radius" name="mobile" placeholder="Contact" required="required" data-validation-required-message="Contact Number" />
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-md-6 px-2">
							<div class=" mb-3" style="height: 50px;">
								<input type="text" class="form-control p-4 radius" name="Pickup_Date" placeholder="Pickup Date" onfocus="(this.type='date')" data-validation-required-message="Pickup Date" />   
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-md-6 px-2">
							<div class="time mb-3" id="time" data-target-input="nearest">
								<input type="text" class="form-control p-4 radius" name="Pickup_Time" placeholder="Pickup Time" onfocus="(this.type='time')" data-validation-required-message="Pickup Time" />
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-md-6 px-2">
							<select class="custom-select px-4 mb-3 radius" style="height: 50px;" name="vehicle" >
								<label for="cars" >Select A Car</label>
												<option value="0">Select Vehical</option>
												<option value="Nexa Fronx">Nexa Fronx</option>
												<option value="Swift">Swift</option>
												<option value="Renault Tribber">Renault Tribber</option>
												<option value="Inova crysta">Inova crysta</option>
												<option value="Creta">Creta</option>
												<option value="Thar">Thar</option>
												<option value="I20">I20</option>
												<option value="Scarpio">Scarpio</option>
												<option value="Ertiga">Ertiga</option>
												<option value="Tiago">Tiago</option>
												<option value="Baleno">Baleno</option>
												<option value="Tigor">Tigor</option>
												<option value="Punch">Punch</option>
												<option value="Nexon">Nexon</option>
												<option value="Kia Carens">Kia Carens</option>
							</select>
						</div>
						<div class="col-xl-2 col-lg-4 col-md-6 px-2">
							<button class="btn btn-primary btn-block mb-3" type="submit" name="sendCallBack" value="sendCallBack" style="height: 50px;box-sizing: border-box; border-radius: 10px">Call Back</button>
						</div>
					</form>

				</div>
			</div>
		</div>

		<!-- Search End -->

		<!-- //modal -->
		<div>
			<button id="openModalBtn" class="float vertical-text" >Book Now</button>
			<div class="contact-form">
				<form method="POST">
					<div id="success"></div>
					<form name="sentMessage" id="contactForm" novalidate="novalidate">

						<div id="modalContainer">
							<div id="modalContent">
								<span id="closeModalBtn">&times;</span>
								<h2>Enquire Now</h2>
								<br>
								<form>
									<div class="row">
										<div class="col-6 form-group">
											<input type="text" class="form-control p-4 radius" name="name" placeholder="Name" required="required" data-validation-required-message="Name" />
										</div>

										<div class="col-6 form-group">
											<select class="custom-select px-4 mb-3 radius" style="height: 50px;" name="vehicle">
												<option value="0">Select Vehical</option>
												<option value="Nexa Fronx">Nexa Fronx</option>
												<option value="Swift">Swift</option>
												<option value="Renault Tribber">Renault Tribber</option>
												<option value="Inova crysta">Inova crysta</option>
												<option value="Creta">Creta</option>
												<option value="Thar">Thar</option>
												<option value="I20">I20</option>
												<option value="Scarpio">Scarpio</option>
												<option value="Ertiga">Ertiga</option>
												<option value="Tiago">Tiago</option>
												<option value="Baleno">Baleno</option>
												<option value="Tigor">Tigor</option>
												<option value="Punch">Punch</option>
												<option value="Nexon">Nexon</option>
												<option value="Kia Carens">Kia Carens</option>
											</select>
										</div>

									</div>
									<div class="row">

										<div class="col-6 form-group">
											<input type="text" class="form-control p-4 radius" name="Mobile1" placeholder="Contact No." required="required" data-validation-required-message="Contact Number" />
										</div>

										<div class="col-6 form-group">
											<input type="text" class="form-control p-4 radius" name="Mobile2" placeholder="Alternate Contact No." required="required" data-validation-required-message="Alt Contact No" />
										</div>
										
									</div>
									<div class="row">
										<div class="col-6 form-group">
											<input type="text" class="form-control p-4 radius" name="Pickup_Date" placeholder="Pickup Date" onfocus="(this.type='date')" data-validation-required-message="Pickup Date" />   
										</div>

										<div class="col-6 form-group">
											<input type="text" class="form-control p-4 radius" name="Pickup_Time" placeholder="Pickup Time" required="required" data-validation-required-message="Pickup_Time" />
										</div>

									</div>

									<div class="row">
										<div class="col-6 form-group">
											<input type="text" class="form-control p-4 radius" name="Return_date" placeholder="Return Date" onfocus="(this.type='date')" data-validation-required-message="Return Date" />   
										</div>

										<div class="col-6 form-group">
											<input type="text" class="form-control p-4 radius" name="Return_Time" placeholder="Return Time" required="required" data-validation-required-message="Return_Time" />
										</div>
									</div>
									

									<div>

										<label for="message">Pick Up Location:</label>
										<textarea id="message" name="Pickup_Location" placeholder="Pickup Address or Location"></textarea>
										<label for="message">Message:</label>
										<textarea id="message" name="message" placeholder="Additional Message"></textarea>
									</div>


									<div style="display:flex; justify-content: center;"><button  type="submit" name="send" value="send">Submit</button></div>
								</form>
							</div>
						</div>
					</div>
				</div>


  <!-- <div class="modal-button-container">
    <button id="openModalBtn3" onclick="openModal()">Open Modal 3</button>
  </div>

  <div id="modalContainer">
    <div id="modalContent">
      <span id="closeModalBtn" onclick="closeModal()">&times;</span>
      <h2>Contact Form</h2>
      <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Submit</button>
      </form>
    </div>
  </div>
-->

<!-- Carousel Start -->
<div class="container-fluid p-0" style="margin-bottom: 90px;">
	<div id="header-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="w-100" src="img/carousel-1.jpg" alt="Image">
				<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
					<div class="p-3" style="max-width: 900px;">
						<h4 class="text-white text-uppercase mb-md-3">Rental Car</h4>
						<h1 class="display-1 text-white mb-md-4">"Rent, Explore, Repeat"</h1>
						<a href="tel:9822495647" target="blank" class="btn btn-primary py-md-3 px-md-5 mt-2 radius">Call Now</a>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="w-100" src="img/carousel-2.jpg" alt="Image">
				<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
					<div class="p-3" style="max-width: 900px;">
						<h4 class="text-white text-uppercase mb-md-3">Rental Car</h4>
						<h1 class="display-1 text-white mb-md-4">Best Rental Cars In Your Location</h1>
						<a href="tel:9822495647" target="blank" class="btn btn-primary py-md-3 px-md-5 mt-2 radius">Call Now</a>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
			<div class="btn btn-dark" style="width: 45px; height: 45px;">
				<span class="carousel-control-prev-icon mb-n2"></span>
			</div>
		</a>
		<a class="carousel-control-next" href="#header-carousel" data-slide="next">
			<div class="btn btn-dark" style="width: 45px; height: 45px;">
				<span class="carousel-control-next-icon mb-n2"></span>
			</div>
		</a>
	</div>
</div>

<!-- Carousel End -->

<!-- About Start -->
<div class="container-fluid py-5">
	<!-- <div class="container pt-5 pb-3"> -->
		<!-- <h1 class="display-1 text-primary text-center">01</h1> -->
		<h1 class="display-4 text-uppercase text-center mb-5">Welcome To <span style="color:#F77D0A;">Propcare Rental Self-Drive Cars & Bikes</span></h1>
		<div class="row justify-content-center">
			<div class="col-lg-10 text-center">
				<img class="w-75 mb-4" src="img/about.png" alt="">
				<p style="color: darkslategray;"><b>At Propcare Rental Self-Drive Cars and Bikes, we believe that a reliable and convenient mode of transportation is essential for making the most of your travels. If you are looking a memorable road trip, exploring a new city, or simply need a temporary vehicle, we're here to provide you with the perfect rental car solution.
					<br>
					At Propcare Rental Self-Drive Cars and Bikes, we're dedicated to delivering outstanding service, reliability, and value to our customers. We aim to be your trusted partner for all your rental car needs, making your journey more enjoyable, comfortable, and hassle-free.
					<br>
				Contact us today to book your perfect rental car and embark on a memorable journey with At Propcare Rental Self-Drive Cars and Bikes.</b>
			</p>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-lg-4 mb-2">
			<div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
				<div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
					<i class="fa fa-2x fa-headset text-secondary"></i>
				</div>
				<h4 class="text-uppercase m-0">24/7 Car Rental Support</h4>
			</div>
		</div>
		<div class="col-lg-4 mb-2">
			<div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
				<div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
					<i class="fa fa-2x fa-car text-secondary"></i>
				</div>
				<h4 class="text-light text-uppercase m-0">Car Reservation Anytime</h4>
			</div>
		</div>
		<div class="col-lg-4 mb-2">
			<div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
				<div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
					<i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
				</div>
				<h4 class="text-uppercase m-0">Lots Of Pickup Locations</h4>
			</div>
		</div>
	</div>
</div>
</div>
<!-- About End -->


<!-- Rent A Car Start -->
    <div class="container-fluid">
        <div class="container pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Find Your Car</h1>
           
            <div id="car_details" class="row">
          
    <!-- 1 car --><div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4 radius">
                        <img class="img-fluid mb-4 car_img" src="img/1.png" alt="">
                        <h4 class="text-uppercase mb-4">Inova Crysta</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2023</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Petrol</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>24 Hrs</span>
                            </div>
                        </div>        
            <div class="modal-button-container">
                    <button id="openModalBtn3" class="btn btn-primary px-3 radius" onclick="openModal()">RS 4999/Day</button>
            </div>
                </div>
                    </div>
    <!-- 2 car -->
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4 radius">
                        <img class="img-fluid mb-4 car_img" src="img/2.png" alt="">
                        <h4 class="text-uppercase mb-4">Swift</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2023</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Petrol</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>24 Hrs</span>
                            </div>
                        </div>        
            <div class="modal-button-container">
                    <button id="openModalBtn3" class="btn btn-primary px-3 radius" onclick="openModal()">RS 2199/Day</button>
            </div>
                </div>
                    </div>
    
    <!-- 3 car -->
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4 radius">
                        <img class="img-fluid mb-4 car_img" src="img/3.png" alt="">
                        <h4 class="text-uppercase mb-4">Fronx</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2023</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Petrol</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>24 Hrs</span>
                            </div>
                        </div>        
            <div class="modal-button-container">
                    <button id="openModalBtn3" class="btn btn-primary px-3 radius" onclick="openModal()">RS 2599/Day</button>
            </div>
                </div>
                    </div>
                    
    <!-- 4 car -->
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4 radius">
                        <img class="img-fluid mb-4 car_img" src="img/4.png" alt="">
                        <h4 class="text-uppercase mb-4">Wagon-R</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2023</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Petrol</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>24 Hrs</span>
                            </div>
                        </div>        
            <div class="modal-button-container">
                    <button id="openModalBtn3" class="btn btn-primary px-3 radius" onclick="openModal()">RS 1799/Day</button>
            </div>
                </div>
                    </div>
                
    <!-- 5 car -->
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4 radius">
                        <img class="img-fluid mb-4 car_img" src="img/5.png" alt="">
                        <h4 class="text-uppercase mb-4">Creta</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2023</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Petrol</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>24 Hrs</span>
                            </div>
                        </div>        
            <div class="modal-button-container">
                    <button id="openModalBtn3" class="btn btn-primary px-3 radius" onclick="openModal()">RS 3499/Day</button>
            </div>
                </div>
                    </div>
    
    <!-- 6 car -->
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4 radius">
                        <img class="img-fluid mb-4 car_img" src="img/6.png" alt="">
                        <h4 class="text-uppercase mb-4">Thar</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2023</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Petrol</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>24 Hrs</span>
                            </div>
                        </div>        
            <div class="modal-button-container">
                    <button id="openModalBtn3" class="btn btn-primary px-3 radius" onclick="openModal()">RS 4999/Day</button>
            </div>
                </div>
                    </div>
    
    <!-- 7 car -->
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4 radius">
                        <img class="img-fluid mb-4 car_img" src="img/7.png" alt="">
                        <h4 class="text-uppercase mb-4">I 20</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2023</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Petrol</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>24 Hrs</span>
                            </div>
                        </div>        
            <div class="modal-button-container">
                    <button id="openModalBtn3" class="btn btn-primary px-3 radius" onclick="openModal()">RS 2399/Day</button>
            </div>
                </div>
                    </div>
                
    <!-- 8 car -->
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4 radius">
                        <img class="img-fluid mb-4 car_img" src="img/8.png" alt="">
                        <h4 class="text-uppercase mb-4">Scarpio</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2023</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Petrol</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>24 Hrs</span>
                            </div>
                        </div>        
            <div class="modal-button-container">
                    <button id="openModalBtn3" class="btn btn-primary px-3 radius" onclick="openModal()">RS 3499/Day</button>
            </div>
                </div>
                    </div>
    
    <!-- 9 car -->
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4 radius">
                        <img class="img-fluid mb-4 car_img" src="img/9.png" alt="">
                        <h4 class="text-uppercase mb-4">Ertiga</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2023</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Petrol</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>24 Hrs</span>
                            </div>
                        </div>        
            <div class="modal-button-container">
                    <button id="openModalBtn3" class="btn btn-primary px-3 radius" onclick="openModal()">RS 3299/Day</button>
            </div>
                </div>
                    </div>
    
    <!-- 10 car -->
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4 radius">
                        <img class="img-fluid mb-4 car_img" src="img/10.png" alt="">
                        <h4 class="text-uppercase mb-4">Tiogo</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2023</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Petrol</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>24 Hrs</span>
                            </div>
                        </div>        
            <div class="modal-button-container">
                    <button id="openModalBtn3" class="btn btn-primary px-3 radius" onclick="openModal()">RS 1999/Day</button>
            </div>
                </div>
                    </div>
                
    <!-- 11 car -->
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4 radius">
                        <img class="img-fluid mb-4 car_img" src="img/11.png" alt="">
                        <h4 class="text-uppercase mb-4">Tribber</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2023</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Petrol</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>24 Hrs</span>
                            </div>
                        </div>        
            <div class="modal-button-container">
                    <button id="openModalBtn3" class="btn btn-primary px-3 radius" onclick="openModal()">RS 2799/Day</button>
            </div>
                </div>
                    </div>
    
    <!-- 12 car -->
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4 radius">
                        <img class="img-fluid mb-4 car_img" src="img/12.png" alt="">
                        <h4 class="text-uppercase mb-4">Baleno</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2023</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Petrol</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>24 Hrs</span>
                            </div>
                        </div>        
            <div class="modal-button-container">
                    <button id="openModalBtn3" class="btn btn-primary px-3 radius" onclick="openModal()">RS 2299/Day</button>
            </div>
                </div>
                    </div>
    
    <!-- 13 car -->
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4 radius">
                        <img class="img-fluid mb-4 car_img" src="img/13.png" alt="">
                        <h4 class="text-uppercase mb-4">Tigor</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2023</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Petrol</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>24 Hrs</span>
                            </div>
                        </div>        
            <div class="modal-button-container">
                    <button id="openModalBtn3" class="btn btn-primary px-3 radius" onclick="openModal()">RS 2199/Day</button>
            </div>
                </div>
                    </div>
                
    <!-- 14 car -->
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4 radius">
                        <img class="img-fluid mb-4 car_img" src="img/14.png" alt="">
                        <h4 class="text-uppercase mb-4">Punch</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2023</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Petrol</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>24 Hrs</span>
                            </div>
                        </div>        
            <div class="modal-button-container">
                    <button id="openModalBtn3" class="btn btn-primary px-3 radius" onclick="openModal()">RS 2499/Day</button>
            </div>
                </div>
                    </div>
    
    <!-- 15 car -->
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item active mb-4 radius">
                        <img class="img-fluid mb-4 car_img" src="img/15.png" alt="">
                        <h4 class="text-uppercase mb-4">Nexon</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2023</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>Petrol</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>24 Hrs</span>
                            </div>
                        </div>        
            <div class="modal-button-container">
                    <button id="openModalBtn3" class="btn btn-primary px-3 radius" onclick="openModal()">RS 2799/Day</button>
            </div>
                </div>
                    </div>


                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rent A Car End -->




          <!-- Testimonial Start -->
          <!-- <div class="container-fluid py-5"> -->
          	<div class="container py-5">
          		<h1 class="display-4 text-uppercase text-center mb-5">Our Client's Say</h1>
          		<div class="owl-carousel testimonial-carousel">
          			<div class="testimonial-item d-flex flex-column justify-content-center px-4">
          				<div class="d-flex align-items-center justify-content-between mb-3">
          					<!-- <img class="img-fluid ml-n4" src="img/testimonial-.jpg" alt=""> -->
          					<h1 class="display-2 text-white m-0 "></h1>
          				</div>
          				<h4 class="text-uppercase mb-2">Akshay sonawane</h4>
          				<i class="mb-2">Developer</i>
          				<p class="m-0">I rented a car from Budget during my vacation, and I was satisfied with the overall experience. The pricing was reasonable, and the vehicle was clean and comfortable. </p>
          			</div>
          			<div class="testimonial-item d-flex flex-column justify-content-center px-4">
          				<div class="d-flex align-items-center justify-content-between mb-3">
          					<!-- <img class="img-fluid ml-n4" src="img/testimonial-.jpg" alt=""> -->
          					<h1 class="display-2 text-white m-0"></h1>
          				</div>
          				<h4 class="text-uppercase mb-2">Suresh Shendge</h4>
          				<i class="mb-2">Director</i>
          				<p class="m-0">I recently rented a car from Enterprise and had a fantastic experience. The staff was friendly and efficient, and the vehicle was clean and well-maintained. </p>
          			</div>
          			<div class="testimonial-item d-flex flex-column justify-content-center px-4">
          				<div class="d-flex align-items-center justify-content-between mb-3">
          					<!-- <img class="img-fluid ml-n4" src="img/testimonial-.jpg" alt=""> -->
          					<h1 class="display-2 text-white m-0 "></h1>
          				</div>
          				<h4 class="text-uppercase mb-2">Shubham Falke</h4>
          				<i class="mb-2">Professional</i>
          				<p class="m-0">The pricing was reasonable, and they even offered a free upgrade to a larger car. I highly recommend Enterprise for their excellent service."</p>
          			</div>
          			<div class="testimonial-item d-flex flex-column justify-content-center px-4">
          				<div class="d-flex align-items-center justify-content-between mb-3">
          					<!-- <img class="img-fluid ml-n4" src="img/testimonial-.jpg" alt=""> -->
          					<h1 class="display-2 text-white m-0 "></h1>
          				</div>
          				<h4 class="text-uppercase mb-2">Ganesh More</h4>
          				<i class="mb-2">Laywer</i>
          				<p class="m-0">The vehicles are always in great condition, and their customer service is top-notch.I wouldn't hesitate to rent from "Propcare Car Rental Service".</p>
          			</div>
          		</div>
          	</div>

          	<!-- Testimonial End -->


          	<!-- Contact Start -->
          	<div class="container-fluid py-5">
          		<div class="container pb-3">
          			<h1 class="display-4 text-uppercase text-center mb-5">Contact Us</h1>
          			<div class="row">
          				<div class="col-lg-7 mb-2">
          					<div class="contact-form bg-light mb-4" style="padding: 30px;">
          						<form action="#" method="POST">
          							<div class="row">
          								<div class="col-6 form-group">
          									<input type="text" name="name" class="form-control p-4 radius" placeholder="Your Name" required="required">
          								</div>
          								<div class="col-6 form-group">
          									<input type="email" name="email" class="form-control p-4 radius" placeholder="Your Email" required="required">
          								</div>
          							</div>
          							<div class="form-group">
          								<input type="text" name="subject" class="form-control p-4 radius" placeholder="Subject" >
          							</div>
          							<div class="form-group">
          								<textarea class="form-control py-3 px-4 radius" name="message" rows="5" placeholder="Message" required="required"></textarea>
          							</div>
          							<div class="btn-center">
          								<button class="btn btn-primary py-3 px-5 radius" type="submit" name="sendCont" value="sendCont">Send Message</button>
          							</div>
          						</form>
          					</div>
          				</div>
          				<div class="col-lg-5 mb-2">
          					<div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
          						<div class="d-flex mb-3">
          							<i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
          							<div class="mt-n1">
          								<h5 class="text-light">Head Office</h5>
          								<p>Shop No 68, western Avenue, Shankar Kalat Nagar, Wakad, Pimpri-Chinchwad, Maharashtra 411057</p>
          							</div>
          						</div>
                        
                          <div class="d-flex mb-3">
                          	<i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                          	<div class="mt-n1">
                          		<h5 class="text-light">Contact Number</h5>
                          		<p>+91 9822495647</p>
                          	</div>
                          </div>
                          <div class="d-flex">
                          	<i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                          	<div class="mt-n1">
                          		<h5 class="text-light">For Booking</h5>
                          		<p class="m-0">booking@propcarerental.com</p>
                          	</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Contact End -->


                <

                <!-- Footer Start -->
                <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" >
                	<div class="row pt-5">
                		<div class="col-lg-4 col-md-6 mb-5">
                			<h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                			<p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>Shop No 68, western Avenue, Shankar Kalat Nagar, Wakad, Pimpri-Chinchwad, Maharashtra 411057</p>
                			<p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+91 9822495647</p>
                			<p><i class="fa fa-envelope text-white mr-3"></i>contact@propcarerental.com</p>

                		</div>
                		<div class="col-lg-4 col-md-6 mb-5">
                			<h4 class="text-uppercase text-light mb-4">Usefull Links</h4>
                			<div class="d-flex flex-column justify-content-start">
                				<a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Privacy Policy</a>
                				<a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Term & Conditions</a>
                				<a class="text-body mb-2" href="index.php"><i class="fa fa-angle-right text-white mr-2"></i>Home</a>
                				<a class="text-body mb-2" href="about.php"><i class="fa fa-angle-right text-white mr-2"></i>About</a>
                				<a class="text-body mb-2" href="contact.php"><i class="fa fa-angle-right text-white mr-2"></i>Contact</a>
                			</div>
                		</div>

                		<div class="col-lg-4 col-md-6 mb-5">
                			<h6 class="text-uppercase text-white py-2">Follow Us</h6>
                			<div class="d-flex justify-content-start">
                				<!-- <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a> -->
                				<a class="btn btn-lg btn-dark btn-lg-square mr-2" href="https://www.facebook.com/profile.php?id=100093481947586" target="_blank"><i class="fab fa-facebook-f"></i></a>
                				<a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                				<a class="btn btn-lg btn-dark btn-lg-square" href="https://instagram.com/propcarerental?igshid=MzNlNGNkZWQ4Mg==" target="_blank"><i class="fab fa-instagram"></i></a>
                			</div>
                			<br>
                			<p>Contact us today to book your perfect rental car and embark on a memorable journey with At Propcare – Self Drive Rental Cars.</p>
                		</div>
                	</div>
                </div>
                <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
                	<p class="mb-2 text-center text-body">&copy; <a href="https://propcarerental.com">Propcare Rental Self-Drive Cars and Bikes</a>. All Rights Reserved.</p>

                	<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->                 
                	<p class="m-0 text-center text-body">Designed by <a href="https://growthpartners.org.in/">-Growth Partners</a> - <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
                <!-- Footer End -->


                <!-- Back to Top -->
                <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a> -->
                <div>
                	<a href="https://wa.me/message/C6JVTXJFCEFJP1" target="_blank" class="whatsapp_floating"><img src="img/whatsapp.png" alt=""></a>
                </div>

                <!-- JavaScript Libraries -->
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
                <script src="lib/easing/easing.min.js"></script>
                <script src="lib/waypoints/waypoints.min.js"></script>
                <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                <script src="lib/tempusdominus/js/moment.min.js"></script>
                <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
                <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

                <!-- Template Javascript -->
                <script src="js/main.js"></script>
                <script src="js/modal.js"></script>

              </body>

              </html>

              <?php


	//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
              use PHPMailer\PHPMailer\PHPMailer;
              use PHPMailer\PHPMailer\SMTP;
              use PHPMailer\PHPMailer\Exception;


              if (isset($_POST['send'])) 
              {
              	$name=$_POST['name'];

              	$vehicle=$_POST['vehicle'];
              	$Mobile1=$_POST['Mobile1'];
              	$Mobile2=$_POST['Mobile2'];
              	$Pickup_Date=$_POST['Pickup_Date'];
              	$Pickup_Time= $_POST['Pickup_Time'];
              	$Return_date=$_POST['Return_date'];
              	$Return_Time=$_POST['Return_Time'];
              	$Pickup_Location=$_POST['Pickup_Location'];
              	$message=$_POST['message'];




//Load Composer's autoloader
              	require 'PHPMailer/Exception.php';
              	require 'PHPMailer/PHPMailer.php';
              	require 'PHPMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
              	$mail = new PHPMailer(true);

              	try {
    //Server settings
  //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'harishmane2023@gmail.com';                     //SMTP username
    $mail->Password   = 'kpwrpfeikymoxfkq';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('harishmane2023@gmail.com', 'Mailer');
    $mail->addAddress('harishmane2023@gmail.com', 'Joe User');     //Add a recipient
    

    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mail From Propcare Rental';
    $mail->Body    = "Name - $name<br>
    vehicle - $vehicle<br>
    Mobile No. - $Mobile1<br>
    Alt Mobile no. - $Mobile2<br>
    Pickup_Date - $Pickup_Date<br>
    Pickup_Time - $Pickup_Time<br>
    Return_date - $Return_date<br>
    Return_Time - $Return_Time<br>
    Pickup_Location - $Pickup_Location<br>
    message - $message";


    $mail->send();
    echo '<script>window.location="index.php"</script>';
  } catch (Exception $e) {
  	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

}


if (isset($_POST['sendCont'])) 
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	

	//Load Composer's autoloader
	require 'PHPMailer/Exception.php';
	require 'PHPMailer/PHPMailer.php';
	require 'PHPMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
    //Server settings
  //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'harishmane2023@gmail.com';                     //SMTP username
    $mail->Password   = 'kpwrpfeikymoxfkq';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('harishmane2023@gmail.com', 'Mailer');
    $mail->addAddress('harishmane2023@gmail.com', 'Joe User');     //Add a recipient
    

    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mail From Propcare Rental';
    $mail->Body    = "Name - $name<br>
    email - $email<br>
    subject - $subject<br>
    message - $message";


    $mail->send();
    echo '<script>window.location="index.php"</script>';
  } catch (Exception $e) {
  	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

}

if (isset($_POST['sendCallBack'])) 
{
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$Pickup_Date=$_POST['Pickup_Date'];
	$Pickup_Time=$_POST['Pickup_Time'];
	$vehicle=$_POST['vehicle'];
	

	//Load Composer's autoloader
	require 'PHPMailer/Exception.php';
	require 'PHPMailer/PHPMailer.php';
	require 'PHPMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
    //Server settings
  //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'harishmane2023@gmail.com';                     //SMTP username
    $mail->Password   = 'kpwrpfeikymoxfkq';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('harishmane2023@gmail.com', 'Mailer');
    $mail->addAddress('harishmane2023@gmail.com', 'Joe User');     //Add a recipient
    

    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mail From Propcare Rental';
    $mail->Body    = "Name - $name<br>
    Mobile No. - $mobile<br>
    Pickup_Date - $Pickup_Date<br>
    Pickup_Time - $Pickup_Time<br>
    Vehicle - $vehicle";


    $mail->send();
  
    echo '<script>window.location="index.php"</script>';
  } catch (Exception $e) {
  	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

}


?>
