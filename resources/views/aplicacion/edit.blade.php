@extends('layouts.app')

@section('content')
 <div class="container">

    <form action="{{ url('/aplicacion/'.$aplicacion->id) }}" method="post">

        @csrf
        {{method_field('PATCH') }}

        @include('aplicacion.form')

    </form>

 </div>
@endsection