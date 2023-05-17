<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/app/css/master.css">
</head>
<body>

<div class="container">

<h1>Afegir un articulo a la bbdd</h1>
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

$id=$_POST['id'];
$dni_autor=$_POST['dni_autor'];
$titulo=$_POST['titulo'];
$descripcion= $_POST['descripcion'];

$sql = "INSERT INTO articulo (id, dni_autor, titulo, descripcion) VALUES ('$id', '$dni_autor', '$titulo', '$descripcion')";

if (mysqli_query($conn, $sql)) {
    echo "<p>S'ha afegit correctament</p>";
    // Mostra les dades
    $sql = "SELECT * FROM articulo";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>id</th><th>dni_autor</th><th>titulo</th><th>descripcion</th></tr>";
        // Sortida de dades per cada fila
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["dni_autor"]. "</td><td>" . $row["titulo"]. "</td><td>" . $row["descripcion"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 resultats";
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<a href="/app/lamp-form-article.php?dni=<?php echo $dni_autor; ?>&tipo=Investigador"><button>Agregar otro articulo</button></a>

</div>

</body>
</html>
