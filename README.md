# Investidor10 Challenge

Projeto desenvolvido em Laravel como solução para o teste técnico.

A aplicação permite o gerenciamento de categorias e notícias, com busca,
filtro e paginação, seguindo boas práticas de organização e deploy.

---

## Tecnologias utilizadas

- PHP 8.3
- Laravel 11
- SQLite
- Docker
- Bootstrap 5
- Render (deploy)

---

## Funcionalidades

- CRUD de categorias
- CRUD de notícias
- Busca por título
- Filtro por categoria
- Paginação
- Seeders com dados fake
- Deploy online
- Configuração via Docker

---

## Rodando com Docker

docker compose up -d --build

Acessar:
http://localhost:8000

---

## Banco de dados

SQLite usado para facilitar execução local e cloud.

Rodar:

php artisan migrate --seed

---

## Deploy

https://investidor10-challenge.onrender.com

---

## Estrutura

- Factories
- Seeders
- Pagination Bootstrap
- HTTPS production
- Docker
- Render deploy

---

## Execução sem Docker

cd src
composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve

---

Autor: Ederson Dias Silva
