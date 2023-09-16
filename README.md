# Prueba Técnica VisaGov
En esta prueba técnica, se desarrolló una aplicación CRUD en Laravel abordando los siguientes aspectos:

# Base de Datos:
* En la carpeta /img estan las imagenes del diseño de la base de datos con sus respectivos datos de prueba.

# Principal:
* Creación de 2 modelos: Book y Message. Ambos extienden de Model permitiendo definir las propiedades de los objetos que posteriormente se usarán en la base de datos.
* Implementación de una base de datos MySQL, acompañada de sus respectivas migraciones, seeders y factories.
* Desarrollo del controlador BookController, que proporciona las funcionalidades esenciales para el modelo Book como Create, Update y Destroy.
* En el archivo main, se definen las rutas que conectan con las funciones del BookController.

# Extras:
* Se incorporó el plugin requerido para implementar un sistema de traducción, soportando los idiomas Inglés y Español.
* Las traducciones están organizadas en el archivo lang/*/messages.php.