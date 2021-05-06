<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($result as $res) { ?>
<form action="update" method="post">
    <input type="hidden" name="id" value="<?php echo ($res['id']) ?>">
		libelle:<input type="text" name="libelle" value="<?php echo ($res['libelle_S']) ?>"><br>
		capacite:<input type="text" name="capacite" value="<?php echo ($res['capacite_S']) ?>">
	<button type="submit" name="Update">Update</button>
	</form>
    <?php } ?>
</body>
</html>