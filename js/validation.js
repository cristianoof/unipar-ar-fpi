//const idade = document.querySelector('#idade')

function busca(evento){
    const idade = document.querySelector(evento)

    if(idade.value.length > 3){
        
        console.log(idade.value.length)
    }
}