drop database blue_travels;
create database blue_travels;
use blue_travels;

create table Person(
person_id int  auto_increment ,
fname varchar(80),
lname varchar(80),
gender enum('male','female','other'),
dob date,
email varchar(100),
primary key (person_id),
#to efficienctly retriece gender dob and email faster when the query is run
index idx_psn(gender,dob,email)
);

create table Employees(
employee_id int  auto_increment unique,
person_id int not null,
employee_role varchar(40),
primary key (employee_id),
users varchar(50),
Pass varchar(50)
);

#payable amount is the customers budget
create table Customers(
person_id int not null,
customer_id int  auto_increment ,
mobile_no  varchar(20),
payable_amount int,
primary key(customer_id),
#to efficeintly retrieve payable amount faster when the query is run
index idx_budget(payable_amount)
);
create table Airline(
airline_name varchar(100) not null,
airline_id  varchar(5) ,
primary key(airline_name),
#to efficiently retrieve airline_id faster when the query is run
index idx_air(airline_id)
);

create table Payment (

person_id int not null,
customer_id int not null,
payment_amount int not null, 
payment_method varchar(100) not null,
payment_status enum('Complete','Incomplete'),
payment_id int  auto_increment unique,
primary key(payment_id),
foreign key(customer_id) references Customers(customer_id),
foreign key(person_id) references Person(person_id),
#to efficiently retrieve payment_Status and payment_amount faster when the query is run
index idx_pay(payment_status, payment_amount)
);

create table Ticket(
ticket_no int  auto_increment,
ticket_price int,
Destination varchar(110),
Departure varchar(110),
-- person_id int not null,
departure_date date,
travel_class enum('economy', 'business', 'first'),
airline_name varchar(100) not null,
flight_no text,
seat_no text,
gate text,
primary key(ticket_no),
index idx_tik(ticket_price, Destination,Departure)
);

create table passenger(
fullname varchar(80),
email varchar(100),
address varchar(130),
pasport_num varchar(50),
country varchar(60),
tel varchar(50)
);

create table Feedback(
name varchar(50),
email varchar(100),
message text
);


insert into Person (fname,lname,gender,dob,email) values ('John', 'Boker', 'male','1998-12-31',' john.boker@me.com ');
insert into Person (fname,lname,gender,dob,email) values ( 'James', 'Abreo', 'male','1999-11-30',' james.bond@me.com '); 
insert into Person (fname,lname,gender,dob,email) values ( 'Jack', ' bauuer', 'male','1997-10-13',' jack. uer@me.com ');
insert into Person (fname,lname,gender,dob,email) values ( 'Tony', 'Stark', 'male','1996-12-01',' tony.stark@me.com ');
insert into Person (fname,lname,gender,dob,email) values ( 'Rebecca', 'Mwangi', 'female','2000-12-01',' r.romanoff@me.com '); 
insert into Person (fname,lname,gender,dob,email) values ( 'Blake', 'Smith', 'male','2000-05-01',' b.Smith@me.com ');
insert into Person (fname,lname,gender,dob,email) values ( 'Jacob', 'Black', 'male','1979-12-01',' jake.black@me.com ');
insert into Person (fname,lname,gender,dob,email) values ( 'Diana', 'Mensah','female','1998-11-01', ' d.spence@me.com '); 
insert into Person (fname,lname,gender,dob,email) values ('Lois', 'Lane', 'female','1988-10-08',' lois.lane@me.com ');
insert into Person (fname,lname,gender,dob,email) values ('Katie', 'Otto', 'female','1989-08-009',' katie001@me.com ');
insert into Person (fname,lname,gender,dob,email) values ( 'Shelby', 'White', 'female','1999-10-14',' shelby.white@me.com ');
insert into Person (fname,lname,gender,dob,email) values ( 'Frank', 'Musa', 'male','2001-12-24',' frank.musa@me.com '); 
insert into Person (fname,lname,gender,dob,email) values ( 'Leslie', 'Spencer','female','1980-11-01', ' l.cooper@me.com ');
insert into Person (fname,lname,gender,dob,email) values ('Alyssa', 'Williams', 'female','1988-10-08',' Alyssa.will@me.com ');
insert into Person (fname,lname,gender,dob,email) values ('Amber', 'Jean', 'female','1995-08-09',' Amberj@me.com ');
insert into Person (fname,lname,gender,dob,email) values ('Amber', 'Jeanette', 'female','1995-08-07',' Amberjet@me.com ');
insert into Person (fname,lname,gender,dob,email) values ('Margot', 'Smith', 'female','1985-08-06',' Msmith@me.com ');
insert into Person (fname,lname,gender,dob,email) values ('Mac', 'Miller', 'male','2000-08-09',' Macm@me.com ');
insert into Person (fname,lname,gender,dob,email) values ('Angelina', 'Jolie', 'female','1985-05-02',' Aj11@me.com ');
insert into Person (fname,lname,gender,dob,email) values ('Nathalie', 'Tettey', 'female','2003-07-02',' Natt001@me.com ');
insert into Person (fname,lname,gender,dob,email) values ('Hayley', 'smith', 'female','2001-07-02',' Haysmith@me.com ');

