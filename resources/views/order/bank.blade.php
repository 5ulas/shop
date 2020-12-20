@extends('layouts.app')

@section('content')

<div class="form-style-6">
  <h1>Pateikti informacija</h1>
  <form action="/order/bank" method="POST">
    @csrf
    <div>
        <input type="checkbox" name="terms" value="Mozilla" required/> Sutinku su pirkimo sąlygomis<br>
    </div>
    <div>
        <p>
        <p>Please select your bank:</p>
        <input name="bank" type="radio" value="Swedbank">
        <label for="age1">Swedbank</label><br>
        <input name="bank" type="radio" value="SEB">
        <label for="age2">SEB</label><br>  
        <input name="bank" type="radio" value="Citadele">
        <label for="age3">Citadele</label><br><br>

        <input name="id" type="hidden" value={{$id}}>
    </div>
    <div>
        <input type="submit" value="Pateikti" />
      </div>
  </form>
</div>
@endsection