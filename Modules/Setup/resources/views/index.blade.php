@extends('setup::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('setup.name') !!}</p>
@endsection
