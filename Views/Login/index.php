<br><br><br>
<div class="container" style="border: solid .5px #216db0; height: 50%;
  left: 50%;
  top: -5%;
  width: 50%;  border-radius: 10px;">
    <div class="row justify-content-center"><br>
        <div class="col-sm-8"><br>
            <h4 class="row justify-content-center">Iniciar en TESVB </h4><span class="glyphicon glyphicon-pencil"></span>
          <form class="form-signin" method="post" action="<?php echo URL ?>login/verify" id="form_login">

          <div class="form-group ">
            <label for="exampleInputEmail1">Usuario</label>
            <input type="text" class="form-control" placeholder="Nombre de Usuario" id="usuario" name="usuario">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control"  id="exampleInputPassword1" placeholder="Password" id="contraseña" name="contraseña">
          </div>
          <div class="form-group form-check">

            
          </div>
          <button id="entrar" type="submit" class="btn btn-outline-primary" style="position: relative; left: 30%; padding: 15px;" >Acceder</button>

          <a  class="btn btn-outline-success" style="position: relative; left: 30%; padding: 15px;" href="<?php echo URL; ?>Login/registrar">Registrar</a>
        </form>
        </div>

    </div>

</div>
<script type="text/javascript">

$("#entrar").click(function()
  {
    $("#form-login").submit();
  });

  //validaciones del formulario
  jQuery.validator.addMethod("texto", function(value)
  {
    return /^[a-záéóóúàèìíòùäëïöüñ.\s]+$/i.test(value);
  });

  $("#form_login").validate({
    errorClass:"invalid",
rules:
{
  usuario:
  {
    required:true,

  },
  contraseña:
  {
    required:true,

  },

},
messages:
{
  usuario:
  {
    required:"Usuario obligatorio",

  },
  contraseña:
  {
    required:"contraseña obligatoria",

  },
},
});

</script>









