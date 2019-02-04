function edtiBtnScrInst() {
    if(screen.width < 640){
        $('.dropdown-menu').css({
            "position": "absolute;",
            "transform": "translate3d(-100px, 30px, 0px);",
            "top": "0px;",
            "left": "0px;",
            "will-change": "transform;"});
        }
    }

$(document).ready(function () {
    //setando evento de click no botão para chamar função
    $('#cidades').click(edtiBtnScrInst());
});

$('.carousel').carousel({
    pause: true,
    interval: false
});