@extends('layouts.dashboard')
@section('contentdashb')

<div class="row">
  <div class="col-6">
    Miejsce strażnika
</div>
<div class="col-md-4">
  <form action="/szukajstraznika" method="get">
    <div class="input-group">
      <input type="search" name="search" class="form-control">
      <span class="input-group-prepend">
        <button type="submit" class="btn btn-primary">Szukaj</button>
</span>
</div>
</form>
</div>
<div class="col-6">
  <a class="float-right" href="/dodaj_miejsces">
    <button type="button" class="btn btn-primary">Dodaj</button>
</a>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID Strażnika</th>
      <th scope="col">Miejsce</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
    @foreach($miejsceuseras as $miejsceusera)
      <tr>
        <th scope="row">{{$miejsceusera->id_straznika}}</th>
        <td>{{$miejsceusera->Miejsce}}</td>
        <td>
        <a href="edycjamiejscas/{{ $miejsceusera -> id }}">Edytuj</a>
        <a href="skasujmiejsces/{{ $miejsceusera -> id}}">Usuń</a>
        </td>  
      </tr>
      
    @endforeach
  </tbody>
</table>
{{ $miejsceuseras->links() }}
</div>

@endsection('contentdashb')