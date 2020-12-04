<main>
	<div class="row">
		<div class="col-lg-6">
			<div>
				<nav class="" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="?controller=home">Inicio</a></li>
						<li class="breadcrumb-item"><a href="?controller=grado">Grados</a></li>
						<li class="active breadcrumb-item" aria-current="page">Cursos </li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="col-md-12">
			<div class="main-card mb-5 card">
				<div class="card-body">
					<h3>Cursos</h3>
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
						</ul>
					</div>

					<div class="tab-content">
						<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
							<div class="row">
								<div class="container m-5">
										<?php foreach ($cursos as $curso) : ?>
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 single-card">
												<div class="card bg-light border-primary mb-3"  style="max-width: 18rem;">
													<a href="?controller=estudiante&method=view&id=<?php echo $curso->id_curso ?>">
														<div class="card-header border-primary">
															<h5 class="card-title">Curso <?php echo $curso->numero_curso?></h5>
														</div>
													</a>
													<div class="card-body">
														<p class="card-text float-right">
															<a href="?controller=curso&method=getCurso&id=<?php echo $curso->id_curso ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
															<a href="?controller=curso&method=inac&id=<?php echo $curso->id_curso ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
														</p>
													</div>
												</div>
											</div>
										<?php endforeach ?>	
								</div>
							</div>	
						</div>
						<div class="tab-pane tabs-animation fade content-center" id="tab-content-1" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3 card">
										<!--form action="?controller=curso&method=save" method="POST">-->
											<div class="modal-body">
												<h4 class="m-2"> Nuevo Curso</h4>
												<div class="row">
													<div class="col-md-3">
														<div class="form-group">
															<label class="float-left" for="curso">Numero curso</label>
															<input id="numero_curso" name="numero_curso" type="text" class="form-control" placeholder="Numero del curso" onkeypress="return soloNumeros(event)" required>
														</div>
													</div>	
													<input type="hidden" name="id_grado" id="id_cursos" value="<?php echo $cursos[0]->id_curso ?>">
													<input type="hidden" name="id_grado" id="id_grado" value="<?php echo $data[0]->id_grado ?>">
													<div class="col-md-4">
														<div class="form-group">
															<label class="float-left" for="id_centro">Seleccione Centro</label>
															<select name="id_centro" class="form-control" id="id_centro" require>
															<option value="">Seleccione</option>
																<?php 
																	foreach ($centros as $curso) {
																		?>
																			<option value="<?php echo $curso->id_centro ?>"><?php echo $curso->nombre ?></option>
																		<?php
																	}
																?>
															</select>
															<div id="a_deporte"></div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label class="float-left" for="dia">Día</label>
															<input id="dia" name="dia" type="text" class="form-control" placeholder="Día entre semana" onkeypress="return soloLetras(event)" required>
														</div>
													</div>
													<div class="col-md-2 mt-4">
														<div class="form-group">
															<button href="#" id="addElements" data-toggle="tooltip" data-placement="top" title="Añadir Curso" class="btn btn-primary">+</button>
														</div>
													</div>
												</div>
												<label>Plan Curso:</label>
												<div class="page-title-actions md-2" id="list-centros">
													<div id="mensaje"></div>
												</div>	
											<div class="modal-footer float-right">
												<input type="button" class="btn btn-primary" id="infoplan" value="Agregar Curso">
												<a href="?controller=curso" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
											</div>
										<!--</form>-->
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