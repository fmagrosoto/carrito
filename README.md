# CARRITO DE COMPRAS

![GitHub repo size](https://img.shields.io/github/repo-size/fmagrosoto/carrito)
![GitHub stars](https://img.shields.io/github/stars/fmagrosoto/carrito?style=social)
![License](https://img.shields.io/badge/LICENSE-MIT-green)
![Lenguaje](https://img.shields.io/badge/PHP-True-blue)
![Lenguaje](https://img.shields.io/badge/Composer-True-blue)
![Twitter Follow](https://img.shields.io/twitter/follow/fmagrosoto?style=social)

**Carrito de Compra** es un ejemplo para construir un sistema
sencillo de carrito de la compra, hecho con variables de sesión de **PHP**.

Incluye una tabla ficticia de productos y una tabla del carrito, con
opción para modificar la cantidad del producto y eliminarlo del carrito.

## Prerequisitos

Antes de empezar a trabajar con este repositorio, ten en cuenta que
deberás de necesitar lo siguiente:

* PHP instalado en tu equipo
* Composer instalado en tu equipo
* Un editor de código (te recomiendo VS Code)
* Un servidor web local para hacer pruebas locales (te recomiendo XAMPP)

## Instalación

Para trabajar con este repositorio, es necesario instalar **Fat Free Framework**, un framework muy liviano de PHP que ete permitirá hacer un
sitio del tipo REST de manera muy rápida. Para eso, instala las dependencias de Composer:

```composer install```

## Uso

Una vez que hayas instalado **Fat Free Framework**, revisa el ```index.php```
que se encuentra dentro de la carpeta *public_html* y revisa la documentación. Cada pieza de código está debidamente comentada y documentada.

También, te recomiendo que consultes la documentación de [Fat Free Framework](https://fatfreeframework.com/3.6/home) para que entiendas un poco mejor las clases y métodos usados aquí. Es muy sencillo de usar. Pero ten en cuenta que **NO** necesitas este framework para usar este ejemplo, pues todo se deriva del uso de variables de sesión de PHP.

Puedes correr tu ambiente de prubas usando el servidor web de PHP:

```php -S localhost:8000 -t /public_html```

O si lo prefieres, instala y correo tu ambiente de pruebas con [XAMP](https://www.apachefriends.org/es/index.html).

## Contribuir

Si quieres contribuir a este proyecto, sigue las siguientes instrucciones:

1. Haz un forkj a este repositorio.
2. Crea una rama: `git checkout -b <branch_name>`.
3. Haz tus cambios y confírmalos: `git commit -m '<commit_message>'`
4. Haz  un push a la rama origina: `git push origin carrito/<location>`
5. Crea un pull reequest.

Alternativamente, revisa la documentación de GitHub [Crear Pull Request](https://help.github.com/en/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request).

## Contacto

Si me quieres contactar, lo puedes hacer desde <fmagrosoto@gmail.com>.

## Licencia

Este proyecto usa la siguiente licencia: [MIT](LICENSE).
