@extends('layouts.app')

@section('content')

<div class="form-style-6">
  <h1>Naujas produktas</h1>
  <form action="/product/create" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Pavadinimas" />
    <input type="text" name="warranty" placeholder="Garantija" />
    <textarea name="description" placeholder="Aprašymas"></textarea>
    <textarea name="specification" placeholder="Specifikacija"></textarea>
    <input type="text" name="price" placeholder="Kaina" />
    <input type="text" name="special_storing_terms" placeholder="Ypatingos salygos" />
    <input type="text" name="volume" placeholder="Tūris" />
    <input type="text" name="weight" placeholder="Svoris" />
    <input type="submit" value="Pateikti" />
  </form>
</div>
@endsection