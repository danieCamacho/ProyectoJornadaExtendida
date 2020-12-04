<div class="row">
		<div class="col-lg-12">
            <div>
                <nav class="" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?controller=home">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="?controller=grado">Cursos</a></li>
                    </ol>
                </nav>
            </div>
			<div class="main-card mb-3 card">
				<div class="card-body">
					<h3>Grado</h3>
                    <div class="card-header-tab card-header">
                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link" href="?controller=grado&method=getById&id_grado=<?php echo $data[0]->id_grado?>">
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
                                <form action="?controller=curso&method=update" method="POST">
                                    <div class="modal-body">
                                        <h4 class="m-2">Editar Grado <?php echo $data[0]->numero_curso?></h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="hidden" name="id_curso" value="<?php echo $data[0]->id_curso?>">
                                                    <input type="hidden" name="id_grado" value="<?php echo $data[0]->id_grado?>">
                                                    <label class="float-left" for="numero_curso">Número Curso</label>
                                                    <input id="numero_curso" name="numero_curso" type="text" class="form-control" placeholder="Número Grado" onkeypress="return soloNumeros(event)" value="<?php echo $data[0]->numero_curso ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer float-right">
                                        <input type="submit" class="btn btn-primary" id="infocentro" value="Editar Centro">
                                        <a href="?controller=grado" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>    
            </div>
        </div>
</section>




