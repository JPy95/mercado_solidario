function ValidarNewProduto(){

    this.init = function(){
        this.categoria = document.getElementById('categorias');
        this.categoriaHidden = document.getElementById('categoria-hidden');
        this.query = location.href;
    }

    this.bind = function(){
       this.categoria.addEventListener("change",this.getCategoria.bind(this),false);
    }

    //IMPLEMENTAR AJAX E JQUERY PARA DINAMIZAR OS SELECT DE CATEGORIA E TIPO - QUALQUER DUVIDA ASSISTIR AULA DA UDEMY "requisições assincronas com jquery"

    /*
    this.getCategoria = function(){
        $.ajax({
            url: '../objetos/_newProduto.php',
            type: 'GET',
            dataType: 'html',
        });
    }

    $('select#fabricante').on("change", function(){
        $.ajax({
            url: example.php,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#modelo').html(data);
            }
        });
    });*/





    /*this.printCategoria = function(){
        switch(this.categoria.value){
            case '1':
                window.history.pushState('alguma coisa', "Title",this.query+"?categoria="+this.categoria.value);
                this.categoriaHidden.value = this.categoria.value;
                break;
            case '2':
                window.history.pushState('alguma coisa', "Title",this.query+"?categoria="+this.categoria.value);
                this.categoriaHidden.value = this.categoria.value;
                break;
            case '3':
                window.history.pushState('alguma coisa', "Title",this.query+"?categoria="+this.categoria.value);
                this.categoriaHidden.value = this.categoria.value;
                break;
            case '4':
                window.history.pushState('alguma coisa', "Title",this.query+"?categoria="+this.categoria.value);
                this.categoriaHidden.value = this.categoria.value;
                break;
            case '5':
                window.history.pushState('alguma coisa', "Title",this.query+"?categoria="+this.categoria.value);
                this.categoriaHidden.value = this.categoria.value;
                break;
            case '6':
                window.history.pushState('alguma coisa', "Title",this.query+"?categoria="+this.categoria.value);
                this.categoriaHidden.value = this.categoria.value;
                break;
            case '7':
                window.history.pushState('alguma coisa', "Title",this.query+"?categoria="+this.categoria.value);
                this.categoriaHidden.value = this.categoria.value;
                break;
        }
    }*/
}

$validarNewProduto = new ValidarNewProduto();
$validarNewProduto.init();
$validarNewProduto.bind();