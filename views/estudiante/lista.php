<main>
	<div class="row">
		<div class="col-lg-12">
			<div class="main-card mb-3 card">
				<div class="card-body">
					<h3>Estudiantes</h3>
					<div class="card-header-tab card-header">
						<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
							<li class="nav-item">
								<a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
									<span><i class="fa fa-plus"></i> Agregar</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<div class="main-card mb-3 card">
										<section class="col-md-12 table-responsive">
											<table class="table table-striped table-hover" id="example">
												<thead>
													<tr>
													<th>Nombre</th>
													<th>Apellido</th>
													<th>Documento</th>
													<th>Telefono</th>
													<th>Edad</th>
													<th>EPS</th>
													<th>RH</th>
													<th>Email</th>
													<th>Opciones</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($estudiantes as $estudiante) : ?>
														<tr>
														<td><?php echo $estudiante->nombre; ?></td>
														<td><?php echo $estudiante->apellido;?></td>
														<td><?php echo $estudiante->documento?></td>
														<td><?php echo $estudiante->telefono?></td>
														<td><?php echo $estudiante->edad;?></td>
														<td><?php echo $estudiante->eps;?></td>
														<td><?php echo $estudiante->rh;?></td>
														<td><?php echo $estudiante->email;?></td>
														<td>
															<a href="?controller=estudiante&method=view&id_persona=<?php echo $estudiante->id_persona ?>&id_usuario=<?php echo $estudiante->id_usuario ?>"><i class="fa fa-pen"></i></a>
															<a href="" class="m-3"><i class="fa fa-trash"></i></a>
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
										<form action="?controller=profesor&method=save" method="POST">
											<div class="modal-body">
												<h4 class="m-2"> Nuevo Estudiante</h4>
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
															<label class="float-left" for="telefono">Telefono</label>
															<input id="telefono" name="telefono" type="text" class="form-control" placeholder="Nº Celular" onkeypress="return soloNumeros(event)" required>
														</div>
													</div>	
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="eps">EPS</label>
															<input id="eps" name="eps" type="text" class="form-control" placeholder="ESP afiliado" required>
														</div>
													</div>	
													<div class="col-md-6">
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
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<input type="hidden" name="id_curso" value="<?php echo $data[0]->id_curso ?>">
														</div>
													</div>	
													<div class="col-md-6">
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
												<a href="?controller=profesor" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
											</div>
										</form>
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