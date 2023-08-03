@extends('layouts.app')

@section('title','Dashboard')

@section('dashboardRole','Dashboard')

<!-- @section('content') -->

@section('content')
    @if(session('status'))
        <h4 class="mx-4">{{ session('status')}}</h4>
        
    @endif
    <div class="container mt-5">
        <h2>Shift Table</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Shift ID</th>
                    <th>Client ID</th>
                    <th>Worker ID</th>
                    <th>Date</th>
                    <th>Km</th>
                    <th>Hours</th>
                    <th>Expenses</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
               
                    <tr>
                        <td>John</td>
                        <td>01</td>
                        <td>2023</td>
                        <td>012</td>
                        <td>2022-01-23</td>
                        <td>33</td>
                        <td>4</td>
                        <td>$23</td>
                        <td> John had a great time</td>
                    </tr>
                    <tr>
                        <td>Gabriel</td>
                        <td>01</td>
                        <td>2023</td>
                        <td>012</td>
                        <td>2022-01-23</td>
                        <td>33</td>
                        <td>4</td>
                        <td>$23</td>
                        <td> John is upset</td>
                    </tr>
                    @foreach ($shifts as $shift )
                        <tr>
                            <td> {{ $shift['clientId'] }}</td>
                            <td>{{ $shift['shiftId'] }}</td>
                            <td>{{ $shift['clientId'] }}</td>
                            <td>{{ $shift['worker_id'] }}</td>
                            <td>{{ $shift['shiftDate'] }}</td>
                            <td>{{ $shift['km'] }}</td>
                            <td>{{ $shift['hours'] }}</td>
                            <td>{{ $shift['expenses'] }}</td>
                            <td>{{ $shift['note'] }}</td>
                        </tr>
                        


                  
                    @endforeach
               
            </tbody>
        </table>
    </div>
@endsection
