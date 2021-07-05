Version: v04
version de PRODUCTION
           ----------
           
!!! en prod :
- le code de l'application doit être intégé dans les images 
- pas de volume de type "host directory"
-----------------------------------------------------------

---> Trois services: apache + php-fpm + mysql


- terminal 1 (~/lamp-app/v04): lancer l'application

docker-compose up


- terminal 2 (~/lamp-app/v04): initialiser la BD

docker-compose exec -T mysql mysql -uexample_user -ppassword example_database < sql/init-db.sql 


- Navigateur: tester l'application

http://192.168.56.20:2000/index.html
http://192.168.56.20:2000/info.php
http://192.168.56.20:2000/todo_list.php

