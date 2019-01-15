function Carousel(){
    this.init = function(){
        this.elemento = document.getElementById('elementos');
        this.carouselCards = document.getElementById('carousel');
        this.botoes = document.querySelectorAll('button.btn_carousel');
        this.voltar = this.botoes[0];
        this.avancar = this.botoes[1];
        this.inicio = this.carouselCards.scrollLeft;
    };

    this.bindEvents = function(){
        document.addEventListener("load", this.validaTamanho.bind());
        this.elemento.addEventListener("mouseout", this.hide.bind(this));
        this.elemento.addEventListener("mouseover", this.show.bind(this));
        this.avancar.addEventListener("click", this.mover.bind(this));
        this.voltar.addEventListener("click", this.mover.bind(this));
    };

    this.show = function(){
        if(this.carouselCards.scrollLeft != 0){
            this.voltar.style.opacity = 1;
        } else {
            this.voltar.style.opacity = 0;
        }

        if(this.carouselCards.clientWidth + this.carouselCards.scrollLeft - this.carouselCards.scrollWidth != 0){
            this.avancar.style.opacity = 1;
        } else {
            this.avancar.style.opacity = 0;
        }
    };
    
    this.hide = function(){
        this.voltar.style.opacity = 0; 
        this.avancar.style.opacity = 0;
    };
    
    this.mover = function(direcao){
        this.carouselCards.scrollLeft += 840 * direcao.target.id;
        this.carouselCards.style.animationTimingFunction = "ease";
    };

    this.validaTamanho = function(){
        if(this.elemento.clientWidth== this.elemento.scrollWidth){
            this.avancar.style.opacity = 0;
        }; 
    };
};
var carousel = new Carousel();
carousel.init();
carousel.bindEvents();