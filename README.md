# Docker-app
runnin a full php application into docker containers, using the docker compose to spinning up multiples containers 

<img src="https://grafikart.fr/media/resize/1330/750/uploads/attachments/2015/background-635-600a91d4e2030131568421.jpg?s=6656bac3ba1dbce11ed40d8949097ab5">

## Spinning up multiples containers : 
`docker-compose up -d`

<img src="https://i.ibb.co/9rXVwvG/compose1.png" alt="compose1">

## Turn off the containers : 
`docker-compose down -d` || `docker container stop ${docker container list -aq}`

## Check out the containers with some infomations in addition [ip,adresse,port]
`docker container ps`
- exemple :
<img src="![image](https://user-images.githubusercontent.com/42030023/124466271-64baf280-dd8e-11eb-9910-91864069573f.png)">
