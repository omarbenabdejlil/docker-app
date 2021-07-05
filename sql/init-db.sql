#CREATE DATABASE example_database;
#CREATE USER 'example_user'@'%' IDENTIFIED WITH mysql_native_password BY 'password';
#GRANT ALL ON example_database.* TO 'example_user'@'%';
# --> automaticaly created when launching container/service mysql 

CREATE TABLE example_database.todo_list (
    item_id INT AUTO_INCREMENT,
    content VARCHAR(255),
    PRIMARY KEY(item_id)
);


INSERT INTO example_database.todo_list (content) VALUES ("My first important item");


SELECT * FROM example_database.todo_list;

