use mercado_solidario;

create table Usuario(
	idUsuario int auto_increment primary key,
    nome varchar(100) not null,
    cpf varchar(14) not null,
    email varchar(100) not null,
    senha varchar(22) not null,
    img_usuario varchar(200)
);

create table intstuicoes(
	idInst int auto_increment primary key,
    razao_social varchar(100) not null,
    nome_fantasia varchar(50),
    cnpj varchar(14) not null,
    email varchar(100) not null,
    senha varchar(22) not null,
    descricao longtext,
    img_inst varchar(200)
);

create table cartao(
	idCartao int auto_increment primary key,
    nome varchar(100) not null,
    cpf varchar(14) not null,
    num_cct varchar(100) not null,
    bandeira varchar(22) not null,
    validade varchar(8) not null,
    cvv varchar(3) not null,
    id_usuario int not null
);

create table endereco(
	idEndereco int auto_increment primary key,
    rua varchar(100) not null,
    num varchar(5) not null,
    compl varchar(10) not null,
    bairro varchar(50) not null,
    cidade varchar(50) not null,
    uf varchar(2) not null,
    cep varchar(10) not null,
    id_usuario int,
    id_instituicao int
);

create table telefone(
	idTelefone int auto_increment primary key,
    num varchar(10),
    id_usuario int,
    id_instituicao int
);

create table conta(
	idConta int auto_increment primary key,
    banco varchar(20),
    agencia varchar(20),
    conta varchar(20),
    titular varchar(50),
    cpf_cnpj varchar(22),
    id_instituicao int not null
);

create table tipo(
	idTipo int auto_increment primary key,
	tipo varchar(50),
    id_categoria int not null
);

create table categoria(
	idCategoria int auto_increment primary key,
    categoria varchar(50)
);

create table produto(
	idProduto int auto_increment primary key,
    nome_pdt varchar(50),
    vlr_pdt decimal,
    vlr_doacao decimal,
    descricao longtext,
    id_tipo int not null,
    id_categoria int not null,
    id_vendedor int not null
);

create table foto_pdt(
	idFoto_pdt int auto_increment primary key,
    url_foto varchar(200),
    id_produto int not null
);

create table compra(
	idt_Compra int auto_increment primary key,
    idCompra int not null,
    vlr_total decimal not null,
    forma_pgmt varchar(20) not null,
    qtde_parcela int not null,
    id_produto int not null,
    id_vendedor int not null,
    id_comprador int not null,
    id_instituicao int not null,
    id_endereco int not null,
    id_cartao int not null
);

insert into compra value(null,13213,1500,'cartao',6,1,1,1,1,1,1);
insert into compra value(null,13213,1500,'cartao',6,1,1,1,1,1,1);
insert into compra value(null,13213,1500,'cartao',6,1,1,1,1,1,1);

select * from compra

drop table Usuario;
drop table intstuicoes;
drop table cartao;
drop table endereco;
drop table telefone;
drop table conta;
drop table tipo;
drop table categoria;
drop table produto;
drop table foto_pdt;
drop table compra;

/*Elaborando as FK*/



















