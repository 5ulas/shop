@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Atsiliepimas</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('feedbacks.create', ['product_id' => $product_id]) }}">
                            @csrf
                            <div>
                                <div class="form-group row">
                                    <label for="comment" class="col-md-4 col-form-label text-md-right">Komentaras</label>

                                    <div class="col-md-6">
                                        <input id="comment" type="text" class="form-control @error('comment') is-invalid @enderror"
                                               name="comment" value="" autocomplete="comment">

                                        @error('comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="rating" class="col-md-4 col-form-label text-md-right">Įvertis</label>

                                    <div class="col-md-6">
                                        <input id="rating" type="number" class="form-control @error('rating') is-invalid @enderror" name="rating"
                                               value="" autocomplete="rating">

                                        @error('rating')
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
                                        Sukurti atsiliepimą
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
