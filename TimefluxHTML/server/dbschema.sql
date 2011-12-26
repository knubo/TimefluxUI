create table if not exists hours (
  id int AUTO_INCREMENT,
  added DATETIME not null,
  for_day DATE not null,
  post int not null,
  hours decimal(3,1) not null,
  notes varchar(255) not null,
  editing tinyint(1) not null,
  PRIMARY KEY (id)
);

create table if not exists projects (
  id int AUTO_INCREMENT,
  description varchar(255),
  PRIMARY KEY (id)
);

insert into projects (description) values ('Internt > Fravær > Ferie');
insert into projects (description) values ('NSB > Kundemaster');
