@extends('layouts.dashboard')
@section('contentdashb')


<div class="row">
  <div class="col-6">
    <h2>Logi dodań więźniów</h2>
  </div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Osoba dodająca</th>
      <th scope="col">Id więźnia</th>
      <th scope="col">Imie więźnia</th>
      <th scope="col">Nazwisko więźnia</th>
      <th scope="col">Data dodania więźnia</th>
    </tr>
  </thead>
  <tbody>
    @foreach($AddPrisoners as $AddPrisoner)
      <tr>
        <th scope="row">{{$AddPrisoner->id}}</th>
        <td>{{$AddPrisoner->user_ac}}</td>
        <td>{{$AddPrisoner->id_n}}</td>
        <td>{{$AddPrisoner->name}}</td>
        <td>{{$AddPrisoner->surname}}</td>
        <td>{{$AddPrisoner->date}}</td>     
      </tr>
      
    @endforeach
  </tbody>
</table>
{{ $AddPrisoners->appends(['EP' => $EditPrisoners->currentPage(),'DP' => $DelPrisoners->currentPage()])->links() }}
</div>



<div class="row">
  <div class="col-6">
    <h2>Logi usunięć więźniów</h2>
  </div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Osoba usuwająca</th>
      <th scope="col">Id więźnia</th>
      <th scope="col">Imie więźnia</th>
      <th scope="col">Nazwisko więźnia</th>
      <th scope="col">Data usunięcia więźnia</th>
    </tr>
  </thead>
  <tbody>
    @foreach($DelPrisoners as $DelPrisoner)
      <tr>
        <th scope="row">{{$DelPrisoner->id}}</th>
        <td>{{$DelPrisoner->user_ac}}</td>
        <td>{{$DelPrisoner->id_n}}</td>
        <td>{{$DelPrisoner->name}}</td>
        <td>{{$DelPrisoner->surname}}</td>
        <td>{{$DelPrisoner->date}}</td>     
      </tr>
      
    @endforeach
  </tbody>
</table>
{{ $DelPrisoners->appends(['EP' => $EditPrisoners->currentPage(),'AP' => $AddPrisoners->currentPage()])->links() }}
</div>


<div class="row">
  <div class="col-6">
    <h2>Logi edycji więźniów</h2>
  </div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Osoba edytująca</th>
      <th scope="col">Id więźnia</th>
      <th scope="col">Imie więźnia</th>
      <th scope="col">Nazwisko więźnia</th>
      <th scope="col">Data edycji więźnia</th>
    </tr>
  </thead>
  <tbody>
    @foreach($EditPrisoners as $EditPrisoner)
      <tr>
        <th scope="row">{{$EditPrisoner->id}}</th>
        <td>{{$EditPrisoner->user_ac}}</td>
        <td>{{$EditPrisoner->id_n}}</td>
        <td>{{$EditPrisoner->name}}</td>
        <td>{{$EditPrisoner->surname}}</td>
        <td>{{$EditPrisoner->date}}</td>     
      </tr>
      
    @endforeach
  </tbody>
</table>
{{ $EditPrisoners->appends(['AP' => $AddPrisoners->currentPage(),'DP' => $DelPrisoners->currentPage()])->links() }}
</div>


@endsection('contentdashb')