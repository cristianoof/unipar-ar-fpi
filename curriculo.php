<?php
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

// Carrega e salva a Foto na pasta uploads
$extensao = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
$dirUploads = "uploads";
$temporario = $_FILES["foto"]["tmp_name"];
$image = "foto.jpg";

if($temporario != ""){
  move_uploaded_file($temporario, $dirUploads. DIRECTORY_SEPARATOR . $image);
  $source = 'src="'.$dirUploads. DIRECTORY_SEPARATOR . $image.'"';
}else{
  $source = "";
}

// Variáveis formação
$cursoFormacao = $_POST["cursoFormacao"];
$instituicao = $_POST["instituicao"];
$conclusao = $_POST["conclusao"];
$anoFormacao = $_POST["anoFormacao"];
// Variáveis experiência
$empresa = $_POST["empresa"];
$cargo = $_POST["cargo"];
$entradaMes = $_POST["entradaMes"];
$entradaAno = $_POST["entradaAno"];
$empregoAtual = $_POST["empregoAtual"];
$saidaMes = $_POST["saidaMes"];
$saidaAno = $_POST["saidaAno"];
$atividades = $_POST["atividades"];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>Aqui está seu Currículo</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/curriculo.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">

</head>

<body>
  <header class="cabecalho nao-imprime" id="cabecalho-curriculo">
    <p>Tudo pronto! Aqui está seu Currículo!</p>
    <p>Boa sorte em seu novo emprego!</p>
    <p>Clique no Botão abaixo para fazer a Impressão</p>
    <button class="btn-imprimir" type="button" onclick="window.print()">Imprimir</button>
  </header>

  <main class="container">
    <div>
      <img <?=$source?> alt="">
      <h1><?= $_POST["nomeCompleto"]?></h1>
      <p><?= $_POST["estadoCivil"]?>, <?= $_POST["nacionalidade"]?>, <?= $_POST["idade"]?> anos</p>
      <p>Sexo: <?= $_POST["sexo"]?>, Filhos: <?= $_POST["filhos"]?></p> <!--Sexo (alterar o gênero do estado civil) ou retirar-->
      <p><?= $_POST["rua"]?> - <?= $_POST["bairro"]?></p>
      <p>CEP: <?= $cep?> | <?= $_POST["cidade"]?> - <?= $_POST["uf"]?></p>
      <p>Telefone: <?= $fone?></p>
      <?= $foneRecado?>
      <p>E-mail: <?= $_POST["email"]?></p>
      <hr>
    </div>

    <div>
      <h2>Objetivo</h2>
      <p><?= $_POST["objetivo"]?></p>
    </div>

    <div class="paragrafo">
      <h2>Formação Acadêmica</h2>
      <?php
        foreach( $cursoFormacao as $key => $n ) {
          echo "<p>Curso: ".$n."<br>Istituição: ".$instituicao[$key]."<br>".$conclusao[$key]." ".$anoFormacao[$key]."</p>";
        }
      ?>
    </div>

    <div class="paragrafo">
      <h2>Experiência Profissional</h2>
      <?php
        foreach( $empresa as $key => $n ) {
          echo "<p>Empresa: ".$n." | Cargo: ".$cargo[$key]."<br>Período de: ".$entradaMes[$key]."/".$entradaAno[$key]."  a  ".$saidaMes[$key].$empregoAtual[$key].$saidaAno[$key].
          "<br>Principais atividades: ".$atividades[$key]."</p>";
        }
      ?>
    </div>

    <div>
      <h2>Outros Cursos e Habilidades</h2>
      <?php
        foreach($_POST["maisCursos"] as $cursos){
          echo "<p>$cursos</p>";
        }
      ?>
    </div>
  </main>

  <script src="js/curriculo.js"></script>
</body>
</html>