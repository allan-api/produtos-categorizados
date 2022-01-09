<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

##

## Criando banco de dados

Utilizaremos o banco MySQL, certifique-se de que o tenha, crie um banco de dados vazio com o nome `users`;

1. Acesse o console do DOS:
   windows > executar > cmd

2. Digite o caminho aonde está instalado o mysql.exe
   C:\> cd xampp\mysql\bin

3. Execute `mysql.exe -u root -p`
   Entre com o password:

4. Depois Execute o comando `CREATE DATABASE producs_control`

##

## Configurando a aplicação

Será necessário configurar o `.env` no projeto;

Defina em `DB_USERNAME=` o seu username do mysql;
Defina em `DB_PASSWORD=` a sua senha do mysql;
Defina em `DB_DATABASE=` o nome do seu banco de dados;

Utilize o comando `composer update` para atualizar as dependências;

##

## Criando as tabelas no banco de dados

Em um terminal, dentro da pasta do seu projeto, execute o comando `php artisan migrate` para criar as tabelas em seu banco;

##

## Iniciando

Utilize o artisan como servidor com `php artisan serve`;

Acesse o projeto em http://localhost:8000/ pois já estamos com tudo pronto!
