@extends('app')

@section('content')
  <div class="container w-25 border p-4">
    <form action="{{ route('todos') }}" method="POST">
      @csrf
      @if (session('success'))
        <h6 class="alert alert-success">
          {{session('success')}}
        </h6>        
      @endif
      @error('tittle')
        <h6 class="alert alert-danger">
          {{ $message }}
        </h6>        
      @enderror
      <div class="mb-3">
        <label for="tittle" class="form-label">Titulo de la Tarea</label>
        <input type="text" name="tittle" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Nueva tarea</button>
    </form>
  </div>
@endsection