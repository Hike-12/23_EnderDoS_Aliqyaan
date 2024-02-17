drop database doctors;
create database doctors;
use doctors;
create table doctorinfo (
Id int primary key,
Name varchar(50),
Age int not null,
Location varchar(50),
Specialisation varchar(100),
Experience varchar(50),
Fee int not null
);
insert into doctorinfo(Id,Name,Age,Location,Specialisation,Experience,Fee)
values
(1,"Dr. Rohan Benegal",38,"Mumbai","Cardiologist","8 Years",1000),
(2,"Dr. Kiran Patel",40,"Kolkata","Dentist","14 Years",300),
(3,"Dr. Akash Chandra",52,"Jaipur","Gastroenterologist","25 Years",350),
(4,"Dr. Meenakshi Iyer",60,"Chennai","Endocrinologist","32 Years",200),
(5,"Dr. Rishika Gupta",46,"Banglore","Ophthalmologist","18 Years",400),
(6,"Dr. Rajeev Malhotra",35,"Mumbai","Psychiatrist","7 Years",600),
(7,"Dr. Vikram Desai",48,"Kolkata","Cardiologist","19 Years",800),
(8,"Dr. Maya Sharma",37,"Banglore","Pediatrician","10 Years",400),
(9,"Dr. Rahul Chatterjee",63,"Surat","Obstetrician-Gynecologist","35 Years",750),
(10,"Dr. Arjun Desai",55,"Chennai","Internists","27 Years",200);





select * from doctorinfo;