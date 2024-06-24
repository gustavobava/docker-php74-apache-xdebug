# Ambiente Docker com PHP 7.4 e Xdebug

## Subir o ambiente

`docker-compose up -d`

## Alterar o usuário da pasta profiles

`chown -R www-data:www-data profiles`

## Acessar o container

`docker exec -it php-xdebug bash`
