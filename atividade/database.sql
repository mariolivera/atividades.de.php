create schema `atividade`;

create table `escola` (
id primary key,int, auto incremental,
aluno varchar(45), not null,
cidade varchar(45), not null,
matricula varchar(45), not null,
);

insert into escola (aluno, cidade, matricula)
values ('zé do queijo','minerim','13');

insert into escola (aluno, cidade, matricula)
values ('xero verde','jamaica','14');

insert into escola (aluno, cidade, matricula)
values ('bixo grilo','acre','15');

insert into escola (aluno, cidade, matricula)
values ('vampiro diodão','sampa','16');

insert into escola (aluno, cidade, matricula)
values ('cuca','manaus','17');

insert into escola (aluno, cidade, matricula)
values ('chico pezão','caucaia','18');

insert into escola (aluno, cidade, matricula)
values ('caninãna','só deus sabe','666');