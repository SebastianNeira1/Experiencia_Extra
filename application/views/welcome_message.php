
<body id="page-top" class="index">

 <div id="container-fluid">


	<h1>Transformers</h1>
		<table class="table table-borderer">
			<thead>
					<th>Raza</th>
					<th>Nombre</th>
					<th>Mineral</th>
					<th>Lider</th>

			</thead>

			<tbody>

					<?php foreach ($transformer as $transformer) { ?>
					<tr>
						<td><?php echo $transformer->Raza;?></td>
						<td><?php echo $transformer->Nombre;?></td>
						<td><?php echo $transformer->Mineral_Energon; ?></td>
						<td><?php echo $transformer->Lider; ?></td>
						
						
					<td>
					<a href="index.php/welcome/editarindex/<?php echo $transformer->Mineral_Energon;?>" class="btn btn-success">Editar Energon</a>

					<!--
					<a href="index.php/welcome/editar_energon/<?php echo $transformer->Mineral_Energon;?>" class="btn btn-success">Editar Energon</a>

					<a href="welcome/<?php echo $transformer->Mineral_Energon;?>" class="btn btn-success">Volver</a>
					</td>-->
					
					</tr>
					<?php } ?>
			</tbody>
		</table>
	</div>