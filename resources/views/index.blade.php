<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Insert title here</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}">
	</head>

	<body>

		<div class="login-form">
		@if ($errors->any())
        <a>
            @foreach ($errors->all() as $error)
                <a>{{ $error }}</a>
            @endforeach
</a>
@endif
	@if(session('danger'))
		{{session('danger')}}
	@endif


  			<form  method="post" action="{{route('auth.user')}}">
				@csrf
    			<h1>Login</h1>
    			<div class="content">
      				<div class="input-field">
        				<input type="email" placeholder="Email" name="email">
      				</div>
      				<div class="input-field">
        				<input type="password" placeholder="Password" name="password">
      				</div>
    			</div>
    		<div class="action">
      			<button type="submit">Sign in</button>
			</form>
				  <form action="{{route('register.page')}}">
					<button type="submit">Register</button>

			</form>

    		</div>


		</div>
	</body>
	
</html>