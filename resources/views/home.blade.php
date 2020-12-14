@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <a href="{{ route('products') }}" class="text-sm text-gray-700 underline">Produktai</a>
            </div>
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Prisijungusio vartotojo ekranas') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
