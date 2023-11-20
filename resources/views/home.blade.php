<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Insert title here</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}">
	</head>
	
	<body>
		<div class="login-form">	    
		    <div class="action">
		      <button><a href="{{route('reg.view')}}">Cadastrar funcionários</button>
			  </div>
			  <div class="action"> 
			  <button><a href="{{route('list.view')}}">Listar funcionários</button>
		    </div>
		    
		    <div class="action">
		      
		    </div>
		    <div class="action">
		      <button type="submit"><a href="{{route('logout.page')}}">Sair</a></button>
		    </div>		
			
			
		</div>	
	</body>

</html>