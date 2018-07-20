<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>AJAX Form Example</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="https://www.attheco.com/devcatalyst/">Dev Catalyst</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        </div><!--/.nav-collapse -->
      </div>
</nav> 

<div class="wrapper">
	<div class="container">
		<div class="page-header">
			<h1>Simple PHP Submit Form with AJAX
			</h1>
		</div>
		<div class="col-lg-12">
			<div class="row">
				<div id="form-content">
				
					<!-- UPDATE FORM GOES HERE -->
					
				</div>
			</div>
		</div>
	</div>
</div>

<script src="assets/jquery-1.12.4-jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
		/* global $ */
		$(document).ready(function() {	
			// submit form using $.ajax() method
			$('#submit-form').submit(function(e){
					e.preventDefault(); // Prevent Default Submission			
					$.ajax({
						url: 'submit.php',
						type: 'POST',
						data: $(this).serialize() // it will serialize the form data (grabs all fields in a form)
					})
					.done(function(data){
						$('#form-content').fadeOut('slow', function(){
							$('#form-content').fadeIn('slow').html(data);
						});
					})
					.fail(function(){
						alert('Form Submission Failed ...');	
					});
			});
					
			/*
			// submit form using ajax short hand $.post() method			
			$('#submit-form').submit(function(e){
				e.preventDefault(); // Prevent Default Submission
				$.post('submit.php', $(this).serialize() )   //different line (shorthand)
				.done(function(data){
					$('#form-content').fadeOut('slow', function(){
						$('#form-content').fadeIn('slow').html(data);
					});
				})
				.fail(function(){
					alert('Form Submission Failed ...');
				});	
			});
			*/
			
		});
</script>
</body>
</html>