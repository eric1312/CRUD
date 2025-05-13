@extends('layouts.app')
@section('content')
  <div class="card-body">
    <h5 class="card-title">Eliminar el Libro</h5>
    <form action="{{ route('libros.destroy') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="idLibro">Id del libro:</label>
            <input type="text" id="idLibro" name="idLibro" class="form-control" required>
        </div>
       
        <button type="submit" class="form-control">Eliminar</button>
    </form>
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-success" role="alert">
            {{ session('error') }}
        </div>
    @endif
   </div> 
</div>
@endsection