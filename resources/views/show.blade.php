@extends('layouts.master')

@section('content')
    <div class="starter-template">
        <div class="page-header">
            <h1>
                {{ $state->name }}
                <small>{{ number_format($state->total) }}</small>
            </h1>
        </div>

        @include('partials.cities')
    </div>
@endsection
