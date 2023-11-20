<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Insert title here</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}">
	</head>

	<body>

		<div class="login-form">


  			<form  method="post" action="{{route('reg.user')}}">
				@csrf
    			<h1>Cadastro</h1>
    			<div class="content">
                <div class="input-field">
        				<input type="text" placeholder="Name" name="name">
      				</div>
      				<div class="input-field">
        				<input type="email" placeholder="Email" name="email">
      				</div>
      				<div class="input-field">
        				<input type="password" placeholder="Password" name="password">
      				</div>
    			</div>
    		<div class="action">
      			<button type="submit">Cadastrar</button>
                  </form>
				  <form action="{{route('logout.page')}}">
					<button type="submit">Retornar</button>

			</form>
    		</div>


		</div>
	</body>
	
</html>