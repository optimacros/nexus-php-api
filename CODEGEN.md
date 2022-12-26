# Информация по генерации PHP кода клиента для работы с Nexus repository API

Github: https://github.com/swagger-api/swagger-codegen
Документация: https://swagger.io/docs/open-source-tools/swagger-codegen/

## Установка JRE
```
sudo apt update
sudo apt install default-jre
java -version
```

## Установка Swagger-Codegen
```
# Download current stable 2.x.x branch (Swagger and OpenAPI version 2)
wget https://repo1.maven.org/maven2/io/swagger/swagger-codegen-cli/2.4.29/swagger-codegen-cli-2.4.29.jar -O swagger-codegen-cli.jar

# Check version
java -jar swagger-codegen-cli.jar version

# Get help
java -jar swagger-codegen-cli.jar help

# Get available config options for PHP
java -jar swagger-codegen-cli.jar config-help --lang php
```
(скачиваем 2-ю версию, т.к. 3-я генерирует устаревший PHP-код, см. https://github.com/swagger-api/swagger-codegen/issues/10392)

## Генерация кода
Json, описывающий Nexus repository API: https://c001-vm226-mw-distr-dev.optimacros.org/service/rest/swagger.json

Подготавливаем конфигурацию для генерации кода (config.json):
```
{
  "variableNamingConvention": "camelCase",
  "invokerPackage": "Optimacros\\NexusPhpApi",
  "composerVendorName": "optimacros",
  "composerProjectName": "nexus-php-api"
}
```

Запуск генерации:
```
java -jar swagger-codegen-cli.jar generate \
   -i https://c001-vm226-mw-distr-dev.optimacros.org/service/rest/swagger.json \
   -l php \
   -o ./nexus-php-api \
   -c ./config.json
```
В результате получаем в директории ```./nexus-php-api/SwaggerClient-php``` код библиотеки.

Далее копируем содержимое этой директории в директорию с кодом этого git-репозитория, убираем изменения из ```composer.json```, коммитаем.
