<style type="text/css">
    body{
        background-image: linear-gradient(to top, #f2b3e2, #ffbecf, #ffcfc5, #ffe2c8, #fdf3d9);
    }

    input[type="button"] {
    background: none;
    border: none;
    background: #0a9797f1;
    color: #fff;
    width: 20%;
    font-size: 14px;
    padding: 10px 0;
    font-family: Tahoma;
    border-radius: 10px;
    transition: all .5s ease;
    margin: 10px;
    font-weight: bold;
}

input[type="button"]:hover {
  background: #1e2363;
}

</style>

<?php
if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        
        //Credenciales Mysql
        $Host = 'localhost';
        $Username = 'root';
        $Password = '';
        $dbName = "imagen";
        //Crear conexion con la abse de datos
        $db = new mysqli($Host, $Username, $Password, $dbName);
        
        // Cerciorar la conexion
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
          
        //Insertar imagen en la base de datos
        $insertar = $db->query("INSERT into images_tabla (imagenes, creado) VALUES ('$imgContenido', now())");
		// COndicional para verificar la subida del fichero
        if($insertar){
            echo "<h1>Archivo Subido Correctamente.</h1>";
        }else{
            echo "<h1>Ha fallado la subida, reintente nuevamente.</h1>";
        } 
		// Sie el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}
?>

<a href="index.php">
    <input type="button" value="Atras">
</a>