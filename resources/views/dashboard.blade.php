@extends('layout.app')
@section('content')

@if (session('name'))
    {{ session('name') }}
@endif

@php
$contacts = ['0123456789', '0987654321', '0789456123'];
@endphp

<ul>
@forelse ( $contacts as $contact )
    <li>{{ $contact }}</li>
@empty
    <p>No Contacts Found </p>
@endforelse
</ul>

@endsection