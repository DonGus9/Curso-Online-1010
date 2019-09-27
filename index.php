<?php
$nomeSistema ="Cursos Mt Bão"?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <title>Document</title>
</head>
<body>
<header class="d-flex justify-content-between align-items-center p-3">
  <h1 id="logo"><?php echo $nomeSistema;?></h1>
  <ul class="nav">
    <li class="navitem">Cursos</li>
    <li class="navitem">Login</li>
    <li class="navitem">Cadastro</li>
  </ul>
</header>
  <!-- <?php
  $nome = "Gustavo";
  $usuario = [
    "Gustavo", "Corrêa", 21
  ];
  $usuarioDois =["nome"=>"Gustavo", "sobrenome" =>" Corrêa"];
  $usuario[0]="Guitarra";
  echo "<h1>".$usuario[0]." ".$usuario[1]."</h1>";
   ?> -->
</body>
</html>
