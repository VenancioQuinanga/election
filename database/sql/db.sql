create database election;

create table candidate(
    id int not null auto_increment primary key,
    date timestamp,
    password varchar(30),
    votes bigint,
    candidate_name varchar(30)
);

create table users(
    id int not null auto_increment primary key,
    user_name varchar(30),
    bi varchar(50),
    password varchar(20),
    date timestamp,
    candidate_id int ,
    foreign key(candidate_id) references candidate(id)
);

create table help(
    id INT NOT NULL primary key auto_increment,
    email varchar(30),
    affair text
);