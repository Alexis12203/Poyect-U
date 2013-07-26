<?php
	echo form_open('user/updateUser/'.$idUser);

	$nombre = array(
              'name'        => 'nombre',
              'id'          => 'username',
              'placeholder' => 'Usuario',
              'maxlength'   => '50',
              'size'        => '20',
              'style'       => 'width:20%',
              'value'       => $user->row(0)->name
            );

	echo form_input($nombre);

	echo form_submit('submit', 'Actualizar');
	echo form_close();
?>

<button> <a href="<?php echo site_url("user/index"); ?>">Volver</a> </button>