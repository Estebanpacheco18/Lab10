@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Notas</h1>
        <ul>
        
@foreach($users as $user)
    <li>{{ $user->name }}</li>
@endforeach
    </div>
@endsection