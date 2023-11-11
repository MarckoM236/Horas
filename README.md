# Horas
Sistema básico para el Control de Horas en procesos de producción. Empleando PHP, JavaScript (Ajax, Jquery) y Mysql.

#Instalacion
Clonar el repositorio en el servidor dentro de la siguiente estructura de directorios:
PHP/HORAS 

Montar la base de datos Mysql ubicada en el directorio DB del proyecto.

Ubicar el archivo conexion.php ubicado en la ruta
App/Model/conexion.php
dentro de la estructura del proyecto y cambiar los datos de conexion:

  $this->host = 'localhost';
  $this->usuario = 'root';
  $this->pass = '';
  $this->db = 'planta';

