<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="assets/css/offcanvas.css"/>
	</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.baulphp.com">BaulPHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Portada</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscador</button>
      </form>
    </div>
  </div>
</nav>


<main class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    
    <div class="lh-1">
      <h1 class="h3 mb-0 text-white lh-1">Enviar multiple Checkbox MySQL con PHP</h1>
    </div>
  </div>


  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#form_modal"> Agregar personal</button>
    </h6>

    <div class="d-flex text-muted pt-3">
<table class="table table-bordered">
			<thead class="btn-primary">
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>Pais</th>
					<th>Programas</th>
				</tr>
			</thead>
			<tbody style="background-color:#fff;">
<?php
	require 'config.php';
    $query = $db->prepare("SELECT * FROM tercero");
    $query->execute();
    
	if($query->rowCount() == 0){
				echo '<tr>
						<td colspan="4"></td>
				     </tr>';
			 
				}else {
				$n=0;
				$data = $query->fetchAll();
				foreach ($data as $value): 
				$n++;   
				echo '<tr>
						<td>'.$n.'</td>
						<td>'.$value["nombre"].'</td>
						<td>'.$value["identificacion"].'</td>
						<td>'.$value["email"].'</td>
						
				     </tr>';
			 endforeach;	
				}
				$db = null;
				?>
			</tbody>
		</table>

    </div>
  </div>
</main>


<div class="modal fade" id="form_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header btn-primary">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Programador</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="insertar.php" method="POST">
      <div class="modal-body">        	
		<div class="col-md-12">
            <div class="form-group">
                <label>Nombres:</label>
                <input type="text" class="form-control" name="nombres" required="required"/>
            </div>
            <div class="form-group">
                <label>Apellidos:</label>
                <input type="text" class="form-control" name="apellidos" required="required"/>
            </div>
            <div class="form-group">
                <label>Pais:</label>
                <input type="text" class="form-control" name="pais" required="required"/>
            </div>
            <div class="form-group">
                <label>Programas:</label>
            </div>
								
			<div class="card bg-light" style="width: 100%;">
  <div class="card-body">
  <div class="row">
<!-- checkbox -->
<div class="col-md-6">
<div class="custom-control custom-checkbox mr-sm-2">
        <label><input type="checkbox" name="programas[]" value="C" > C</label>
</div>
</div>
<!-- End: checkbox -->
<!-- checkbox -->
<div class="col-md-6">
<div class="custom-control custom-checkbox mr-sm-2">
                <label><input type="checkbox" name="programas[]" value="C++" > C++</label>
</div>      
</div>
<!-- End: checkbox -->
<!-- checkbox -->
<div class="col-md-6">
<div class="custom-control custom-checkbox mr-sm-2">
                <label><input type="checkbox" name="programas[]" value="PHP" > PHP</label>
</div>      
</div>
<!-- End: checkbox -->
<!-- checkbox -->
<div class="col-md-6">
<div class="custom-control custom-checkbox mr-sm-2">
                <label><input type="checkbox" name="programas[]" value="Python" > Python</label>
</div>      
</div>
<!-- End: checkbox -->
<!-- checkbox -->
<div class="col-md-6">
<div class="custom-control custom-checkbox mr-sm-2">
                <label><input type="checkbox" name="programas[]" value="Java" > Java</label>
</div>      
</div>
<!-- End: checkbox -->
<!-- checkbox -->
<div class="col-md-6">
<div class="custom-control custom-checkbox mr-sm-2">
               <label><input type="checkbox" name="programas[]" value="Ruby" > Ruby</label>
</div>      
</div>
<!-- End: checkbox -->
<!-- checkbox -->
<div class="col-md-6">
<div class="custom-control custom-checkbox mr-sm-2">
                <label><input type="checkbox" name="programas[]" value="Swift" > Swift</label>
</div>      
</div>
<!-- End: checkbox -->
<!-- checkbox -->
<div class="col-md-6">
<div class="custom-control custom-checkbox mr-sm-2">
                <label><input type="checkbox" name="programas[]" value="JavaScript" > JavaScript</label>
</div>      
</div>
<!-- End: checkbox -->
<!-- checkbox -->
<div class="col-md-6">
<div class="custom-control custom-checkbox mr-sm-2">
                <label><input type="checkbox" name="programas[]" value="Kotlin" > Kotlin</label>
</div>      
</div>
<!-- End: checkbox -->
<!-- checkbox -->
<div class="col-md-6">
<div class="custom-control custom-checkbox mr-sm-2">
               <label><input type="checkbox" name="programas[]" value="Go" > Go</label>
</div>      
</div>
<!-- End: checkbox -->

</div>
</div>
</div>	
	</div>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button name="guardar" type="submit" class="btn btn-primary">Registrar Ahora</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

    

</body>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</html>