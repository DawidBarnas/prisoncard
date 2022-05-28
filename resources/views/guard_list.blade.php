@extends('layouts.dashboard')
@section('contentdashb')
<div class="row">
<div class="col-6">
    Lista strażników
<div class="col-6">
  <a class="float-right" href="/add_delete_guard">
    <button type="button" class="btn btn-primary">Dodaj</button>
</a>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Imie</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Email</th>
      <th scope="col">Stopien</th>
      <th scope="col">Telefon</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
    @foreach($guards as $guard)
      <tr>
        <th scope="row">{{$guard->id}}</th>
        <td>{{$guard->name}}</td>
        <td>{{$guard->surname}}</td>
        <td>{{$guard->email}}</td>
        <td>{{$guard->Stopien}}</td>
        <td>{{$guard->Telefon}}</td>    
        <td>
        <a href="guard_edit/{{ $guard -> id }}">Edytuj </a>
          <a href="deleteguard/{{ $guard -> id }}">Usuń</a>
        </td>    
      </tr>
      
    @endforeach
  </tbody>
</table>
{{ $guards->links() }}
</div>

@endsection('contentdashb')