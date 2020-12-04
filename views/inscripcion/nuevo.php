<div class="row">
    <div class="col-lg-6">
			<div>
				<nav class="" aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="?controller=home">Inicio</a></li>
						<li class="breadcrumb-item"><a href="?controller=grado">Grados</a></li>
						<li class="breadcrumb-item"><a href="?controller=grado&method=getById&id_grado=<?php echo $cursos[0]->grado ?>">Cursos</a></li>
						<li class="active breadcrumb-item" aria-current="page">Estudiantes <?php echo $cursos[0]->curso ?></li>
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
                                <a role="tab" class="nav-link" href="?controller=estudiante&method=view&id=<?php echo $cursos[0]->id_curso ?>">
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
                                <?php if($count[0]->inscripcion == 0){?>
                                    <form action="?controller=inscripcion&method=save&id_persona=<?php echo $idpersona[0]->id_persona ?>" method="POST">
                                        <div class="modal-body">
                                            <h4 class="mb-4"><?php echo $idpersona[0]->nombre ?> <?php echo $idpersona[0]->apellido ?></h4>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="float-left" for="fecha">Fecha</label>
                                                        <input id="fecha" name="fecha" type="date" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="float-left" for="anualidad">Anualidad</label>
                                                        <input id="anualidad" name="anualidad" type="text" class="form-control" value="2020" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="float-left" for="curso">Curso</label>
                                                        <input id="curso" name="id_curso" type="text" class="form-control" value="<?php echo $cursos[0]->curso ?>" require readonly>
                                                    
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
                                                                foreach ($cursos as $plan) {
                                                            ?>        
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input" name="id_plan" value="<?php echo $plan->id_plan ?>" required><?php echo $plan->centro ?>
                                                                    </label>
                                                            <?php        
                                                                }
                                                            ?>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="modal-footer float-right">
                                            <button class="btn btn-primary">Agregar Inscripcion</button>
                                            <a href="?controller=estudiante&method=view&id=<?php echo $cursos[0]->id_curso ?>" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                                        </div>
                                    </form>
                                    <?php
                                    }else{?>
                                        <div class="modal-body">
                                            <h4 class="mb-4"><?php echo $idpersona[0]->nombre ?> <?php echo $idpersona[0]->apellido ?> YA se ha inscrito!</h4>
                                        </div>
                                    <?php
                                    }
                                ?>
                            </div>    
                        </div>
                    </div>
                </div>    
            </div>
        </div>
</section>
