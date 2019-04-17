@extends('layout')

@section('ttile','Contacto')

@section('content')
    <div class="container">
        <h1>Contacto</h1>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p> {{ $error }} </p>
            @endforeach
        @endif
        <form method="POST" action="{{ route('contacto') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" name="name" placeholder="Nombre" value="{{ old('name') }}" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{ old('email') }}" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Asunto</label>
                <input type="text" class="form-control" name="subjet" placeholder="Asunto" value="{{ old('subjet') }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mensaje</label>
                <textarea class="form-control" rows="5" id="comment" name="body" placeholder="Mensaje">{{ old('body') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
@endsection
