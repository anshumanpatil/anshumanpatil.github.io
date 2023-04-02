# docker build -t anshuman-profile:latest .
# docker run -d -p 80:80 anshuman-profile:latest
# http://ec2-3-82-151-79.compute-1.amazonaws.com:8080/job/Profile-Git%20Project/
FROM php:8.0-apache
WORKDIR /var/www/html
COPY . /var/www/html
EXPOSE 80
