<main>
	<div class="row">
		<div class="col-lg-6">
			<div>
				<nav class="" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="?controller=home">Inicio</a></li>
						<li class="breadcrumb-item"><a href="?controller=grado">Grados</a></li>
						<li class="breadcrumb-item"><a href="?controller=grado&method=getById&id_grado=<?php echo $cursos[0]->id_grado ?>">Cursos</a></li>
						<li class="active breadcrumb-item" aria-current="page">Estudiantes <?php echo $cursos[0]->numero_curso ?></li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="main-card mb-3 card">
				<div class="card-body">
					<h3>Estudiantes <?php echo $cursos[0]->numero_curso ?></h3>
					<div class="card-header-tab card-header">
						<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
							<li class="nav-item">
								<a role="tab" class="nav-link active" id="tab-1" data-toggle="tab" href="#tab-content-0">
									<span><i class="fa fa-list"></i> Listado</span>
								</a>
							</li>
							<li class="nav-item">
								<a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
									<span><i class="fa fa-plus"></i> Agregar</span>
								</a>
							</li>
							<?php 
								if($count[0]->centros < 7){
									?>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tooltip" data-placement="top" title="La asistencia esta inactiva, asigna plan al curso!" >
											<span><i class="fa fa-question-circle"></i></span>
										</a>
									</li>
									<?php
								}else{
									?>
										<li class="nav-item">
											<a class="nav-link" href="?controller=asistencia&method=view&id=<?php echo $cursos[0]->id_curso ?>&ca=2">
												<span><i class="fa fa-check"></i> Asistencia</span>
											</a>
										</li>
									<?php
								}
							?>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<div class="main-card mb-5 card">
										<div style="height:20px"></div>
										<section class="col-md-12 table-responsive">
											<table class="table table-striped table-hover">
												<thead>
													<tr>
														<th>#</th>
														<th>Nombre</th>
														<th>Apellido</th>
														<th>Documento</th>
														<th>Telefono</th>
														<th>Edad</th>
														<th>EPS</th>
														<th>RH</th>
														<th>Email</th>
														<th>Curso</th>
														<!--<th>Estado</th>-->
														<th>Opciones</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($estudiantes as $estudiante) : ?>
														<tr>
															<td><?php echo $estudiante->id_persona; ?></td>
															<td><?php echo $estudiante->nombre; ?></td>
															<td><?php echo $estudiante->apellido;?></td>
															<td><?php echo $estudiante->documento?></td>
															<td><?php echo $estudiante->telefono?></td>
															<td><?php echo $estudiante->edad;?></td>
															<td><?php echo $estudiante->eps;?></td>
															<td><?php echo $estudiante->rh;?></td>
															<td><?php echo $estudiante->email;?></td>
															<td ><?php echo $estudiante->curso;?></td>
															<td hidden=""><?php echo $estudiante->id_curso;?></td>
															<td>
																<a href="?controller=estudiante&method=edit&id=<?php echo $estudiante->id_persona ?>"><i class="fa fa-pen"></i></a>
																<a href="?controller=inscripcion&method=view&id=<?php echo $estudiante->id_curso ?>&persona=<?php echo $estudiante->id_persona ?>"><i class="far fa-address-card"></i></a>
															</td>
														</tr>
													<?php endforeach ?> 

												</tbody>
											</table>
										</section>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane tabs-animation fade content-center" id="tab-content-1" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3 card">
										<form action="?controller=estudiante&method=save" method="POST">
											<div class="modal-body">
												<h4 class="m-2"> Nuevo Estudiante</h4>
												<input type="hidden" name="id_curso" value="<?php echo $cursos[0]->id_curso ?>">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="nombre">Nombre</label>
															<input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre Estudiante" onkeypress="return soloLetras(event)" required>
														</div>
													</div>	
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="apellido">Apellido</label>
															<input id="apellido" name="apellido" type="text" class="form-control" placeholder="Apellido Estudiante"  onkeypress="return soloLetras(event)" required>
														</div>
													</div>	
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="documento">Documento</label>
															<input id="documento" name="documento" type="text" class="form-control" placeholder="Nº Identificacion" onkeypress="return soloNumeros(event)" required>
														</div>
													</div>	
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="telefono">Teléfono</label>
															<input id="telefono" name="telefono" type="text" class="form-control" placeholder="Nº Celular" onkeypress="return soloNumeros(event)" required>
														</div>
													</div>	
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="float-left" for="eps">EPS</label>
															<input id="eps" name="eps" type="text" class="form-control" placeholder="ESP afiliado" required>
														</div>
													</div>	
													<div class="col-md-4">
														<div class="form-group">
															<label class="float-left" for="rh">RH</label>
															<select name="rh" class="form-control" id="rh" required>
																<option value="">Seleccione</option>
																<option value="O+">O+</option>
																<option value="O-">O-</option>
																<option value="A+">A+</option>
																<option value="A-">A-</option>
																<option value="AB+">AB+</option>
															</select>
														</div>
													</div>	
													
													<div class="col-md-4">
														<div class="form-group">
															<label class="float-left" for="edad">Fec. Nacimiento</label>
															<input id="edad" name="fecha_nacimiento" type="date" class="form-control" placeholder="Fecha" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="float-left" for="email">Email</label>
															<input type="email" name="email" class="form-control" id="deporte" placeholder="Correo electronico" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
														</div>
														<div id="valido"></div>
													</div>	
												</div>
											</div>
											<div class="modal-footer float-right">
												<button class="btn btn-primary" onclick="validarcorreo(form.email.value)">Agregar</button>
												<a href="?controller=curso" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
											</div>
										</form>
									</div>    
								</div>
							</div>
						</div>
						<div class="tab-pane tabs-animation fade show" id="tab-content-2" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<div class="main-card mb-5 card">
										<section class="col-md-12 table-responsive">
											<div style="height:20px"></div>
											<table class="table table-striped table-hover" id="example">
												<thead>
													<tr>
														<th>#</th>
														<th>Documento</th>
														<th>Nombres</th>
															<?php foreach ($fechas as $fecha) : ?>
																<th><a class="text-light"href="?controller=plan"><?php echo $fecha->fecha ?></a></th>
															<?php endforeach ?>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($estudiantes as $estudiante) : ?>
														<tr>
															<td><?php echo $estudiante->id_persona; ?></td>
															<td><?php echo $estudiante->documento?></td>
															<td><?php echo $estudiante->nombre; ?> <?php echo $estudiante->apellido;?></td>
															<td hidden=""><?php echo $estudiante->id_curso;?></td>
														</tr>
													<?php endforeach ?> 
												</tbody>
											</table>
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