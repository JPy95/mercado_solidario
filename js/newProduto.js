function ValidarNewProduto(){

    this.init = function(){
        this.categoria = document.getElementById('categorias');
        this.query = location.href;
    }

    this.bind = function(){
        this.categoria.addEventListener("mouseout",this.printCategoria.bind(this),false);
    }

    this.printCategoria = function(){
        switch(this.categoria.value){
            case '1':
                window.history.pushState('alguma coisa', "Title",this.query+"?categoria="+this.categoria.value);
                break;
            case '2':
                window.history.pushState('alguma coisa', "Title",this.query+"?categoria="+this.categoria.value);
                break;
            case '3':
                window.history.pushState('alguma coisa', "Title",this.query+"?categoria="+this.categoria.value);
                break;
            case '4':
                window.history.pushState('alguma coisa', "Title",this.query+"?categoria="+this.categoria.value);
                break;
            case '5':
                window.history.pushState('alguma coisa', "Title",this.query+"?categoria="+this.categoria.value);
                break;
            case '6':
                window.history.pushState('alguma coisa', "Title",this.query+"?categoria="+this.categoria.value);
                break;
            case '7':
                window.history.pushState('alguma coisa', "Title",this.query+"?categoria="+this.categoria.value);
                break;
        }
    }
}

$validarNewProduto = new ValidarNewProduto();
$validarNewProduto.init();
$validarNewProduto.bind();