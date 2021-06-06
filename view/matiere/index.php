 <!doctype html>
 <html lang="en">

 <head>
 	<!-- link bootstrap forminsert -->
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
 	<!-- link dashboard -->
 	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

 	<!------ Include the above in your HEAD tag ---------->

 	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
 	<link rel="stylesheet" href="http://localhost/mvc/view/css/main.css">
 	<title>Matiere</title>

 </head>


 <body class="home">
 	<div class="container-fluid display-table">
 		<div class="row display-table-row">
 			<div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
 				<div class="logo">
 					<a hef="home.html">
 						<h2>DASHBOARD</h2>
 					</a>
 				</div>
 				<div class="navi">
 					<ul>
 						<li><a href="http://localhost/mvc/salle/"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Salle</span></a></li>
 						<li class="active"><a href=""><i class="fa fa-book" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Matiere</span></a></li>
 						<li><a href="http://localhost/mvc/groupe/"><i class="fa fa-group" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Groupe</span></a></li>

 					</ul>
 				</div>
 			</div>

 			<div id="form-insert">

 				<form action="http://localhost/mvc/login/Logout" method="post">
 					<input type="submit" class="btn btn-dark" id="buttonlogout" name="logout" value="Logout">
 				</form>

 				<div id="salleForm">
 					<p>
 					<form action="create" method="Post">

 						<div id="inputs" style="display: flex;">

 							<div class="col-md-6">
 								<label for="ex3" class="inputlibelle">libelle</label>
 								<input class="form-control  inputlibelle" id="ex3" type="text" name="libelle_M">
 							</div>

 							<div class="col-md-6 text-center">
 								<input type="submit" class="btn btn-dark" id="buttonadd1" value="Add" name="ajouter">
 							</div>
 						</div>
 					</form>
 					</p>
 				</div>


 				<!--------------------- table ---------------------->

 				<div id="table">

 					<table class="table table-hover">

 						<tr>

 							<th>id</th>
 							<th>Libelle</th>
 							<th>Action</th>

 						</tr>

 						<!-- loop to get rows -->


 						<?php
							$i = 0;
							foreach ($result as $res) { ?>
 							<form action="matiere/update" method="POST">
 								<tr>
 									<td><label for=""><?php echo $res['id'] ?></label><input type="hidden" value="<?php echo $res['id'] ?>" name="id"></td>
 									<td>
 										<label id="libellelabel<?= $i ?>" for=""><?php echo $res['libelle_M'] ?></label>
 										<input type="text" id="libelle<?= $i ?>" value="<?php echo $res['libelle_M'] ?>" name="libelle" style="display:none">
 									</td>

 									<td style="display: flex;">
 										<input type="submit" class="btn btn-success" class="saveInput" id="btnsave<?= $i ?>" name="Update" value="save" style="display:none">&nbsp; &nbsp;
 										<a type="text" class="btn btn-danger" id="btncancel<?= $i ?>" onclick='cancel(<?= $i ?>)' style="display:none">annuler</a>
 							</form>

 							<form action="matiere/delete" method="post">
 								<input type="text" name="del" value="<?php echo $res['id'] ?>" hidden>
 								<button class="btn btn-dark" id="btndelet<?= $i ?>" name="supprimer">supprimer</button>
 							</form> &nbsp; &nbsp;
 							<a class="btn btn-dark" onclick='modifie(<?= $i ?>)' id="btnedit<?= $i ?>">Edit</a>
 							</form>
 							</td>
 							</tr>


 						<?php $i++;
							} ?>

 					</table>


 				</div>

 			</div>
 		</div>

 	</div>


 	<script>
 		function modifie(e) {
 			document.getElementById('libellelabel' + e).style.display = "none";
 			document.getElementById('libelle' + e).style.display = "block";
 			document.getElementById('btnedit' + e).style.display = "none";
 			document.getElementById('btndelet' + e).style.display = "none";
 			document.getElementById('btnsave' + e).style.display = "inline-block";
 			document.getElementById('btncancel' + e).style.display = "inline-block";
 		}

 		function cancel(e) {
 			document.getElementById('libellelabel' + e).style.display = "block";
 			document.getElementById('libelle' + e).style.display = "none";
 			document.getElementById('btnedit' + e).style.display = "inline-block";
 			document.getElementById('btndelet' + e).style.display = "inline-block";
 			document.getElementById('btnsave' + e).style.display = "none";
 			document.getElementById('btncancel' + e).style.display = "none";
 		}
 	</script>


 </body>

 </html>