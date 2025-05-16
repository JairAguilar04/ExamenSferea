<?php
include("../includes/header.php");
// Credenciales de la DB
$host = 'localhost';
$db   = 'usuarios';
$username = 'root';
$password = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    // Conectar a la db
    $pdo = new PDO($dsn, $username, $password);
    echo "Conectado a la base de datos $db.<br><br>";

    // Preparando consulta donde los usuarios esten activos
    $estado = 'Activo';
    $stmt = $pdo->prepare("SELECT id, nombre, email FROM usuarios WHERE estado = :estado");
    $stmt->bindParam(':estado', $estado, PDO::PARAM_STR);

    // Ejecutar consulta
    $stmt->execute();

    // obteniendo los resultados
    $usuarios = $stmt->fetchAll();

    //Si hay resultados los mostramos en la tabla
    if ($usuarios) {
        echo "<strong>Usuarios activos:</strong><br>";
        echo $thead = "<table class='table table-striped'> <tr> <thead> <th>ID</th> <th>Nombre</th> <th>Correo</th> </thead> </tr>";
        echo $tbody = "<tbody>";
         foreach ($usuarios as $usuario) {
            echo "<tr><td align='center'> {$usuario['id']}</td> <td>{$usuario['nombre']} </td> <td>{$usuario['email']}</td></tr>";
        }
        echo $tcierre = "</tbody></table>";

    } else {
        // No hay resultados por mostrar
        echo "No se encontraron usuarios activos.";
    }

} catch (PDOException $e) {
    // Hubo algun error en la conexion a la DB
    echo "Error al conectarse a la base de datos " . $db . ": " . $e->getMessage();
}
include("../includes/footer.php");
?>

<br><a class="btn btn-primary" href="../index.php">Regresar</a>