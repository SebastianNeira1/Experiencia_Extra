<!DOCTYPE html>
<html>
<head>
	<title>Editar Energon</title>
</head>
<body>
<div class="container">
<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="panel-title">Editar Mineral de Energon</div>
	</div>
	<div class="panel-body">
	<form class="form-inline" method="POST" action="http://localhost/transformer/index.php/welcome/editar">
		<div class="form-group">
		
		Mineral_Energon:<input type="int" name="Mineral_Energon" id="Mineral_Energon" class="form-control" value="<?php echo $editable->Mineral_Energon; ?>">
		<a href="index.php/welcome/" class="btn btn-success">Volver</a>
		</div>
		</form>
	</div>
</div>
</div>
</body>
</html>

