@extends('layout')

@section('title')
  Editar Habitación {{ $bedroom->id }}
@endsection

@section('content')

  <div class="row">
    <div class="col-lg-6">

      <h1 style="text-align: center; margin-bottom: 30px;">Editar Habitación {{ $bedroom->id }}</h1>

      <form class="form-horizontal" action="http://localhost:8000/hotels/{{ $bedroom->id }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group">
          <label for="name" class="control-label col-sm-2">Nombre:</label>
          <div class="col-sm-10">
            <input type="text" name="name" class="form-control" value="{{ $bedroom->name }}">
          </div>
        </div>
        <div class="form-group">
          <label for="status" class="control-label col-sm-2">Estado:</label>
          <div class="col-sm-10">
            <input type="text" name="status" class="form-control" value="{{ $bedroom->status }}">
          </div>
        </div>
        <div class="form-group">
          <label for="beds" class="control-label col-sm-2">Plazas:</label>
          <div class="col-sm-10">
            <input type="text" name="beds" class="form-control" value="{{ $bedroom->beds }}">
          </div>
        </div>
        <a href="{{ url('/') }}"><< Home</a>
        @if ( count($errors) )
          @foreach ($errors->all() as $error)
            <span style="color: red; margin-bottom: 20px" class="help-block col-sm-offset-4"><i>{{ $error }}</i></span>
          @endforeach
        @endif
        <hr>
        <div class="form-group">
          <div class="col-sm-offset-5">
            <button type="submit" class="btn btn-primary">Actualizar datos</button>
          </div>
        </div>
      </form>

    </div>
  </div>

@endsection
