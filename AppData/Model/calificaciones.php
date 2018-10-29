<?php namespace AppData\Model;

  class Calificaciones{
    private $id_usuario; private $conexion;
    function __construct(){
      $this->conexion=new conexion();
    }
    public function set($atributo,$valor){
      $this->$atributo=$valor;
    }
    public function get($atributo){
      return $this->$atributo;
    }
    public function getAlumns(){
      $sql="
SELECT usuario.id_usuario,nombre, apellido_paterno, apellido_materno 
      FROM persona, usuario, tipo_usuario
       WHERE persona.id_usuario=usuario.id_usuario
       AND usuario.id_tipo_usuario=tipo_usuario.id_tipo_usuario 
       AND tipo_usuario.id_tipo_usuario=1
       ORDER BY persona.apellido_paterno ";
      $datos=$this->conexion->QueryResultado($sql);
      return $datos;
    }
    public function delete(){
      
      //$sql="DELETE FROM persona WHERE persona.id_usuario='($this->id)'";
      $sql="DELETE FROM persona WHERE id_usuario='{$this->id_usuario}'";
      $this->conexion->QuerySimple($sql);
      $sql="delete from usuario where id_usuario='{$this->id_usuario}'";
      $this->conexion->QuerySimple($sql); //    echo $sql;

      
    }
}
  ?> 
