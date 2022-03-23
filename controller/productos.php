<?php
  require_once("../config/conexion.php");
  require_once("../models/Producto.php");
  $producto = new Producto;

  switch ($_GET['op']) {
    case 'Listar':
      $datos = $producto->getProducto();
      $data = Array();
      foreach ($datos as $row) {
        $sub_array = array();
        $sub_array[] = $row['prod_nom'];
        $sub_array[] = '<button type="button" class="btn btn-outline-primary btn-icon" onClick="editar('.$row['prod_id'].' id="'.$row['prod_id'].'"><div><i class="fa fa-edit"></i></div></button>';
        $sub_array[] = '<button type="button" class="btn btn-outline-danger btn-icon" onClick="eliminar('.$row['prod_id'].')" id="'.$row['prod_id'].'"><div><i class="fa fa-trash"></i></div></button>';
        $data[] = $sub_array;
      }
      $results = array(
        "sEcho"=>1,
        "iTotalRecords"=>count($data),
        "iTotalDisplayRecords"=>count($data),
        "aaData"=> $data);
      echo json_encode($results);
      break;

    default:
      # code...
      break;
  }

?>