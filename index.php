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
  <title>Document</title>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col mt-5">
        <form class="" action="" method="get">
          <label for="length">Lunghezza password:</label>
          <input type="number" name="length" id="length" min="6" max="50" required>
          <button type="submit">Genera password</button>
        </form>
        <?php if ($password): ?>
          <div class="mt-3">
            <strong>La tua password generata:</strong>
            <span><?=$password;?> </span>
          </div>
        <?php endif;?>
    </div>
  </div>
</div>
</body>
</html>
