useradm@ubuntu-server-2004:~/lamp-app/v03$ cat sql/init-db.sql 
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

useradm@ubuntu-server-2004:~/lamp-app/v03$ docker-compose exec mysql mysql -uexample_user -ppassword example_database < sql/init-db.sql 
the input device is not a TTY
ERROR: 1
useradm@ubuntu-server-2004:~/lamp-app/v03$ 
useradm@ubuntu-server-2004:~/lamp-app/v03$ docker-compose exec -T mysql mysql -uexample_user -ppassword example_database < sql/init-db.sql 
mysql: [Warning] Using a password on the command line interface can be insecure.
item_id	content
1	My first important item
useradm@ubuntu-server-2004:~/lamp-app/v03$ docker-compose exec
Execute a command in a running container

Usage: exec [options] [-e KEY=VAL...] [--] SERVICE COMMAND [ARGS...]

Options:
    -d, --detach      Detached mode: Run command in the background.
    --privileged      Give extended privileges to the process.
    -u, --user USER   Run the command as this user.
    -T                Disable pseudo-tty allocation. By default `docker-compose exec`
                      allocates a TTY.
    --index=index     index of the container if there are multiple
                      instances of a service [default: 1]
    -e, --env KEY=VAL Set environment variables (can be used multiple times,
                      not supported in API < 1.25)
    -w, --workdir DIR Path to workdir directory for this command.
useradm@ubuntu-server-2004:~/lamp-app/v03$ 


