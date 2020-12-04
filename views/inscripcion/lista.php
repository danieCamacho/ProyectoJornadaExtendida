<main>
	<div class="row">
		<div class="col-lg-6">
			<div>
				<nav class="mb-3" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="?controller=home">Inicio</a></li>
						<li class="active breadcrumb-item" aria-current="page">Inscripciones</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="main-card mb-3 card">
				<div class="card-body">
					<h2>Inscripciones</h2>
					<div class="card-header-tab card-header">
						<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
							<li class="nav-item">
								<a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
									<span><i class="fa fa-list-ol"></i> Listado</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<div class="main-card mb-3 card">
										<div style="height:20px"></div>
                                    	<section class="col-md-12 table-responsive">
	                                        <table class="table table-striped table-hover" id="example">
												<thead>
													<tr>
														<th>Nª</th>
														<th>Fecha</th>
														<th>Nombre</th>
														<th>Apellido</th>
														<th>Documento</th>
														<th>Deporte</th>
														<th>Curso</th>
														<th>Opc</th>
													</tr>
	                                            </thead>
	                                            <tbody>
	                                            	<?php foreach ($inscripcion as $inscrip) : ?>
											            <tr>
															<td><?php echo $inscrip->id_inscripcion ?></td>
															<td><?php echo $inscrip->fecha ?></td>
															<td><?php echo $inscrip->nombre ?></td>
															<td><?php echo $inscrip->apellido ?></td>
															<td><?php echo $inscrip->documento?></td>							    
															<td><?php echo $inscrip->cen?></td>
															<td><?php echo $inscrip->numero_curso ?></td>
															<td>
																<a href="?controller=inscripcion&method=mostrar&id=<?php echo $inscrip->id_inscripcion ?>&curso=<?php echo $inscrip->curso ?>"><i class="fa fa-pen"></i></a>
															</td>
													    </tr>
													<?php endforeach?>    
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
                    