@extends('layouts.master')

@section('content')
    <div class="starter-template">
        <div class="page-header">
            <h1>
                {{ $stateName }} -> {{ $cityName }}
            </h1>
            <small>{{ number_format(count($markets)) }}</small>
        </div>

        @include('partials.city')
    </div>
@endsection
