<main>
	<div class="row">
		<div class="col-lg-6">
			<div>
				<nav class="mb-3" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="?controller=home">Inicio</a></li>
						<li class="active breadcrumb-item" aria-current="page">Profesores</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="main-card mb-3 card">
				<div class="card-body">
					<h3>Profesores</h3>
					<div class="card-header-tab card-header">
						<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
							<li class="nav-item">
								<a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
									<span><i class="fa fa-list-ol"></i> Listado</span>
								</a>
							</li>
							<li class="nav-item">
								<a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
									<span><i class="fa fa-plus"></i> Agregar</span>
								</a>
							</li>
							<li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                                    <span><i class="fa fa-file-excel"></i></span>
                                </a>
                            </li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<div class="main-card mb-5 card">
									<div style="height:20px"></div>
										<section class="col-md-12 table-responsive">
											<table class="table table-striped table-hover" id="example">
												<thead>
													<tr>
													<th>Nombre</th>
													<th>Apellido</th>
													<th>Documento</th>
													<th>Teléfono</th>
													<th>Edad</th>
													<th>EPS</th>
													<!-- <th>RH</th> -->
													<th>Email</th>
													<th>Centro</th>
													<th>Opciones</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($profesores as $profesor) : ?>
														<tr>
														<td><?php echo $profesor->nombre; ?></td>
														<td><?php echo $profesor->apellido;?></td>
														<td><?php echo $profesor->documento?></td>
														<td><?php echo $profesor->telefono?></td>
														<td><?php echo $profesor->edad;?></td>
														<td><?php echo $profesor->eps;?></td>
														<!-- <td><?php echo $profesor->rh;?></td> -->
														<td><?php echo $profesor->email;?></td>
														<td><?php echo $profesor->nombre_centro;?></td>
														<td>
															<a href="?controller=profesor&method=view&persona=<?php echo $profesor->id_persona ?>&usuario=<?php echo $profesor->id_usuario ?>"><i class="fa fa-pen"></i></a>
															<a href="?controller=profesor&method=inactivar&persona=<?php echo $profesor->id_persona ?>" class="m-3"><i class="fa fa-trash"></i></a>
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
										<!--<form name="profesor" id="profesor" method="POST">-->
											<div class="modal-body">
												<h4 class="m-2"> Nuevo Profesor</h4>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="nombre">Nombre</label>
															<input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre Profesor" onkeypress="return soloLetras(event)" require>
															<div id="a_nombre"></div>
														</div>
													</div>	
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="apellido">Apellido</label>
															<input id="apellido" name="apellido" type="text" class="form-control" placeholder="Apellido Profesor" onkeypress="return soloLetras(event)" require>
															<div id="a_apellido"></div>
														</div>
													</div>	
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="documento">Documento</label>
															<input id="documento" name="documento" type="text" class="form-control" placeholder="Nº Identificación" onkeypress="return soloNumeros(event)" require>
															<div id="a_documento"></div>
														</div>
													</div>	
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="telefono">Teléfono</label>
															<input id="telefono" name="telefono" type="text" class="form-control" placeholder="Nº Celular" onkeypress="return soloNumeros(event)" require>
															<div id="a_telefono"></div>
														</div>
													</div>	
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="float-left" for="eps">EPS</label>
															<input id="eps" name="eps" type="text" class="form-control" placeholder="ESP afiliado" onkeypress="return soloLetras(event)" require>
															<div id="a_eps"></div>
														</div>
													</div>	
													<div class="col-md-4">
														<div class="form-group">
															<label class="float-left" for="rh">RH</label>
															<select name="rh" class="form-control" id="rh" require>
															<option value="">Seleccione</option>
															<option value="O+">O+</option>
															<option value="O-">O-</option>
															<option value="A+">A+</option>
															<option value="A-">A-</option>
															<option value="AB+">AB+</option>
															</select>
															<div id="a_rh"></div>
														</div>
													</div>	
													<div class="col-md-4">
														<div class="form-group">
															<label class="float-left" for="fecha_nacimiento">Fec. Nacimiento</label>
															<input id="fecha_nacimiento" name="fecha_nacimiento" type="date" class="form-control" placeholder="Fecha" require>
															<div id="a_fechan"></div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="float-left" for="email">Email</label>
															<input type="email" name="email" class="form-control" id="email" placeholder="Correo electrónico" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
															<div id="a_email"></div>
														</div>
														<!--<div id="valido"></div>-->
													</div>	
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="float-left" for="id_centro">Deporte</label>
															<select name="id_centro" class="form-control" id="id_centro" require>
															<option value="">Seleccione</option>
																<?php 
																	foreach ($centros as $centro) {
																		?>
																			<option value="<?php echo $centro->id_centro ?>"><?php echo $centro->nombre ?></option>
																		<?php
																	}
																?>
															</select>
															<div id="a_deporte"></div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label class="float-left" for="id_centro">Asignar Cursos</label>
															<select name="id_curso" class="form-control" id="id_curso" require>
															<option value="">Seleccione</option>
																<?php 
																	foreach ($cursos as $curso) {
																		?>
																			<option value="<?php echo $curso->id_curso ?>"><?php echo $curso->numero_curso ?></option>
																		<?php
																	}
																?>
															</select>
															<div id="a_deporte"></div>
														</div>
													</div>
													<div class="col-md-4 mt-4">
														<div class="form-group">
															<button href="#" id="addElement" data-toggle="tooltip" data-placement="top" title="Añadir Curso" class="btn btn-primary">+</button>
														</div>
													</div>
												</div>
												<!--<div class="form-group" id="list-cursos"></div>-->
												<label>Cursos asignados:</label>
												<div class="page-title-actions md-2" id="list-cursos">
													<div id="mensaje"></div>
												</div>
											</div>
											<div class="modal-footer float-right">
												<!-- onclick="validarcorreo(form.email.value)" -->
												<input type="button" class="btn btn-primary" id="infoprofesor" value="Agragar Profesor">
												<a href="?controller=profesor" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
											</div>
										<!--</form>-->
									</div>    
								</div>
							</div>
						</div>
						<div class="tab-pane tabs-animation fade content-center" id="tab-content-2" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<div class="main-card mb-3 card">
										<section class="col-md-12 table-responsive">
											<table class="records_list table table-striped table-bordered table-hover" id="mydatatable">
												<thead>
													<tr>
													<th>Nombre</th>
													<th>Apellido</th>
													<th>Documento</th>
													<th>Teléfono</th>
													<th>Edad</th>
													<th>EPS</th>
													<th>RH</th>
													<th>Email</th>
													<th>Centro In.</th>
													<th>Estado</th>
													<th>Opciones</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($profesorI as $profesor) : ?>
														<tr>
														<td><?php echo $profesor->nombre; ?></td>
														<td><?php echo $profesor->apellido;?></td>
														<td><?php echo $profesor->documento?></td>
														<td><?php echo $profesor->telefono?></td>
														<td><?php echo $profesor->edad;?></td>
														<td><?php echo $profesor->eps;?></td>
														<td><?php echo $profesor->rh;?></td>
														<td><?php echo $profesor->email;?></td>
														<td><?php echo $profesor->nombre_centro;?></td>
														<td><?php echo $profesor->estado?></td>
														<td>
															<a href="?controller=profesor&method=activar&persona=<?php echo $profesor->id_persona ?>&id_usuario=<?php echo $profesor->id_usuario ?>"><i class="fa fa-eye"></i></a>
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
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
