INSERT INTO alunos()



CREATE TABLE alunos(
    id INT not null AUTO_INCREMENT PRIMARY KEY ,
    nome text not null,
    email varchar(100) not null
);


INSERT INTO alunos(nome, email)values('Lazaro Portugal','lpds@thug.com')('Evair Portugal', 'evair@p.com')('Savio Portugal', 'savio@eng.com');



UPDATE alunos
SET nome = :nome, email = :email
WHERE id = :id;








