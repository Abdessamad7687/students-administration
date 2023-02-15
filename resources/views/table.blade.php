@extends('layout.layout')
@section('content')

<div class="container mt-4 p-2">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Mathematics</th>
      <th scope="col">Physics</th>
      <th scope="col">Science</th>
      <th scope="col">English</th>
      <th scope="col">French</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  @foreach($Students as $Student)
    <tr>
      <th scope="row">{{ $Student['id'] }}</th>
      <td>{{ $Student['name'] }}</td>
      <td>{{ $Student['mathematics'] }}</td>
      <td>{{ $Student['physics'] }}</td>
      <td>{{ $Student['science'] }}</td>
      <td>{{ $Student['english'] }}</td>
      <td>{{ $Student['french'] }}</td>
      <td>Actions</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>

@endsection