<?php
function redimensionarImagen($rutaOriginal, $rutaDestino, $nuevoAncho) {
    // Obtener dimensiones y tipo
    list($ancho, $alto, $tipo) = getimagesize($rutaOriginal);
    
    // Calcular el alto proporcional
    $nuevoAlto = ($alto / $ancho) * $nuevoAncho;
    
    // Crear lienzo vacío
    $lienzo = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
    
    // Cargar imagen según tipo
    switch ($tipo) {
        case IMAGETYPE_JPEG: $fuente = imagecreatefromjpeg($rutaOriginal); break;
        case IMAGETYPE_PNG:  $fuente = imagecreatefrompng($rutaOriginal); break;
        default: return false;
    }
    
    // Redimensionar
    imagecopyresampled($lienzo, $fuente, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
    
    // Guardar (Calidad 75% para optimizar peso)
    imagejpeg($lienzo, $rutaDestino, 75);
    
    // Limpiar memoria
    imagedestroy($lienzo);
    imagedestroy($fuente);
    return true;
}





if(move_uploaded_file($fileTmpPath, $dest_path)) {
    // Una vez subida la original, la sobreescribimos con la versión optimizada
    // 800px es el ancho ideal para ver detalles sin pesar mucho
    redimensionarImagen($dest_path, $dest_path, 800);
    $foto_ruta = $dest_path;
}
?>