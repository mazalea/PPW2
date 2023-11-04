@extends('auth.layouts')

@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Photo</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($userss as $user)
    <tr>
      <th scope="row">1</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td><img src="{{asset('storage/'.$users->photo)}}" width="150px"></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection

