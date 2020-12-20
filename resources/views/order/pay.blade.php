@extends('layouts.app')

@section('content')
    <body>
        <div style="text-align: center">
            <td><a href="{{"/order/debt" . "/"  . $id}}" class="btn btn-xs btn-info pull-right">I skola</a></td>
            <td><a href="{{"/order/bank" . "/"  . $id}}" class="btn btn-xs btn-info pull-right">Bankinis pavedimas</a></td>
        </div>
    </body>
@endsection