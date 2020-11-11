Create database usuário;

Use usuário;

Create table usuarios ( 
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, 
Nome Varchar (50),
login Varchar(30), 
senha Varchar(40), 
Primary Key (ID)
) ENGINE = MyISAM;
describe table usuarios
