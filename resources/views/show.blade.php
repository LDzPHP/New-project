@extends('layouts.template')

@section('content')
    <div class="customer">
        <a href="/show/ {{ $customer->id }}">
            <h2> {{ $customer->name }} </h2>
        </a>
    <p> {{ $customer->email }} </p>
    <p> Customer ID {{ $customer->id }} </p>
    <span> Comments {{ $customer->comments()->count() }}</span>
    </div>
@endsection