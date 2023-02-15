@extends('layout.layout')

@section('content')
    <div class="container p-2 mt-4 d-flex">
        @foreach($Students as $Student)
            <div class="card m-2" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-title text-left">Full-Name: <strong>{{ $Student['name'] }}</strong></p>
                        <hr>
                        <p class="card-text ">Mathematics: <strong>{{ $Student['mathematics'] }}</strong> </p>
                        <p class="card-text">Physics: <strong>{{ $Student['physics'] }}</strong> </p>
                        <p class="card-text">Science: <strong>{{ $Student['science'] }}</strong> </p>
                        <p class="card-text">English: <strong>{{ $Student['english'] }}</strong> </p>
                        <p class="card-text">French: <strong>{{ $Student['french'] }}</strong> </p>
                    </div>
            </div>
        @endforeach
    </div>

@endsection