# Laravel API Skeleton

> Awesome Laravel boilerplate to create APIs using many cool features and technologies

I like to change the default architecture of Laravel when I work wit it, and some weeks ago I saw
some videos in [CodeCasts](https://codecasts.com.br/) of a serie about **Advanced Laravel** using version 5.3 
and I loved the architecture that they built. So this project is inspired by [codecasts/laravel](https://github.com/codecasts/laravel) 
and all the credits must go to [Diego Hernandes](https://github.com/hernandev), [Vinicius Reis](https://github.com/vinicius73) and 
[Fábio Vedovelli](https://github.com/vedovelli). I only made some personal changes to their architecture and I'm sharing it because I think 
that this repo can help when you need to start a new project.

## Tecnhologies

- [Ambientum](https://github.com/codecasts/ambientum)
  - Docker
  - PHP 7
  - Caddy
  - Redis
  - MySQL 5.7
- JWT Authentication
  - Uses [tymondesigns/jwt-auth](https://github.com/tymondesigns/jwt-auth)
  - Authentication with e-mail and password ready to use
  - Method to get authenticated user
- [Migrator](https://github.com/artesaos/migrator)
- Repositories using [prettus/l5-repository](https://github.com/andersao/l5-repository)
- Validator using [prettus/laravel-validator](https://github.com/andersao/laravel-validator)
- Presenters/Transformers using [Fractal](http://fractal.thephpleague.com/)

## How to use it

#### Checking your envirorment

To use this repository make sure you have **Docker** and **Docker Compose** installed. If you don't, you can 
use the links below to help you install them:  
  
- [Install Docker](https://www.docker.com/products/overview)
- [Install Docker Composer](https://docs.docker.com/compose/install/)

#### Using the boilerplate

- Clone this repo
- Install the dependencies
```shell
composer install
```
- You can check the default routes with:
```shell
php artisan route:list
```
- Rename the file `.env.example` to `.env`
- You can customize the variables in `.env` and `docker-compose.yml` if you want to.
- Run the migrations and seeders:
```shell
docker-compose run api bash
php artisan migrator --seed
exit
```
- Run the application:
```shell
docker-compose up
```
- Now you can use [Postman](https://www.getpostman.com/) or other app you like to test your API.

**NOW YOU CAN START DEVELOPING YOUR NEW AWESOME PROJECT WITH THIS BOILERPLATE!!!**

## Contributing

Bug reports and pull requests are welcome on GitHub at https://github.com/WendellAdriel/laravel-api-skeleton/. 
This project is intended to be a safe, welcoming space for collaboration, and contributors are expected to adhere to 
the [Contributor Covenant](http://contributor-covenant.org) code of conduct.

## License

The project is available as open source under the terms of the [MIT License](http://opensource.org/licenses/MIT).