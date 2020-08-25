
/*Banco de dados em fase de construção*/


CREATE TABLE tbfilme (
	id_filme int(8) not null,
  id_personagem int(5) not null,
  id_diretor int(5) not null,
  id_genero int(3) not null,
  titulo varchar(25) not null,
  descricao varchar(300) not null,
  lancamento date not null,
  duracao varchar(5) not null,
  critica float(2,1),
  faixa_etaria int(2), 
  imagem longblob,
  trailer longblob

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE tbgenero (
  id_genero int(3) not null,
  cat_nome varchar(30) not null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE tbpersonagem (
  id_personagem int(5) not null,
  id_ator int(5) not null,
  persona_nome varchar(30) not null,
  persona_papel varchar(30)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE tbator (
  id_ator int(5) not null,
  nome varchar(30) not null,
  nacionalidade varchar(30),
  nasc date,
  idade int(3)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE tbdiretor (
  id_diretor int(4) not null,
  nome varchar(30) not null,
  nacionalidade varchar(30),
  nasc date,
  idade int(3)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*--------------------Adicionando chave primária e chave composta--------------------*/


ALTER TABLE tbfilme
  ADD PRIMARY KEY (id_filme,id_diretor,id_personagem,id_genero),
  ADD KEY FK_DIRETOR(id_diretor),
  ADD KEY FK_PERSON(id_personagem),
  ADD KEY FK_GENERO(id_genero);

ALTER TABLE tbgenero
  ADD PRIMARY KEY (id_genero);
  
ALTER TABLE tbpersonagem
  ADD PRIMARY KEY (id_personagem,id_ator),
  ADD KEY FK_ATOR(id_ator);

ALTER TABLE tbator
  ADD PRIMARY KEY (id_ator);

ALTER TABLE tbdiretor
  ADD PRIMARY KEY (id_diretor);


/*--------------------Colocando AUTO_INCREMENT em ID--------------------*/

ALTER TABLE tbfilme
  MODIFY id_filme int(8) not null AUTO_INCREMENT;

ALTER TABLE tbgenero
  MODIFY id_genero int(3) not null AUTO_INCREMENT;

ALTER TABLE tbpersonagem
  MODIFY id_personagem int(5) not null AUTO_INCREMENT;

ALTER TABLE tbator
  MODIFY id_ator int(5) not null AUTO_INCREMENT;

  ALTER TABLE tbdiretor
  MODIFY id_diretor int(4) not null AUTO_INCREMENT;


/*--------------------Referenciando as chaves estrangeiras e nomeando--------------------*/*/


  ALTER TABLE tbfilme
    ADD CONSTRAINT FK_DIRETOR FOREIGN KEY (id_diretor) REFERENCES tbdiretor (id_diretor),
    ADD CONSTRAINT FK_PERSON FOREIGN KEY (id_personagem) REFERENCES tbpersonagem (id_personagem),
    ADD CONSTRAINT FK_GENERO FOREIGN KEY (id_genero) REFERENCES tbgenero (id_genero);

    ALTER TABLE tbpersonagem
    ADD CONSTRAINT FK_ATOR FOREIGN KEY (id_ator) REFERENCES tbator (id_ator);



