@extends('layouts.master')

@section('content')
    <div class="starter-template">
        <div class="page-header">
            <h1>
                {{ $city->state }} -> {{ $city->name }}
            </h1>
            <small>{{ number_format($city->total) }}</small>
        </div>

        @include('partials.city')
    </div>
@endsection
