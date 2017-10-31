CREATE TABLE employee(
    id varchar(9) not null,
    firstname varchar(255) not null,
    lastname varchar(255) not null,
    age int(3) not null,
    department_id int not null,
    primary key(id)
);

INSERT INTO employee VALUES ('99980', 'John', 'Doe', 21, 1),('99982', 'Mary', 'Brown', 31, 4);

CREATE TABLE department (
    department_id int unsigned auto_increment,
    department varchar(255) not null,
    primary key(department_id)
);

INSERT INTO department VALUES (1, 'Sales'), (2, 'Marketing'), (3, 'Engineering'), (4, 'Human Resources');


select * from employee e join department d on e.department_id = d.department_id WHERE d.department_id = 4;