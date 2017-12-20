<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Details</title>
</head>

<body>
	<div>

		<a href="/contact/create">Add New</a>
			<ul>
				@foreach($contacts as $contact)
					<li>
						<a href="/contact/show/{{$contact->id}}">{{ucwords($contact->name)}}</a>
					</li>
				@endforeach
			</ul>
	</div>
	
</body>
</html>