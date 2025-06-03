
 <?php require_once "./app/views/inc/head.php"; ?>
<div class="container is-fluid mb-6">
	<?php 

		$id=$insLogin->limpiarCadena($url[1]);

		if($id==$_SESSION['id']){ 
	?>
	<h1 class="title">Mi cuenta</h1>
	<h2 class="subtitle">Actualizar cuenta</h2>
	<?php }else{ ?>
	<h1 class="title">Usuarios</h1>
	<h2 class="subtitle">Expediente de Vida del Vehículo</h2>
	<?php } ?>
</div>
<div class="container pb-6 pt-6">
	<?php
	
		include "./app/views/inc/btn_back.php";

		$datos=$insLogin->seleccionarDatos("Unico","usuario","usuario_id",$id);

		if($datos->rowCount()==1){
			$datos=$datos->fetch();
	?>

	<h2 class="title has-text-centered"><?php echo $datos['usuario_nombre']." ".$datos['usuario_apellido']; ?></h2>

	<p class="has-text-centered pb-6"><?php echo "<strong>Usuario creado:</strong> ".date("d-m-Y  h:i:s A",strtotime($datos['usuario_creado']))." &nbsp; <strong>Usuario actualizado:</strong> ".date("d-m-Y  h:i:s A",strtotime($datos['usuario_actualizado'])); ?></p>

	<form class="formularioAjax" id="formFallas"  >
	<!-- <form class="formFallas" action="<?php echo APP_URL; ?>app/ajax/usuarioAjax.php" method="POST" autocomplete="off" > -->

		<!-- <input type="hidden" name="modulo_usuario" value="actualizar">
		<input type="hidden" name="usuario_id" value="<?php echo $datos['usuario_id']; ?>"> -->

		<div class="columns">

			<div class="column">
		    	<div class="control">
					<label>Fecha de reporte</label>
				  	<input class="input" type="datetime-local" name="fechaReporte"  >
				</div>
		  	</div>

			<div class="column">
		    	<div class="control">
					<label>Numero de inventario</label>
				  	<input class="input" type="text" name="nInventario"  >
				</div>
		  	</div>

		  	<div class="column">
		    	<div class="control">
					<label>Nombre del operador</label>
				  	<input class="input" type="text" name="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" value="<?php echo $datos['usuario_nombre']; ?>" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Apellidos del operador</label>
				  	<input class="input" type="text" name="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" value="<?php echo $datos['usuario_apellido']; ?>" required >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Marca y modelo</label>
				  	<input class="input" type="text" name="marca_modelo" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Placas</label>
				  	<input class="input" type="text" name="placas_vehiculo" required>
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Tipos</label>
				  	<input class="input" type="text" name="tipos" required>
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Horas efec de trabajo de la maquina</label>
				  	<input class="input" type="number" name="horasTrabajo" required>
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Total/Hotas acomuladas</label>
				  	<input class="input" type="number" name="horasAcomuladas" required>
				</div>
		  	</div>
		</div>
		<br><br>

	
		<div class="fallas">

			<div class="fallas__titulos">
				<h1>Expediente de vida del vehiculo</h1>
			</div>

			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					<!-- Limpeza -->

						<tr class="has-text-centered" >

							<td>Limpieza</td>

							<td>Limpieza del tractor después de cada jornada y observar piezas sueltas o roto</td>

							<td>
								<input type="radio" name="1" id=""   value="realizado">
							</td>

							<td>
								<input type="radio" name="1" id="" value="no realizado" >
							</td>	

						</tr>

						<tr class="has-text-centered" >

							<td>Limpieza</td>

							<td>Limpieza del filtro de aire</td>

							<td>
								<input type="radio" name="2" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="2" id=""    value="realizado">
							</td>	

						</tr>

						<tr class="has-text-centered" >

							<td>Limpieza</td>

							<td>Limpieza del filtro de aire</td>

							<td>
								<input type="radio" name="3" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="3" id=""    value="realizado">
							</td>	

						</tr>

						<tr class="has-text-centered" >

							<td>Limpieza</td>

							<td>Limpieza del enfriador de aceite hidráulico</td>

							<td>
								<input type="radio" name="4" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="4" id=""    value="realizado">
							</td>	

						</tr>

						<tr class="has-text-centered" >

							<td>Limpieza</td>

							<td>Limpieza de radiador del refrigerante del motor</td>

							<td>
								<input type="radio" name="5" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="5" id=""    value="realizado">
							</td>	

						</tr>
						
						<!-- Prevencion -->

						<tr class="has-text-centered" >

							<td>Prevención</td>

							<td>Revisar aceite de transmisión</td>

							<td>
								<input type="radio" name="6" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="6" id=""    value="realizado">
							</td>	

						</tr>
						
						<tr class="has-text-centered" >

							<td>Prevención</td>

							<td>Engrase puntos de lubricación</td>

							<td>
								<input type="radio" name="7" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="7" id=""    value="realizado">
							</td>	

						</tr>

						
						<!-- neumaticos  -->
						<tr class="has-text-centered" >

							<td>Presión de neumaticos</td>

							<td>Revisar presión de llantas delanteras - (20-26 psi)</td>

							<td>
								<input type="radio" name="8" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="8" id=""    value="realizado">
							</td>	

						</tr>

						<tr class="has-text-centered" >

							<td>Tornilleria</td>

							<td>Revisar la presión de llantas traseras - 50 a 100 bares (23-29 psi)</td>

							<td>
								<input type="radio" name="9" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="9" id=""    value="realizado">
							</td>	

						</tr>

						<tr class="has-text-centered" >

							<td>Tornilleria</td>

							<td>Revisar los tornillos que estén bien apretados de rastra y arado</td>

							<td>
								<input type="radio" name="10" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="10" id=""    value="realizado">
							</td>	

						</tr>


						<tr class="has-text-centered" >

							<td>Otros servicios</td>

							<td>Calibrar sistema de frenos -120 y 150 bares (aproximadamente 1740 a 2175 psi)</td>

							<td>
								<input type="radio" name="11" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="11" id=""    value="realizado">
							</td>	

						</tr>
						
						
						<tr class="has-text-centered" >

							<td>Otros servicios</td>

							<td>Revisar la tensión de la banda de accesorios que conlleva -ventilador -alternador</td>

							<td>
								<input type="radio" name="12" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="12" id=""    value="realizado">
							</td>	

						</tr>


						<tr class="has-text-centered" >

							<td>Otros servicios</td>

							<td>Otro tipo de fallas contempladas</td>

							<td colspan="2">
								<textarea class="textArea" name="13" id=""></textarea>
							</td>
							
						</tr>
			</div>

			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					<!-- preventivo -->

						<tr class="has-text-centered" >

							<td>Preventivo</td>

							<td>Cambio de aceite del motor 
							<br> -Cada 250 horas de uso</td>

							<td>
								<input type="radio" name="14" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="14" id=""    value="realizado">
							</td>	

						</tr>

						<tr class="has-text-centered" >

							<td>Preventivo</td>

							<td>Revisión y cambio de filtros (aceite, aire, combustible e hidráulico)	<br>-Cada 250 horas</td>

							<td>
								<input type="radio" name="15" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="15" id=""    value="realizado">
							</td>	

						</tr>

						<tr class="has-text-centered" >

							<td>Preventivo</td>

							<td>Lubricación de partes móviles
								<br>-Cada 50 horas</td>

							<td>
								<input type="radio" name="16" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="16" id=""    value="realizado">
							</td>	

						</tr>

						<tr class="has-text-centered" >

							<td>Preventivo</td>

							<td>Inspección del sistema hidráulico
								<br>-Cada 500 horas</td>

							<td>
								<input type="radio" name="17" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="17" id=""    value="realizado">
							</td>	

						</tr>

						<tr class="has-text-centered" >

							<td>Preventivo</td>

							<td>Revisión de frenos y dirección
								<br>-Cada 500 horas</td>

							<td>
								<input type="radio" name="18" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="18" id=""    value="realizado">
							</td>	

						</tr>

						<tr class="has-text-centered" >

							<td>Preventivo</td>

							<td>Inspección y ajuste de cadenas y neumáticos
								<br>-Cada 100 horas</td>

							<td>
								<input type="radio" name="19" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="19" id=""    value="realizado">
							</td>	

						</tr>

						
												
			</div>
		
			<!-- PREDICTIVO  -->

			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					
						<tr class="has-text-centered" >

							<td>Predictivo</td>

							<td>Análisis de vibraciones 
								<br>-Cada 1000 horas o según condición</td>

							<td>
								<input type="radio" name="20" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="20" id=""    value="realizado">
							</td>	

						</tr>	
						
						
						<tr class="has-text-centered" >

							<td>Predictivo</td>

							<td>Análisis de aceite
								<br>-Cada 500 horas</td>

							<td>
								<input type="radio" name="21" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="21" id=""    value="realizado">
							</td>	

						</tr>	
						
						
						<tr class="has-text-centered" >

							<td>Predictivo</td>

							<td>Termografía en el sistema eléctrico
								<br>-Cada 1000 horas</td>

							<td>
								<input type="radio" name="22" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="22" id=""    value="realizado">
							</td>	

						</tr>											
						
						<tr class="has-text-centered" >

							<td>Predictivo</td>

							<td>Monitoreo de presión hidráulica
								<br>-Cada 500 horas</td>

							<td>
								<input type="radio" name="23" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="23" id=""    value="realizado">
							</td>	

						</tr>			

						<tr class="has-text-centered" >

							<td>Otros servicios</td>

							<td>Otro tipo de fallas contempladas</td>

							<td colspan="2">
								<textarea class="textArea" name="24" id=""></textarea>
							</td>
							
						</tr>
																
			</div>
			<!-- Mantenimiento Preventivo cada 5000 a 10,000 km -->

			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					
						<tr class="has-text-centered" >

							<td>Mantenimiento Preventivo cada 5000 a 10,000 km</td>

							<td>Cambio de aceite y filtro de aceite (Usar aceite sintético 5W-30 o según el manual).</td>

							<td>
								<input type="radio" name="25" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="25" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento Preventivo cada 5000 a 10,000 km</td>

							<td>Revisión y limpieza del filtro de
							aire (Cambiar si está muy sucio).</td>

							<td>
								<input type="radio" name="26" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="26" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento Preventivo cada 5000 a 10,000 km</td>

							<td>Chequeo del filtro de combustible
							(Sustituir si es necesario).</td>

							<td>
								<input type="radio" name="27" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="27" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento Preventivo cada 5000 a 10,000 km</td>

							<td>Inspección del sistema de frenos
							(Estado de pastillas, discos y nivel
							del líquido de frenos).</td>

							<td>
								<input type="radio" name="28" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="28" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento Preventivo cada 5000 a 10,000 km</td>

							<td>Verificación de neumáticos (Presión y desgaste).</td>

							<td>
								<input type="radio" name="29" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="29" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento Preventivo cada 5000 a 10,000 km</td>

							<td>Revisión de la suspensión (Amortiguadores, rótulas y bujes).</td>

							<td>
								<input type="radio" name="30" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="30" id=""    value="realizado">
							</td>	

						</tr>	
						<tr class="has-text-centered" >

							<td>Otros servicios</td>

							<td>Otro tipo de fallas contempladas</td>

							<td colspan="2">
								<textarea class="textArea" name="31" id=""></textarea>
							</td>
							
						</tr>
																
			</div>


			<!-- Mantenimiento preventivo cada 20,000 a 30,000km -->

			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					
						<tr class="has-text-centered" >

							<td>Mantenimiento preventivo cada 20,000 a 30,000km</td>

							<td>Cambio del filtro de aire y filtro de combustible.</td>

							<td>
								<input type="radio" name="32" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="32" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento preventivo cada 20,000 a 30,000km</td>

							<td>Limpieza del sistema de inyección (Evita acumulación de residuos en los inyectores).</td>

							<td>
								<input type="radio" name="33" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="33" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento preventivo cada 20,000 a 30,000km</td>

							<td>Revisión del sistema de refrigeración (Nivel y calidad del refrigerante).</td>

							<td>
								<input type="radio" name="34" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="34" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento preventivo cada 20,000 a 30,000km</td>

							<td>Inspección del sistema de escape (Revisar fugas o corrosión).</td>

							<td>
								<input type="radio" name="35" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="35" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento preventivo cada 20,000 a 30,000km</td>

							<td>Alineación y balanceo (Para evitar desgaste irregular de neumáticos).</td>

							<td>
								<input type="radio" name="36" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="36" id=""    value="realizado">
							</td>	

						</tr>	
							
						<tr class="has-text-centered" >

							<td>Otros servicios</td>

							<td>Otro tipo de fallas contempladas</td>

							<td colspan="2">
								<textarea class="textArea" name="37" id=""></textarea>
							</td>
							
						</tr>
			</div>
				
			<!-- Mantenimiento preventivo cada 20,000 a 30,000km -->

			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					
						<tr class="has-text-centered" >

							<td>Mantenimiento preventivo cada 80,000km</td>

							<td>Cambio de la correa de distribución (Si el motor usa correa y no cadena).</td>

							<td>
								<input type="radio" name="38" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="38" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento preventivo cada 80,000km</td>

							<td>Cambio del líquido de frenos y embrague.</td>

							<td>
								<input type="radio" name="39" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="39" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento preventivo cada 80,000km</td>

							<td>Revisión de inyectores y limpieza del sistema de admisión.</td>

							<td>
								<input type="radio" name="40" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="40" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento preventivo cada 80,000km</td>

							<td>Verificación de la caja de transferencia y diferenciales (Si la camioneta tiene tracción 4x4).</td>

							<td>
								<input type="radio" name="41" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="41" id=""    value="realizado">
							</td>	

						</tr>									
																
			</div>

			<!-- Mantenimiento preventivo cada 40,000 a 50,000 km -->

			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					
						<tr class="has-text-centered" >

							<td>Mantenimiento preventivo cada 40,000 a 50,000 km</td>

							<td>Cambio de aceite de transmisión (Si es manual o automática, según especificaciones).</td>

							<td>
								<input type="radio" name="42" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="42" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento preventivo cada 40,000 a 50,000 km</td>

							<td>Inspección y ajuste de correas y tensores.</td>

							<td>
								<input type="radio" name="43" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="43" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento preventivo cada 40,000 a 50,000 km</td>

							<td>Chequeo del sistema eléctrico y batería.</td>

							<td>
								<input type="radio" name="44" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="44" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento preventivo cada 40,000 a 50,000 km</td>

							<td>Revisión de ejes y diferencial (Cambio de aceite si es necesario).</td>

							<td>
								<input type="radio" name="45" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="45" id=""    value="realizado">
							</td>	

						</tr>	
									
							
						<tr class="has-text-centered" >

							<td>Otros servicios</td>

							<td>Otro tipo de fallas contempladas</td>

							<td colspan="2">
								<textarea class="textArea" name="46" id=""></textarea>
							</td>
							
						</tr>
																
			</div>

			<!-- Mantenimiento diario cada 10 a 12hrs -->

			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12hrs</td>

							<td>Revisión del nivel de aceite del motor (agregar si es necesario).</td>

							<td>
								<input type="radio" name="47" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="47" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12hrs</td>

							<td>Inspección del nivel de refrigerante en el radiador y tanque de expansión.</td>

							<td>
								<input type="radio" name="48" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="48" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12hrs</td>

							<td>Verificación del nivel de combustible y drenado de agua del separador de combustible.</td>

							<td>
								<input type="radio" name="49" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="49" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12hrs</td>

							<td>Limpieza del filtro de aire primario (sacudir el polvo o soplar con aire comprimido).</td>

							<td>
								<input type="radio" name="50" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="50" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12hrs</td>

							<td>Inspección visual de orugas, rodillos y tensores (ajustar si es necesario).</td>

							<td>
								<input type="radio" name="51" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="51" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12hrs</td>

							<td>Lubricación de pasadores y bujes de la hoja topadora y ripper.</td>

							<td>
								<input type="radio" name="52" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="52" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12hrs</td>

							<td>Inspección de fugas en el sistema hidráulico.</td>

							<td>
								<input type="radio" name="53" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="53" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12hrs</td>

							<td>Verificación del sistema eléctrico y batería (terminales limpias y bien conectadas).</td>

							<td>
								<input type="radio" name="54" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="54" id=""    value="realizado">
							</td>	

						</tr>	

						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12hrs</td>

							<td>Inspección de mangueras y conexiones en busca de grietas o fugas.</td>

							<td>
								<input type="radio" name="55" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="55" id=""    value="realizado">
							</td>	

						</tr>	

						<tr class="has-text-centered" >

							<td>Otros servicios</td>

							<td>Otro tipo de fallas contempladas</td>

							<td colspan="2">
								<textarea class="textArea" name="56" id=""></textarea>
							</td>
							
						</tr>																
			</div>

			<!-- Mantenimiento cada 250 hrs -->

			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 250 hrs</td>

							<td>Cambio de aceite del motor y filtro.</td>

							<td>
								<input type="radio" name="57" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="57" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 250 hrs</td>

							<td>Revisión del sistema de frenos y pedal de embrague.</td>

							<td>
								<input type="radio" name="58" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="58" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 250 hrs</td>

							<td>Inspección y ajuste de pernos y fijaciones en el chasis y el tren de rodaje.</td>

							<td>
								<input type="radio" name="59" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="59" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 250 hrs</td>

							<td>Limpieza del radiador y del sistema de refrigeración para evitar sobrecalentamiento.</td>

							<td>
								<input type="radio" name="60" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="60" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 250 hrs</td>

							<td>Chequeo del sistema hidráulico (revisar niveles y posibles fugas).</td>

							<td>
								<input type="radio" name="61" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="61" id=""    value="realizado">
							</td>	

						</tr>	
												
			</div>

			<!-- Mantenimiento cada 500 hrs -->
			
			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 500 hrs</td>

							<td>Cambio del filtro de aire secundario.</td>

							<td>
								<input type="radio" name="62" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="62" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 500 hrs</td>

							<td>Cambio del filtro de combustible (incluyendo el separador de agua).</td>

							<td>
								<input type="radio" name="63" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="63" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 500 hrs</td>

							<td>Cambio del filtro del sistema hidráulico.</td>

							<td>
								<input type="radio" name="64" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="64" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 500 hrs</td>

							<td>Revisión del sistema de escape (buscar grietas o fugas de gases).</td>

							<td>
								<input type="radio" name="65" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="65" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 500 hrs</td>

							<td>Verificación del sistema eléctrico, luces y panel de control.</td>

							<td>
								<input type="radio" name="66" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="66" id=""    value="realizado">
							</td>	

						</tr>	


						<tr class="has-text-centered" >

							<td>Otros servicios</td>

							<td>Otro tipo de fallas contempladas</td>

							<td colspan="2">
								<textarea class="textArea" name="67" id=""></textarea>
							</td>
							
						</tr>																
			</div>

			<!-- Mantenimiento cada 1000hrs -->

			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 1000hrs</td>

							<td>Cambio de aceite de transmisión y filtro.</td>

							<td>
								<input type="radio" name="68" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="68" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 1000hrs</td>

							<td>Cambio de aceite de los mandos finales y diferencial.</td>

							<td>
								<input type="radio" name="69" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="69" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 1000hrs</td>

							<td>Cambio del aceite hidráulico y revisión de mangueras.</td>

							<td>
								<input type="radio" name="70" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="70" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 1000hrs</td>

							<td>Revisión del estado de la batería (nivel de electrolito y carga).</td>

							<td>
								<input type="radio" name="71" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="71" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 1000hrs</td>

							<td>Revisión y ajuste de los tensores de oruga.</td>

							<td>
								<input type="radio" name="72" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="72" id=""    value="realizado">
							</td>	

						</tr>	

					
			</div>

			<!-- Mantenimiento cada 2000 hrs -->

			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 2000 hrs</td>

							<td>Cambio del refrigerante del motor y limpieza del sistema de enfriamiento.</td>

							<td>
								<input type="radio" name="73" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="73" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 2000 hrs</td>

							<td>Cambio del aceite de la caja de transferencia.</td>

							<td>
								<input type="radio" name="74" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="74" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 2000 hrs</td>

							<td>Inspección y lubricación de pasadores y bujes del tren de rodaje.</td>

							<td>
								<input type="radio" name="75" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="75" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 2000 hrs</td>

							<td>Verificación del turbo y sistema de admisión de aire.</td>

							<td>
								<input type="radio" name="76" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="76" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 2000 hrs</td>

							<td>Desmontaje y limpieza de inyectores (si se detectan problemas de combustión).</td>

							<td>
								<input type="radio" name="77" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="77" id=""    value="realizado">
							</td>	

						</tr>	


						<tr class="has-text-centered" >

							<td>Otros servicios</td>

							<td>Otro tipo de fallas contempladas</td>

							<td colspan="2">
								<textarea class="textArea" name="78" id=""></textarea>
							</td>
							
						</tr>																
			</div>
			
			<!-- Mantenimiento diario cada 10 a 12 hrs -->

			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12 hrs</td>

							<td>Revisión del nivel de aceite del motor (agregar si es necesario).</td>

							<td>
								<input type="radio" name="79" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="79" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12 hrs</td>

							<td>CInspección del nivel de refrigerante del motor</td>

							<td>
								<input type="radio" name="80" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="80" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12 hrs</td>

							<td>Revisión del Aceite hidráulico</td>

							<td>
								<input type="radio" name="81" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="81" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12 hrs</td>

							<td>Revisión del aceite de transmisión</td>

							<td>
								<input type="radio" name="82" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="82" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12 hrs</td>

							<td>Revisión de nivel de combustible</td>

							<td>
								<input type="radio" name="83" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="83" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12 hrs</td>

							<td>Drenar agua y sedimentos del separador de combustible</td>

							<td>
								<input type="radio" name="84" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="84" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12 hrs</td>

							<td>Inspeccionar neumáticos (presión y desgaste).</td>

							<td>
								<input type="radio" name="85" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="85" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12 hrs</td>

							<td>Lubricar pasadores y bujes de la pluma, balancín, cucharón y estabilizadores. Inspeccionar el estado del filtro de aire y limpiarlo si es necesario.</td>

							<td>
								<input type="radio" name="86" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="86" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento diario cada 10 a 12 hrs</td>

							<td>Eliminar suciedad del radiador y enfriador de aceite.</td>

							<td>
								<input type="radio" name="87" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="87" id=""    value="realizado">
							</td>	

						</tr>							
			</div>

			<!-- Mantenimiento preventivo -->

			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 2000 hrs</td>

							<td>Diario (Cada 10-12 horas) Revisar niveles de aceite (motor, hidráulico, transmisión), refrigerante y combustible. Drenar agua del separador de combustible. Inspeccionar neumáticos, fugas, sistema eléctrico y filtro de aire. Lubricar pasadores y limpiar radiador.</td>

							<td>
								<input type="radio" name="88" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="88" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 2000 hrs</td>

							<td>Cada 250 Horas. Cambio de aceite del motor y filtro. Revisar frenos, pernos y correa del ventilador.</td>

							<td>
								<input type="radio" name="89" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="89" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 2000 hrs</td>

							<td>Cada 500 Horas: Cambio de filtros de combustible, aire y aceite hidráulico. Inspeccionar sistema de escape y tensión de correas.</td>

							<td>
								<input type="radio" name="90" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="90" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 2000 hrs</td>

							<td>Cada 1,000 Horas: Cambio de aceite de transmisión, hidráulico y diferencial. Verificar convertidor de par, batería y sistema de refrigeración.</td>

							<td>
								<input type="radio" name="91" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="91" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Mantenimiento cada 2000 hrs</td>

							<td>Cada 2,000 Horas o Anual Cambio de refrigerante y aceite de ejes. Revisión de frenos, inyectores, bomba de combustible y turbo.</td>

							<td>
								<input type="radio" name="92" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="92" id=""    value="realizado">
							</td>	

						</tr>	
			</div>

			<!-- Mantenimiento del motor -->

			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					
						<tr class="has-text-centered" >

							<td>Sistemas hidráulicos</td>

							<td>Aceite hidráulico: Cambia el aceite del sistema hidráulico según las recomendaciones del fabricante.</td>

							<td>
								<input type="radio" name="93" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="93" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Sistemas hidráulicos</td>

							<td>Revisión de mangueras y conexiones: Inspecciona las mangueras, juntas y conexiones en busca de fugas o desgaste.</td>

							<td>
								<input type="radio" name="94" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="94" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Sistemas hidráulicos</td>

							<td>Bomba hidráulica: Verifica el estado y el rendimiento de la bomba hidráulica.</td>

							<td>
								<input type="radio" name="95" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="95" id=""    value="realizado">
							</td>	

						</tr>	
																	
			</div>

			<!-- Sistemas hidráulicos -->

			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					
						<tr class="has-text-centered" >

							<td>Sistemas hidráulicos</td>

							<td>Cambio de aceite y filtros: Cambia el aceite del motor y los filtros (aceite, aire y combustible) de forma periódica.</td>

							<td>
								<input type="radio" name="96" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="96" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Sistemas hidráulicos</td>

							<td>Sistema de refrigeración: Verifica el nivel y la calidad del refrigerante. Limpia el radiador y revisa mangueras y conexiones para evitar fugas o bloqueos.</td>

							<td>
								<input type="radio" name="97" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="97" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Sistemas hidráulicos</td>

							<td>Correas y accesorios: Inspecciona las correas (incluida la de distribución si aplica) y reemplázalas si muestran signos de desgaste o fisuras</td>

							<td>
								<input type="radio" name="98" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="98" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >

							<td>Sistemas hidráulicos</td>

							<td>Sistema de inyección y combustible: Limpia los inyectores y revisa la bomba de inyección para garantizar una combustión eficiente.</td>

							<td>
								<input type="radio" name="99" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="99" id=""    value="realizado">
							</td>	

						</tr>	

			</div>

			<!-- TSF -->
		
			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
					<tbody>

					
						<tr class="has-text-centered" >

							<td>TSF</td>

							<td>Transmisión: Cambia el aceite de la transmisión y revisa el diferencial.</td>

							<td>
								<input type="radio" name="100" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="100" id=""    value="realizado">
							</td>	

						</tr>	
						
						<tr class="has-text-centered" >	

							<td>TSF</td>

							<td>Frenos: Revisa el sistema de frenos, incluyendo pastillas, discos y líquido de frenos.</td>

							<td>
								<input type="radio" name="101" id=""    value="realizado">
							</td>
							<td>
								<input type="radio" name="101" id=""    value="realizado">
							</td>	

						</tr>	
																																					
			</div>
			
			<!-- Suspensión y dirección -->

				<div class="fallas__vehiculos">

						<div class="table-container">
						<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

						<thead>
							<tr>
								<th colspan="1" class="has-text-centered">Tarea</th>
								<th class="has-text-centered">Servicios</th>
								<th class="has-text-centered">Realizado</th>
								<th class="has-text-centered">No realizado</th>
							</tr>
						</thead>
						<tbody>

						
							<tr class="has-text-centered" >

								<td>Suspensión y dirección</td>

								<td>Suspensión: Inspecciona los amortiguadores, resortes y demás componentes de la suspensión.</td>

								<td>
									<input type="radio" name="102" id=""    value="realizado">
								</td>
								<td>
									<input type="radio" name="102" id=""    value="realizado">
								</td>	

							</tr>	
							
							<tr class="has-text-centered" >	

								<td>Suspensión y dirección</td>

								<td>Dirección: Verifica el sistema de dirección, incluyendo el líquido de dirección asistida (si aplica) y las conexiones mecánicas.</td>

								<td>
									<input type="radio" name="103" id=""    value="realizado">
								</td>
								<td>
									<input type="radio" name="103" id=""    value="realizado">
								</td>	

							</tr>	
				</div>

			<!-- Cada 5,000 - Cada 15,000 km (o cada año) 7,500 km (o cada 3-6 meses) -->

			<div class="fallas__vehiculos">

					<div class="table-container">
					<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

					<thead>
						<tr>
							<th colspan="1" class="has-text-centered">Tarea</th>
							<th class="has-text-centered">Servicios</th>
							<th class="has-text-centered">Realizado</th>
							<th class="has-text-centered">No realizado</th>
						</tr>
					</thead>
						<tbody>

						
							<tr class="has-text-centered" >

								<td>Cada 5,000 - 7,500 km (o cada 3-6 meses)</td>

								<td>Cambio de aceite y filtro – Usa aceite 5W-30 o 10W- 30 (según el clima) y un filtro de calidad.</td>

								<td>
									<input type="radio" name="104" id=""    value="realizado">
								</td>
								<td>
									<input type="radio" name="104" id=""    value="realizado">
								</td>	

							</tr>	
							
							<tr class="has-text-centered" >	

								<td>Cada 5,000 - 7,500 km (o cada 3-6 meses)</td>


								<td>Revisión de niveles de líquidos – Checa el refrigerante, líquido de frenos, dirección asistida, transmisión y limpiaparabrisas.</td>

								<td>
									<input type="radio" name="105" id=""    value="realizado">
								</td>
								<td>
									<input type="radio" name="105" id=""    value="realizado">
								</td>	

							</tr>	
							
							<tr class="has-text-centered" >	

								<td>Cada 5,000 - 7,500 km (o cada 3-6 meses)</td>


								<td>Inspección de frenos – Revisa el desgaste de las pastillas y discos/tambores.</td>

								<td>
									<input type="radio" name="106" id=""    value="realizado">
								</td>
								<td>
									<input type="radio" name="106" id=""    value="realizado">
								</td>	

							</tr>	
							
							<tr class="has-text-centered" >	

								<td>Cada 5,000 - 7,500 km (o cada 3-6 meses)</td>


								<td>Revisión de neumáticos – Presión adecuada y desgaste uniforme.</td>

								<td>
									<input type="radio" name="107" id=""    value="realizado">
								</td>
								<td>
									<input type="radio" name="107" id=""    value="realizado">
								</td>	

							</tr>
						</tbody>							
					</table>
			</div>
			
			<!-- Cada 15,000 km (o cada año) -->

			<div class="fallas__vehiculos">

					<div class="table-container">
						<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">

							<thead>
								<tr>
									<th colspan="1" class="has-text-centered">Tarea</th>
									<th class="has-text-centered">Servicios</th>
									<th class="has-text-centered">Realizado</th>
									<th class="has-text-centered">No realizado</th>
								</tr>
							</thead>
							<tbody>

							
								<tr class="has-text-centered" >

									<td>Cada 15,000 km (o cada año)</td>

									<td>Cambio del filtro de aire – Importante para la eficiencia del motor.</td>

									<td>
										<input type="radio" name="108" id=""    value="realizado">
									</td>
									<td>
										<input type="radio" name="108" id=""    value="realizado">
									</td>	

								</tr>	
								
								<tr class="has-text-centered" >	

									<td>Cada 15,000 km (o cada año)</td>


									<td>Revisión del sistema de refrigeración – Inspecciona mangueras y radiador</td>

									<td>
										<input type="radio" name="109" id=""    value="realizado">
									</td>
									<td>
										<input type="radio" name="109" id=""    value="realizado">
									</td>	

								</tr>	
								
								<tr class="has-text-centered" >	

									<td>Cada 15,000 km (o cada año)</td>


									<td>Inspección del sistema de escape – Busca fugas o corrosión</td>

									<td>
										<input type="radio" name="110" id=""    value="realizado">
									</td>
									<td>
										<input type="radio" name="110" id=""    value="realizado">
									</td>	

								</tr>	
								
								<tr class="has-text-centered" >	

									<td>Cada 15,000 km (o cada año)</td>


									<td>Revisión de suspensión y dirección – Controla rótulas, terminales y bujes</td>

									<td>
										<input type="radio" name="111" id=""    value="realizado">
									</td>
									<td>
										<input type="radio" name="111" id=""    value="realizado">
									</td>	

								</tr>	
								
							</tbody>
						</table>
					</div>
			
			</div>
			<br>
			<!-- Cada 100,000 km (o cada 5 años) -->

			<div class="fallas__vehiculos">

					<div class="table-container">
						<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
		
						<thead>
							<tr>
								<th colspan="1" class="has-text-centered">Tarea</th>
								<th class="has-text-centered">Servicios</th>
								<th class="has-text-centered">Realizado</th>
								<th class="has-text-centered">No realizado</th>
							</tr>
						</thead>

						<tbody>
		
						
							<tr class="has-text-centered" >

								<td>Cada 100,000 km (o cada 5 años)</td>

								<td>Cambio de bujías y cables – Mejora el rendimiento del motor.</td>

								<td>
									<input type="radio" name="112" id=""    value="realizado">
								</td>
								<td>
									<input type="radio" name="112" id=""    value="realizado">
								</td>	

							</tr>	
							
							<tr class="has-text-centered" >	

								<td>Cada 100,000 km (o cada 5 años)</td>


								<td>Cambio del filtro de combustible – Evita fallos en la bomba de gasolina</td>

								<td>
									<input type="radio" name="113" id=""    value="realizado">
								</td>
								<td>
									<input type="radio" name="113" id=""    value="realizado">
								</td>	

							</tr>	
							
							<tr class="has-text-centered" >	

								<td>Cada 100,000 km (o cada 5 años)</td>


								<td>Revisión de la cadena de distribución – Aunque es duradera, revisar su estado.</td>

								<td>
									<input type="radio" name="114" id=""    value="realizado">
								</td>
								<td>
									<input type="radio" name="114" id=""    value="realizado">
								</td>	

							</tr>	
							
								
							<tr class="has-text-centered" >

								<td>Otros servicios</td>

								<td>Otro tipo de fallas contempladas</td>

								<td colspan="2">
									<textarea class="textArea" name="115" id=""></textarea>
								</td>
								
							</tr>	
						</tbody>	
						<table>				
					</div>									
			</div>	

		</div>	
		
			
		<div class="inputs_file">
			
		
			<div class="column content_input">
					
					<div class="control">
						<label>Primera imagen</label>
						<br>
                  		<input id="file-upload" name="upload1" type="file" class="file"> 
					</div>
			</div>

			<div class="column content_input">
				
				<div class="control">
					<label>Segunda imagen</label>
					<br>
                  <input id="file-upload" name="upload2" type="file" class="file">
				</div>
			</div>
		</div>

		
		
	</div>

	<div class="enviar">
		<button type="submit" class="button is-info is-rounded ">Enviar</button>
	</div>

				
	</form>
	<?php
		}else{
			include "./app/views/inc/error_alert.php";
		}
	?>
</div>

<script src="<?php echo APP_URL; ?>app/views/js/datosForm.js" ></script> 