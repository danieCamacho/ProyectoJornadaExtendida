<div class="row">
		<div class="col-lg-12">
			<div class="main-card mb-3 card">
				<div class="card-body">
					<h3>Roles</h3>
                    <div class="card-header-tab card-header">
                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link" href="?controller=rolusu">
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
                                <form action="?controller=rolusu&method=update" method="POST">
                                    <div class="modal-body">
                                        <h4 class="m-2">Editar Roles</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="hidden" name="id_rol" value="<?php echo $data[0]->id_rol ?>">
                                                    <label class="float-left" for="nombre">Nombre</label>
                                                    <input id="nombre" name="nombre" type="text" class="form-control" placeholder="" value="<?php echo $data[0]->nombre ?>" require>
                                                </div>
                                            </div>
                        
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer float-right">
                                        <button class="btn btn-primary">Actualizar Rol</button>
                                        <a href="?controller=rolusu" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>    
            </div>
        </div>
</section>