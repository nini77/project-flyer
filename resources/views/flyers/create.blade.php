
@extends('layout')

<hr>
@section('content')
   <h1>Selling your home</h1>
   <form method="POST" action="/Flyers" enctype="multipart/form-data">
   		@include('flyers.form')
   </form>
@stop