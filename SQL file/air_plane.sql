
create database Air;
use Air;
create user 'user1' identified by 'youcode';
grant all on *.* to 'user1';

/*select * from client where CONCAT(id,nom,prenom) LIKE '%k%';
*/
select DISTINCT(flyingTo) from flights_list;
select DISTINCT flyingFrom from flights_list;
drop table reservation ;
drop table flights_list ;

/*INSERT INTO flights_list (flyingFrom) VALUES ('ddd');*/
create table flights_list (id int primary key auto_increment
,flyingFrom varchar(100)
,flyingTo varchar(100)
,departingDate date default CURDATE()
,returningDate date
 ,seats varchar(80));
/*create table reservation*/
create table reservation(id_reservation int primary key auto_increment, 
FullName varchar(80),
 numeroTel varchar(50),
 email varchar(60),
numeroPassport varchar(50),
departingDate date default CURDATE(),
returningDate date,
Adult int,
children int,
travel_class varchar(25),
price varchar(80),
id_flight int,
FOREIGN KEY(id_flight) REFERENCES flights_list(id));

INSERT INTO `flights_list`( `flyingFrom`, `flyingTo`, `departingDate`, `returningDate`, `seats`) VALUES 
('rabat','tanger',DEFAULT,'2020-5-20',100),
('cassablanca','paris',DEFAULT,'2020-6-20',120)
,('Agadir','dakhla',DEFAULT,'2020-9-5',30),
('safi','dakhla',DEFAULT,'2020-7-5',80),
('tittwan','Rabat',DEFAULT,'2020-10-5',60);
/*inset 2*/
INSERT INTO `flights_list`( `flyingFrom`, `flyingTo`, `departingDate`, `returningDate`, `seats`) VALUES 
('tanger','rabat',DEFAULT,'2020-8-20',100),
('paris','cassablanca',DEFAULT,'2020-6-25',120)
,('dakhla','Agadir',DEFAULT,'2020-9-15',30),
('dakhla','safi',DEFAULT,'2020-7-5',80),
('Rabat','tittwan',DEFAULT,'2020-10-5',60);
select  * from flights_list;
select  * from reservation;
SELECT * FROM flights_list WHERE flyingFrom='cassablanka' AND flyingTo='paris';
select * , (Adult+children) as 'seats' from reservation,flights_list where flights_list.id=reservation.id_flight  order by id_reservation DESC LIMIT 1;
INSERT INTO `reservation`( `FullName`, `numeroTel`, `email`, `numeroPassport`, `departingDate`, `returningDate`, `Adult`, `children`, `travel_class`, `price`, `id_flight`) VALUES
     ('ayoub','080889','ayyoub@gmail.com','1120MMM','2020-6-15','2020-3-9',3,4,'bess','333000',1);
UPDATE flights_list f,reservation r SET f.seats=f.seats+3 where f.id=2;
INSERT INTO reservation VALUES
     (2,'kamal chokran','06121898998','ayoub.elbouinany99@gmail.fr','2020-05-29','2020-05-31',1,1,'Bussness Class','1100 DH',2);