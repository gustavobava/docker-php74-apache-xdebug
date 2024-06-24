# Ambiente Docker com PHP 7.4 e Xdebug

## Subir o ambiente

`docker-compose up -d`

## Alterar o usu�rio da pasta profiles

`chown -R www-data:www-data profiles`

## Acessar o container

`docker exec -it php-xdebug bash`

## Executar a aplica��o

`http://localhost:8080`

### Verificar os resultados na pasta profiles