<?php
session_start();
?>
  <body>
  <nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo URL; ?>Home">Califas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <?php
  if(isset($_SESSION['id_usuario'])) 
  { 
      if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 1)
      {
      echo $_SESSION['nombre'];
      ?>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown" style="margin-left:1em;">
      <a class="nav-link dropdown-toggle  " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Calificaciones</a>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="<?php echo URL ?>Alumnos/ver">Ver</a>
      <a class="dropdown-item" href="#">Acentar</a>
      <a class="dropdown-item" href="#">Modificar</a>
      </li>  

      <?php
      }
  
      else
      if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 2)
      {
      echo $_SESSION['nombre'];
      ?>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown" style="margin-left:1em;">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Materias</a>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="<?php echo URL?>Calificaciones/ver">ver</a>
      </li></li><?php
        }

      else
      if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 3)
      {
      echo $_SESSION['nombre'];
      ?><div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown" style="margin-left:1em;">
      <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reportes</a>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Materia</a>
      <a class="dropdown-item" href="#">Grupo</a>
      <a class="dropdown-item" href="#">Aprobacion</a>
      </li>
     <?php
      } 
}  
      ?>
    </ul>
    <?php if (isset($_SESSION['id_tipo_usuario']))
{
?>
    <form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
      <a class="btn btn-outline-danger" href="<?php echo URL; ?>Login/logout">Salir</a>
    </form>
<?php
}
else
//esta parte es el nav para los que no esten logueados
{
?>
   
        <a class="btn btn-outline-primary" href="<?php echo URL; ?>Login">Login</a>
   
   

<?php
}
?>
  </div>
</nav>
