DROP TABLE IF EXISTS pessoas;

CRATE TABLE pessoas (
    id int not null auto_increment,
    nome varchar(100) not null,
    primary key (id)
);