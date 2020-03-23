
<?php // probar conexion a base de datos
$servidor = "localhost";
$nombreusuario = "20192B106";
$password = "H2trKsshRb";
$db = "20192b106";

$conexion = new mysqli($servidor, $nombreusuario, $password);

//probar conexion a de usuario
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
echo "Conexión exitosa...";

//crear base de datos
$sql = "CREATE DATABASE IF NOT EXISTS 20192B106";
if ($conexion->query($sql) === true) {
    echo "Base de datos creada correctamente...<br>";
} else {
    die("Error al crear base de datos: " . $conexion->error);
}
?>

<?php //despues de crear la base de datos se ejecuta este otro php prara crear las tablas usando una coneccion ya establecida con la base de datos
$servidor = "localhost";
$nombreusuario = "20192B106";
$password = "H2trKsshRb";
$db = "20192b106";

$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

//crear tablas
//crear tabla Clientes
$sql = "CREATE TABLE IF NOT EXISTS CLientes(
    Idcliente  int not null,
    Nombre     character varying(70) not null,
    Apellido   character varying(70) not null,
    Contraseña character varying(70) not null,
    Telefono   int not null,
    Email      character varying(50) not null,
    Direccion  character varying(50) not null,
    CONSTRAINT pk_idcliente PRIMARY KEY (Idcliente),
    timestamp TIMESTAMP
)"; //verificacion  de la creacion de la tabla
if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente... <br>";
} else {
    die("<br>Error al crear tabla: " . $conexion->error);
}

//crear tabla Admins
$sql = "CREATE TABLE IF NOT EXISTS Admins(
    CedulaA  int not null,
    Nombre     character varying(70) not null,
    Email      character varying(50) not null,
    Contraseña character varying(70) not null,
    CONSTRAINT pk_idcliente PRIMARY KEY (CedulaA),
    timestamp TIMESTAMP
)"; //verificacion  de la creacion de la tabla
if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente... <br>";
} else {
    die("<br>Error al crear tabla: " . $conexion->error);
}

//crear tabla proveedores 
$sql = "CREATE TABLE IF NOT EXISTS Proveedores(
    Idprove  int not null,
    Nombrep     character varying(70) not null,
    Tipoproveedor character varying(40) not null,
    Telefono   int not null,
    Email      character varying(50) not null,
    Direccion  character varying(50) not null,
    Representante character varying(50) not null,
    CONSTRAINT pk_idprove PRIMARY KEY (Idprove),
    timestamp TIMESTAMP
)"; //verificacion  de la creacion de la tabla
if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente...<br>";
} else {
    die("<br>Error al crear tabla: " . $conexion->error);
}

//crear tabla empleados
$sql = "CREATE TABLE IF NOT EXISTS Empleados(
    Idemple  int not null,
    Cedula int not null,
    Nombreem     character varying(70) not null,
    Telefono   int not null,
    Email      character varying(50) not null,
    Direccion  character varying(50) not null,
    Cargo  character varying(50) not null,
    Sueldo  int not null,
    Eps character varying(50) not null,
    Fonde_pensiones character varying(50) not null,
    CONSTRAINT pk_idemple PRIMARY KEY (Idemple),
    timestamp TIMESTAMP
)"; //verificacion  de la creacion de la tabla
if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente...<br>";
} else {
    die("<br>Error al crear tabla: " . $conexion->error);
}

//crear tabla lista de materiales 
$sql = "CREATE TABLE IF NOT EXISTS Listado_materiales(
    Idlistado  int not null,
    Cantidad     int not null,
    Descripcion  character varying(40) not null,
    Costo       int not null,
    CONSTRAINT pk_idlistado PRIMARY KEY (Idlistado),
    timestamp TIMESTAMP
)"; //verificacion  de la creacion de la tabla
if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente...<br>";
} else {
    die("<br>Error al crear tabla: " . $conexion->error);
}

//crear tabla cotizaciones
$sql = "CREATE TABLE IF NOT EXISTS Cotizaciones(
    Idcoti  int not null,
    Cantidad     int not null,
    Descripcion  character varying(40) not null,
    Fk_idlistado_listado_materiales   int not null,
    CONSTRAINT pk_idcoti PRIMARY KEY (Idcoti),
    CONSTRAINT Fk_cotizaciones_listado_materiales FOREIGN KEY (Fk_idlistado_listado_materiales)
                    REFERENCES Listado_materiales(Idlistado),
    timestamp TIMESTAMP
)"; //verificacion  de la creacion de la tabla
if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente...<br>";
} else {
    die("<br>Error al crear tabla: " . $conexion->error);
}

