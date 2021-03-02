

<!DOCTYPE html>


<html>

	<head>
		<title>login</title>
 <title>register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="js/jquery.js"></script>
	</head>

	<body>

		<!--https://www.w3schools.com/html/html_forms.asp-->
		

		<div class="container">
		<label for="uname"> <b>Username</b> </label>
		<input type="text" placeholder="Enter Username" id=uname name="uname" required>

		<label for="pass"> <b>Password</b> </label>
		<input type="Password" placeholder="Enter password" id="pass" name="pass" required="">
		
		<button  id="btn-click" name="login">Login</button>
<a href="createt_user.php" class="btn btn-primary">register</a>
		</div>
<input id="anjam" type='hidden' data-name="1">		
		<script>
			$(document).ready(function (){
			

				$.ajax({
						url  : 'auth.php',
						success:  function(data)
						{
							$('input[type="hidden"]').val(data);
							var re= $('input[type="hidden"]').val();

							if(re == "ok"){
								window.location.replace("index");
								}
							}
						});


				$( "#btn-click" ).click(function() {
				
				var uname=$("#uname").val();
				var pass=$("#pass").val();
				$.ajax({
				url  : 'login.php',
				type : 'POST',
				data:{uname:uname,
				pass:pass},
				success:  function(data)
				{
					console.log(data);
					if(data=="go"){
				$('#anjam').html(data)
						window.location.replace("index");
						}
					
				}
				});


});



		});
		</script>
	</body>
</html>