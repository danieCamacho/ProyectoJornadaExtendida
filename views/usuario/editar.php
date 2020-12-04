<div class="row">
		<div class="col-lg-12">
			<div class="main-card mb-3 card">
				<div class="card-body">
					<h3>Usuarios</h3>
                    <div class="card-header-tab card-header">
                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link" href="?controller=usuario">
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
                                <form action="?controller=usuario&method=update" method="POST">
                                    <div class="modal-body">
                                        <h4 class="m-2">Editar Usuarios</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="hidden" name="id_usuario" value="<?php echo $data[0]->id_usuario ?>">
                                                    <label class="float-left" for="email">Email</label>
                                                    <input id="email" name="email" type="email" class="form-control" placeholder="" value="<?php echo $data[0]->email ?>" require>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="float-left" for="rol">Rol</label>
                                                <select name="id_rol" class="form-control" id="rol">
                                                    <option value="">Seleccione</option>
                                                        <?php 
                                                            foreach ($rolusuario as $rolusu) {
                                                                if($rolusu->id_rol == $data[0]->id_rol){
                                                                    ?>
                                                                        <option selected value="<?php echo $rolusu->id_rol ?>"><?php echo $rolusu->nombre ?></option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <option value="<?php echo $rolusu->id_rol ?>"><?php echo $rolusu->nombre ?></option>
                                                                    <?php
                                                                }
                                                            }
                                                        ?>
                                                </select>
                                            </div>	
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="float-left" for="clave">Clave</label>
                                                    <input id="clave" name="clave" type="password" class="form-control" placeholder="" value="<?php echo $data[0]->clave ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="float-left" for="clave">Repetir Clave</label>
                                                    <input id="clave" name="clave" type="password" class="form-control" placeholder="" value="<?php echo $data[0]->clave ?>" required>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="float-left" for="estado">estado</label>
                                                    <input id="estado" name="estado" type="text" class="form-control" placeholder="" value="<?php echo $data[0]->estado ?>" required>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="modal-footer float-right">
                                        <button class="btn btn-primary">Actualizar Usuario</button>
                                        <a href="?controller=usuario" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>    
            </div>
        </div>
</section>

