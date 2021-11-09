from ubuntu

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update 

RUN apt install -y php 

WORKDIR app/

COPY . /app

CMD php -S 0.0.0.0:10000