@extends('layouts.master')

@section('content')
    <div class="starter-template">
        <h1>Browse Farmers Markets by State</h1>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    @foreach($stateColumns as $states)
                        <div class="col-md-4">
                            <ul>
                                @foreach($states as $state)
                                    <li>
                                        <a href="#">{{ $state->name }}</a>
                                        <span class="pull-right">{{ $state->total }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
