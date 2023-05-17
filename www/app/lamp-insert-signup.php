<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/app/css/master.css">
</head>
<body>

    <div class="container">

    <h1>Añadir usuario</h1>
<?php

$servername = "db";
$username = "root";
$password = "test";
$dbname = "bbddajustino22";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("La connexió ha fallat: " . mysqli_connect_error());
}

$dni=$_POST['dni'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion= $_POST['direccion'];
$tipo= $_POST['tipo'];

$sql = "INSERT INTO usuario (dni, nombre, apellido, direccion, tipo) VALUES ('$dni', '$nombre', '$apellido', '$direccion', '$tipo')";

if (mysqli_query($conn, $sql)) {
    echo "<h1>Registro completado!</h1>";
    echo "<form action='lamp-form-login.php' method='post'>";
    echo "<input type='submit' value='Ir a la página de login'>";
    echo "</form>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

    </div>

</body>
</html>
