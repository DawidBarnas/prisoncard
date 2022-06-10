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
    <form action="/dodaj_miejscew" method="post">
        {{csrf_field()}}
<div class="container">
    <div class="jumbotron" style="margin-top: 5%;">
    <h1> Dodawanie miejsca</h1>
    <hr>
    <div class="form-group">
        <label for="id_wieznia">Id wieznia</label>
        <input id="id_wieznia" type="text" class="form-control" name="id_wieznia" placeholder="Wpisz id_wieznia" >
    </div>
    <div class="form-group">
        <label for="Miejsce">Miejsce</label>
        <input id="Miejsce" type="text" class="form-control" name="Miejsce" placeholder="Wpisz miejsce" >
    </div>

    
    <input type="submit" name="submit" class="btn btn-success" value="Zapisz zmiany">
  <a class="float-right" href="/miejscewieznia">
    <button type="button" class="btn btn-primary">Cofnij</button>
</a>
</div>
</div>
</form>
</body>


</html>
