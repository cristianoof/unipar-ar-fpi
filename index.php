<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>Crie seu Currículo Online</title>
    <link rel="stylesheet" href="libs/cropperjs/cropper.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/modal.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" />
</head>

<body>
    <header>
        <img class="logo" id="logo" src="images/logo-branco.png" alt="Logo do gerador de currículos"></a>
        <div class="titulo-principal">
            <h1>Gerador de Currículos</h1>
            <h3>Crie seu Currículo Online agora mesmo, de forma simples e gratuita!</h3>
        </div>
        <div class="ajuste"></div>
    </header>

    <main class="container">
        <div class="conteudo">
            <img src="images/view-desktop.jpg" id="img-desktop" alt="Acesse pelo computador">
            <img src="images/view-mobile.jpg" id="img-mobile" alt="Acesse pelo celular">
            <p>O Gerador de Currículos Online foi construído para facilitar o processo de criação de um currículo, disponibilizando
                e formatando as informações de forma adequada na página.
                Depois de preencher tudo, você poderá clicar no botão <strong>Gerar meu Currículo</strong> para ser direcionado à uma página com o curriculo
                pronto e disponível para imprimir ou salvar, tudo de forma simples e intuitiva!<span id="ver-mais">...  </span><a id="btn-ver-mais" href="#" onclick="maisConteudo()">Ver Mais </a>
            </p>
            <span id="ver-menos"><p>As etapas estão divididas em seções em ordem de preenchimento padrão que é utilizado na grande maioria dos currículos atualmente. Em cada seção temos
                um botão de <strong>Ajuda</strong>, ao clicar você verá uma breve orientação de como preencher os campos a seguir. É claro que essa <i>orientação</i>
                é uma sugestão de como preencher, seguindo os padrões atuais, mas fique a vontade no preenchimento.
            </p>
            <p>A maioria dos campos são de preenchimento obrigatório, mas caso esqueça algum para trás, ao clicar no botão para gerar, você será
                avisado em qual campo está faltando a informação.
                Vale ressaltar que quanto mais rico de informações conter em seu curriculo, melhor será recebido pelo recrutador. Isso não quer
                dizer pra encher de informações desencontradas <i>só para fazer volume!</i>
            </p>
            <p>Caso você esteja procurando o primeiro emprego, fique tranquilo, há muitas oportunidades de trabalho para seu perfil. Preencha os
                campos com informações de escolaridade, cursos que tenha feito ou esteja fazendo e principalmente preencha de forma honesta e 
                detalhada o campo <strong>Objetivo</strong> na seção 2. Sem mais delongas, vamos criar seu currículo!
            </p></span>
            <a id="btn-ver-menos" href="#" onclick="maisConteudo()">Ver Menos </a>
        </div>

    <!-- ## Início do formulário currículo ## -->
        <form action="curriculo.php" method="POST" enctype="multipart/form-data">
            <!-- ## Dados Pessoais ## -->
            <fieldset>
                <legend>
                    <h2>1. Dados Pessoais <button type="button" class="btn-ajuda"
                            onclick="mostraConteudo('[data-ajuda-1]')">Ajuda</button></h2>
                </legend>
                <div class="hide" data-ajuda-1>
                    <p class="ajuda">
                        Preencha todos os campos a seguir, exceto <i>telefone de recado</i> caso não tenha. Para o endereço, Digite
                        somente os números de seu CEP que o sistema fará a busca do endereço, cidade e estado, faltando informar 
                        o número da casa.<br>
                        As Redes Sociais são opcional, mas é legal informá-las, com isso o recrutador consegue saber um pouco mais de você. Caso opte por colocar,
                        não precisa colocar todas e sim as que você mais utiliza e se tratando de vagas de emprego uma rede indispensável é o Linkedin!<br>
                        A Foto é opcional, mas é muito importante que seu currículo tenha uma foto. Procure uma que esteja com um sorriso e com
                        fundo neutro, quem tem deve estar em destaque é você!
                    </p>
                </div>

                <div class="formulario-3-colunas">
                    <div>
                        <label for="nomeCompleto">Nome Completo</label>
                        <input type="text" name="nomeCompleto" id="nomeCompleto" placeholder="Digite seu nome..."
                            required>
                    </div>
                    <div>
                        <label for="nacionalidade">Nacionalidade</label>
                        <input type="text" name="nacionalidade" id="nacionalidade" value="Brasileiro" required>
                    </div>
                    <div>
                        <label for="sexo">Sexo</label>
                        <select name="sexo" id="sexo" required>
                            <option value=""></option>
                            <option value="Feminino">Feminino</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Não Informado">Prefiro não Informar</option>
                        </select>
                    </div>
                    <div>
                        <label for="idade">Idade</label>
                        <input type="number" name="idade" id="idade" required>
                    </div>
                    <div>
                        <label for="estadoCivil">Estado Civil</label>
                        <select name="estadoCivil" id="estadoCivil" required>
                            <option value=""></option>
                            <option value="Solteiro(a)">Solteiro(a)</option>
                            <option value="Casado(a)">Casado(a)</option>
                            <option value="União Estável">União Estável</option>
                            <option value="Divorciado(a)">Divorciado(a)</option>
                            <option value="Viúvo(a)">Viúvo(a)</option>
                        </select>
                    </div>
                    <div>
                        <label for="filhos">Tem Filho(s)?</label>
                        <select name="filhos" id="filhos" required>
                            <option value=""></option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select>
                    </div>
                </div> 

                <div class="formulario-2-colunas">
                    <div>
                        <label for="cep">CEP (Somente Números)</label>
                        <input type="number" name="cep" id="cep">
                    </div>
                    <div>
                        <label for="rua">Endereço</label>
                        <input type="text" name="rua" id="rua" required>
                    </div>
                </div>

                <div class="formulario-3-colunas">
                    <div>
                        <label for="bairro">Bairro</label>
                        <input type="text" name="bairro" id="bairro" required>
                    </div>
                    <div>
                        <label for="cidade">Cidade</label>
                        <input type="text" name="cidade" id="cidade" required>
                        </select>
                    </div>
                    <div>
                        <label for="uf">Estado</label>
                        <input type="text" name="uf" id="uf" required>
                    </div>
                    <div>
                        <label for="telefone">Telefone Principal (Somente Números)</label>
                        <input type="tel" name="telefone" id="telefone" onblur="validaFone()" placeholder="xx xxxxx xxxx" required>
                    </div>
                    <div>
                        <label for="telefoneRecado">Telefone Recado (Opcional)</label>
                        <input type="tel" name="telefoneRecado" id="telefoneRecado">
                    </div>
                    <div>
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="email@exemplo.com" required>
                    </div>
                </div>
                
                <div class="formulario-1-coluna">
                    <div class="informacao-btn">
                        <button type="button" class="btn-rede-social" onclick="mostraConteudo('[data-rede-social]')">Redes Sociais</button>
                        <label>Adicione suas Redes Sociais (Opcional) - <i>É uma chance de te conhecerem um pouco melhor!</i></label>
                    </div>
                    <div class="hide" data-rede-social>
                        <div class="formulario-2-colunas">
                            <div class="rede-social">
                                <label for="linkedin">Linkedin</label>
                                <img src="images/linkedin.png" alt="icone linkedin">
                                <input type="text" name="redes-sociais[linkedin]" id="linkedin" placeholder="https://www.linkedin.com/in/seu-usuario">
                            </div>
                            <div class="rede-social">
                                <label for="instagram">Instagram</label>
                                <img src="images/instagram.png" alt="icone instagram">
                                <input type="text" name="redes-sociais[instagram]" id="instagram" placeholder="https://www.instagram.com/seu-usuario">
                            </div>
                            <div class="rede-social">
                                <label for="github">Github</label>
                                <img src="images/github.png" alt="icone github">
                                <input type="text" name="redes-sociais[github]" id="github" placeholder="https://github.com/seu-usuario">
                            </div>
                            <div class="rede-social">
                                <label for="facebook">Facebook</label>
                                <img src="images/facebook.png" alt="icone facebook">
                                <input type="text" name="redes-sociais[facebook]" id="facebook" placeholder="https://www.instagram.com/seu-usuario">
                            </div>
                            <div class="rede-social">
                                <label for="twitter">Twitter</label>
                                <img src="images/twitter.png" alt="icone twitter">
                                <input type="text" name="redes-sociais[twitter]" id="twitter" placeholder="https://twitter.com/seu-usuario">
                            </div>
                            <div class="rede-social">
                                <label for="youtube">Youtube</label>
                                <img src="images/youtube.png" alt="icone youtube">
                                <input type="text" name="redes-sociais[youtube]" id="youtube" placeholder="https://www.youtube.com/channel/sua-url">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="formulario-1-coluna">
                    <div>
                        <input type="file" class="hide" id="input-foto" name="foto"  accept='image/*'>
                    </div>
                    <div class="informacao-btn">
                        <button type="button" class="btn-selecionar-foto" id="btn-selecionar-foto">Selecionar Foto</button>
                        <label for="foto">Adicione sua Foto (Opcional) - <i>Uma foto torna seu currículo mais atrativo!</i></label>
                        <img class="foto-perfil" id="foto-perfil">
                        <input type="text" class="hide" id="input-foto-crop" name="input-foto-crop">
                    </div>
                </div>
            </fieldset>

            <!-- ## Seção Objetivo ## -->
            <fieldset>
                <legend>
                    <h2>2. Objetivo <button type="button" class="btn-ajuda"
                            onclick="mostraConteudo('[data-ajuda-2]')">Ajuda</button></h2>
                </legend>
                <div class="hide" data-ajuda-2>
                    <p class="ajuda">
                        O Objetivo é uma seção importantíssima em seu currículo. Fale um pouco sobre você e sua pretensão, se é primeiro
                        emprego, mudança de carreira, progressão na mesma carreira, etc. Tudo de forma objetiva e verdadeira.
                    </p>
                </div>

                <div class="formulario-1-coluna">
                    <label for="objetivo">Objetivo</label>
                    <textarea name="objetivo" id="objetivo" cols="10" rows="8"></textarea>
                </div>
            </fieldset>

            <!-- ## Seção Formação Acadêmica ## -->
            <fieldset>
                <legend>
                    <h2>3. Formação Acadêmica <button type="button" class="btn-ajuda"
                            onclick="mostraConteudo('[data-ajuda-3]')">Ajuda</button></h2>
                </legend>
                <div class="hide" data-ajuda-3>
                    <p class="ajuda">
                        Aqui em suas formações, descreva o Curso e Instituição de forma completa, evite muitas abreviações.<br>
                        Caso não possua ou não esteja cursando uma graduação, coloque seu estudo no colégio mesmo, concluído ou cursando.<br>
                        Ao final dessa seção tem um botão <strong>+ Adicionar Formação</strong>, clique e adicione quantas forem preciso.
                    </p>
                </div>

                <div id="formacao">
                    <div id="mais-formacao">
                        <div class="formulario-2-colunas">
                            <div>
                                <label for="curso">Curso</label>
                                <input type="text" name="cursoFormacao[]" id="curso" data-form-input="1"
                                    placeholder="Ex: Bacharel em Administração" required>
                            </div>
                            <div>
                                <label for="instituicao">Instituição</label>
                                <input type="text" name="instituicao[]" id="instituicao" data-form-input="2"
                                    placeholder="Ex: Unipar - Universidade Paranaense" required>
                            </div>
                            <div>
                                <label for="conclusao">Conclusão | Previsão</label>
                                <select name="conclusao[]" id="conclusao" required>
                                    <option value=""></option>
                                    <option value="Concluído em:">Concluído em</option>
                                    <option value="Previsao de conclusão:">Previsão para concluir em</option>
                                </select>
                            </div>
                            <div>
                                <label for="ano">Ano de Conclusão | Previsão</label>
                                <select name="anoFormacao[]" id="ano" data-form-input="3" required>
                                    <option value="" selected></option>
                                    <?php 
                                        $ano = file('res/ano.csv');
                                        foreach($ano as $value){
                                            echo "<option value='$value'>$value</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn-adicionar" onclick="clonar('#mais-formacao', '#formacao')">+
                    Adicionar Formação</button>
            </fieldset>

            <!-- ## Seção Experiência Profissional ## -->
            <fieldset>
                <legend>
                    <h2>4. Experiência Profissional <button type="button" class="btn-ajuda"
                            onclick="mostraConteudo('[data-ajuda-4]')">Ajuda</button></h2>
                </legend>
                <div class="hide" data-ajuda-4>
                    <p class="ajuda">
                        A seção de Experiência Profissional é indispensável em um currículo. Um campo de muita atenção nessa seção é o de <i>Principais Atividades
                        Desenvolvidas no Cargo</i>. Descreva com detalhes, de forma objetiva e clara, suas atividades no cargo/empresa em questão.<br>
                        Caso não possua experiêcia profissional, marque a caixa de seleção abaixo, é o primeiro item dessa seção.<br>
                        Ao final dessa seção tem um botão <strong>+ Adicionar Experiência</strong>, clique e adicione quantas forem preciso.
                    </p>
                </div>

                <div class="primeiro-emprego">
                    <input type="checkbox" name="cbxPrimeiroEmprego" id="chPrimeiroEmprego" value="cbx">
                    <label for="chPrimeiroEmprego">Marque se for seu primeiro emprego</label>
                </div>

                <fieldset id="primeiroEmprego">
                    <div id="experiencia">
                        <div id="mais-experiencia">
                            <div class="formulario-2-colunas">
                                <div>
                                    <label for="empresa">Empresa</label>
                                    <input type="text" name="empresa[]" id="empresa" data-form-input="1" required>
                                </div>
                                <div>
                                    <label for="cargo">Cargo</label>
                                    <input type="text" name="cargo[]" id="cargo" data-form-input="2"
                                        placeholder="Ex: Analista Financeiro" required>
                                </div>
                            </div>
                            <div class="formulario-5-colunas">
                                <div>
                                    <label for="entradaMes">Mês Entrada</label>
                                    <select name="entradaMes[]" id="entradaMes" data-form-input="3">
                                        <option value="" selected></option>
                                        <?php
                                            $ano = file('res/mes.csv');
                                            foreach($ano as $value){
                                                echo "<option value='$value'>$value</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div>
                                    <label for="entradaAno">Ano Entrada</label>
                                    <select name="entradaAno[]" id="entradaAno" data-form-input="4">
                                        <option value="" selected></option>
                                        <?php 
                                            $ano = file('res/ano.csv');
                                            foreach($ano as $value){
                                                echo "<option value='$value'>$value</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div>
                                    <label for="empregoAtual">É seu Emprego Atual?</label>
                                    <select name="empregoAtual[]" id="empregoAtual" onchange="selectEmpAtual()">
                                        <option value="de " selected>Nâo</option>
                                        <option value="Emprego Atual">Sim</option>
                                    </select>
                                </div>
                                <div data-emprego-atual-1>
                                    <label for="saidaMes">Mês Saída</label>
                                    <select name="saidaMes[]" id="saidaMes" data-form-input="5">
                                        <option value="Emprego " selected></option>
                                        <?php 
                                            $ano = file('res/mes.csv');
                                            foreach($ano as $value){
                                                echo "<option value='$value'>$value</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <input type="hidden" name="saidaMes[]" value="Emprego " />
                                <div data-emprego-atual-2>
                                    <label for="saidaAno">Ano Saída</label>
                                    <select name="saidaAno[]" id="saidaAno" data-form-input="6">
                                        <option value="Atual" selected></option>
                                        <?php 
                                            $ano = file('res/ano.csv');
                                            foreach($ano as $value){
                                                echo "<option value='$value'>$value</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <input type="hidden" name="saidaAno[]" value="Autal " />
                            </div>

                            <div class="formulario-1-coluna">
                                <label for="principaisAtividades">Principais Atividades Deselvolvidas no Cargo</label>
                                <textarea name="atividades[]" id="principaisAtividades" data-form-input="7" cols="10"
                                    rows="8"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn-adicionar" id="addExperiencia" onclick="clonar('#mais-experiencia', '#experiencia')">+
                        Adicionar Experiência</button>
                </fieldset>
            </fieldset>

            <!-- ## Outros Cursos e Habilidades ## -->
            <fieldset>
                <legend>
                    <h2>5. Outros Cursos e Habilidades <button type="button" class="btn-ajuda"
                            onclick="mostraConteudo('[data-ajuda-5]')">Ajuda</button></h2>
                </legend>
                <div class="hide" data-ajuda-5>
                    <p class="ajuda">
                        Essa seção é destinada para você descrever outros cursos que tenha feito. Exemplos: Curso de Digitação. Tenho facilidade e agilidade em digitar;
                        Curso de Excel Avançado. Tabalho com fórmulas complexas, tabelas e gráficos dinâmicos, macros, etc.<br>
                        Para ficar de uma forma mais legível e organizada, informe cada curso e sua breve descrição em um campo. Assim adicione quantos campos precisar. <br>
                        Ao final dessa seção tem um botão <strong>+ Adicionar Curso</strong>, clique e adicione quantas forem preciso.
                    </p>
                </div>

                <div class="formulario-1-coluna" id="outros-cursos">
                    <label for="mais-cursos">Descreva aqui outros cursos e habilidades caso possua</label>
                    <input type="text" name="maisCursos[]" id="mais-cursos" data-form-input="1"
                        placeholder="Ex: Curso de Excel, Word, Powerpoit  |  Curso de Digitação  |  Curso de Photoshop etc...">
                </div>

                <button type="button" class="btn-adicionar" onclick="clonar('#mais-cursos', '#outros-cursos')">+
                    Adicionar Curso</button>
            </fieldset>
            <input class="btn-salvar" type="submit" name="criar-curriculo" value="Gerar meu Currículo">
        </form>
        <!-- ## Fim do formulário currículo ## -->
        
        <!-- ## Início do formulário Contato ## -->
        <form class="form-contato" action="contato.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>
                    <h2>Entre em contato conosco</h2>
                </legend>
                <p>
                    Em caso de dúvidas, erros, mau funcionamento do sistema ficaremos muito felizes em receber seu Feedback, ele é muito importante para nós!
                </p>
                <div class="formulario-2-colunas">
                    <div>
                        <label for="nome-contato">Nome</label>
                        <input type="text" name="nome-contato" id="nome-contato" placeholder="Digite seu nome...">
                    </div>
                    <div>
                        <label for="email-contato">E-mail</label>
                        <input type="email" name="email-contato" id="email-contato" placeholder="email@exemplo.com">
                    </div>
                </div>
                <div class="formulario-1-coluna">
                    <textarea name="msg-contato" id="msg-contato" cols="10" rows="8" placeholder="Digite sua mensagem"></textarea>
                </div>
            </fieldset>
            <button type="button" class="btn-salvar" id="btn-msg-contato">Enviar Mensagem</button>
        </form>
        <div class="msg-sucesso" id="msg-sucesso-contato">
        </div>
        <!-- ## Fim do formulário Contato ## -->                                            
    </main>

    <footer>    
        <div class="itens-footer">
            <img class="logo-footer" src="images/logo-preto.png" alt="Logo preto do gerador de currículos">
            <p class="copyright">&copy; Copyright Gerador de Currículos by <i>Cristiano Fernandes</i></p>
        </div>
    </footer>
    
    <div class="container-modal" id="modal-crop">
        <div class="janela-modal">
            <div class="conteudo-modal">
                <button type="button" class="btn-fechar-modal" id="fechar-modal" data-dismiss="modal">X</button>
                <img class="image-original" id="image">
                <div class="preview"></div>
            </div>

            <div class="btns">
                <button type="button" class="btn-cancelar" id="cancelar-modal" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn-crop" id="crop">Salvar</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="libs/jquery-3.6.0.min.js" type="text/javascript"></script> -->
    <script src="libs/cropperjs/cropper.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/cropper.js" type="text/javascript"></script>
</body>
</html>