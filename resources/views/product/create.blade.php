@extends('layouts.app')

@section('content')

<div class="form-style-6">
  <h1>Naujas produktas</h1>
  <form action="/product/create" method="POST">
    @csrf
    <div>
      <input type="text" name="name" placeholder="Pavadinimas" class="form-control @error('name') is-invalid @enderror" />
      @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div>
      <input type="text" name="warranty" placeholder="Garantija" class="form-control @error('warranty') is-invalid @enderror" />
      @error('warranty')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div>
      <textarea name="description" placeholder="Aprašymas" class="form-control @error('description') is-invalid @enderror"></textarea>
      @error('description')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div>
      <textarea name="specification" placeholder="Specifikacija" class="form-control @error('specification') is-invalid @enderror"></textarea>
      @error('specification')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div>
      <input type="text" name="price" placeholder="Kaina" class="form-control @error('price') is-invalid @enderror" />
      @error('price')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div>
      <input type="text" name="special_storing_terms" placeholder="Ypatingos salygos" class="form-control @error('special_storing_terms') is-invalid @enderror" />
      @error('special_storing_terms')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div>
      <input type="text" name="volume" placeholder="Tūris" class="form-control @error('volume') is-invalid @enderror" />
      @error('volume')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div>
      <input type="text" name="weight" placeholder="Svoris" class="form-control @error('weight') is-invalid @enderror" />
      @error('weight')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div>
      <input type="submit" value="Pateikti" />
    </div>
  </form>
</div>
@endsection