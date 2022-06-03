<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <title>Dodawanie</title>
</head>
<body>
<form action="/dodaj_przestepstwo" method="post">
        {{csrf_field()}}
<div class="container">
    <div class="jumbotron" style="margin-top: 5%;">
    <h1> Dodawanie przestepstwa</h1>
    <hr>
    <div class="form-group">
        <label for="id_wieznia">Id wieznia</label>
        <input id="id_wieznia" type="text" class="form-control" name="id_wieznia" placeholder="Wpisz id_wieznia" >
    </div>
    <div class="form-group">
        <label for="data_popelnienia">Data popełnienia przestępstwa</label>
        <input id="data_popelnienia" type="date" class="form-control" name="data_popelnienia" placeholder="Wpisz date popełnienia przestępstwa" >
    </div>
    <div class="form-group">
        <label for="data_rozprawy">Data rozprawy</label>
        <input id="data_rozprawy" type="date" class="form-control" name="data_rozprawy" placeholder="Wpisz datę rozprawy" >
        
    </div>
    <div class="form-group">
        <label for="Klasyfikacja">Klasyfikacja</label>
        <input id="Klasyfikacja" type="text" class="form-control" name="Klasyfikacja" placeholder="Wpisz klasyfikację przestępstwa" >

    </div>
    
    <div class="form-group">
        <label for="Status">Opis</label>
        <input id="Status" type="text" class="form-control" name="Status" placeholder="Wpisz opis przestępstwa" >
    </div>

    
    <input type="submit" name="submit" class="btn btn-success" value="Zapisz zmiany">
  <a class="float-right" href="/przestepstwo">
    <button type="button" class="btn btn-primary">Cofnij</button>
</a>
</div>
</div>
</form>
</body>


</html>
