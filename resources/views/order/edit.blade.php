@extends('layouts.app')

@section('content')

<div class="form-style-6">
  <h1>Redaguoti užsakymą</h1>
  <form action="/order/edit" method="POST">
    @csrf
    <div>
      <input required type="text" name="status" placeholder="Statusas" class="form-control @error('name') is-invalid @enderror" />
      @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div>
      <input required type="text" name="done" placeholder="Baigtas" class="form-control @error('warranty') is-invalid @enderror" />
      @error('warranty')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div>
      <textarea required name="discount" placeholder="Nuolaida" class="form-control @error('description') is-invalid @enderror"></textarea>
      @error('description')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div>
      <textarea required name="price" placeholder="Kaina" class="form-control @error('specification') is-invalid @enderror"></textarea>
      @error('specification')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div>
        <input type="hidden" name="id" value={{$id}} class="form-control" />
    </div>
    <div>
      <input type="submit" value="Pateikti" />
    </div>
  </form>
</div>
@endsection