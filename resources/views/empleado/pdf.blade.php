<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
                                        
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Cedula</th>
										<th>Telefono</th>
										<th>Nombre sucursal</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleados as $empleado)
                                        <tr>
                                            
                                            
											<td>{{ $empleado->nombres }}</td>
											<td>{{ $empleado->apellidos }}</td>
											<td>{{ $empleado->cedula }}</td>
											<td>{{ $empleado->telefono }}</td>
											<td>{{ $empleado->sucursal_id }}</td>

                                            <td>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>    

</body>
</html>