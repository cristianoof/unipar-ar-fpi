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

        limpa.value = ""
        limpa2.value = ""
        limpa3.value = ""
        limpa4.value = ""
        limpa5.value = ""
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

function empregoAtual() {
    const classe = document.querySelector('[data-emprego-atual]')
    const items = document.querySelector('[data-select]')
    //const items = document.getElementById('empregoAtual')
    items.addEventListener('change', function(){
         
        const emprego = this.value
        console.log(emprego)
        console.log(classe.className)
        if(emprego == 'nao'){
            classe.classList.remove('hide')
        } else{
            classe.classList.add('hide')
        }
    })  
}
empregoAtual();
    