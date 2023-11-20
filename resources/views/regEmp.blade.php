<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Insert title here</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}">
	</head>

	<body>

		<div class="login-form">


  			<form  method="post" action="{{route('reg.emp')}}">
				@csrf
    			<h1>Cadastro</h1>
    			<div class="content">
                <div class="input-field">
        				<input type="text" placeholder="First Name" name="firstName">
      				</div>
      				<div class="input-field">
        				<input type="text" placeholder="Last Name" name="lastName">
      				</div>
      				<div class="input-field">
        				<input type="text" placeholder="Shift" name="shift">
      				</div>
      				<div class="input-field">
        				<input type="text" placeholder="Position" name="position">
      				</div>                    
    			</div>
    		<div class="action">
      			<button type="submit">Cadastrar</button>
                  </form>
				  <form action="{{route('home.view')}}">
					<button type="submit">Retornar</button>

			</form>
    		</div>


		</div>
	</body>
	
</html>