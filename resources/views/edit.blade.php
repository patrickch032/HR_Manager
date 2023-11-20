<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Insert title here</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}">
	</head>

	<body>

		<div class="login-form">


  			<form  method="post" action="{{ route('employees.update', $employee->id) }}">
				@csrf
				@method('PUT')
    			<h1>Editar</h1>
    			<div class="content">
                <div class="input-field">
        				<input type="text" placeholder="First Name" name="firstName" value="{{$employee->firstName}}">
      				</div>
      				<div class="input-field">
        				<input type="text" placeholder="Last Name" name="lastName" value="{{$employee->lastName}}">
      				</div>
      				<div class="input-field">
        				<input type="text" placeholder="Shift" name="shift" value="{{$employee->shift}}">
      				</div>
      				<div class="input-field">
        				<input type="text" placeholder="Position" name="position" value="{{$employee->position}}">
      				</div>                    
    			</div>
    		<div class="action">
      			<button type="submit">Editar</button>
                  </form>
				  <form action="{{route('list.view')}}">
					<button type="submit">Retornar</button>

			</form>
    		</div>


		</div>
	</body>
	
</html>