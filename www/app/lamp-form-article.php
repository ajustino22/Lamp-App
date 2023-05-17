<!DOCTYPE html>
  <html>
  <head>
    <link rel="stylesheet" href="/app/css/master.css">
  </head>
  <body>

    <div class="container">

    <h1>Agrega un articulo a la base de datos :)</h1>
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $dni = $_POST['dni'];
  $tipo = $_POST['tipo'];
} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $dni = $_GET['dni'];
  $tipo = $_GET['tipo'];
}

$sql = "SELECT dni, tipo FROM usuario WHERE dni = '$dni' AND tipo = '$tipo'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // El usuario es válido, permitir el acceso
    echo "<h1>Bienvenido!!</h1>";
    echo '<form action="lamp-insert-article.php" method="post" autocomplete="off">';
    echo '<label for="id">id:</label>';
    echo '<input type="text" id="id" name="id"><br><br>';
    echo '<label for="dni_autor">DNI Autor:</label>';
    echo '<input type="text" id="dni_autor" name="dni_autor"><br><br>';
    echo '<label for="titulo">Titulo:</label>';
    echo '<input type="text" id="titulo" name="titulo"><br><br>';
    echo '<label for="descripcion">Descripcion:</label>';
    echo '<input type="text" id="descripcion" name="descripcion"><br><br>';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
} else {
    // El usuario es inválido, denegar el acceso
    echo "<h1>Error: DNI y tipo inválidos</h1>";
}

mysqli_close($conn);
?>

    </div>

  </body>
</html>




