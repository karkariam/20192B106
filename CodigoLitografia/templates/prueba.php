<?php include('../includes/header.php');   ?>
<br><br><br>

<?php // probar conexion a base de datos
$servidor = "localhost";
$nombreusuario = "20192B106";
$password = "H2trKsshRb";

$conexion = new mysqli($servidor, $nombreusuario, $password);

//probar conexion a de usuario
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
echo "Conexión exitosa...";

//crear base de datos
$sql = "CREATE DATABASE IF NOT EXISTS 20192B106";
if ($conexion->query($sql) === true) {
    echo "Base de datos creada correctamente...";
} else {
    die("Error al crear base de datos: " . $conexion->error);
}

//seleccionar la base de datos
$sql = "USE 20192B106";


//crear tablas
//crear tabla clientes 
$sql = "CREATE TABLE IF NOT EXISTS clientes(
    idcliente  int not null,
    nombre     character varying(70) not null,
    apellido   character varying(70) not null,
    contraseña character varying(70) not null,
    tipocliente character varying(40) not null,
    telefono   int not null,
    email      character varying(50) not null,
    direccion  character varying(50) not null,
    CONSTRAINT pk_idcliente PRIMARY KEY (idcliente)
)"; //verificacion  de la creacion de la tabla
if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente...";
} else {
    die("Error al crear tabla: " . $conexion->error);
}

//crear tabla proveedores 
$sql = "CREATE TABLE IF NOT EXISTS proveedores(
    idprove  int not null,
    nombrep     character varying(70) not null,
    tipoproveedor character varying(40) not null,
    telefono   int not null,
    email      character varying(50) not null,
    direccion  character varying(50) not null,
    representante character varying(50) not null,
    CONSTRAINT pk_idprove PRIMARY KEY (idprove)
)"; //verificacion  de la creacion de la tabla
if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente...";
} else {
    die("Error al crear tabla: " . $conexion->error);
}

//crear tabla empleados
$sql = "CREATE TABLE IF NOT EXISTS empleados(
    idemple  int not null,
    cedula int not null,
    nombreem     character varying(70) not null,
    telefono   int not null,
    email      character varying(50) not null,
    direccion  character varying(50) not null,
    cargo  character varying(50) not null,
    sueldo  int not null,
    seguridad_social character varying(50) not null,
    eps character varying(50) not null,
    fonde_pensiones character varying(50) not null,
    CONSTRAINT pk_idemple PRIMARY KEY (idemple)
)"; //verificacion  de la creacion de la tabla
if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente...";
} else {
    die("Error al crear tabla: " . $conexion->error);
}

//crear tabla lista de materiales 
$sql = "CREATE TABLE IF NOT EXISTS listado_materiales(
    idlistado  int not null,
    cantidad     int not null,
    descripcion  character varying(40) not null,
    costo       int not null,
    CONSTRAINT pk_idlistado PRIMARY KEY (idlistado)
)"; //verificacion  de la creacion de la tabla
if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente...";
} else {
    die("Error al crear tabla: " . $conexion->error);
}

//crear tabla cotizaciones
$sql = "CREATE TABLE IF NOT EXISTS cotizaciones(
    idcoti  int not null,
    cantidad     int not null,
    descripcion  character varying(40) not null,
    fk_idlistado_listado_materiales   int not null,
    CONSTRAINT pk_idcoti PRIMARY KEY (idcoti),
    CONSTRAINT fk_cotizaciones_listado_materiales FOREIGN KEY (fk_idlistado_listado_materiales)
                    REFERENCES listado_materiales(idlistado)
)"; //verificacion  de la creacion de la tabla
if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente...";
} else {
    die("Error al crear tabla: " . $conexion->error);
}

//crear tabla orden trabajo
$sql = "CREATE TABLE IF NOT EXISTS orden_trabajo(
    idordt  int not null,
    cantidad     int not null,
    descripcion  character varying(40) not null,
    fk_idcoti_cotizaciones   int not null,
    CONSTRAINT pk_idordt PRIMARY KEY (idordt),
    CONSTRAINT fk_orden_trabjo_cotizaciones FOREIGN KEY (fk_idcoti_cotizaciones)
                    REFERENCES cotizaciones(idcoti)
)"; //verificacion  de la creacion de la tabla
if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente...";
} else {
    die("Error al crear tabla: " . $conexion->error);
}

//crear tabla produactos
$sql = "CREATE TABLE IF NOT EXISTS productos(
    idprod  int not null,
    cantidadp     int not null,
    descripcionp  character varying(40) not null,
    costo     int not null,
    venta     int not null,
    CONSTRAINT pk_idordt PRIMARY KEY (idprod)
)"; //verificacion  de la creacion de la tabla
if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente...";
} else {
    die("Error al crear tabla: " . $conexion->error);
}

?>



<?php include("../includes/footer.php");        ?>