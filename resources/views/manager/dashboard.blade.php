@extends('layouts.manager')

@section('title','Manager Dashboard')

@section('dashboardRole','Manager Dashboard')

@section('content')

@section('content')
    @if(session('status'))
        <h4 class="mx-4">{{ session('status')}}</h4>
    @endif
@endsection
