# Aplicación de Prueba Universidad

_Participante: Veronica Borges._

## Requerimientos Mínimos.

```
* PHP >= 7.1.3
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* Ctype PHP Extension
* JSON PHP Extension
* BCMath PHP Extension
* node 8.10.0
* npm 6.10.1
```

## Instalación Backend

_Ejecución del Composer_

```
composer install
```

_Copiar el archivo env.example .env_

```

cp .env.example .env
```

-Generar llave de la aplicación

```
phpartisan key:generate
```

_Modificar las configuraciones correspondientes a conexiones en el archivo .env_

```
DB_*
```

_Generar Migrar la Estructura Base_

```
php artisan migrate
```

## Modulos WebServer a Habilitar.

- rewrite, headers

## Instalación Frontend.

_Instalacion de Nodejs_
```
$ npm install
```

_Ejecutar Cambios_

```
    npm run prod
```

## Comandos de ayuda.

_Liberar cache de la aplicación_

```
php artisan optimize:clear

```
