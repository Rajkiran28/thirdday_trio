<!DOCTYPE html>

<html lang ="en">


	<head>


		<meta charset="UTF-8">
		<title> Contacts Create </title>
		

	</head>

	<body>
		
				

		<form action="/contact" method="POST">


			{{ csrf_field() }}





			<div>
				<label for="first_name">
				First Name:
				</label>
					<input type="text" name="first_name">
			</div>

				 <br>



			<div>
				<label for="phone_number">
				Phone Number:
				</label>
					<input type="text" name="phone_number">
			</div>

			<br>
			<br>


			<div>
				<button type ="submit">
					Save
				</button>
			</div>
			
			<br>
			<br>

		</form>

	</body>


</html>

