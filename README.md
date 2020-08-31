# checkout51

## Project Requirements
1) Docker

## Project Guideline

For this project we used symfony 5. 
This project include all the database migration scripts 
which create database and tables. 

For sorting and pagination I used [KnpLabs components](https://github.com/KnpLabs/knp-components) library


### Clone directory

```shell script
git clone https://github.com/sobiamaredia/checkout51.git
```

### Docker

**Note: Make sure all the docker containers are down before 
running below command otherwise port will conflict.**

```shell script
docker container stop $(docker container ls -aq)
docker system prune -a
```
 
Build and run all the docker containers for our project

First time this command is going to take sometime because it is going to 
download all images and also run composer install command which will create 
`var` and `vendor` folder inside checkout51 symfony directory

```shell script
cd checkout51
docker-compose up --build
```

### Check our website

Once all the containers are up and running check our website

```shell script
http://localhost:8004/
```

### Run PHP unit test inside docker container 

```shell script
docker exec -it checkout51_php_1 sh
php bin/phpunit
```


