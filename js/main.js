function clonar(elemento, clonarEm){
    var elementoOriginal = document.querySelector(elemento);
    var elementoClone = elementoOriginal.cloneNode(true);
    
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
    document.querySelector(clonarEm).appendChild(elementoClone);
}