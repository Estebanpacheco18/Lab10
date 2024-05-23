@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Notas</h1>
        <ul>
            @foreach($notes as $note)
                <li>{{ $note->title }}</li>
            @endforeach
        </ul>
    </div>
@endsection