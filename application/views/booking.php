<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/top_bar'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg"></div>
						<form>
							<div class="form-header">
								<h2>Make Appointment</h2>
							</div>
							<div class="form-group">
								<input class="form-control" type="no" placeholder="Appointment No">
								<span class="form-label">Appointment No</span>
							</div>
							<div class="form-group">
								<input class="form-control" type="tex" placeholder="Patient Name">
								<span class="form-label">Patient Name</span>
							</div>
							<div class="form-group">
								<input class="form-control" type="tel" placeholder="Contact No">
								<span class="form-label">Contact No</span>
							</div>
              <div class="form-group">
								<select class="form-control" required>
									<option value="" label="&nbsp;" selected hidden></option>
									<option>Allergy Test</option>
									<option>Genetic Test</option>
									<option>Hormone Test</option>
                  <option>Immunological Test</option>
                  <option>Microbiological Test</option>
                  <option>Clinical Urine Test</option>
                  <option>Blood Test</option>
								</select>
								<span class="select-arrow"></span>
								<span class="form-label">Select Tests</span>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" required>
										<span class="form-label">Appointment Date</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="time" required>
										<span class="form-label">Appointment Time</span>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<?php $this->load->view('inc/footer'); ?>

<script type="text/javascript">
  $('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '+1d'
  });
</script>