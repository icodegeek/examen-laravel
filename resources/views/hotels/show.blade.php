@extends('layout')

@section('title')
  {{ $hotel->name }}
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-6">
      <table class="table table-bordered">
        <caption style="text-align: center; color: white; background: black; margin-top: 20px; font-size: 20px;"><b>{{ $hotel->name }}</b></caption>
        <tbody>
          <tr>
            <td><b>Estrellas</b></td>
            <td>
              {{ $hotel->stars }}
            </td>
          </tr>
          <tr>
            <td><b>Habitaciones</b></td>
            <td>
              <ul>
                @foreach ($hotel->bedrooms as $bedroom)
                  <li>{{ $bedroom->name }}
                    <form style="display: inline" class="pull-right" action="{{ url('bedrooms/'.$bedroom->id) }}" method="post">
                        {{ method_field('delete') }}
                      <button style="margin-left: 15px; margin-bottom: 5px;" type="submit" class="btn btn-xs btn-danger">
                          <span class="glyphicon glyphicon-trash"></span>
                      </button>
                    </form>
                    <a class="pull-right"
                      href="{{ url('/bedrooms/' . $bedroom->id . '/edit')}}">
                      <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                  </li>
                  <br>
                  <hr>
                @endforeach
              </ul>
            </td>
          </tr>
        </tbody>
      </table>
      <a href="{{ url('/') }}"><< Home</a>
      <h1 style="text-align: center; margin-bottom: 30px;">Añadir nueva habitación</h1>
      <form class="form-horizontal" action="{{ url( 'hotels/' . $hotel->id )}}" method="post">
        <div class="form-group">
          <label for="name" class="control-label col-sm-2">Nombre:</label>
          <div class="col-sm-10">
            <input type="text" name="name" class="form-control" placeholder="Nombre de la habitación">
          </div>
        </div>
        <div class="form-group">
          <label for="status" class="control-label col-sm-2">Estado:</label>
          <div class="col-sm-10">
            <input type="text" name="status" class="form-control" placeholder="Estado de la habitación">
          </div>
        </div>
        <div class="form-group">
          <label for="beds" class="control-label col-sm-2">Plazas:</label>
          <div class="col-sm-10">
            <input type="text" name="beds" class="form-control" placeholder="Plazas de la habitación">
          </div>
        </div>
        <hr>
          <button style="margin-bottom: 30px"type="submit" class="btn btn-primary col-sm-6 col-sm-offset-3">Guardar habitación</button>
      </form>
    </div>
  </div>
@endsection
