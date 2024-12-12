<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ES25PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-dark text-white">
  <div class="card w-75 mx-auto my-auto text-center mt-2">
  <div class="card-body">
    <h1>SCEGLI LA TUA MATERIA PREFERITA</h1>
  </div>
</div>

<div class="w-50 mx-auto my-auto  mt-2">

<form action="./action.php">
<div class="input-group ">
  <span class="input-group-text">Nome e cognome</span>
  <input type="text" name="nome"  class="form-control">
  <input type="text" name="cognome"  class="form-control">
</div>

<br>

<input type="radio" value="sistemi" name="materia">
<label for="sistemi"><h4>Sistemi e Reti</h4></label><br>
<input type="radio" value="informatica" name="materia" >
<label for="informatica"><h4>Informatica</h4></label><br>  
<input type="radio" value="tpsit" name="materia">
<label for="tpsit"><h4>TPSIT</h4></label><br><br>
<input class="btn btn-success" type="submit" value="Submit">
</form>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>