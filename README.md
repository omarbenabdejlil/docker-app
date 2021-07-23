# Docker-app
runnin a full php application into docker containers, using the docker compose to spinning up multiples containers 

<img src="https://grafikart.fr/media/resize/1330/750/uploads/attachments/2015/background-635-600a91d4e2030131568421.jpg?s=6656bac3ba1dbce11ed40d8949097ab5">

## Spinning up multiples containers : 
`docker-compose up -d`
 
<img src="https://i.ibb.co/gR1Pv76/compose1.png" alt="compose1" border="0" >

## Turn off the containers : 
`docker-compose down -d` || `docker container stop ${docker container list -aq}`

## Check out the containers with some infomations in addition [ ip, adresse, port]
`docker container ps`
- exemple :
<img src="https://i.ibb.co/yWc2TL8/docker-compose2.png" alt="docker-compose2" border="0" >
