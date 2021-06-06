<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	 <link rel="stylesheet" href="style2.css"> 
	<!------ Include the above in your HEAD tag ---------->

	<title>Register</title>
</head>

<body>
	<div class="container">
		<div class="row centered-form">
			<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Please sign up</h3>
					</div>
					<div class="panel-body">
						<form role="form" action="Register/create" method="POST">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="prenom" id="first_name" class="form-control input-sm" placeholder="Prénom">
									</div>
									<div class="form-group">
										<input type="text" name="namme" id="first_name" class="form-control input-sm" placeholder="Nom">
									</div>
								</div>
							</div>

							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
							</div>

							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
									</div>
									<div class="form-group">
										<select name="id_Mat" id="selecte">
											<option value=""></option>
											<?php
											foreach ($matieres as $matiere)
												echo "<option value='" . $matiere['id'] . "'>" . $matiere['libelle_M'] . "</option>";
											?>
										</select>
										</select>
									</div>
								</div>
							</div>
							<input type="submit" value="Register" name="Register" class="btn btn-info btn-block">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>