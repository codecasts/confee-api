# Confee API

Este é o código fonte da série de vídeos [**Laravel Hardcore**](https://codecasts.com.br/series/laravel-hardcore)

> Nada de exemplos simples, vamos revirar o Laravel de ponta cabeça e desenvolver um projeto 100% prático


## Instruções

### Requisitos

- Docker 1.12+
- docker-compose 1.8+

### Instalação

```shell
docker-compose run api php composer install # instalar dependencias php
```

```shell
docker-compose run api php artisan key:generate # gerar chave de aplicação
```

```shell
docker-compose run api php artisan migrator # rodar migrações
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

#### Artisan

```shell
docker-compose run api php artisan # lista de comandos
```

## Dicas
Os arquivos `php` e `composer` deste projetos são como *alias* para interagir com o php e composer do projeto.

```shell
./composer install # instalar dependencias php
./php artisan key:generate # gerar chave de aplicação
./php artisan migrator # rodar migrações
```

> `./php` é importante, pois seu terminal deve executar este arquivo e não o php que possa estar instalado na sua maquina