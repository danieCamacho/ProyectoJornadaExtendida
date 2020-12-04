	<main>
		<div class="row">
			<div class="col-lg-6">
				<div>
					<nav class="" aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="?controller=home">Inicio</a></li>
							<li class="active breadcrumb-item" aria-current="page">Grados</li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="col-md-12">
				<div class="main-card mb-3 card">
					<div class="card-body">
						<h3>Grados</h3>
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
								<div class="container m-5">
										<?php foreach ($grados as $grado) : ?>
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 single-card">
												<div class="card bg-light border-primary mb-3"  style="max-width: 18rem;">
													<a href="?controller=grado&method=getById&id_grado=<?php echo $grado->id_grado ?>">
														<div class="card-header border-primary">
															<h5 class="card-title">Grado <?php echo $grado->nombre ?></h5>
														</div>
													</a>
													<div class="card-body">
														<p class="card-text float-right">
															<a href="?controller=grado&method=getGrado&id=<?php echo $grado->id_grado ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
															
														</p>
													</div>
												</div>
											</div>
										<?php endforeach ?>	
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</main>