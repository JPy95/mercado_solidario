function mover(direcao) {
    var elemento = document.getElementById('elementos');
    var botoes = document.querySelectorAll('button.btn_carousel');
    var voltar = botoes[0];
    var avancar = botoes[1];

    elemento.scrollLeft += 200 * direcao;
    var inicio = elemento.scrollLeft == 0;
    var fim = elemento.clientWidth + elemento.scrollLeft - elemento.scrollWidth;
    voltar.style.opacity = inicio ? 0 : 1;
    avancar.style.opacity = fim ? 1 : 0;
}

function valida_tamanho(){
    var elemento = document.getElementById('elementos');
    var botoes = document.querySelectorAll('button.btn_carousel');
    var voltar = botoes[0];
    var avancar = botoes[1];
    if(elemento.clientWidth==elemento.scrollWidth){
        avancar.style.opacity = 0;
    } 
}