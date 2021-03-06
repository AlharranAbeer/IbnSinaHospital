?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>patient</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Dr PRO template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/image-comparison-slider-master/style.css">
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
  
    
<script>
    
// validate Clinic
function checkClinic()
{
    var clinicName = document.getElementById('clinicName');
    var message = document.getElementById('confirmClinic');
    
    var badColor = "#ff6666";
    if(clinicName=="Select Clinic"){
        clinicName.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Please Select Clinic "
        header("Location: AppointmentForm.php?message=Sorry the Phone is used! try with another one please..");
    }
    
}

// validate Doctor
//function checkDoctor()
//{
    
    
//}    
    
    
// validate Date
function checked()
{
    var Date = document.getElementById("data");
    var message = document.getElementById('confirmDate');
    var badColor = "#ff6666";
    if(Date.value==""){
        
        Date.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Please Enter Date "
        header("Location: AppointmentForm.php");
        
    }
    
    var time = document.getElementById("time");
    //var message = document.getElementById('confirmTime');
    //var badColor = "#ff6666";
    if(time.value==""){
        
        time.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Please Enter Time "
        header("Location: AppointmentForm.php");
    }
   var DoctorName = document.getElementById('doctorName');
    //var message = document.getElementById('confirmDoctor');
    //var badColor = "#ff6666";
    if(checkClinic().value=="Select Doctor"){
        DoctorName.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Please Select Doctor "
        header("Location: AppointmentForm.php");
    }
}
 // validate Time   
//function checkTime()
//{
//}
 </script>   
    
    
</head>
<body>

    
    
    
<div class="super_container">
	
	<!-- Header -->
<!-- Header -->


<div class="super_container">
<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div> <img src ="medicine (3).png" alt ="logo" height="70" width="70"> &nbsp; &nbsp; </div> 
			<div class="logo">
				<a href="#">
					<div> Ibn Sina <span> Hospital</span></div>
					<div></div>
				</a>
			</div> 
			
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">	
				<!-- Header Social -->
				<div class="social header_social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="PatientPage.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
						<li><a href="logoutP.php"><i  aria-hidden="true"><img src="images/out-sign.png"></i></a></li>
					</ul>
				</div>
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>
    
    <br><br><br><br><br><hr>
	
	<!-- Services -->

				<div class="col text-center">
					<div class="section_title_container">
						<br>
                    <br><br>
                    <br><br>
                    <br>
					</div>
				</div>
    
            <section class="container-fluid">
            <section class="row justify-content-center" >
                <section class="col-12 col-sm-6 col-md-3">
                    
                    <form class="form-container" action="appointmentUpdate.php" method="post">
                       <h2>Request Appointment:</h2> 
                         
                        <label for="formGroupExampleInput">Select Specific Clinic:</label>
                    <select class="custom-select" name="clinicName" id="clinicName" >
                             <option selected  disabled="disabled" >Select Clinic</option>
                             <option value="DENTAL">Dental</option>
                             <option value="FAMILY MEDICINE">Family Medicine</option>
                             <option value="OPHTHALMOLOGY">Ophthalmology</option>
                             <option value="EMERGENCY MEDICINE">Emergency Medicine</option>
                             <option value="OBSTETRICS AND GYNECOLOGY">Obstetrics And Gynecology</option>
                    </select>
                        <span id="confirmClinic" class="confirmMessage" span>
                        
                         <label for="formGroupExampleInput">Select Specific Doctor:</label>
                        <select class="custom-select" name="doctorName" id="doctorName"  >
                             <option selected disabled="disabled">Select Doctor </option>
                             <option value="Abeer_1">Abeer</option>
                             <option value="Alia_2">Ali</option>
                             <option value="Fouz_3">Fouz</option>
                             <option value="Heasa_4">Heasa</option>
                             <option value="Hadeel_5">Hadeel</option>
                        </select>
                            <span id="confirmDoctor" class="confirmMessage" span>
                        
                        <label>Select Date </label>
                        <input  type="date" class="form-control" name="data" >
                        <span id="confirmDate" class="confirmMessage" span>
                        <label>Select Time</label>
                        <input  type="time" class="form-control" name="time"  >
                        <span id="confirmTime" class="confirmMessage"></span>
                        
                        
                        
                <p></p>
                <P style="text-align: center">        
               <button type="submit" class="btn btn-primary " style="background:#57ccc3" name="submit" onclick="checked()" >Submit</button>
               <a href ="appointmentOfPatient.php"><button type="button" class="btn btn-primary "  style="background:#57ccc3" >Cancel</button></a> 
                </P>
                        
         </form>
                    <br>
                    <br>
                    </section>
            </section>
        </section>
			
				


<!-- Footer -->
	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="footer_logo">
								<a href="#">
									<div class="logo">
				<a href="#">
					<div>Ibn Sina <span>Hospital</span></div>
					<div></div>
				</a>
			</div>
								</a>
							</div>
							
						</div>
					</div>

					<!-- Footer Contact Info -->
					<div class="col-lg-4 footer_col">
						<div class="footer_contact">
							<div class="footer_title">Contact Info</div>
							<ul class="contact_list">
								<li>+53 345 7953 32453</li>
								<li>IbnSina@gmail.com</li>
								<li>CustomerServices@gmail.com</li>
							</ul>
						</div>
					</div> 
					<!-- Footer Locations -->
					<div class="col-lg-4 footer_col">
						<div class="footer_location">
							<div class="footer_title">Our Locations</div>
							<ul class="locations_list">
								<li>
									<div class="location_title">Riyadh</div>
									<div class="location_text">45 King fahad Rd,FL 931</div>
								</li>
								<li>
									<div class="location_title">Jeddah</div>
									<div class="location_text">1481 King Abdullah Beach,FL 931</div>
								</li>
							</ul>
						</div>
					</div>					
			</div>		
		</div>	
	</div>	
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content  d-flex flex-md-row flex-column align-items-md-center justify-content-start">
							<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles /bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/image-comparison-slider-master/main.js"></script>
<script src="js/services.js"></script>
    
    
    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>