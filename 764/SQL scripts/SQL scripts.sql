-- creating database
begin;
create database sample_db;
commit;

-- creating table in the sample_db
begin;
create table sample_db.nametable(
fname varchar(30)
, lname varchar(30));
commit; 