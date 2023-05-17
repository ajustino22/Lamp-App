<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/app/css/master.css">
  </head>
  <body>
  <div class="container">
    <h1>REGISTRATE!!</h1>

    <form action="lamp-insert-signup.php" method="post">
      <label for="dni">DNI:</label>
      <input type="text" id="dni" name="dni">

      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre">

      <label for="titulo">Apellido:</label>
      <input type="text" id="apellido" name="apellido">

      <label for="descripcion">Direccion:</label>
      <input type="text" id="direccion" name="direccion">

      <label for="tipo">Tipo:</label>
      <select id="tipo" name="tipo">
        <option value="normal" selected>Normal</option>
        <option value="investigador">Investigador</option>
      </select>

      <input type="submit" value="Submit">
    </form>

    <button onclick="location.href='lamp-form-login.php'">Login</button>

  </div>
</body>

</html>
