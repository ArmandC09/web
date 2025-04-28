<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "baseweb") or 
die("Problemas de conexión");

//consulta a la base de datos
$sql = "SELECT nombre_producto, descripcion, precio FROM producto";
$resultado = mysqli_query($conexion, $sql);
 //bucle para almacenar los productos agregados
while ($reg = mysqli_fetch_array($resultado)) {
    echo "<div class='producto'>";
    echo "<h2>" . $reg["nombre_producto"] . "</h2>";
    echo "<p>" . $reg["descripcion"] . "</p>";
    echo "<p class='precio'>Precio: S/" . $reg["precio"] . "</p>";
    echo "</div>";
}
mysqli_close($conexion);
?>



