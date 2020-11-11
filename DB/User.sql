
Create database usuarios;

Use usuarios;

Create table usuario ( 
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, 
Nome Varchar (50),
login Varchar(30), 
senha Varchar(40), 
Primary Key (ID)
) ENGINE = MyISAM;

select * from usuario;