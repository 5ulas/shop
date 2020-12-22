@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profilis</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Vardas</label>
                        <div class="col-md-6">
                            <p id="email" class="form-control">{{$user->client->name ?? 'N/A'}} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Pavardė</label>
                        <div class="col-md-6">
                            <p id="email" class="form-control">{{$user->client->surname ?? 'N/A'}} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Amžius</label>
                        <div class="col-md-6">
                            <p id="email" class="form-control">{{$user->client->age ?? 'N/A'}} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Banko sąskaita</label>
                        <div class="col-md-6">
                            <p id="email" class="form-control">{{$user->client->iban ?? 'N/A'}} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Adresas</label>
                        <div class="col-md-6">
                            <p id="email" class="form-control">{{$user->client->address ?? 'N/A'}} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Pašto kodas</label>
                        <div class="col-md-6">
                            <p id="email" class="form-control">{{$user->client->postal_code ?? 'N/A'}} </p>
                        </div>
                    </div>
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
                    <form style="padding-top: 1%" action={{ route('client.edit', ['user' => Auth::user()->id]) }}>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Redaguoti profilį
                                </button>
                            </div>
                        </div>
                    </form>
                    <form style="padding-top: 1%" action={{ route('password.request') }}>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Pamiršote slaptažodį?') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <form style="padding-top: 1%" method="POST" action={{ route('user.delete', ['id' => Auth::id()]) }}>
                        @csrf
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Ištrinti abonementą?') }}
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
