<main>
	<div class="row">
		<div class="col-lg-6">
			<div>
				<nav class="" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="?controller=home">Inicio</a></li>
						<li class="breadcrumb-item"><a href="?controller=grado">Grados</a></li>
						<li class="breadcrumb-item"><a href="?controller=grado&method=getById&id_grado=<?php echo $cursos[0]->id_grado ?>">Cursos</a></li>
						<li class="breadcrumb-item"><a href="?controller=estudiante&method=view&id=<?php echo $cursos[0]->id_curso ?>">Estudiantes <?php echo $cursos[0]->numero_curso ?></a></li>
						<li class="active breadcrumb-item" aria-current="page">Asistencia <?php echo $cursos[0]->numero_curso ?></li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="main-card mb-3 card">
				<div class="card-body">
					<h3>Asistencia <?php echo $cursos[0]->numero_curso ?></h3>
					<div class="card-header-tab card-header">
						<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
							<li class="nav-item">
								<a class="nav-link" href="?controller=estudiante&method=view&id=<?php echo $cursos[0]->id_curso ?>">
									<span><i class="fa fa-list"></i> Listado</span>
									
								</a>
							</li>
							<?php if($centro[0]->categoria == 2) {
								?>
									<li class="nav-item">
										<a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
											<span><i class="fa fa-magic"></i> <?php echo $centro[0]->centro ?></span>
										</a>
									</li>
								<?php
								}elseif($centro[1]->categoria == 2){
									?>
									<li class="nav-item">
										<a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
											<span><i class="fa fa-magic"></i> <?php echo $centro[1]->centro ?></span>
										</a>
									</li>
								<?php
								}elseif($centro[2]->categoria == 2){
									?>
									<li class="nav-item">
										<a role="tab" class="nav-link active" id="tab-2" data-toggle="tab" href="#tab-content-2">
											<span><i class="fa fa fa-dribbble"></i> <?php echo $centro[2]->centro ?></span>
										</a>
									</li>
								<?php
								}elseif($centro[3]->categoria == 2){
									?>
									<li class="nav-item">
										<a role="tab" class="nav-link active" id="tab-2" data-toggle="tab" href="#tab-content-2">
											<span><i class="fa fa fa-dribbble"></i> <?php echo $centro[3]->centro ?></span>
										</a>
									</li>
								<?php
								}
								?>
								
							<?php if($centro[0]->categoria == 3) {
								?>
									<li class="nav-item">
										<a role="tab" class="nav-link" href="?controller=asistencia&method=tercer&id=<?php echo $cursos[0]->id_curso ?>&ca=3">
											<span><i class="fa fa-child"></i> <?php echo $centro[0]->centro ?></span>
											<input type="hidden" id="ooo" value="<?php echo $cursos[0]->id_curso ?>">
										</a>
									</li>
								<?php
								}elseif($centro[1]->categoria == 3){
									?>
									<li class="nav-item">
										<a role="tab" class="nav-link" href="?controller=asistencia&method=tercer&id=<?php echo $cursos[0]->id_curso ?>&ca=3">
											<span><i class="fa fa-child"></i> <?php echo $centro[1]->centro ?></span>
											<input type="hidden" id="ooo"  value="<?php echo $cursos[0]->id_curso ?>">
										</a>
									</li>
								<?php
								}elseif($centro[2]->categoria == 3){
									?>
									<li class="nav-item">
										<a role="tab" class="nav-link" href="?controller=asistencia&method=tercer&id=<?php echo $cursos[0]->id_curso ?>&ca=3">
											<span><i class="fa fa-child"></i> <?php echo $centro[2]->centro ?></span>
											<input type="hidden" id="ooo" value="<?php echo $cursos[0]->id_curso ?>">
										</a>
									</li>
								<?php
								}elseif($centro[3]->categoria == 3){
									?>
									<li class="nav-item">
										<a role="tab" class="nav-link" href="?controller=asistencia&method=tercer&id=<?php echo $cursos[0]->id_curso ?>&ca=3">
											<span><i class="fa fa-child"></i> <?php echo $centro[3]->centro ?></span>
											<input type="hidden" id="ooo" value="<?php echo $cursos[0]->id_curso ?>">
										</a>
									</li>
								<?php
								}
								?>
							<li class="nav-item">
								<a role="tab" class="nav-link" href="?controller=asistencia&method=deporte&id=<?php echo $cursos[0]->id_curso ?>&ca=1">
									<span><i class="fa fa fa-dribbble"></i> Deportes</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
							<div class="row">
								<div class="col-md-6 mt-3">
									<?php
										if(isset($error['errorMessage'])) {
										?>
											<div class="alert alert-danger mb-3" role="alert">
												<?php echo $error['errorMessage'] ?>
											</div>
										<?php
										}
									?>
									<div class="main-card mb-3 card">
										<!--<div style="height:20px"></div>-->
										<section class="col-md-12 table-responsive">
											<div>
												<a class="btn btn-primary float-right m-3" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus"></i> Clase</a>
											</div>
											<div class="collapse" id="collapseExample">
												<div class="card card-body m-3">
													<?php if($centro[0]->categoria == 2){
														?>
															<form action="?controller=asistencia&method=view&plan=<?php echo $centro[0]->plan ?>" method="POST">
														<?php
														}elseif($centro[1]->categoria == 2){
														?>
															<form action="?controller=asistencia&method=view&plan=<?php echo $centro[1]->plan ?>" method="POST">
														<?php
														}elseif($centro[2]->categoria == 2){
														?>
															<form action="?controller=asistencia&method=view&plan=<?php echo $centro[2]->plan ?>" method="POST">
														<?php
															}elseif($centro[3]->categoria == 2){
																?>
															<form action="?controller=asistencia&method=view&plan=<?php echo $centro[3]->plan ?>" method="POST">
														<?php
													}
													?>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="float-left" for="fecha">Fecha</label>
																	<input id="fecha" name="fecha" type="text" class="form-control" placeholder="Fecha Clase" required readonly>
																	<input type="hidden" value="<?php echo $cursos[0]->id_curso ?>" name="id_curso">
																	<input type="hidden" value="2" name="id_categoria">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label class="float-left" for="centro">Centro de Interés</label>
																	<?php if($centro[0]->categoria == 2){
																		?>
																			<input class="form-control" id="centro" value="<?php echo $centro[0]->centro ?>" readonly required>
																			<input type="hidden" id="centrofecha" value="<?php echo $centro[0]->id_centro ?>" name="id_centro">
																		<?php
																		}elseif($centro[1]->categoria == 2){
																		?>
																			<input class="form-control" id="centro" value="<?php echo $centro[1]->centro ?>" readonly required>
																			<input type="hidden" id="centrofecha" value="<?php echo $centro[1]->id_centro ?>" name="id_centro">
																		<?php
																		}elseif($centro[2]->categoria == 2){
																		?>
																			<input class="form-control" id="centro" value="<?php echo $centro[2]->centro ?>" readonly required>
																			<input type="hidden" id="centrofecha" value="<?php echo $centro[2]->id_centro ?>" name="id_centro">
																		<?php
																			}elseif($centro[3]->categoria == 2){
																				?>
																			<input class="form-control" id="centro" value="<?php echo $centro[3]->centro ?>" readonly required>
																			<input type="hidden" id="centrofecha" value="<?php echo $centro[3]->id_centro ?>" name="id_centro">
																		<?php
																	}
																	?>
																</div>
															</div>		
															<div class="col-md-10">
																<div class="form-group">
																	<label class="float-left" for="descripcion">Descripción</label>
																	<textarea id="descripcion" name="descripcion" type="text" cols="2" rows="2" class="form-control" placeholder="Información de la clase" required></textarea>
																</div>
															</div>	
														</div>
														<div class="modal-footer float-right">
															<button class="btn btn-primary">Agregar</button>
														</div>
													</form>
												</div>	
											</div>
											<table class="table table-striped table-hover">
												<thead>
													<tr>
														<th>Nombre</th>
														<th>Apellido</th>
														<th>Documento</th>
														<?php if($fechas == false){
															?>
																<th>Realiza la clase</th>
															<?php
														}else{
															?>
																<?php foreach ($fechas as $fecha) : ?> 
																	<th><a href="?controller=clase&method=view&clase=<?php echo $fecha->id_clase ?>" class="text-light"><?php echo $fecha->fecha ?></a></th>
																<?php endforeach ?>
															<?php
														}?>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($inscripciones as $inscripcion) : ?>
														<tr>
														<form action="?controller=asistencia&method=save" method="POST">
															<td><?php echo $inscripcion->nombre; ?></td>
															<td><?php echo $inscripcion->apellido;?></td>
															<td><?php echo $inscripcion->documento?></td>
															<?php if($fechas == false){
																?>

																<?php
															}else{ 
																?>
																<input type="hidden" id="id_persona" name="id_persona[]" value="<?php echo $inscripcion->id_inscripcion;?>">
																<?php foreach ($fechas as $fecha) : ?> 
																	<input type="hidden" id="id_clase" name="id_clase" value="<?php echo $fecha->id_clase; ?>">
																<?php endforeach ?>
																<td class="row col-md-12">
																	<div class="form-group">
																		<select name="situacion[]" class="form-control" id="situacion" required>
																			<option value="<?php echo $situacion[1]->id_situacion?>"></option>
																				<?php 
																					foreach ($situacion as $estado) {
																						?>
																							<option value="<?php echo $estado->id_situacion ?>"><?php echo $estado->situacion ?></option>
																						<?php
																					}
																				?>
																		</select>
																	</div>
																</td>
															<td></td>
																<?php
															}?>
														</tr>
													<?php endforeach ?> 
												</tbody>
											</table>
											<?php if($fechas == true){
												?>
													<input type="submit" class="btn btn-primary float-right mb-3" id="infoasistencia" value="Asistencia">
												<?php
													}else{ 
														?>
													<input type="button" class="btn btn-secondary float-right mb-3" value="Asistencia" data-toggle="tooltip" data-placement="top" title="Realiza una Clase para hacer la asistencia">
												<?php
											}?>
											</form>
										</section>
									</div>
									
								</div>
								
								<div class="col-md-6 mt-3">
									<div class="main-card mb-3 card">
										<!--<div style="height:20px"></div>-->
										<section class="col-md-12 table-responsive">
											<form name="formfechas" id="formfechas">
												<div class="row">
													<div class="col-md-3">
														<h6 class="m-2"> Asistencia por Fecha:</h6>
													</div>
													<div class="col-md-5 mt-2">
														<div class="form-group">
															<input type="date" name="fecha" id="fechaeescogida" class="form-control" required>
															<input type="hidden" name="categoria" id="categoriafecha" value="2">
														</div>
													</div>
													<div class="col-md-4 mt-2">
														<div class="form-group">
															<input type="button" id="buttonform" class="btn btn-primary" value="Buscar">
														</div>
													</div>
												</div>
											</form>
											<div id="fechasistencia"></div>
										</section>
									</div>
									
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
</div>
</div>
</div>