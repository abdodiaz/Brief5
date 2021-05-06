<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form action="salle/create" method="post">
		libelle:<input type="text" name="libelle"><br>
		capacite:<input type="text" name="capacite">
	<button type="submit" name="ajouter">AJOUTER</button>
	</form>
	<table>
		<?php foreach ($result as $res) { ?>
			<tr>
				<td><?php echo $res['id'] ?></td>
				<td><?php echo $res['libelle_S'] ?></td>
				<td><?php echo $res['capacite_S'] ?></td>
				<form action="salle/edit" method="Post">
				<input type="hidden" name="id" value="<?php echo ($res['id']) ?>">
				<td><input type="submit" name="modifier" value="modifier"></td>
				</form>
				<form action="salle/delete" method="post">
					<input type="hidden" name="del" value="<?php echo ($res['id']) ?>">
					<td><input type="submit" name="supprimer" value="supprimer"></td>
				</form>
			</tr>
		<?php } ?>
	</table>


</body>

</html>