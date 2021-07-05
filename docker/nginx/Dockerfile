FROM nginx:latest
COPY ./src/* /usr/share/nginx/html/
WORKDIR /usr/share/nginx/html/
RUN apt-get -y update 
RUN apt-get -y install nano
