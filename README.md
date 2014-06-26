Tarea_4_Ayudantia
=================

CRUD

Configuracion de la base de datos en Laravel

1.- Buscar el archivo database.php en app/config.  
2.- Modificar la siguiente linea 'default' => 'mysql', por 'default' => 'pgsql'.
3.- Modificar los siguientes atributos de :
    'connections' => array(
                'pgsql' => array(
			          'driver'   => 'pgsql',
            		'host'     => 'localhost',
            		'database' => 'laravel',
            		'username' => 'postgres',
            		'password' => '',
            		'charset'  => 'utf8',
            		'prefix'   => '',
            		'schema'   => 'public',
            		'port'     => '6432',
            		),
Configuracion de la base de datos en pgadmin 3

1.- Conectarse al servidor local por defecto.
2.- Crear una nueva base de datos y nombrarla "laravel".
3.- Ir al icono de consultas de SQL.
4.- Abrir el archivo tarea_4.sql disponible en la raiz del repositorio.
5.- Ejecutar la consulta que agregara a la base de datos las tablas correspondientes, bodega y productos.




