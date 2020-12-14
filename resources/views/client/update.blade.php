@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profilio redagavimas</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('client.update', ['user' => Auth::user()]) }}">
                        @csrf
                        @method('PATCH')
                        <div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Vardas</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                           name="name" value="{{ old('name') ?? $user->client->name ?? '' }}" autocomplete="name">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="surname" class="col-md-4 col-form-label text-md-right">Pavardė</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror"
                                           name="surname" value="{{ old('surname') ?? $user->client->surname ?? '' }}" autocomplete="surname">

                                    @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="age" class="col-md-4 col-form-label text-md-right">Amžius</label>

                                <div class="col-md-6">
                                    <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age"
                                           value="{{ old('age') ?? $user->client->age ?? '' }}" autocomplete="age">

                                    @error('age')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="iban" class="col-md-4 col-form-label text-md-right">Banko sąskaita</label>

                                <div class="col-md-6">
                                    <input id="iban" type="text" class="form-control @error('iban') is-invalid @enderror"
                                           name="iban" value="{{ old('iban') ?? $user->client->iban ?? '' }}" autocomplete="iban" style="width: 100%">

                                    @error('iban')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Adresas</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                                           name="address" value="{{ old('address') ?? $user->client->address ?? '' }}" autocomplete="address">

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="postal_code" class="col-md-4 col-form-label text-md-right">Pašto kodas</label>

                                <div class="col-md-6">
                                    <input id="postal_code" type="text"
                                           class="form-control @error('postal_code') is-invalid @enderror" name="postal_code"
                                           value="{{ old('postal_code') ?? $user->client->postal_code ?? '' }}" autocomplete="postal_code">

                                    @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Redaguoti
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
