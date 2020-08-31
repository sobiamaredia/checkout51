# checkout51

### Clone directory

```shell script
git clone https://github.com/sobiamaredia/checkout51.git
```

### Composer install command

```shell script
composer install
```

### Update database config

update  `.env` file present in root dir

1. Update db_user with mysql username
2. Update db_password with mysql password
3. Update db_name with mysql database name

`DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7`

e.g: 
`DATABASE_URL=mysql://root:welcome123@127.0.0.1:3306/checkout51?serverVersion=5.7`


### Create database schema

```shell script 
php bin/console doctrine:database:create
```

### Create table and insert data

```shell script 
php bin/console doctrine:migrations:migrate
```

