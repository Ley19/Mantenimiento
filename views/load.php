<?php

include("conexion.php");
$con=conectar();

$columnas = ['codigo', 'producto', 'descripcion', 'precio'];
$table = "productos";

$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;

$sql = "SELECT" . implode(",", $columnas) . "FROM $table";
$resultado = $con->query($sql);
$num_rows = $resultado->num_rows;

$html = '';

if($num_rows > 0 ){
    while($row = $resultado->fetch_assoc()){
        $html .= '<tr>';
        $html .= '<td>'.$row['codigo'].'</td>';
        $html .= '<td>'.$row['producto'].'</td>';
        $html .= '<td>'.$row['descripcion'].'</td>';
        $html .= '<td>'.$row['precio'].'</td>';
        $html .= '<td><a href="">Agregar</a></td>';
        $html .= '</tr>';

    }
}else{
    $html .= '<tr>';
    $html .= '<td colspan="5">Sin resultados</td>';
    $html .= '</tr>';
}

echo json_encode($html);