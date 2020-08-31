# checkout51

### Clone directory

```shell script
git clone https://github.com/sobiamaredia/checkout51.git
```

### Docker up

**Note: Make sure all the docker containers are down before running below command otherwise port will conflict.**

```shell script
docker container stop $(docker container ls -aq)
```
 
Build and run all the docker containers for our project

```shell script
cd checkout51
```

```shell script
docker-compose up --build -d
```

### Check website

Once all the containers are up and running check our website

```shell script
http://localhost:8004/
```

### Run PHP unit test inside docker container 

```shell script
docker exec -it checkout51_php_1 sh
```

```shell script
php bin/phpunit
```
