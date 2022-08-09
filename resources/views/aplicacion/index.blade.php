@extends('layouts.app')
@section('content')
<div class="container">

<a href="{{ url('/aplicacion/create') }}" class="btn btn-success"> Registrar nueva nota</a>
<br/>
<br/>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Autor</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
    <tbody>

        @foreach($aplicacion as $aplicacion)
         <tr>
            <td>{{ $aplicacion->id }}</td>
            <td>{{ $aplicacion->Titulo }}</td>
            <td>{{ $aplicacion->Descripcion }}</td>  
            <td>{{ $aplicacion->user_id }}</td>
            <td>

            @if(Auth::user()->id == 1)
                <a href="{{ url('/aplicacion/'.$aplicacion->id.'/edit') }}" class="btn btn-warning"> 
                Editar 
                </a>
            @endif

            
              @if(Auth::user()->id== 1)
                    <form action="{{ url('/aplicacion/'.$aplicacion->id) }}" class="d-inline" method="post">
                @csrf 
                
                {{ method_field('DELETE') }}
                <input class="btn btn-danger" type="submit" onclick="return confirm ('¿Quieres borrar?')"
                value="Borrar">

                </form>
                @endif 
            </td>
            
         </tr>
        @endforeach

    </tbody>
</table>
</div>
@endsection