@extends('layouts.dashboard')
@section('contentdashb')

<div class="row">
  <div class="col-6">
    Kary
</div>
<div class="col-md-4">
  <form action="/szukaj" method="get">
    <div class="input-group">
      <input type="search" name="search" class="form-control">
      <span class="input-group-prepend">
        <button type="submit" class="btn btn-primary">Szukaj</button>
</span>
</div>
</form>
</div>
<div class="col-6">
  <a class="float-right" href="/dodaj_kare">
    <button type="button" class="btn btn-primary">Dodaj</button>
</a>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID Kary</th>
      <th scope="col">ID Wieznia</th>
      <th scope="col">Typ</th>
      <th scope="col">Data rozpoczęcia</th>
      <th scope="col">Planowana data zakończenia</th>
      <th scope="col">Dodatkowe kary</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
    @foreach($karas as $kara)
      <tr>
        <th scope="row">{{$kara->id}}</th>
        <td>{{$kara->id_wieznia}}</td>
        <td>{{$kara->Typ}}</td>
        <td>{{$kara->data_rozpoczecia}}</td>
        <td>{{$kara->planowana_data_zakonczenia}}</td>
        <td>{{$kara->dodatkowe_kary}}</td> 
        <td>
        <a href="edycjakary/{{ $kara -> id }}">Edytuj</a>
        <a href="usun/{{ $kara -> id}}">Usuń</a>
        </td>  
      </tr>
      
    @endforeach
  </tbody>
</table>
{{ $karas->links() }}
</div>

@endsection('contentdashb')