@extends('layouts.dashboard')
@section('contentdashb')

<div class="row">
  <div class="col-6">
    Przestepstwa
</div>
<div class="col-md-4">
  <form action="/szukajprzestepstwa" method="get">
    <div class="input-group">
      <input type="search" name="search" class="form-control">
      <span class="input-group-prepend">
        <button type="submit" class="btn btn-primary">Szukaj</button>
</span>
</div>
</form>
</div>
<div class="col-6">
  <a class="float-right" href="/dodaj_przestepstwo">
    <button type="button" class="btn btn-primary">Dodaj</button>
</a>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID Przestepstwa</th>
      <th scope="col">ID Wieznia</th>
      <th scope="col">Data popełnienia przestepstwa</th>
      <th scope="col">Data rozprawy</th>
      <th scope="col">Klasyfikacja</th>
      <th scope="col">Opis</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
    @foreach($przestepstwos as $przestepstwo)
      <tr>
        <th scope="row">{{$przestepstwo->id}}</th>
        <td>{{$przestepstwo->id_wieznia}}</td>
        <td>{{$przestepstwo->data_popelnienia}}</td>
        <td>{{$przestepstwo->data_rozprawy}}</td>
        <td>{{$przestepstwo->Klasyfikacja}}</td>
        <td>{{$przestepstwo->Status}}</td> 
        <td>
        <a href="edycja/{{ $przestepstwo -> id }}">Edytuj</a>
        <a href="skasuj/{{ $przestepstwo -> id}}">Usuń</a>
        </td>  
      </tr>
      
    @endforeach
  </tbody>
</table>
{{ $przestepstwos->links() }}
</div>

@endsection('contentdashb')