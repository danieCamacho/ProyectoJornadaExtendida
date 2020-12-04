<main>
	<div class="row">
		<div class="col-lg-6">
			<div>
				<nav class="mb-3" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="?controller=home">Inicio</a></li>
						<li class="active breadcrumb-item" aria-current="page">Usuarios</li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="main-card mb-3 card">
				<div class="card-body">
					<h2>Usuarios</h2>
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
									<div class="main-card mb-5 card">
									<div style="height:20px"></div>
                                    	<section class="col-md-12 table-responsive">
	                                        <table class="table table-striped table-hover" id="example">
	                                            <thead>
	                                            <tr>
	                                                <th>Nombre</th>
	                                                <th>Email</th>
	                                                <th>Estado</th>
	                                                <th>Rol</th>
	                                            </tr>
	                                            </thead>
	                                            <tbody>
	                                            	<?php foreach ($usuariopersona as $usuario) : ?>
											            <tr>
														  <td><?php echo $usuario->persona ?> <?php echo $usuario->apellido ?></td>
													      <td><?php echo $usuario->email ?></td>
													      <td><?php echo $usuario->estado ?></td>
													      <td><?php echo $usuario->nombre ?></td>
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
                    