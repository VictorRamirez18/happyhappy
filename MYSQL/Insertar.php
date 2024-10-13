<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $varsession = $_SESSION['usuario'];
    if ($varsession == null || $varsession == '') {
        header("Location: ../Admin.php");
        die();
    }

    include("Conexion.php");

    $producto = trim($_POST['producto']);
    $precio = trim($_POST['precio']);

    $validacionCamposVacios = (!empty($producto) && !empty($precio));

	$producto = filter_var($producto, FILTER_SANITIZE_SPECIAL_CHARS);
    $precio = filter_var($precio, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    $uploadOk = 1;
    $targetDir = "../Images/SubmittedProducts/";
    $targetFile = $targetDir . basename($_FILES["imagen"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

	$errorArchivo = $_FILES['imagen']['error'];

    // Revisar si el archivo subido es realmente una imagen
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "El archivo no es una imagen";
        $uploadOk = 0;
    }

    // Si el archivo ya existía, eliminarlo.
	if (file_exists($targetFile)) {
		unlink($targetFile);
		echo "Se eliminó el antiguo archivo";
	}

    // Revisar que el tamaño maximo de la imagen sea de 2MB
    if ($_FILES["imagen"]["size"] > 2000000) {
        echo "El tamaño del archivo supera los 2MB";
        $uploadOk = 0;
    }

    // Sólo permitir ciertos formatos
    $allowedExtensions = array("jpg", "png", "jpeg", "gif");
    if (!in_array($imageFileType, $allowedExtensions)) {
        echo "Sólo se aceptan archivos en formato JPG, JPEG, PNG o GIF";
        $uploadOk = 0;
    }

    // Cancelar la inserción si hubo algún error con la imagen
    if ($uploadOk == 0) {
        echo "El archivo no se subió por algún error";
    } else {
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
		if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $targetFile)) {
			echo "El archivo ". htmlspecialchars(basename($_FILES["imagen"]["name"])). " se ha subido correctamente";
		
			$targetFile = substr($targetFile, 3);
			echo $targetFile;
			$query = "INSERT INTO productos(producto, imagen, precio) VALUES('$producto', '$targetFile', $precio)";
			$resultado = $con->query($query);
		
			if (!$resultado) {
				error_log("Hubo un error al insertar el producto: " . $con->error);
				header("Lcation: Error.php");
				exit();
			} else {
				header("Location: ProductosDataBase.php");
				exit();
			}
		
		} else {
			echo "Hubo un error subiendo el archivo.";
		}
	}
}
?>