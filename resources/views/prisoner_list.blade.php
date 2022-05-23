@extends('layouts.dashboard')
@section('contentdashb')

<div class="row">
  <div class="col-6">
    Lista więźniów
</div>
<div class="col-6">
  <a class="float-right" href="/add_delete_prisoner">
    <button type="button" class="btn btn-primary">Dodaj</button>
</a>
</div>
<div class="row">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Imie</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Miasto</th>
      <th scope="col">Ulica</th>
      <th scope="col">Waga</th>
      <th scope="col">Wzrost</th>
      <th scope="col">Telefon</th>
      <th scope="col">id_celi</th>
      <th scope="col">mozliwosc_wizyt</th>
      <th scope="col">mozliwosc_przepustek</th>
      <th scope="col">Status_celi</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
    @foreach($prisoners as $prisoner)
      <tr>
        <th scope="row">{{$prisoner->id}}</th>
        <td>{{$prisoner->Imie}}</td>
        <td>{{$prisoner->Nazwisko}}</td>
        <td>{{$prisoner->Miasto}}</td>
        <td>{{$prisoner->Ulica}}</td>
        <td>{{$prisoner->Waga}}</td>
        <td>{{$prisoner->Wzrost}}</td>
        <td>{{$prisoner->Telefon}}</td>
        <td>{{$prisoner->id_celi}}</td>
        <td>{{$prisoner->mozliwosc_wizyt}}</td>
        <td>{{$prisoner->mozliwosc_przepustek}}</td>
        <td>{{$prisoner->Status_celi}}</td>
        <td>
        <a href="click_edit/{{ $prisoner -> id }}">Edytuj</a>
        <a href={{"deleteprisoner/".$prisoner['id']}}>Usuń</a>
        </td>
      </tr>

    @endforeach
  </tbody>
</table>
{{ $prisoners->links() }}
</div>

@endsection('contentdashb')