@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
                <div class="card-header">Profilis</div>
                <div class="card-body">
                <form method="POST" action="{{ route('employee.update', ['user' => Auth::user()]) }}">
                   
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">E-Paštas</label>
                        <div class="col-md-6">
                            <p id="email" class="form-control">{{$user->email}} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Telefonas</label>
                        <div class="col-md-6">
                            <p id="email" class="form-control">{{$user->phone}} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Vartotojo vardas</label>
                        <div class="col-md-6">
                            <p id="email" class="form-control">{{$user->username}} </p>
                        </div>
                    </div>
                    
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Vardas</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') ?? $user->employee->name ?? '' }}" autocomplete="name">

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
                                        name="surname" value="{{ old('surname') ?? $user->employee->surname ?? '' }}" autocomplete="surname">

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
                                        value="{{ old('age') ?? $user->employee->age ?? '' }}" autocomplete="age">

                                @error('age')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="IBAN" class="col-md-4 col-form-label text-md-right">Banko sąskaita</label>

                            <div class="col-md-6">
                                <input id="IBAN" type="text" class="form-control @error('IBAN') is-invalid @enderror"
                                        name="IBAN" value="{{ old('IBAN') ?? $user->employee->IBAN ?? '' }}" autocomplete="IBAN" style="width: 100%">

                                @error('IBAN')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                           
                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Redaguoti profilį
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
    <a href="{{"/employee" . "/delete" . "/"  . $user->id}}" class="btn btn-xs btn-info pull-right">Ištrinti</a>

</div>
@endsection
