@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profilis</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Pavadinimas</label>
                            <div class="col-md-6">
                                <p id="email" class="form-control">{{$user->supplier->title ?? 'N/A'}} </p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Įmonės kodas</label>
                            <div class="col-md-6">
                                <p id="email" class="form-control">{{$user->supplier->company_name ?? 'N/A'}} </p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Banko sąskaita</label>
                            <div class="col-md-6">
                                <p id="email" class="form-control">{{$user->supplier->iban ?? 'N/A'}} </p>
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
                        <form action={{ route('supplier.edit', ['user' => Auth::user()->id]) }}>
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
            </div>
        </div>
    </div>
@endsection
