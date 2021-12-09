drop database if exists WebsiteDb ;
create database WebsiteDb;
use WebsiteDb;

create table Company(
CompanyID int primary key,
CompanyName char(30),
requirementLevel char(30),
GPACutOff dec,
Location varchar(30),
MajorPreference char(30),
rating int
);

create table University(
UniversityID int primary key,
UniversityName char(30),
YearEstablished varchar(30),
Description char(100),
Location varchar(30)
);

create table Applicant(
ApplicantID int primary key,
UniversityID int(30),
CompanyID int(30),
Name char(30),
Gender char(10),
Email varchar(30),
Level int,
Major char(30),
GPA dec,
CompanyPreference varchar(30),
foreign key(UniversityID) references University(UniversityID),
foreign key(CompanyID) references Company(CompanyID)
);



