function clonar(){
    var elementoOriginal = document.querySelector("#teste");
    var elementoClone = elementoOriginal.cloneNode(true);
    
    // inserindo o elemento na paǵina
    document.body.appendChild(elementoClone);
}

function clone2(){
    $( ".cursos" ).clone().appendTo( ".mais-cursos" );
}

function clone3(){
    var $teste = $('.mais-cursos').clone();

    $('.cursos').appendTo($teste);
}