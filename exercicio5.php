
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
         
        }
        form {
            margin-top:70px;
            margin-left:500px;
            width: 500px;
            height: 600px;
            border: 2px solid black;}
            p{
                text-align:center;
                font-size:24px;
            }
            input[type=text] {
                width: 300px;
                height:50px;
                margin-left:100px;
            }
            input[type=submit]
            {
                margin-left:200px;
            }
            .teste, h1{
          margin:50px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="menu.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <a class="nav-link" href="exercicio1.php">Exercicio 1</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="exercicio2.php">Exercicio 2</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="exercicio3.php">Exercicio 3</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="exercicio4.php">Exercicio 4</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="exercicio5.php">Exercicio 5</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="exercicio6.php">Exercicio 6</a>
      </li>

    </ul>
  </div>
</nav>

<div class="teste">
<div class="shadow p-3 mb-5 bg-white rounded">

<form method="get" action="#">
<p>Nota 1: </p><input type="text" size="20" name="n1"required>
<br>
<p>Nota 2: </p> <input type="text" size="20" name="n2"required>
<br>
<p>Nota 3:</p> <input type="text" size="20" name="n3"required>
<br>
<p>Nota 4: </p> <input type="text" size="20" name="n4"required>
<br><br>
<input type="submit" value="Calcular" class="btn btn-primary">
<?php

if (isset ($_GET['n1']) && isset ($_GET['n2']) && isset ($_GET['n3']) && isset ($_GET['n4']))
{
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$n3 = $_GET['n3'];
$n4 = $_GET['n4'];

$result = $n1 + $n2 + $n3 +$n4;
$result = $result/4;

if ($result< 7)
echo "<br><br><p> Reprovado, média abaixo de 7 </p>";

if ($result>= 7)
echo "<br><br> <p> Aprovado, média acima de 7 </p>";

}
?>
</form>
</div>

</body>
</html>
