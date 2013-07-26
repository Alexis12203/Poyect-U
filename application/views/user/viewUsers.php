<html>
<head>
	<title></title>
</head>
<body>
	<?php if($users){ ?>
	<h2>Listado de usuario</h2>
	<table>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
		</tr>
	<?php 
	foreach ($users->result() as $user) { ?>
		<tr>
			<td><?php echo $user->id; ?></td>
			<td> <a href="<?php echo site_url("user/index/".$user->id); ?>"> <?php echo $user->name; ?></a> </td>
			<td> <a href="<?php echo site_url("user/editUser/".$user->id); ?>"> Editar</a> </td>
			<td> <a href="<?php echo site_url("user/deleteUser/".$user->id); ?>"> Eliminar</a> </td>
		</tr>
	<?php } 
	?>
	</table>

	<?php }
	else{
		echo 'No existe usuarios';
	}?>

	<button> <a href="<?php echo site_url("user/newUser"); ?>">Agregar Usuario</a> </button>
</body>
</html>