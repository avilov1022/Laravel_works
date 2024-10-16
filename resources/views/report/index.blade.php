@extends('layouts.main')
@section('content')
    <div class="container">
        @foreach ($reports as $report)
            <div class="item">                
                <p>{{ $report->id }}</p>
                <p>{{ $report->number }}</p>
                <p>{{ $report->description }}</p>
            </div>
        @endforeach
    </div>
@endsection