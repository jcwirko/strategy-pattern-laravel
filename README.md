## Patrón Strategi
Este es el código de ejemplo realizado para el video de youtube explicando que es y cuando usar el patrón strategy con implementación en Laravel.

### Link del video
https://www.youtube.com/watch?v=xKgvie3bKnE

### Setup
1. Clonar el projecto desde `https://github.com/jcwirko/strategy-pattern-laravel`
2. Ejecutar `php -S localhost:8000 -t public`
3. Hay una carpeta postman en el directorio raíz del proyecto, importarlo y ejecutar la colección. Los parametros que acepta `state` son: 
    - in_transit
    - cancelled
    - billed
    - payed
    - certified
    -at_destination
