function editaCarousel() {
    var lista = [];
    //obtenho todos os elementos com a class .bloco e faço a varredura com each
    if(screen.width < 640){
        $('.cards').each(function (inx) {
            //console.log(lista);
            //Verifico se o elemento já possui um contain
            if ($(this).prev().hasClass("cards")) {
                //verifico se o numero é par, se for ele cria a div e adiciona a class container
                if (inx % 2 != 0) {
                    lista.push(this);
                    if(lista.length == 2){
                        $('.carousel-inner').append($('<div></div>').addClass('carousel-item').append($(lista[0])).append($(lista[1])));
                        lista.length = 0;
                    }
                } 
            }
        });
    }
}

$(document).ready(function () {
    //setando evento de click no botão para chamar função
    $('.carousel-inner').load(editaCarousel());
});

$('.carousel').carousel({
    pause: true,
    interval: false
});
                    