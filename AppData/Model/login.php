<?php namespace AppData\Model;
  class Login
  {

    private $nombre; 
    private $apellido_paterno; 
    private $apellido_materno;
    private $id_tipo_usuario;
    private $id_usuario;
    private $usuario;
    private $contraseña;
    private $id_tipo;
    private $conexion;
    private $edad;
    private $nickname;
    private $password;


    function __construct()
    {
      $this->conexion=new conexion();

    }
    public function set($atributo,$valor){
      $this->$atributo=$valor;
    }
    public function get($atributo){
      return $this->$atributo;
    }
    public function verify(){
        $sql="select u.id_usuario, p.nombre, p.apellido_paterno, p.apellido_materno, tu.tipo, u.id_tipo_usuario
         from persona p, usuario u, sexo s, tipo_usuario tu
          where u.nickname='{$this->usuario}'
          AND u.password='{$this->contraseña}'
          AND p.id_usuario=u.id_usuario
          AND u.id_tipo_usuario=tu.id_tipo_usuario
          AND p.id_sexo=s.id_sexo";
        //echo $sql;
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
function registrar()
    {
      
    }
  function guardar()
    {
      $slq="INSERT INTO usuario (nickname, password, id_tipo_usuario) VALUES ('{$this->nickname}','{$this->password}','{$this->id_usuario}')";
      $this->conexion->QuerySimple($slq);
      $sql="SELECT * FROM usuario WHERE nickname='{$this->nickname}' AND password='{$this->password}'";
      $dato=$this->conexion->QueryResultado($sql);

       if (mysqli_num_rows($dato) > 0) 
      { 
        $datos=mysqli_fetch_assoc($dato);
      }
      if(isset($datos['id_usuario']))
        {
      $sql="INSERT INTO persona(nombre, apellido_paterno, apellido_materno, edad, id_sexo, id_usuario) VALUES('{$this->nombre}','{$this->apellido_paterno}','{$this->apellido_materno}','{$this->edad}','{$this->id_sexo}','{$datos['id_usuario']}')";
        $this->conexion->QuerySimple($sql);
        }

    }   
 
     function getsex()
    {
      $sql="SELECT * FROM sexo";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;


    } public function gettip(){
      $sql="SELECT * FROM tipo_usuario;";
      $datos=$this->conexion->QueryResultado($sql);
      return $datos;
    }
  }
  ?>
