<?php
include("processa.php");
var_dump($_POST);
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
    <h1>Nome Completo <? echo $_POST["nomeCompleto"]?></h1>
    <p>Estado Civil, Naturalidade, Idade anos</p>
    <p>Sexo: Feminino / Masculino, Filhos: Sim / Não</p> <!--Sexo (alterar o gênero do estado civil) ou retirar-->
    <p>Endereço (rua, num, bairro)</p>
    <p>CEP | Cidade - Estado</p>
    <p>Telefone: </p>
    <p>Telefone Recado: (esconder caso não tenha)</p>
    <p>E-mail: email</p>
    Foto
  </div>

  <div>
    <h2>Objetivo</h2>
    <p>Descrição objetivo</p>
  </div>

  <div>
    <h2>Formação Acadêmica</h2>
    <p>Curso:</p>
    <p>Instituição:</p>
    <p>Concluído em: Ano / Previsão de Conclusão em: Ano</p>
    + formação
  </div>

  <div>
    <h2>Experiência Profissional</h2>
    <p>Empresa: | Período / emprego atual</p>
    <p>Cargo: </p>
    <p>Principais atividades: </p>
    + Experiência
  </div>

  <div>
    <h2>Outros Cursos e Habilidades</h2>
    <p>Cursos/ habilidades</p>
    + Cursos
  </div>
</body>
</html>