@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form style="padding-top: 1%" action={{ route('products') }}>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" style="width: 80%" class="btn btn-primary">
                            {{ __('Prekės') }}
                        </button>
                    </div>
                </div>
            </form>
            <form style="padding-top: 1%" action={{ route('orders.index') }}>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" style="width: 80%" class="btn btn-primary">
                            {{ __('Užsakymai') }}
                        </button>
                    </div>
                </div>
            </form>
            @if(Auth::check())
            <form style="padding-top: 1%" action={{ route('profile.show', ['id' => Auth::id()]) }}>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" style="width: 80%" class="btn btn-primary">
                            {{ __('Profilis') }}
                        </button>
                    </div>
                </div>
            </form>
                @if(Auth::user()->role == 'client')
                    <form style="padding-top: 1%" action={{ route('client.statistics') }}>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" style="width: 80%" class="btn btn-primary">
                                    {{ __('Statistika') }}
                                </button>
                            </div>
                        </div>
                    </form>
                @endif
            @endif
        </div>
    </div>
</div>
@endsection
