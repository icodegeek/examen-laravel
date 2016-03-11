@extends('layout')

@section('title')
  Lista de Hoteles
@endsection

@section('content')
  <h1><b><u>Lista de Hoteles</u></b></h1>

  <ul>
    @foreach ($hoteles as $hotel)
      <li>
        <a href="hotels/{{ $hotel->id }}">{{ $hotel->name }}</a>
      </li>
    @endforeach
  </ul>

@endsection
