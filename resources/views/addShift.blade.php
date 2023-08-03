@extends('layouts.app')

@section('title','Add Shift')

@section('dashboardRole','Add Shift')

<!-- @section('content') -->

@section('content')
    @if(session('status'))
        <h4 class="mx-4">{{ session('status')}}</h4>
        
    @endif
    <div class="container mt-5">
        <form action="{{ route ('submitForm') }}" method ="post">
		@csrf
            <!-- Client Dropdown -->
            <div class="form-group">
                <label for="client">Client</label>
                <select class="form-control" id="client" name="clientId">
                    <option value="">Select a client...</option>
                    <option value="1">Client 1</option>
                    <option value="2">Client 2</option>
                    <option value="3">Client 3</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <!-- Date Input -->
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="shiftDate">
            </div>

            <!-- Hours Input -->
            <div class="form-group">
                <label for="hours">Hours</label>
                <input type="number" class="form-control" id="hours" name="hours" step="0.25" min="0">
            </div>

            <!-- Expenses Input -->
            <div class="form-group">
                <label for="expenses">Expenses</label>
                <input type="number" class="form-control" id="expenses" name="expenses" step="0.01" min="0">
            </div>

            <!-- Kilometers Input -->
            <div class="form-group">
                <label for="km">Kilometers</label>
                <input type="number" class="form-control" id="km" name="km" step="0.1" min="0">
            </div>

            <!-- Note Textarea -->
            <div class="form-group">
                <label for="note">Note</label>
                <textarea class="form-control" id="note" name="note" rows="4"></textarea>
            </div>

            <!-- Submit Button -->
			<div class="form-group">
                <button type="submit" class="btn btn-primary mt-3 ">Submit</button>
                <a href="dashboard" class="btn btn-secondary mt-3">Cancel</a>
            </div>
        </form>
    </div>
@endsection
