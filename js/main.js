function clonar(elemento, clonarEm){
    const elementoOriginal = document.querySelector(elemento)
    const elementoClone = elementoOriginal.cloneNode(true)
    
    // Limpa os inputs após clonar
    if(elemento == '#mais-cursos'){
        elementoClone.value = ""
    }

    if(elemento == '#mais-formacao'){
        const limpa = elementoClone.querySelector('[data-form-input="1"]')
        const limpa2 = elementoClone.querySelector('[data-form-input="2"]')
        const limpa3 = elementoClone.querySelector('[data-form-input="3"]')

        limpa.value = ""
        limpa2.value = ""
        limpa3.value = ""
    }

    if(elemento == '#mais-experiencia'){
        const limpa = elementoClone.querySelector('[data-form-input="1"]')
        const limpa2 = elementoClone.querySelector('[data-form-input="2"]')
        const limpa3 = elementoClone.querySelector('[data-form-input="3"]')
        const limpa4 = elementoClone.querySelector('[data-form-input="4"]')
        const limpa5 = elementoClone.querySelector('[data-form-input="5"]')
        const limpa6 = elementoClone.querySelector('[data-form-input="6"]')
        const limpa7 = elementoClone.querySelector('[data-form-input="7"]')

        limpa.value = ""
        limpa2.value = ""
        limpa3.value = ""
        limpa4.value = ""
        limpa5.value = ""
        limpa6.value = ""
        limpa7.value = ""
    }

    // Local pra inserir o elemento na paǵina
    document.querySelector(clonarEm).appendChild(elementoClone)
}

function mostraConteudo(evento){
    const conteudo = document.querySelector(evento)

    if(conteudo.className == 'hide'){
        conteudo.classList.remove('hide')
    } else{
        conteudo.classList.add('hide')
    }
}

// Consulta de CEP no ViaCep com Jquery
$(document).ready(function() {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("")
        $("#bairro").val("")
        $("#cidade").val("")
        $("#uf").val("")
        $("#ibge").val("")
    }
    
    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '')

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...")
                $("#bairro").val("...")
                $("#cidade").val("...")
                $("#uf").val("...")
                $("#ibge").val("...")

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro + ", ")
                        $("#bairro").val(dados.bairro)
                        $("#cidade").val(dados.localidade)
                        $("#uf").val(dados.uf)
                        $("#ibge").val(dados.ibge)
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep()
                        alert("CEP não encontrado.")
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep()
                alert("Formato de CEP inválido.")
                $(this).val('')
                $(this).focus()
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep()
        }
    });
});

// Preview da foto para o curriculo
function previewImage(){
    var image = document.querySelector('#foto').files[0]
    var preview = document.querySelector('#foto-preview')

    var reader = new FileReader()

    reader.onloadend = function() {
        preview.src = reader.result
    }

    if(image){
        reader.readAsDataURL(image)
    }else{
        preview.src = ""
    }
}

// Validar Fone
function validaFone(){
    const fone = document.querySelector('#telefone')

    if(fone.value.length > 0 && fone.value.length < 10){
        alert("Corrija o Telefone Principal: \nDigite o DDD Ex: 45 e mais 9 dígitos para Celular ou \n8 dígitos para Telefone Fixo, tudo sem espaço, parenteses, traços etc")
        document.getElementById("telefone").focus()
        fone.value = ""
    }
    else if(fone.value.length > 11){
        alert("Corrija o Telefone Principal: \nDigite o DDD Ex: 45 e mais 9 dígitos para Celular ou \n8 dígitos para Telefone Fixo, tudo sem espaço, parenteses, traços etc")
        document.getElementById("telefone").focus()
        fone.value = ""
    }
}