insert into Employees (person_id,employee_role) values ( 1,'Financial Admin');
insert into Employees (person_id,employee_role) values ( 2,'CEO');
insert into Employees (person_id,employee_role) values ( 3,'Customer consultant');
insert into Employees  (person_id,users,Pass, employee_role)values ( 6,'admin@gmail.com','admin','Tech Officer');
insert into Employees  (person_id,employee_role)values ( 9,'Financial Admin');
insert into Employees  (person_id,employee_role)values ( 10,'Customer consultant');
insert into Employees  (person_id,employee_role)values ( 14, 'Receptionist');



insert into Customers(person_id, mobile_no,payable_amount) values(4,"+233 55 1112001",5000);
insert into Customers(person_id, mobile_no,payable_amount) values(5,"+233 55 1112001",10000);
insert into Customers(person_id, mobile_no,payable_amount) values(7,"+44 55 1112001",9000);
insert into Customers(person_id, mobile_no,payable_amount) values(8,"+93 55 1112001",8000);
insert into Customers(person_id, mobile_no,payable_amount) values(11,"+355 55 1112001",7000);
insert into Customers(person_id, mobile_no,payable_amount) values(12,"+244 55 1112001",5500);
insert into Customers(person_id, mobile_no,payable_amount) values(13,"+54 55 1112001",5900);
insert into Customers(person_id, mobile_no,payable_amount) values(15,"+374 55 1112001",9500);
insert into Customers(person_id, mobile_no,payable_amount) values(16,"+61 55 1112001",9800);
insert into Customers(person_id, mobile_no,payable_amount) values(17,"+43 55 1112001",7600);
insert into Customers(person_id, mobile_no,payable_amount) values(18,"+973 55 1112001",9700);
insert into Customers(person_id, mobile_no,payable_amount) values(19,"+32 55 1112001",8700);
insert into Customers(person_id, mobile_no,payable_amount) values(20,"+82 55 1112001",9600);


insert into Airline(airline_name, airline_id) values('British Airways', 'BA');
insert into Airline(airline_name, airline_id) values('Delta', 'DL');
insert into Airline(airline_name, airline_id) values('Emitrates', 'EK');
insert into Airline(airline_name, airline_id) values('Qatar Airways', 'QR');
insert into Airline(airline_name, airline_id) values('KLM', 'KLM');
insert into Airline(airline_name, airline_id) values('Turkish Airlines', 'TK');


insert into Payment(person_id,customer_id, payment_amount,payment_method, payment_status) values(3,4,5000,"PayPal",'Complete');
insert into Payment(person_id,customer_id, payment_amount,payment_method, payment_status) values(4,5,10000,"Mobile Money",'Complete');
insert into Payment(person_id,customer_id, payment_amount,payment_method, payment_status) values(5,7,3500,"Visa",'Incomplete');
insert into Payment(person_id,customer_id, payment_amount,payment_method, payment_status) values(7,8,8000,"Mastercard",'Complete');
insert into Payment(person_id,customer_id, payment_amount,payment_method, payment_status) values(8,11,7000,"Cash",'Complete');
insert into Payment(person_id,customer_id, payment_amount,payment_method, payment_status) values(11,12,5000,"Visa",'Incomplete');
insert into Payment(person_id,customer_id, payment_amount,payment_method, payment_status) values(12,13,5900,"Mobile Money",'Complete');
insert into Payment(person_id,customer_id, payment_amount,payment_method, payment_status) values(13,13,8500,"PayPal",'Incomplete');
insert into Payment(person_id,customer_id, payment_amount,payment_method, payment_status) values(15,2,9800,"Mastercard",'Complete');
insert into Payment(person_id,customer_id, payment_amount,payment_method, payment_status) values(16,3,6000,"Cash",'Incomplete');
insert into Payment(person_id,customer_id, payment_amount,payment_method, payment_status) values(17,9,5900,"Cash",'Incomplete');
insert into Payment(person_id,customer_id, payment_amount,payment_method, payment_status) values(18,10,7700,"Visa",'Complete');


