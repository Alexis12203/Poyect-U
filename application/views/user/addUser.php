<?php
	echo form_open('user/addUser');

	$nombre = array(
              'name'        => 'nombre',
              'id'          => 'username',
              'placeholder' => 'Usuario',
              'maxlength'   => '50',
              'size'        => '20',
              'style'       => 'width:20%',
            );

	echo form_input($nombre);

	echo form_submit('submit', 'Guardar');
	echo form_close();
?>


<button> <a href="<?php echo site_url("user/index"); ?>">Volver</a> </button>