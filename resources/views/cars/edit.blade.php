
<h2>Aggiornamento dati auto</h2>

<form class="" action="{{route('cars.update', $car)}}" method="post">
  @csrf
  @method('PUT')

  {{-- FORM PER MODIFICARE I DATI DELL'AUTO --}}
  <div>
    <label>Manifacturer:</label>
    <input type="text" name="manifacturer" value="{{old('manifacturer')}}">
  </div>

  <div>
    <label>Year:</label>
    <input type="number" name="year" value="{{old('year')}}">
  </div>

  <div>
    <label>Engine:</label>
    <input type="text" name="engine" value="{{old('engine')}}">
  </div>

  <div>
    <label>Plate</label>
    <input type="text" name="plate" value="{{old('plate')}}">
  </div>

  {{-- TAGS --}}
  <div>
    <span>Type</span>
    @foreach ($car->tags as $tag)
      <div>
        <input type="checkbox" name="tags[]" value="{{$tag->id}}">
        <label>{{$tag->name}}</label>
      </div>
    @endforeach
  </div>

  {{-- USERS --}}

  <div>
    <select name="user_id">
      @foreach ($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
      @endforeach
    </select>
  </div>
  <input type="submit" value="Conferma">



</form>