//crear tabla orden trabajo
$sql = "CREATE TABLE IF NOT EXISTS Orden_trabajo(
    Idordt  int not null,
    Cantidad     int not null,
    Descripcion  character varying(40) not null,
    Fk_idcoti_cotizaciones   int not null,
    CONSTRAINT pk_idordt PRIMARY KEY (Idordt),
    CONSTRAINT Fk_orden_trabjo_cotizaciones FOREIGN KEY (Fk_idcoti_cotizaciones)
                    REFERENCES Cotizaciones(Idcoti),
    timestamp TIMESTAMP
)"; //verificacion  de la creacion de la tabla
if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente...<br>";
} else {
    die("<br>Error al crear tabla: " . $conexion->error);
}

//crear tabla produactos
$sql = "CREATE TABLE IF NOT EXISTS Productos(
    Idprod  int not null,
    Cantidadp     int not null,
    Descripcionp  character varying(40) not null,
    Costo     int not null,
    Venta     int not null,
    Fk_idprove_proveedores   int not null,
    CONSTRAINT pk_idordt PRIMARY KEY (Idprod),
    CONSTRAINT Fk_productos_proveedores FOREIGN KEY (Fk_idprove_proveedores)
                    REFERENCES Proveedores(Idprove),
    timestamp TIMESTAMP
)"; //verificacion  de la creacion de la tabla
if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente...<br>";
} else {
    die("<br>Error al crear tabla: " . $conexion->error);
}

$sql = "CREATE TABLE IF NOT EXISTS encuesta(
    id int auto_increment not null,
    nombre varchar(50),
    sexo varchar(50),
    correo varchar(50),
    frecuencia varchar(50),
    lugar varchar(50),
    compras varchar(50),
    tipo varchar(50),
    hora varchar(50),
    uso varchar(50), 
    hacer varchar(50), 
    fecha varchar(50),
    CONSTRAINT pk_id PRIMARY KEY (id),
    timestamp TIMESTAMP
    )"; //verificacion  de la creacion de la tabla
if ($conexion->query($sql) === true) {
    echo "La tabla se creó correctamente...<br>";
} else {
    die("<br>Error al crear tabla: " . $conexion->error);
}
?>


<?php // iserts de la base de datos 
// probar conexion a base de datos
$servidor = "localhost";
$nombreusuario = "20192B106";
$password = "H2trKsshRb";
$db = "20192b106";

$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

//probar conexion a de usuario
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
echo "Conexión exitosa...";

$sql = "INSERT INTO Clientes (Idcliente, Nombre,Apellido, Contraseña, Telefono, Email, Direccion) Values
(1,'Claudia', 'Lopez','ester1234',6559874,'claudial@gmail.com','calle 42 # 52-71 Bucaramanga'),
(2,'Daniel', 'Sanabria','ester1244',6559844,'dani@gmail.com','calle 43 # 52-71 Bucaramanga'),
(3,'Santiago', 'Rodriguez','ester1254',3208756943,'santi@gmail.com','calle 43 # 52-71 Centro'),
(4,'Elsa', 'Chacon','ester1264',6569844,'elsa@gmail.com','calle 13 # 52-71 Bucaramanga'),
(5,'Andres', 'Garcia','ester1274',6550844,'andi@gmail.com','calle 4 # 52-71 Bucaramanga'),
(6,'Naruto', 'Usumaki','ester1274',6550844,'el7mohokage@gmail.com','Aldea escondida entre la hoja')";

if (mysqli_multi_query($conexion, $sql)) {
    echo "Los datos se ingresaron correctamente...<br>";
} else {
    die("<br>Error al ingresar los datos: " . $conexion->error);
}

$sql = "INSERT INTO Proveedores (Idprove,Nombrep,Tipoproveedor,Telefono,Email,Direccion,Representante)
Values
(1,'Sandra Florez','Materia Prima',3169876453,'sandraflores94@gmail.com','cra 10 # 41-71 Bucaramanga','Coimpreosres'),
(2,'Veronica Benavidez','papeleria',3145676584,'verobe96@hotmail.com','Carrera 12 # 29-13 Bucaramanga','Suescun'),
(3,'Maunuel Pedraza ','papeleria',3219876409,'manuel_p1978@gmail.com','Calle 10 No. 9 - 78  Centro','Norma'),
(4,'Carlos Gutierrez  ','materia prima',3156798702,'gutierrez_021396@gmail.com','Cra 22 No. 17-31 Bucaramanga', 'Ashe'),
(5,'Alicia Cardenas','papeleria',3125467981,'aliciacardenas@hotmail.com','Cra 54 No. 68 - 80 Barrio el Prado','Granero Oriental')";

