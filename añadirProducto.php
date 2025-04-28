    <?php
    //conexion a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "baseweb") or 
    die("Problemas de conexion");

    if (isset($_REQUEST["nombre"]) && isset($_REQUEST["descripcion"]) && isset($_REQUEST["precio"])) {
        //definir variables con los datos del producto agregados por el usuario
        $nombre = $_REQUEST["nombre"];
        $descripcion = $_REQUEST["descripcion"];
        $precio = $_REQUEST["precio"];
        
        //insertar los valores agregados
        $sql = "INSERT INTO producto(nombre_producto, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";

        
        if (mysqli_query($conexion, $sql)) {
            echo "Agregado Correctamente";
        } else {
            echo "No se pudo agregar el producto" . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }
    ?>
 

