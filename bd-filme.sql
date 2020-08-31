
/*Banco de dados em fase de construção*/


CREATE TABLE tbfilme (
	id_filme int(8) not null,
  id_diretor int(5) not null,
  titulo varchar(25) not null,
  descricao varchar(300) not null,
  lancamento date not null,
  duracao varchar(5) not null,
  critica float(2,1),
  faixa_etaria int(2), 
  imagem longblob,
  trailer longblob

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE tbfilmegenero (
  id_filme int(8) not null,
  id_genero int(3) not null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE tbgenero (
  id_genero int(3) not null,
  categoria_nome varchar(30) not null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE tbpersonagem (
  id_filme int(8) not null,
  id_ator int(5) not null,
  persona_nome varchar(30) not null
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
  ADD PRIMARY KEY (id_filme,id_diretor),
  ADD KEY FK_DIRETOR(id_diretor);

ALTER TABLE tbfilmegenero
  ADD PRIMARY KEY (id_filme,id_genero),
  ADD KEY FK_GENERO(id_genero);

ALTER TABLE tbgenero
  ADD PRIMARY KEY (id_genero);
  
ALTER TABLE tbpersonagem
  ADD PRIMARY KEY (id_filme,id_ator),
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

ALTER TABLE tbator
  MODIFY id_ator int(5) not null AUTO_INCREMENT;

  ALTER TABLE tbdiretor
  MODIFY id_diretor int(4) not null AUTO_INCREMENT;


/*--------------------Referenciando as chaves estrangeiras e nomeando--------------------*/


  ALTER TABLE tbfilme
    ADD CONSTRAINT FK_DIRETOR FOREIGN KEY (id_diretor) REFERENCES tbdiretor (id_diretor);

  ALTER TABLE tbpersonagem
    ADD CONSTRAINT FK_FILME_PERSONAGEM FOREIGN KEY (id_filme) REFERENCES tbfilme (id_filme),
    ADD CONSTRAINT FK_ATOR FOREIGN KEY (id_ator) REFERENCES tbator (id_ator);

  ALTER TABLE tbfilmegenero
    ADD CONSTRAINT FK_FILME_GENERO FOREIGN KEY (id_filme) REFERENCES tbfilme (id_filme),
    ADD CONSTRAINT FK_GENERO FOREIGN KEY (id_genero) REFERENCES tbgenero (id_genero);


/*--------------------Inserindo dados--------------------*/


INSERT INTO tbgenero (id_genero,categoria_nome) VALUES
(1, 'aventura'),
(2, 'drama'),
(3, 'Ficção científica'),
(4, 'suspense');

INSERT INTO tbdiretor (id_diretor,nome,nacionalidade,nasc,idade) VALUES
(1, 'Christopher Edward Nolan', 'Britânico', '30/07/1970','50'),
(2, 'Edgar Howard Wright', 'Britânico', '18/04/1974','46');

INSERT INTO tbator (id_ator,nome,nacionalidade,nasc,idade) VALUES
(1, 'Matthew McConaughey', 'Americano', '04/11/1969','50'),
(2, 'Mackenzie Foy', 'Americana', '10/11/2000','19');

INSERT INTO tbfilme (id_filme,id_diretor,titulo,descricao,lancamento,duracao,critica,faixa_etaria,imagem,trailer) VALUES
(1,1,'INTERESTELAR','Após ver a Terra consumindo boa parte de suas reservas naturais, um grupo de astronautas recebe a missão de verificar possíveis planetas para receberem a população mundial, possibilitando a continuação da espécie. Cooper (Matthew McConaughey) é chamado para liderar o grupo e aceita a missão sabendo que pode nunca mais ver os filhos. Ao lado de Brand (Anne Hathaway), Jenkins (Marlon Sanders) e Doyle (Wes Bentley), ele seguirá em busca de uma nova casa. Com o passar dos anos, sua filha Murph (Mackenzie Foy e Jessica Chastain) investirá numa própria jornada para também tentar salvar a população do planeta.','06/11/2014','2h49',8.6,'14+','https://upload.wikimedia.org/wikipedia/pt/3/3a/Interstellar_Filme.png','https://www.youtube.com/embed/BYUZhddDbdc');

INSERT INTO tbpersonagem (id_filme,id_ator,persona_nome) VALUES
(1,1,'Cooper'),
(1,2,'Murph jeune');

INSERT INTO tbfilmegenero (id_filme,id_genero) VALUES
(1,2),
(1,3);
