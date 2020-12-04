<main>
	<div class="row">
		<div class="col-lg-6">
			<div>
				<nav class="mb-3" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="?controller=home">Inicio</a></li>
						<li class="active breadcrumb-item" aria-current="page">Centros</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="main-card mb-3 card">
				<div class="card-body">
					<h2>Centros de Interés</h2>
					<div class="card-header-tab card-header">
						<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
							<li class="nav-item">
								<a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
									<span><i class="fa fa-list-ol"></i> Listado</span>
								</a>
							</li>
							<li class="nav-item">
								<a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
									<span><i class="fa fa-plus"></i>  Agregar</span>
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
											<div style="height:20px"></div>
	                                        <table class="table table-striped table-hover" id="example">
	                                            <thead>
	                                            <tr>
	                                                <th>Nª</th>
	                                                <th>Nombre</th>
	                                                <th>Cupos</th>
	                                                <th>Inicio</th>
	                                                <th>Final</th>
	                                                <th>Estado</th>
	                                                <th>Categoría</th>
	                                                <th>Opc</th>
	                                            </tr>
	                                            </thead>
	                                            <tbody>
	                                            	<?php foreach ($centrointeres as $centrointere) : ?>
											            <tr>
													      <td><?php echo $centrointere->id_centro ?></td>
													      <td><?php echo $centrointere->nombre ?></td>
													      <td><?php echo $centrointere->cupos ?></td>
													      <td><?php echo $centrointere->hora_inicio ?></td>
													      <td><?php echo $centrointere->hora_final ?></td>
													      <td><?php echo $centrointere->estado ?></td>
													      <td><?php echo $centrointere->categoria ?></td>
													      <td>
	                                                        
													      	<a href="?controller=centrointeres&method=view&id_centro=<?php echo $centrointere->id_centro ?>" ><i class="fa fa-pen"></i></a>
													      	<a href="?controller=centrointeres&method=delete&id_centro=<?php echo $centrointere->id_centro ?>" ><i class="fa fa-trash"></i></a>
													      </td>
													    </tr>
													<?php endforeach?>    
			                                            
	                                            </tbody>
	                                        </table>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane tabs-animation fade content-center" id="tab-content-1" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3 card">
										<form action="?controller=centrointeres&method=save" method="POST">
											<div class="modal-body">
												<h4 class="m-2"> Nuevo Centro de Interés</h4>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="nombre">Nombre</label>
															<input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre Centro de Interés" onkeypress="return soloLetras(event)" required>
														</div>
													</div>	
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="categoria">Categoría</label>
															<select name="id_categoria" class="form-control" id="id_categoria" required>
															<option value="">Seleccione</option>
																<?php 
																	foreach ($categoriacentro as $categoriacen) {
																		?>
																			<option value="<?php echo $categoriacen->id_categoria ?>"><?php echo $categoriacen->nombre ?></option>
																		<?php
																	}
																?>
															</select>
														</div>
													</div>		
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="cupos">Cupos</label>
															<input id="cupos" name="cupos" type="text" class="form-control" placeholder="Número de Cupos"  onkeypress="return soloNumeros(event)" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="hora_inicio">Hora de Inicio</label>
															<input id="hora_inicio" name="hora_inicio" type="time" class="form-control" placeholder="Hora de inicio" required>
														</div>
													</div>		
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="hora_final">Hora de Finalización</label>
															<input id="hora_final" name="hora_final" type="time" class="form-control" placeholder="Hora Final" required>
														</div>
													</div>
												</div>
												<div id="mensaje"></div>
											</div>
											<div class="modal-footer float-right">
												<input type="submit" class="btn btn-primary" id="infocentrointeres" value="Agregar Centro">
												<a href="?controller=centrointeres" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
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
                    