<div class="row">
		<div class="col-lg-12">
			<div class="main-card mb-3 card">
				<div class="card-body">
					<h3>Centros de Interés</h3>
                    <div class="card-header-tab card-header">
                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link" href="?controller=centrointere">
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
                                <form action="?controller=centrointeres&method=update" method="POST">
                                    <div class="modal-body">
                                        <h4 class="m-2">Editar Centro de Interés</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="hidden" name="id_centro" value="<?php echo $data[0]->id_centro ?>">
                                                    <label class="float-left" for="nombre">Nombre</label>
                                                    <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre Centro de Interes" onkeypress="return soloLetras(event)" value="<?php echo $data[0]->nombre ?>" require>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="float-left" for="categoria">Categoría</label>
                                                <select name="id_categoria" class="form-control" id="categoria">
                                                    <option value="">Seleccione</option>
                                                        <?php 
                                                            foreach ($categoriacentro as $categoriacen) {
                                                                if($categoriacen->id_categoria == $data[0]->id_categoria){
                                                                    ?>
                                                                        <option selected value="<?php echo $categoriacen->id_categoria ?>"><?php echo $categoriacen->nombre ?></option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <option value="<?php echo $categoriacen->id_categoria ?>"><?php echo $categoriacen->nombre ?></option>
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
                                                    <label class="float-left" for="cupos">Cupos</label>
                                                    <input id="cupos" name="cupos" type="number" class="form-control" placeholder="Numero de cupos" value="<?php echo $data[0]->cupos ?>" require>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="float-left" for="hora_inicio">Hora de inicio</label>
                                                    <input id="hora_inicio" name="hora_inicio" type="time" class="form-control" placeholder="Hora de Inicio"  value="<?php echo $data[0]->hora_inicio ?>" require>
                                                </div>
                                            </div>	
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="float-left" for="horafin">Hora de finalización</label>
                                                    <input id="hora_final" name="hora_final" type="time" class="form-control" placeholder="Hora Final" value="<?php echo $data[0]->hora_final ?>" require>
                                                </div>
                                            </div>	
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="float-left" for="estado">estado</label>
                                                    <input id="estado" name="estado" type="text" class="form-control" placeholder="Hora Final" value="<?php echo $data[0]->estado ?>" require>
                                                </div>
                                            </div>	
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer float-right">
                                        <input type="submit" class="btn btn-primary" id="infocentro" value="Editar Centro">
                                        <a href="?controller=centrointeres" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                                    </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>    
            </div>
        </div>
</section>




