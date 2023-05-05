<?php
/*
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
 */

require 'functions.php';

$length = isset($_GET['length']) ? intval($_GET['length']) : '';
$password = passwordGenerate($length);
//echo 'Password generata: ' . $password;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/style.css" rel="stylesheet">
  <title>Document</title>
</head>
<body class="vh-100">

<header>
  <div class="container">
    <div class="row">
     <div class="col-12 my-5 d-flex align-items-center flex-column">
      <h1>
        Strong Password Generator
      </h1>
      <h3>
        Genera una password sicura
      </h3>
     </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="row">
    <div class="col mt-5 p-0">
    <div class="card text-dark shadow">
    <div class="card-body d-flex flex-column align-items-center">
      <h5 class="card-title py-2"> <strong>Generatore di password</strong> </h5>
      <form action="" method="get">
        <div class="form-group">
          <label class="pb-3" for="length">Lunghezza password:</label>
          <div class="d-flex align-items-baseline gap-3">
            <input type="number" name="length" id="length" min="6" max="50" class="form-control mb-3" required>
            <button type="submit" class="btn btn-primary">Genera</button>
          </div>
        </div>
      </form>
      <?php if ($password): ?>
        <div class="my-2">
          <strong>La tua password generata:</strong>
        </div>
        <span class="d-flex flex-column w-100"></span><?=$password;?> </span>
      <?php endif;?>
    </div>
  </div>
    </div>
  </div>
</div>



</body>
</html>
