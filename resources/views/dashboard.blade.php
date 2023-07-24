@extends('layouts.app')

@section('title','Dashboard')

@section('dashboardRole','Dashboard')

@section('content')

@section('content')
    @if(session('status'))
        <h4 class="mx-4">{{ session('status')}}</h4>
    @endif
@endsection
