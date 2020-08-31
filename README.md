# checkout51

### Clone directory

```shell script
git clone https://github.com/sobiamaredia/checkout51.git
```

### Docker up

```shell script
docker-compose up --build
```

### Run Composer install inside docker container

```shell script
docker exec -it checkout51_php_1 sh
```

```shell script
composer install
```

### Run PHP unit test inside docker container 

```shell script
docker exec -it checkout51_php_1 sh
```

```shell script
php bin/phpunit
```
