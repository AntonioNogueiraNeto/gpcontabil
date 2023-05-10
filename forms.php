<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="forms/images/icons/favicon.ico"/>
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="forms/endor/animate/animate.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="forms/css/util.css">
	<link rel="stylesheet" type="text/css" href="forms/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1" >
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="forms/images/img-01.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" action="./enviar-email.php" method="post" name="enviar-email" role="form">
				<span class="contact1-form-title">
					Entre em Contato
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="Nome" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="email" placeholder="Email" required>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Assunto">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Mensagem"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Enviar
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="forms/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="forms/vendor/bootstrap/js/popper.js"></script>
	<script src="forms/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="forms/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="forms/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
