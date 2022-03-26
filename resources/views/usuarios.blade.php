<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <h1>Listado de Usuarios</h1>

    @extends('layouts.app')
    @section('title', 'Usuarios')
    @section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            
            @if ($usuarios->isEmpty())
                <div>No hay Usuarios</div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{!! $usuario->namespace !!}</td>
                                <td>{!! $usuario->email !!}</td>
                                <td>{!! $usuario->telefono !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
  <!--  @section('content') 
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">-->
                        
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                        </tr>
                    </thead>
                    <tbody>
                      <!--  @foreach($usuarios as $usuario)
                            <tr>
                                <td>{ $usuario->Nombre}</td>
                                <td>{ $usuario->email}</td>
                                <td>{ $usuario->telefono}</td>
                            </tr>
                        @endforeach -->
                    </tbody>
                </table>
            
 <!--       </div>
    </div>
@endsection -->

@section('scripts')

@endsection
</body>
</html>