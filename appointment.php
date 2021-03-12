<?php 
require('top.php');
//prx($_SESSION['USER_REFERRAL_CODE']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>





<section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <div>
            <h1>Take Appointment. </h1>
            <h2>We work together to design, create and produce work that we are proud of for folks that we believe in...</h2>
          </div>
		 
       <form method="post">
	

        <div class="btn-group">
         <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Choose the disease
         </button>
		 <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          1. Health and Diseases
         </button>
		 <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          2. Immune System
         </button>
		 <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          3. Antigen and Antibody
         </button>
		 <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          4. Disorders of Immune System
         </button>
		 <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          5. Vaccines and Immunisation
         </button>
		 <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          6. Vaccines and Immunisation
         </button>
		 <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          7. Drugs and Alcohol Abuse
         </button>
		 
		 
         
		<br><br><br><br><br>
		
		 
		  <div class="input-group mb-3">
			  <div class="input-group-prepend">
				
			  </div>
			  <input type="text" placeholder="Enter your problem" class="form-control" name="text" id="text" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		   </div>
		   
		  
        </div>
		<br><br>
		<div class="form-group" action="upload.php">
			<label for="exampleFormControlFile1">Upload your prescription</label>
			<input type="file" class="form-control-file" name="file" id="file">
		  </div>
		 
	    <div class="contact-btn">
						<button type="button" class="fv-btn" onclick="send_appointment()" id="btn_submit">Book</button>
	   </div>
									
		
					
            </div>
        </section>
		  
		
		
		<hr>
		<hr>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

	 <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Call To Action</h3>
            <p> </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->
	
   
<?php require('footer.php')?>        