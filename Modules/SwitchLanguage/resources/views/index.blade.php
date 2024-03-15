@extends('switchlanguage::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('switchlanguage.name') !!}</p>
@endsection
