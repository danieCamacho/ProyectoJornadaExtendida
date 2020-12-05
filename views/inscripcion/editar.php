<div class="row">
    <div class="col-lg-6">
			<div>
				<nav class="" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="?controller=home">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="?controller=inscripcion">Inscripciones</a></li>
						<li class="active breadcrumb-item" aria-current="page">Inscripción <?php echo $idpersona[0]->nombre ?> <?php echo $idpersona[0]->apellido ?></li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="main-card mb-3 card">
				<div class="card-body">
					<h3>Inscripciones <?php echo $cursos[0]->curso ?></h3>
                    <div class="card-header-tab card-header">
                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link" href="?controller=inscripcion">
                                    <span><i class="fa fa-list-ol"></i> Listado</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                    <span><i class="fa fa-edit"></i> Inscripción</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3 card">
                                <form action="?controller=inscripcion&method=update" method="POST">
                                    <div class="modal-body">
                                        <input type="hidden" name="id_inscripcion" value="<?php echo $idpersona[0]->id_inscripcion ?>">
                                        <h4 class="mb-4"><?php echo $idpersona[0]->nombre ?> <?php echo $idpersona[0]->apellido ?></h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="float-left" for="fecha">Fecha</label>
                                                    <input  name="fecha" type="date" class="form-control" value="<?php echo $idpersona[0]->fecha ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="float-left" for="anualidad">Anualidad</label>
                                                    <input id="anualidad" name="anualidad" type="text" class="form-control" value="<?php echo $idpersona[0]->anualidad ?>" readonly>
                                                </div>
                                            </div>           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <label class="card-title">Deporte</label>
                                                    <div class="form-group">
                                                    <div class="form-check-inline">
                                                        <?php 
                                                            foreach ($centros as $plan) {
                                                                if($plan->id_plan == $idpersona[0]->id_plan){
                                                                    ?>
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="id_plan" value="<?php echo $plan->id_plan ?>" required checked><?php echo $plan->nombre ?>
                                                                    </label>
                                                                    <?php
                                                                }else{?>
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="id_plan" value="<?php echo $plan->id_plan ?>" required><?php echo $plan->nombre ?>
                                                                    </label>
                                                                <?php
                                                                }       
                                                            }
                                                        ?>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="modal-footer float-right">
                                        <button class="btn btn-primary">Editar Inscripcion</button>
                                        <a href="?controller=estudiante&method=view&id=<?php echo $cursos[0]->id_curso ?>" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>    
            </div>
        </div>
</section>
