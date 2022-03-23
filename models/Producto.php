<?php

class Producto extends Conectar
{
  public function getProducto()
  {
    $conectar = parent::Conexion();
    parent::set_names();
    $sql="SELECT * FROM tm_producto";
    $sql=$conectar->prepare($sql);
    $sql->execute();
    return $resultado = $sql->fetchAll();
  }

  public function getProductoID($prod_id)
  {
    $conectar = parent::Conexion();
    parent::set_names();
    $sql="SELECT * FROM tm_producto WHERE prod_id = ?";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $prod_id);
    $sql->execute();
    return $resultado = $sql->fetchAll();
  }

  public function deleteProducto($prod_id)
  {
    $conectar = parent::Conexion();
    parent::set_names();
    $sql="UPDATE tm_producto SET estado = '0', fecha_elim = now() WHERE prod_id = ?";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $prod_id);
    $sql->execute();
    return $resultado = $sql->fetchAll();
  }

  public function createProducto($prod_nom)
  {
    $conectar = parent::Conexion();
    parent::set_names();
    $sql="INSERT INTO `tm_producto` (`prod_nom`, `fecha_crea`, `estado`) VALUES
    ( ?, now(), 1)";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $prod_nom);
    $sql->execute();
    return $resultado = $sql->fetchAll();
  }

  public function updateProducto($prod_id, $prod_nom)
  {
    $conectar = parent::Conexion();
    parent::set_names();
    $sql="UPDATE tm_producto SET prod_nom = ?, fecha_modi = now() WHERE prod_id = ?";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $prod_nom);
    $sql->bindValue(1, $prod_id);
    $sql->execute();
    return $resultado = $sql->fetchAll();
  }
}

?>