@extends('layouts.dashboard')
@section('contentdashb')

<div class="row">
  <div class="col-6">
    Miejsce więźnia
</div>
<div class="col-md-4">
  <form action="/szukajwieznia" method="get">
    <div class="input-group">
      <input type="search" name="search" class="form-control">
      <span class="input-group-prepend">
        <button type="submit" class="btn btn-primary">Szukaj</button>
</span>
</div>
</form>
</div>
<div class="col-6">
  <a class="float-right" href="/dodaj_miejscew">
    <button type="button" class="btn btn-primary">Dodaj</button>
</a>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID Wieznia</th>
      <th scope="col">Imie</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Miejsce</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
    @foreach($miejsce_wieznias as $miejsce_wieznia)
      <tr>
        <th scope="row">{{$miejsce_wieznia->id_wieznia}}</th>
        <td>{{$miejsce_wieznia->Imie}}</td>
        <td>{{$miejsce_wieznia->Nazwisko}}</td>
        <td>{{$miejsce_wieznia->Miejsce}}</td>
        <td>
        <a href="edycjamiejsca/{{ $miejsce_wieznia -> id }}">Edytuj</a>
        <a href="skasujmiejsce/{{ $miejsce_wieznia -> id}}">Usuń</a>
        </td>  
      </tr>
      
    @endforeach
  </tbody>
</table>
{{ $miejsce_wieznias->links() }}
</div>

@endsection('contentdashb')