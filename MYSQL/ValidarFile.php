<?php  
$validacionInputImagen = ($_FILES['imagen']['error'] == 0);

$extPermitidos = array('png', 'jpg', 'jpeg', 'gif', 'tiff', 'tif
', 'psd');
$arregloArchivo = explode(".", $_FILES['imagen']['name']);
$extension = strtolower(end($arregloArchivo));
$validacionExtensionImagen = (in_array($extension, $extPermitidos));

$tamano = 2000;
$validacionTamanoImagen = ($_FILES['imagen']['size'] < ($tamano * 1024));
?>