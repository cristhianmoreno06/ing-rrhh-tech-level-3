# Conteo de Colisiones

## Descripción

Esta función `robotCollisions` calcula el número de colisiones para cada robot en una secuencia dada de robots representados por `R` (robots que se desplazan hacia la derecha) y `L` (robots que se desplazan hacia la izquierda). Cuando dos robots chocan (un `R` y un `L` se encuentran), ambos cambian de dirección instantáneamente y se cuenta como una colisión para cada robot involucrado.

## Ejemplos de uso

```php
    <?php
    require_once 'colisiones.php';
    
    echo robotCollisions('LR') . "<br>";  // Salida: 0 0
    echo robotCollisions('RL') . "<br>";  // Salida: 1 1
    echo robotCollisions('RRR') . "<br>"; // Salida: 0 0 0
    echo robotCollisions('RRL') . "<br>"; // Salida: 1 2 1
```

## Requisitos
Asegúrate de tener [PHP 8.0+](https://www.php.net/downloads.php) instalado en tu sistema. Puedes verificar esto ejecutando `php -v` en tu terminal.
```bash 
php -v
```` 

También necesitarás [Composer](https://getcomposer.org/download/) para instalar y gestionar las dependencias, como [PHPUnit](https://docs.phpunit.de/en/11.3/) para las pruebas unitarias.


## Instrucciones de instalación
 1. Clona el repositorio o copia los archivos robotCollisions.php y robotCollisionsTest.php en tu máquina local.

    ```bash
    git clone https://github.com/cristhianmoreno06/ing-rrhh-tech-level-3.git
    cd ing-rrhh-tech-level-3
    ````
    
 2. Instala PHPUnit (si aún no lo tienes instalado). Puedes hacerlo utilizando Composer:

    ```bash
    composer require --dev phpunit/phpunit ^9
    ````

## Uso

### Ejecución de la función
Puedes ejecutar la función directamente desde la línea de comandos o en un entorno web:

1. Desde un navegador web:

   Si estás utilizando un servidor web como `XAMPP` o `WAMP`, Luego, simplemente abre el archivo `PHP` en tu navegador.


2. Desde la línea de comandos:
   ```bash
   php robotCollisions.php
Esto ejecutará el archivo PHP y mostrará los resultados de las colisiones en la terminal.

## Ejecución de las pruebas unitarias
Para asegurar que la función robotCollisions funciona correctamente, puedes ejecutar las pruebas unitarias:

1. Ejecuta las pruebas con PHPUnit:

    ```bash
    ./vendor/bin/phpunit robotCollisionsTest.php
Esto ejecutará las pruebas definidas en robotCollisionsTest.php y mostrará los resultados en la terminal.

## Pruebas unitarias
Las pruebas unitarias están definidas en el archivo `robotCollisionsTest.php`. Las pruebas incluyen una serie de casos que cubren diferentes secuencias de robots para garantizar que la función se comporte como se espera.

### Ejemplo de pruebas
````php

    public function testCollision1() {
    $this->assertEquals('0 0', robotCollisions('LR'));
    }
    
    public function testCollision2() {
    $this->assertEquals('1 1', robotCollisions('RL'));
    }
    
    public function testCollision3() {
    $this->assertEquals('0 0 0', robotCollisions('RRR'));
    }
    
    public function testCollision4() {
    $this->assertEquals('1 1 2', robotCollisions('RRL'));
    }
````
## Resultado esperado
Cuando ejecutas las pruebas, deberías ver una salida como esta:
~~~
    PHPUnit 9.0.0 by Sebastian Bergmann and contributors.
    
    .......
    
    Time: 00:00.003, Memory: 4.00MB
    
    OK (7 tests, 7 assertions)
    Esto indica que todas las pruebas pasaron correctamente.
~~~