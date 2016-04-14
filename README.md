Peens
=====


A Symfony 2 Project


Version
----

Current Version 0.1

Server requirements
----
* MySQL 5

Installation
----

##### Clone Github repository

```sh
git clone https://github.com/dim4k/EzLoc.git
```

##### Install Symfony missing components

Go in your project directory and download Composer :

```sh
curl -s https://getcomposer.org/installer | php
```

then simply run this command :

```sh
php composer.phar install
```

It will install all the components needed for this Symfony project.

##### Run the server

Make sure your MySql server is runing and run those commands :

```sh
php app/console doctrine:database:create
```

```sh
php app/console doctrine:schema:update --force
```

Finally launch the server :

```sh
php app/console server:run
```