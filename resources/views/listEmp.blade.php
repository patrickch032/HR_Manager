
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Insert title here</title>

<link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}">
	</head>
	
	<body>
		<div class="login-form">
			<table class="styled-table">
				<thead>
					<tr>
						<th>ID</th><th>Nome</th><th>Sobrenome</th><th>Turno</th><th>Posição</th><th></th><th></th><th></th><th></th>
					</tr>
				</thead>

				<tbody>

	            @foreach ($employees as $employee)

                <tr>
                    <td>{{ $employee->id}}</td>
                    <td>{{ $employee->firstName }}</td>
                    <td>{{ $employee->lastName }}</td>
                    <td>{{ $employee->shift }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>
                        <button type="button"><a href="{{ route('employees.edit', $employee->id) }}">Editar</a></button>&nbsp;
                    <td>
                    <form action="{{ route('employees.destroy', $employee->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            
                            <button type="submit">Apagar</button>
</form>
                    </td>
                </tr>
            @endforeach
                    <tr>
				</tbody>
			</table>
	    	<div class="action">

					<button type="submit"><a href="{{route('home.view')}}">Retornar</a></button>

    		</div>
		</div>
	</body>
</html>