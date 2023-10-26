<?php
    require_once('insert.php');
    $object = new DataInsert();

    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $codigocurso = $_REQUEST['codigocurso'];
    
    $object->insertar($nombre,$apellido,$codigocurso);
?>