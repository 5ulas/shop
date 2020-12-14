@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profilio redagavimas</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('supplier.update', ['user' => Auth::user()]) }}">
                            @csrf
                            @method('PATCH')
                            <div>
                                <div class="form-group row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right">Pavadinimas</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                               name="title" value="{{ old('title') ?? $user->supplier->title ?? '' }}" autocomplete="title">

                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="company_code" class="col-md-4 col-form-label text-md-right">Įmonės kodas</label>

                                    <div class="col-md-6">
                                        <input id="company_code" type="text" class="form-control @error('company_code') is-invalid @enderror"
                                               name="company_code" value="{{ old('company_code') ?? $user->supplier->company_code ?? '' }}" autocomplete="company_code">

                                        @error('company_code')
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
                                               name="iban" value="{{ old('iban') ?? $user->supplier->iban ?? '' }}" autocomplete="iban" style="width: 100%">

                                        @error('iban')
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
