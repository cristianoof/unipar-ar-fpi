//const idade = document.querySelector('#idade')

function busca(evento){
    const idade = document.querySelector(evento)

    if(idade.value.length > 3){
        document.getElementById("idade").focus()
        console.log(idade.value.length - 1)
    }
}

function empregoAtual() {
    const classe1 = document.querySelector('[data-emprego-atual-1]')
    const classe2 = document.querySelector('[data-emprego-atual-2]')
    const items = document.querySelector('[data-select]')
    
    items.addEventListener('change', function(){
        const emprego = this.value
        /*console.log(emprego)
        console.log(classe1.className)
        console.log(classe2.className)*/
        if(emprego == 'nao'){
            classe1.classList.remove('hide');
            classe2.classList.remove('hide')
        } else{
            classe1.classList.add('hide')
            classe2.classList.add('hide')
        }
    })  
}
empregoAtual();