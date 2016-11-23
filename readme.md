# Confee WEB

Este é o código fonte da série de vídeos [**Laravel Hardcore**](https://codecasts.com.br/series/laravel-hardcore)

> Nada de exemplos simples, vamos revirar o Laravel de ponta cabeça e desenvolver um projeto 100% prático


## Instruções

### Requisitos

- Docker 1.12+
- docker-compose 1.8+

### Instalação

```shell
docker-compose run api composer install # instalar dependencias php
```

```shell
docker-compose run api artisan migrator # rodar migrações
```

### Desenvolvimento

> Por padrão a API roda em `localhost:80`

```shell
docker-compose up # subir serviço
```

Para subir o serviço em segundo plano:

```shell
docker-compose up -d # sobe o serviço em segundo plano no terminal
docker-compose down # mata o serviço
```