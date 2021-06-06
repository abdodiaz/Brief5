<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="http://localhost/mvc/view/css/reservation.css">
  
    <title>Reservation</title>
</head>
<body>
<nav id="nav">

    <ul>
        <li><a href="Login/logout"><button class="btn btn-outline-light" style="margin-top:6px;margin-right: 46px;">Logout</button></a></li>
    </ul>

</nav>

<!-- <div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div> -->
<form action="cour/create" method="post" >

    <div class="form-group col-md-6" id="form">  
    
        <select class="form-select form-select-md col-2" aria-label=".form-select-lg example" name="id_S">
            <option selected>Séléctionnez une Salle</option>
                <?php
                    foreach($resultsalle as $row){

                        echo '<option value="'.$row["id"].'">'.$row["libelle_S"].'</option>';
                    } 
                ?>
        
        </select>
        

        <select class="form-select form-select-md col-2" aria-label=".form-select-sm example" name="id_g" id="select">
            <option selected>Séléctionnez un Groupe</option>
                <?php
                    foreach($resultgroupe as $row){

                        echo '<option value="'.$row["id"].'">'.$row["libelle_g"].'</option>';
                    } 
                ?>

        </select>

        <div class="col-12">
            <label for="example-date-input" class="col-form-label">Date debut :</label>
            <input class="form-control" type="date" value="" name="hr_db" id="example-date-input">
        </div>
        <div class="col-12">
            <label for="example-date-input" class="col-form-label">Date fin :</label>
            <input class="form-control" type="date" value="" name="hr_f" id="example-date-input">
        </div>
   
   
        <label for="inputState">Durée :</label>
        <select id="inputState" class="form-select form-select-md col-2" name="time">
            <option selected>Choiser la durée</option>
            <option>08-10</option>
            <option>10-12</option>
            <option>14-16</option>
            <option>16-18</option>
        </select>

        <button class="btn btn-outline-dark" name="ajouter" type="submit">Réserver</button>

    </div> 


</form>

<!--------------------- table ---------------------->



    <table class="table table-hover" id="table">

        <tr>
            
            <th>Salle</th>
            <th>Groupe</th>
            <th>Date debut</th>
            <th>Date debut</th>
            <th>Durée</th>
            <th>Action</th>
       
        </tr>
        <!-- loop to get rows -->
        <?php foreach ($result as $row) {?>

        <tr>
            <td><?php echo $row['id_S'];?></td>
            <td><?php echo $row['id_g'];?></td>
            <td><?php echo $row['hr_db'];?></td>
            <td><?php echo $row['hr_f'];?></td>
            <td><?php echo $row['time'];?></td>
            <td>
                <a href="http://localhost/mvc2/Brief-5/reservation/delete/<?=$row['id'] ?>"><button class="btn btn-outline-danger">Delete</button></a>
            </td>
        </tr>
        <?php }?>
        
    </table>


</body>
</html>
