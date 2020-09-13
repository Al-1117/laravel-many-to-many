
@extends('layouts/base')

@section('title')
Lista auto
@endsection


@section('main')


  {{-- Lista delle auto --}}
  <h1>Cars list</h1>

  {{-- Inserimento di una nuova auto --}}
  <div>
    <a href="{{route('cars.create')}}">Add new car</a>
  </div>
  <br>
  <br>
  
  {{-- Stampo a scher le auto --}}
  @foreach ($cars as $car)
    <div>
      <a href="{{ route('cars.show', $car)}}" >{{$car->manifacturer}} {{ $car->engine}}</a>
    </div>
    {{-- Tasto per modificare auto --}}
    <div>
      <a href="{{route('cars.edit', $car)}}">Modifica auto</a>
    </div>
    {{-- Form per eliminazione --}}
    <div class="delete">
      <form class="" action="{{route('cars.destroy', $car)}}" method="post">
        @csrf
        @method('DELETE')
        {{-- Tasto input elimina --}}
        <input type="submit" value="Elimina auto">
      </form>
    </div>
  @endforeach



@endsection
