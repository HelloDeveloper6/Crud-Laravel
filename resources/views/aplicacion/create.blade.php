@extends('layouts.app')
@section('content')
 <div class="container">


    <form action="{{ url('/aplicacion') }}" method="POST" >
     @csrf
     @include('aplicacion.form')
   </form>
 </div>
@endsection