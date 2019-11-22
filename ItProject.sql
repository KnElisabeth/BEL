CREATE database ItProject;
use ItProject;

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        id       Int  Auto_increment  NOT NULL ,
        username Varchar (255) ,
        password Varchar (255) NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Categorie
#------------------------------------------------------------

CREATE TABLE Categorie(
        id  Int  Auto_increment  NOT NULL ,
        nom Varchar (255)
	,CONSTRAINT Categorie_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Langage
#------------------------------------------------------------

CREATE TABLE Langage(
        id           Int  Auto_increment  NOT NULL ,
        nom          Varchar (255) ,
        id_Categorie Int NOT NULL
	,CONSTRAINT Langage_PK PRIMARY KEY (id)

	,CONSTRAINT Langage_Categorie_FK FOREIGN KEY (id_Categorie) REFERENCES Categorie(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Module
#------------------------------------------------------------

CREATE TABLE Module(
        id         Int  Auto_increment  NOT NULL ,
        nom        Varchar (255) ,
        id_Langage Int NOT NULL ,
        id_User    Int NOT NULL
	,CONSTRAINT Module_PK PRIMARY KEY (id)

	,CONSTRAINT Module_Langage_FK FOREIGN KEY (id_Langage) REFERENCES Langage(id)
	,CONSTRAINT Module_User0_FK FOREIGN KEY (id_User) REFERENCES User(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: consulter
#------------------------------------------------------------

CREATE TABLE consulter(
        id      Int NOT NULL ,
        id_User Int NOT NULL
	,CONSTRAINT consulter_PK PRIMARY KEY (id,id_User)

	,CONSTRAINT consulter_Langage_FK FOREIGN KEY (id) REFERENCES Langage(id)
	,CONSTRAINT consulter_User0_FK FOREIGN KEY (id_User) REFERENCES User(id)
)ENGINE=InnoDB;

SELECT username
FROM User
WHERE User.username="Toto";

CREATE USER lasmy IDENTIFIED BY '0000';
GRANT SELECT, INSERT, UPDATE
ON ItProject.*
TO lasmy@'localhost' WITH GRANT OPTION;
