@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Statistika</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Iš viso užsakymų:</label>
                            <div class="col-md-6">
                                <p class="form-control">{{$count}} </p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Bendra suma:</label>
                            <div class="col-md-6">
                                <p class="form-control">{{$total_price}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Santaupos:</label>
                            <div class="col-md-6">
                                <p class="form-control">{{$total_discount}} </p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Sulaukta užsakymų:</label>
                            <div class="col-md-6">
                                <p class="form-control">{{$done_count}} / {{$count}} = {{($count == 0 ? 0 : $done_count/$count*100)}}%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
