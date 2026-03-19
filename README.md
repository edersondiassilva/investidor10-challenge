# Investidor10 Challenge

Sistema de cadastro de notícias desenvolvido em Laravel.

## Tecnologias

- Laravel 13
- PHP 8.3
- MySQL 8
- Docker
- Nginx
- Bootstrap 5

## Funcionalidades

- Cadastro de categorias
- Cadastro de notícias
- Edição e exclusão
- Filtro por título
- Filtro por categoria
- Paginação
- Seed com dados fake

## Como rodar

Clone:

git clone <repo>

Entrar:

cd investidor10-challenge

Subir containers:

docker compose up -d --build

Rodar migrations:

docker compose exec app php artisan migrate --seed

Acessar:

http://localhost:8080

## Estrutura

src → Laravel  
docker → configs  
docker-compose.yml → containers

## Banco

host: db  
database: investidor10  
user: laravel  
password: root

## Observações

Projeto feito para teste técnico.
