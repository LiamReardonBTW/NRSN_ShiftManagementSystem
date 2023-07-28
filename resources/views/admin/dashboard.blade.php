@extends('layouts.master')

@section('title','Admin Dashboard')

@section('dashboardRole','Admin Dashboard')

@section('content')
<div class="row">
    <div class="mt-4 mx-4 col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Register New User</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/admin/register">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
@endsection
