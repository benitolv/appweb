
<br><br><br><div class="container" style="border: solid .5px #216db0; height: 50%;
  left: 50%;
  top: -5%;
  width: 50%;  border-radius: 10px;">
    <div class="row justify-content-center"><br>
        <div class="col-sm-8">
            <h4 class="row justify-content-center">Registrate en TESVB </h4><span class="glyphicon glyphicon-pencil"></span>
          <form action="<?php 	echo URL ?>login/guardar" method="post" id="form-reg">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                		<input type="text" name="nombre"  class="form-control input-sm" placeholder="Nombre">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="apellido_paterno"  class="form-control input-sm" placeholder="Apellido Paterno">
			    					</div>
			    				</div>
			    			</div>
			    			<div class="row">
			    			<div class="col-xs-6 col-sm-6 col-md-6">
			    				<input type="text" name="apellido_materno"  class="form-control input-sm" placeholder="Apellido Materno">
			    			</div><div class="col-xs-6 col-sm-6 col-md-6">
			               			 <input type="number" name="edad"  class="form-control input-sm" placeholder="Edad">
			    					</div>
			    			</div><br>
			    			<div class="row">
			    				
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<select class="form-control" placeholder="sexo" name="id_sexo">
			    							<option value="">Selecciona ...</option>
											<?php 
					if (isset($datos)) 
					{
						while($fila = mysqli_fetch_assoc($datos[0])) { ?>
						<option value="<?php echo $fila['id_sexo'] ?> "> <?php echo $fila['descripcion']?> </option>	
						<?php } 
					} 
					?> 
			    					
										</select>
			    					</div>
			    				</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<select class="form-control" placeholder="Tipo" name="id_usuario">
			    							<option value="">Selecciona...</option>
											 <?php 
								if (isset($datos)) 
								{
									while($fila = mysqli_fetch_assoc($datos[1])) { ?>
									<option value="<?php echo $fila['id_tipo_usuario'] ?> "> <?php echo $fila['tipo']?> </option>	
									<?php } 
								} 
								?> 
										</select>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			               			 <input type="text" name="nickname"  class="form-control input-sm" placeholder="Nickname">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>

			    			</div>
			    			<input id="registar" type="submit" value="Registrar" class="btn btn-outline-success" style="position: relative; left: 30%; padding: 15px;">

			    		</form>
        </div>

    </div>

</div>
<script type="text/javascript">

    $("#registar").click(function()
      {
        $("#form-reg").submit();
      });

      //validaciones del formulario
    	jQuery.validator.addMethod("texto", function(value)
    	{
    		return /^[a-záéóóúàèìíòùäëïöüñ.\s]+$/i.test(value);
    	});

      $("#form-reg").validate({
        errorClass:"invalid",
		rules:
		{
			nombre:
			{
				required:true,
				texto:true,
			},
			apellido_paterno:
			{
				required:true,
				texto:true,
			},
			apellido_materno:
			{
				required:true,
				texto:true,
			},
			edad:
			{
				required:true,
				number:true,
			},
			id_sexo:
			{
				required:true,
        int:true,
			},
			id_usuario:
			{
				required:true,

			},
      nickname:
			{
				required:true,

			},
      password:
			{
				required:true,

			},
		},
		messages:
		{
			nombre:
			{
				required:"Nombre obligatorio",
				texto:"Solo puede introducir texto"
			},
			apellido_paterno:
			{
				required:"Apellido paterno obligatorio",
				texto:"Solo puede introducir texto"
			},
			apellido_materno:
			{
				required:"Apellido materno obligatorio",
				texto:"Solo puede introducir texto"
			},
			edad:
			{
				required:"Edad obligatoria",

			},
			id_sexo:
			{
				required:"Sexo obligatorio",
			},
			id_usuario:
			{
				required:"Tipo de usuario obligatoria",

			},
      nickname:
      {
        required:"Nombre de usuario obligatoria",

      },
      password:
      {
        required:"Contraseña obligatoria",

      },
		},
  });

    </script>
