@extends('app')

@section('content')
    <h1>Crear Usuario</h1>

    <form action="{{ route('users.store') }}" method="post">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name">

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email">

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password">

        <input type="submit" value="Crear Usuario">
    </form>
@endsection