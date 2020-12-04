<div class="row">
	<div class="col-lg-6">
		<div>
			<nav class="" aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="?controller=home">Inicio</a></li>
					<li class="breadcrumb-item"><a href="?controller=grado">Grados</a></li>
					<li class="breadcrumb-item"><a href="?controller=grado&method=getById&id_grado=<?php echo $data[0]->grado ?>">Cursos</a></li>
					<li class="active breadcrumb-item" aria-current="page">Estudiantes <?php echo $data[0]->numero_curso ?></li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="main-card mb-3 card">
			<div class="card-body">
				<h3>Estudiante <?php echo $data[0]->nombre ?> <?php echo $data[0]->apellido ?></h3>
				<div class="card-header-tab card-header">
					<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
						<li class="nav-item">
							<a role="tab" class="nav-link" href="?controller=estudiante&method=view&id=<?php echo $data[0]->id_curso ?>">
								<span><i class="fa fa-list-ol"></i> Listado</span>
							</a>
						</li>
						<li class="nav-item">
							<a role="tab" class="nav-link active" id="tab-1" data-toggle="tab" href="#tab-content-1">
								<span><i class="fa fa-edit"></i> Editar</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="mb-3 card">
							<form action="?controller=estudiante&method=update" method="POST">
								<input type="hidden" name="id_usuario" value="<?php echo $data[0]->id_usuario ?>">
								<input type="hidden" name="id_persona" value="<?php echo $data[0]->id_persona ?>">
								<input type="hidden" name="id_curso" value="<?php echo $data[0]->id_curso ?>">

								<div class="modal-body">
									<h4 class="m-2"> Editar Estudiante</h4>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="float-left" for="nombre">Nombre</label>
												<input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre Estudiante" onkeypress="return soloLetras(event)" required value="<?php echo $data[0]->nombre ?>">
											</div>
										</div>	
										<div class="col-md-6">
											<div class="form-group">
												<label class="float-left" for="apellido">Apellido</label>
												<input id="apellido" name="apellido" type="text" class="form-control" placeholder="Apellido Estudiante"  onkeypress="return soloLetras(event)" required value="<?php echo $data[0]->apellido ?>">
											</div>
										</div>	
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="float-left" for="documento">Documento</label>
												<input id="documento" name="documento" type="number" class="form-control" placeholder="Nº Identificacion" value="<?php echo $data[0]->documento ?>">
											</div>
										</div>	
										<div class="col-md-6">
											<div class="form-group">
												<label class="float-left" for="telefono">Telefono</label>
												<input id="telefono" name="telefono" type="text" class="form-control" placeholder="Nº Celular" onkeypress="return soloNumeros(event)" required value="<?php echo $data[0]->telefono ?>">
											</div>
										</div>	
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="float-left" for="eps">EPS</label>
												<input id="eps" name="eps" type="text" class="form-control" placeholder="ESP afiliado" required value="<?php echo $data[0]->eps ?>">
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
												<input id="edad" name="fecha_nacimiento" type="date" class="form-control" placeholder="Fecha" required value="<?php echo $data[0]->fecha_nacimiento ?>">
											</div>
										</div>	
									</div>	
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="float-left" for="email">Email</label>
												<input type="email" name="email" class="form-control" id="deporte" placeholder="Correo electronico" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required value="<?php echo $data[0]->email ?>">
											</div>
										</div>	
									</div>
								</div>
								<div class="modal-footer float-right">
									<button type="submit" class="btn btn-primary" onclick="validarcorreo(form.email.value)">Editar</button>
									<a href="?controller=estudiante&method=view&id=<?php echo $data[0]->id_curso ?>" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
								</div>
							</form>
						</div>    
					</div>
				</div>
			</div>    
		</div>
	</div>
</div>
							