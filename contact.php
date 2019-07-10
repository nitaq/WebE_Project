<?php
    include 'includes/header.php';
    include('form_process.php');
?>

	<head>
		<link rel="stylesheet" href="style.css">
		
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

		<style>
			.opt_select 
			{
			  width: 100%;
			  margin: 10px 0 6px;
			  background-color: #f6f6f6;
			  border: none;
			}
			select:focus {
			    outline: none;
			}
			
			.label_class {
			    display: inline-block;
			    max-width: 100%;
			    margin-bottom: 5px;
			    font-weight: 300;
			    padding-left: 8px;
			    font-size: 20px;
			}
			.error_val
			{
				color: #FF0000;
				padding-left: 5px;
			}
			input.input100 
			{
				height: 20px;
			}
			.rs1-wrap-input100:nth-child(4) {
				margin-left: 0;
			}
			.rs1-wrap-input100:nth-child(5) {
				margin-left: 30px;
			}

			.alert-danger
			{
				color:#fff;
				background-color:#ff0039;
			}

			.alert
			{
				font-weight: 800;
				font-size: 20px;
				padding:15px;
				margin-bottom:21px;
				border:1px solid transparent;
				border-radius:0
			}
		</style>
	</head>
		
	
	<!-- FORM -->
		<div class="container-contact">
			<form class="contactt-form validate-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
				<span class="contactt-form-title">Get in touch</span>
				<?php if($msg != ''): ?>
					<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
				<?php endif; ?> 
				

				<!-- FULL NAME -->
				<div class="wrap-input100 bg1" data-validate="Please Type Your Name">
					<p class="label-input100">FULL NAME </p>
					<label for="name"></label>
					<input class="input100" 
					type="text" name="name" 
					 
					placeholder="Enter Your Name"
					value="<?php if (isset($name) && $success == '') {echo $name;} ?>"
					data-validation="required name" 
					data-validation-regexp="/^[a-zA-Z ]*$/"
					>
					

				</div>

				<!-- EMAIL -->
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Enter Your Email (e@a.x)">
					<p class="label-input100">EMAIL </p>
					<input class="input100" 
					type="text" 
					name="email" 
					
					placeholder="Enter Your Email" 
					value="<?php if (isset($email) && $success == '') {echo $email;} ?>"
					data-validation="required email"
					>
				</div>
				
				<!-- PHONE -->
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate= "Enter Your Phone Number">
					<p class="label-input100">PHONE</p>
					<input class="input100" 
					type="tel" 
					name="phone" 
					min="9" 
					max="11" 
					 
					placeholder="Enter Number Phone"
					value="<?php if (isset($phone) && $success == '') {echo $phone;} ?>"
					data-validation="required tel" 
					data-validation-regexp="^[0-9]{9}$">	
				</div>

				
			
				<!-- radio button -->
				<div class="w-full js-show-service clear">
					<!-- RADIO BUTTONS -->
					<div class="wrap-contact100-form-radio" data-validate= "Select your gender">
						<span class="label-input100">Gender</span>

						<div class="contact100-form-radio m-t-15">
							<input  id="radio1" type="radio"  name="gender" value="female" >
							<label class="label_class" for="radio1">
								Female
							</label>
						</div>
						<div class="contact100-form-radio">
							<input  id="radio2" type="radio" name="gender" value="male" >
							<label class="label_class"  for="radio2">
								Male
							</label>
						</div>
					</div><!-- end.RADIO -->
					
					<!-- CHECKBOX BUTTONS -->
					<div class="wrap-contact100-form-check">
						<span class="label-input100">Tell us your preferences</span>
							<div class="contact100-form-radio">
								<input type="checkbox" id="check1" name="services[]" value="UI/UX Design"/>
						        <label class="label_class" for="check1">UI/UX Design</label>
							</div>

							<div class="contact100-form-radio">
								<input type="checkbox" id="check2" name="services[]" value="Online Services"/>
						        <label class="label_class" for="check2">Online Services</label>
							</div>

							<div class="contact100-form-radio">
								<input type="checkbox" id="check3" name="services[]" value="eCommerce Business"/>
						        <label class="label_class" for="check3">eCommerce Business</label>
							</div>
					</div> <!-- end.CHECKBOX -->



					<!-- Dropdown -->
					<div class="wrap-input100 bg1" data-validate="Please Select an option">
						<span class="label-input100">Country *</span>
						<div class="dropdown_option">
							<select class="opt_select" name="country">
								<option>Please choose</option>
								<option>Kosovo</option>
								<option>England</option>
								<option>Australia</option>
							</select>
						</div>
					</div>

						
					<!-- CALENDAR -->
					<div class="wrap-contact100-form-calendar">
						<span class="label-input100">Please put the date of your request</span>

						<div class="contact100-check-check">
							<input class="label-date100" 
							type="date" 
							
							name="date_cal" 
							id="req-date"
							value="<?php if (isset($date_cal) && $success == '') {echo $date_cal;} ?>"
							data-validation="required date">
						</div>
						
					</div> <!-- end.CALENDAR -->

				</div>

				<!-- MESSAGE -->
				<div class="wrap-input100  bg0  clear" data-validate= "Enter Your Message">
					<span class="label-input100">Message</span>
					<textarea class="input100" 
						name="message" 
						placeholder="Your message here..."
						
						value="<?php if (isset($message) && $success == '') {echo $message;} ?>"
						data-validation="required message"
						>
					</textarea>
				</div>
		
				<!-- BUTTON -->
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit" type="submit">
						<span>
							Submit
						<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>


			</form>
		</div>


		<!-- Scripts -->

		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

	    <script>
			$.validate({
				errorMessageClass: "error",
			});
		</script>


		<script type="text/javascript">
			$(document).ready(function() {
				$('.menu-toggle').click(function() {
					$('nav').toggleClass('active')
				})
			})
		</script>

<?php
    include 'includes/footer.php';
?>