insert into Ticket(ticket_price,Destination,Departure,departure_date,travel_class,airline_name,flight_no,seat_no,gate) values(5000,'France','Ghana','2021-12-22','First','British Airways',' BA789','B5','H5');
insert into Ticket(ticket_price,Destination,Departure,departure_date,travel_class,airline_name,flight_no,seat_no,gate) values(10000,'Switzerland','Ghana','2021-12-20','First','Qatar Airways','QR 789','B6','H5');
insert into Ticket(ticket_price,Destination,Departure,departure_date,travel_class,airline_name,flight_no,seat_no,gate) values(9000,'Sweden','Ghana','2021-12-22','First','Delta','DL89','B7','A5');
insert into Ticket(ticket_price,Destination,Departure,departure_date,travel_class,airline_name,flight_no,seat_no,gate) values(80000,'Germany','Ghana','2021-07-25','Business','British Airways',' BA789','B8','H5');
insert into Ticket(ticket_price,Destination,Departure,departure_date,travel_class,airline_name,flight_no,seat_no,gate) values(7000,'Italy','Ghana','2021-07-25','Business','Turkish Airlines','TK189','B9','H1');
insert into Ticket(ticket_price,Destination,Departure,departure_date,travel_class,airline_name,flight_no,seat_no,gate) values(5500,'Grece','Ghana','2021-07-25','Economy','Turkish Airlines','TK889','C5','H8');
insert into Ticket(ticket_price,Destination,Departure,departure_date,travel_class,airline_name,flight_no,seat_no,gate) values(5900,'USA','Ghana','2021-07-25','Economy','Qatar Airways','QR369','C6','H8');
insert into Ticket(ticket_price,Destination,Departure,departure_date,travel_class,airline_name,flight_no,seat_no,gate) values(9500,'Spain','Ghana','2021-07-25','Business','KLM','KL590','C7','H7');
insert into Ticket(ticket_price,Destination,Departure,departure_date,travel_class,airline_name,flight_no,seat_no,gate) values(9800,'Britain','Ghana','2021-012-19','Economy','British Airways',' BA789','C8','H7');
insert into Ticket(ticket_price,Destination,Departure,departure_date,travel_class,airline_name,flight_no,seat_no,gate) values(7600,'Denmark','Ghana','2021-12-21','First','Turkish Airlines','TK789','C9','H6');
insert into Ticket(ticket_price,Destination,Departure,departure_date,travel_class,airline_name,flight_no,seat_no,gate) values(9700,'USA','Ghana','2021-07-22','Economy','KLM','KLM789','D5','H6');
insert into Ticket(ticket_price,Destination,Departure,departure_date,travel_class,airline_name,flight_no,seat_no,gate) values(8700,'Turkey','Ghana','2021-07-24','Economy','KLM','KLM789','D6','H6');
insert into Ticket(ticket_price,Destination,Departure,departure_date,travel_class,airline_name,flight_no,seat_no,gate) values(9600,'USA','Ghana','2021-07-23','Economy','Qatar Airways','QR789','D7','H6');
insert into Ticket(ticket_price,Destination,Departure,departure_date,travel_class,airline_name,flight_no,seat_no,gate) values(6500,'Japan','Ghana','2021-07-22','Economy','British Airways','BA789','D8','H5');






#FUNCTIONS:
#Determine the average budget used by customers
#average
#select AVG(payable_amount) AS budget from Customers;

#checking for customers who have not completed payment
#sub query and in
#select person_id,fname,lname,email from Person where person_id in (select person_id from Payment where payment_status = "Incomplete");

#Rate airline service( based on frequency of airline used).
#count group by
#select count(airline_name),airline_name  from Ticket group by airline_name  ;

#Checking the number of customers per month
#count group by and order by
#select count(DATE_FORMAT(departure_date, '%m')) as Number_of_Customers, DATE_FORMAT(departure_date, '%m') as Month_Number
# from Ticket group by DATE_FORMAT(departure_date, '%m') 
 #order by DATE_FORMAT(departure_date, '%m') asc;
 
 #Help individuals buy tickets according to their budget
 #outer join and where
#SELECT Ticket.ticket_price, Customers.payable_amount  
#FROM Ticket   
#LEFT JOIN Customers  
#ON Ticket.ticket_price = Customers.payable_amount
#where Customers.payable_amount >=ticket_price;  

#Give customers their travel report after booking.
#inner join and order by
#SELECT fname, lname,Person.person_id,ticket_price,Destination,Departure,airline_name,travel_class,departure_date,seat_no
#FROM Person
#INNER JOIN Ticket
#ON Person.person_id = Ticket.person_id 
#order by Person.person_id;
