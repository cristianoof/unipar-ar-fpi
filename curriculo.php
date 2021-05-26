<?php
// Formatação das datas entrada e saída emprego
$dateEntrada = new DateTime($_POST["entradaEmpresa"]);
$dateEntrada = $dateEntrada->format('m/Y');
$dateSaida = new DateTime($_POST["saidaEmpresa"]);
$dateSaida = $dateSaida->format('m/Y');

if($_POST["empregoAtual"] == "sim"){
  $dateSaida = "Emprego Atual";
};

// Formatação do CEP
$cep = substr($_POST["cep"], 0, -3)."-". substr($_POST["cep"], -3);

// Formatação dos Telefones
if(strlen($_POST["telefone"]) == 11){
  $fone = "(". substr($_POST["telefone"], 0, -9).") ". substr($_POST["telefone"], 2, -4)."-". substr($_POST["telefone"], -4);// Celular
}else {
  $fone = "(". substr($_POST["telefone"], 0, -8).") ". substr($_POST["telefone"], 2, -4)."-". substr($_POST["telefone"], -4);// Fone Fixo
}

if($_POST["telefoneRecado"] == ""){
  $foneRecado = "";
}else {
  $foneRecado = "<p>Telefone Recado: ". $_POST["telefoneRecado"];
  if(strlen($_POST["telefoneRecado"]) == 11){
    $foneRecado = "<p>Telefone Recado: ". "(". substr($_POST["telefoneRecado"], 0, -9).") ". substr($_POST["telefoneRecado"], 2, -4)."-". substr($_POST["telefoneRecado"], -4)."</p>";// Celular
  }else {
    $foneRecado = "<p>Telefone Recado: ". "(". substr($_POST["telefoneRecado"], 0, -8).") ". substr($_POST["telefoneRecado"], 2, -4)."-". substr($_POST["telefoneRecado"], -4)."</p>";// Fone Fixo
  }
}

/*
$image_name = 'uploads/teste.jpg';
     
// Load image file 
$image = imagecreatefromjpeg($image_name);  
  
// Use imagerotate() function to rotate the image
$img = imagerotate($image, 180, 0);
header("Content-Type: image/jpeg");
$img = LoadJpeg("bogus.image");
imagejpeg($img); */

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>Aqui está seu Currículo</title>
  <link rel="stylesheet" href="css/curriculo.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">

</head>
<body>
  <div>
    <img src="uploads/teste.jpg" alt="">
    <h1><?= $_POST["nomeCompleto"]?></h1>
    <p><?= $_POST["estadoCivil"]?>, <?= $_POST["nacionalidade"]?>, <?= $_POST["idade"]?> anos</p>
    <p>Sexo: <?= $_POST["sexo"]?>, Filhos: <?= $_POST["filhos"]?></p> <!--Sexo (alterar o gênero do estado civil) ou retirar-->
    <p><?= $_POST["rua"]?> - <?= $_POST["bairro"]?></p>
    <p>CEP: <?= $cep?> | <?= $_POST["cidade"]?> - <?= $_POST["uf"]?></p>
    <p>Telefone: <?= $fone?></p>
    <?= $foneRecado?>
    <p>E-mail: <?= $_POST["email"]?></p>
    Foto
    <hr>
  </div>

  <div>
    <h2>Objetivo</h2>
    <p><?= $_POST["objetivo"]?></p>
  </div>

  <div>
    <h2>Formação Acadêmica</h2>
    <p>Curso: <?= $_POST["cursoFormacao"]?></p>
    <p>Instituição: <?= $_POST["instituicao"]?></p>
    <p><?= $_POST["conclusao"]?> <?= $_POST["anoFormacao"]?></p>
    + formação
  </div>

  <div>
    <h2>Experiência Profissional</h2>
    <p>Empresa: <?= $_POST["empresa"]?> | Período de: <?= $dateEntrada?> a <?= $dateSaida?></p>
    <p>Cargo: <?= $_POST["cargo"]?></p>
    <p>Principais atividades: <?= $_POST["atividades"]?></p>
    + Experiência
  </div>

  <div>
    <h2>Outros Cursos e Habilidades</h2>
    <p><?= $_POST["maisCursos"]?></p>
    + Cursos
  </div>
</body>
</html>