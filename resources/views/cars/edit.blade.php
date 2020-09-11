
<h2>Aggiornamento dati auto</h2>

<form class="" action="{{route('cars.update', $car)}}" method="post">
  @csrf
  @method('PUT')

  {{-- FORM PER MODIFICARE I DATI DELL'AUTO --}}
  <div>
    <label>Manifacturer:</label>
    <input type="text" name="manifacturer" value="{{ old('manifacturer') ? old('manifacturer') : $car->manifacturer}}">
  </div>

  <br>

  <div>
    <label>Year:</label>
    <input type="number" name="year" value="{{ old('year') ? old('year') : $car->year}}">
  </div>

  <br>

  <div>
    <label>Engine:</label>
    <input type="text" name="engine" value="{{ old('engine') ? old('engine') : $car->engine}}">
  </div>

  <br>

  <div>
    <label>Plate</label>
    <input type="text" name="plate" value="{{ old('plate') ? old('plate') : $car->plate}}">
  </div>

  <br>

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

  <br>

  {{-- USERS --}}

  <div>
    <select name="user_id">
      @foreach ($users as $user)
        <option value="{{$user->id}}" {{ ($user->id == $car->user->id) ? 'selected' : '' }}>{{$user->name}}</option>
      @endforeach
    </select>
  </div>

  <br>

  <input type="submit" value="Conferma">



</form>
