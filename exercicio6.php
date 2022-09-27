
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>

    <style>
        form{
            margin-left: 300px;
            margin-right: 250px;
            margin-top: 15px;
            text-align: justify;
        }
        td, th {
            width: 200px;
            border: 1px solid black;
        }
        p {
            text-align:center;
            margin-left:350px;
            font-size:20px;
            font-family: verdana;
            width:600px;
        }
        .blue {
          background-color:blue;
          color:white;
        }
        .texto, .teste, h1{
          margin:50px;
        }
        table {
          margin-top:10px;
          margin-left:350px;
          margin-bottom:50px;
        } 
        .selected {
            background-color: #1E90FF;
            color: white;
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
<h1>Cálculo IMC</h1>
<div class="texto">
IMC é a sigla para Índice de Massa Corpórea, parâmetro adotado pela Organização Mundial de Saúde para calcular o peso ideal de cada pessoa.

O índice é calculado da seguinte maneira: divide-se o peso do paciente pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso normal quando o resultado do IMC está entre 18,5 e 24,9.

Quer descobrir seu IMC? Insira seu peso e sua altura nos campos abaixo e compare com os índices da tabela. Importante: siga os exemplos e use pontos como separadores.
<br> <br>

<form method="get" action="#">
Altura: <input type="text" size="20" name="altura" placeholder="1.70"required>

Peso: <input type="text" size="20" name="peso" placeholder="89.7" required>
<input type="submit" value="Calcular" class="btn btn-primary">
</form>
    </div>
<?php
if (isset ($_GET['altura']) && isset ($_GET['peso']) )
{
$altura = $_GET['altura'];
$peso = $_GET['peso'];

if (($altura != 0)&& ($peso !=0)){
    
$result = $altura * $altura;

$result = round ($peso/$result, 2);
$grau = "";

if($result < 18.5)
  $grau = "o seu peso abaixo do normal";

if(($result >= 18.5) && ($result <= 24.9))
  $grau = "o seu peso esta normal";

if(($result >= 25) && ($result <= 29.9))
   $grau = "esta com sobrepeso";

if(($result >= 30) && ($result <= 39.9))
  $grau = "esta com obesidade I";

if($result >= 40)
  $grau = "esta com obesidade II";


echo "<br><p> O seu imc é de $result e $grau</p> <br> <br>";


}


    if (($altura == 0) || ($peso ==0))
    echo "<br> <p> Altura ou peso invalidos</p> <br> <br>";


}
?>

<table>
  <thead>
    <tr class= "blue">
      <th scope="col">IMC</th>
      <th scope="col">Classificação</th>
      <th scope="col">Grau obesidade</th>
    </tr>
  </thead>
  <tbody>
    <tr <?php
    if (isset ($_GET['altura']) && isset ($_GET['peso']) )
    {
    if ($result < 18.5) {
      echo "class='selected'";
      }
     } ?>>
      <th scope="row">Menor que 18,5</th>
      <td>Magreza</td>
      <td>0</td>

    </tr>
    <tr  <?php
    if (isset ($_GET['altura']) && isset ($_GET['peso']) )
    {
      if(($result >= 18.5) && ($result <= 24.9)) {
      echo "class='selected'";
      }
     } ?>>
      <th scope="row">Entre 18,5 e 24,9</th>
      <td>Normal</td>
      <td>0</td>

    </tr>
    <tr  <?php
    if (isset ($_GET['altura']) && isset ($_GET['peso']) )
    {
      if(($result >= 25) && ($result <= 29.9)) {
      echo "class='selected'";
      }
     } ?>>
      <th scope="row">Entre 25,0 e 29,9</th>
      <td>Sobrepeso</td>
      <td>I</td>
    </tr>
    <tr <?php
    if (isset ($_GET['altura']) && isset ($_GET['peso']) )
    {
      if(($result >= 30) && ($result <= 39.9)) {
      echo "class='selected'";
      }
     } ?>>
      <th scope="row">Entre 30,0 e 39,9</th>
      <td>Obesidade</td>
      <td>II</td>
    </tr>
    <tr  <?php
    if (isset ($_GET['altura']) && isset ($_GET['peso']) )
    {
      if($result >= 40) {
      echo "class='selected'";
      }
     } ?>>
      <th scope="row">Maior que 40,0</th>
      <td>Obesidade grave</td>
      <td>III</td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
