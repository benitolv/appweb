<?php namespace AppData\Controller;
use AppData\Model\Calificaciones;
class CalificacionesController
{
    private $calificaciones,$id_usuario;
    
    function __construct(){
      $this->calificaciones=new Calificaciones();

    }
    function index() {

    }
    function __destruct() {

    }
   
    function ver(){
      $datos=$this->calificaciones->getAlumns();
      return $datos;
    }
    function eliminar($id){
      $this->calificaciones->set("id_usuario",$id[0]);
      $this->calificaciones->delete();
      ?>
      <script type="text/javascript">
      $(document).ready(function(){
  swal({
    title: "success",
    text: "Eliminado correctamente",
    timer: 2000,
  });
    setTimeout(function(){
      window.location.href="<?php echo URL ?>Calificaciones/ver";
    })
})


      </script>
      <?php
    }

		
}
?>
