create table users (
  id int unsigned primary key auto_increment,
  name varchar(50) unique not null,
  email varchar(100) not null,
  password varchar(64) not null
);
