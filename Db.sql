/* Tabela Categoria*/

create table categoria(
id int auto_increment,
nome varchar(100),
constraint pk_categoria primary key(id)
);

/*end Tabela Categoria*/


/* Tabela Produto*/

create table produto(
id int auto_increment,
nome varchar(100),
id_categoria int,
validade date,
quantidade int,
preco float,
descricao varchar(255),
constraint pk_produto primary key(id),
constraint fk_produto_categoria foreign key(id_categoria) references categoria(id) ON DELETE cascade 
);

/*end Tabela Produto*/



/* Tabela Entrada*/

create table entrada(
id int auto_increment,
id_user int,
id_produto int,
validade date,
quantidade int,
data_entrada timestamp default current_timestamp,
constraint pk_entrada primary key(id),
constraint fk_entrada_produto foreign key(id_produto) references produto(id) ON DELETE cascade 
);

/*end Tabela Entrada*/


/* Tabela cliente*/

create table cliente(
id int(9) auto_increment,
nome varchar(100),
endereco varchar(255),
email varchar(100) not null unique,
data_registo timestamp default current_timestamp,
telefone varchar(15),
user varchar(100),
password varchar(100),
constraint pk_cliente primary key(id)
) AUTO_INCREMENT= 100000000;

/*end Tabela cliente*/

/* Tabela Venda*/

create table venda(
id int auto_increment,
data timestamp default current_timestamp,
valor_pago float,
id_cliente int(9),
id_user int(10),
constraint pk_venda primary key(id),
constraint fk_venda_cliente foreign key(id_cliente) references cliente(id)
);

/*end Tabela Venda*/


/* Tabela itens_venda*/

create table itens_venda(
id int auto_increment,
data timestamp default current_timestamp,
valor_pago float,
id_produto int,
id_venda int,
quantidade int,
constraint pk_itensvenda primary key(id),
constraint fk_itensvenda_produto foreign key(id_produto) references produto(id) ON DELETE set null,
constraint fk_itensvenda_venda foreign key(id_venda) references venda(id) ON DELETE cascade 
);

/*end Tabela itens_venda*/



/* Tabela encomenda*/

create table encomenda(
id int auto_increment,
data timestamp default current_timestamp,
valor_pago float,
id_produto int,
id_venda int,
quantidade int,
constraint pk_itensvenda primary key(id),
constraint fk_itensvenda_produto foreign key(id_produto) references produto(id) ON DELETE set null,
constraint fk_itensvenda_venda foreign key(id_venda) references venda(id) ON DELETE cascade 
);

/*end Tabela encomenda*/



/********** Trigger de entradas e PRodutos*/

Delimiter;; 

create trigger entrada_produto 
	after insert on entrada 
	for each row
	begin
	update produto set quantidade = quantidade + new.quantidade where produto.id = new.id_produto;
	end;
Delimiter;

/********** end Trigger de entradas e PRodutos*/