if (mysqli_multi_query($conexion, $sql)) {
    echo "Los datos se ingresaron correctamente...<br>";
} else {
    die("<br>Error al ingresar los datos: " . $conexion->error);
}

$sql = "INSERT INTO Empleados (Idemple,Cedula,Nombreem,Telefono,Email,Direccion,Cargo,Sueldo,Eps,Fonde_pensiones)
 Values
 (1,1098735742,'David Ortiz',321456798,'davidortiz@gmail.com','calle 42 # 52-71 Bucaramanga','Diseñador',1800000,'Nueva eps','Porvenir'),
 (2,1096824982,'Edison Rodirguez',6559874,'edisonr_95@hotmail.com','Tv. 93 #34-99, Bucaramanga','Cortador',1800000,'comeva','Porvenir'),
 (3,912966663,'Jorge Garcia',3208756943,'jorgejg@gmail.com','calle 42 # 52-71 centro','Prensista',1800000,'Salud Total','Porvenir'),
 (4,1097223435,'Luz Angarita',6354676,'luza98@gmail.com','cra 16 # 52-45 centro','Vendedora',1800000,'Nueva eps','Porvenir')";

if (mysqli_multi_query($conexion, $sql)) {
    echo "Los datos se ingresaron correctamente...<br>";
} else {
    die("<br>Error al ingresar los datos: " . $conexion->error);
}

$sql = "INSERT INTO Listado_materiales (Idlistado,Cantidad,Descripcion,Costo)
 Values
 (1,10,'resmas papel periodico',500000),
 (2,10,'resmas papel bond',200000),
 (3,500,'pliegos periodico color',40000),
 (4,5,'resmas qumico blanco,color',100000),
 (5,2,'resmas papel propalcote',100000)";

if (mysqli_multi_query($conexion, $sql)) {
    echo "Los datos se ingresaron correctamente...<br>";
} else {
    die("<br>Error al ingresar los datos: " . $conexion->error);
}

$sql = "INSERT INTO Cotizaciones (Idcoti,Cantidad,Descripcion,Fk_idlistado_listado_materiales )
 Values
 (1,10,'Talonarios media carta papel quimico',4),
 (2,1000,'Tarjetas de presentación',5),
 (3,20,'Talonarios medio oficio',2),
 (4,100,'Talonarios medio oficio',2)";

if (mysqli_multi_query($conexion, $sql)) {
    echo "Los datos se ingresaron correctamente...<br>";
} else {
    die("<br>Error al ingresar los datos: " . $conexion->error);
}

$sql = "INSERT INTO Orden_trabajo (Idordt,Cantidad,Descripcion,Fk_idcoti_cotizaciones )
 Values
 (1,10,'Talonarios media carta papel quimico',1),
 (2,1000,'Tarjetas de presentación',1),
 (3,20,'Talonarios medio oficio',3)";

if (mysqli_multi_query($conexion, $sql)) {
    echo "Los datos se ingresaron correctamente...<br>";
} else {
    die("<br>Error al ingresar los datos: " . $conexion->error);
}

$sql = "INSERT INTO Productos (Idprod,Cantidadp,Descripcionp,Costo,Venta,Fk_idprove_proveedores)
 Values
 (1,30,'cuadernos cosidos x 100 hojas cuadriculado',1200,1700,3),
 (2,30,'cuadernos cosidos x 100 hojas rayado',1200,1700,3),
 (3,20,'tijeras punta roma',700,1000,3),
 (4,200,'lapiceros colores surtidos big',6000,7000,2),
 (5,100,'lapices norma',500,800,3)";

if (mysqli_multi_query($conexion, $sql)) {
    echo "Los datos se ingresaron correctamente...<br>";
} else {
    die("<br>Error al ingresar los datos: " . $conexion->error);
}

$sql = "INSERT INTO Admins(CedulaA, Nombre ,Email, Contraseña)
Values
 (123456789,'David','david@hotmail.com','1234567'),
 (123456788,'Edinson','Edinson@hotmail.com','1234567'),
 (123456787,'Jorge','Jorge@hotmail.com','12334567'),
 (123456786,'Luz','Luz@hotmail.com','1234567')";
if (mysqli_multi_query($conexion, $sql)) {
    echo "Los datos se ingresaron correctamente...<br>";
} else {
    die("<br>Error al ingresar los datos: " . $conexion->error);
}
