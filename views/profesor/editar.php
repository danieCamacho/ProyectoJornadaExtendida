<div class="row">
		<div class="col-lg-12">
			<div class="main-card mb-3 card">
				<div class="card-body">
					<h3>Profesores</h3>
                    <div class="card-header-tab card-header">
                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link" href="?controller=profesor">
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
                                <!--<form action="?controller=profesor&method=update" method="POST">-->
                                    <div class="modal-body">
                                        <h4 class="m-2">Editar Profesor</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="hidden" id="id_persona" name="id_persona" value="<?php echo $data[0]->id_persona ?>">
                                                    <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $dataUsuario[0]->id_usuario ?>">
                                                    <label class="float-left" for="nombre">Nombre</label>
                                                    <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre Profesor" onkeypress="return soloLetras(event)" value="<?php echo $data[0]->nombre ?>" require>
                                                </div>
                                            </div>	
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="float-left" for="apellido">Apellido</label>
                                                    <input id="apellido" name="apellido" type="text" class="form-control" placeholder="Apellido Profesor"  onkeypress="return soloLetras(event)" value="<?php echo $data[0]->apellido ?>" require>
                                                </div>
                                            </div>	
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="float-left" for="documento">Documento</label>
                                                    <input id="documento" name="documento" type="text" class="form-control" placeholder="Nº Identificacion" onkeypress="return soloNumeros(event)" value="<?php echo $data[0]->documento ?>" require>
                                                </div>
                                            </div>	
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="float-left" for="telefono">Teléfono</label>
                                                    <input id="telefono" name="telefono" type="text" class="form-control" placeholder="Nº Celular" onkeypress="return soloNumeros(event)" value="<?php echo $data[0]->telefono ?>" require>
                                                </div>
                                            </div>	
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="float-left" for="eps">EPS</label>
                                                    <input id="eps" name="eps" type="text" class="form-control" placeholder="ESP afiliado" value="<?php echo $data[0]->eps ?>" require>
                                                </div>
                                            </div>	
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="float-left" for="rh">RH</label>
                                                    <select name="rh" class="form-control" id="rh">
                                                    <option value="<?php echo $data[0]->rh ?>"><?php echo $data[0]->rh ?></option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="AB+">AB+</option>
                                                    </select>
                                                </div>
                                            </div>	
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="float-left" for="fecha_nacimiento">Fec. Nacimiento</label>
                                                    <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" class="form-control" placeholder="Fecha" value="<?php echo $data[0]->fecha_nacimiento ?>" require>
                                                </div>
                                            </div>	
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="float-left" for="email">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Correo electronico" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" value="<?php echo $dataUsuario[0]->email ?>" require>
                                                </div>
                                                <div id="valido"></div>
                                            </div>	
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="float-left" for="deporte">Deporte</label>
                                                    <select name="id_centro" class="form-control" id="id_centro">
                                                    <option value="">Seleccione</option>
                                                        <?php 
                                                            foreach ($centros as $centro) {
                                                                if($centro->id_centro == $data[0]->id_centro){
                                                                    ?>
                                                                        <option selected value="<?php echo $centro->id_centro ?>"><?php echo $centro->nombre ?></option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <option value="<?php echo $centro->id_centro ?>"><?php echo $centro->nombre ?></option>
                                                                    <?php
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--   
                                            <?php 
                                                if(count($asigCursos) > 0 ){
                                                    $arrayCursos= [];
                                                    foreach($asigCursos as $cursos) {
                                                        array_push($arrayCursos, ['id' => $cursos->id_detalle, 
                                                                                  "name" => $cursos->curso]);
                                                    }
                                                    ?>
                                                        <script>
                                                            var arrayCursos= <?php echo json_encode($arrayCursos); ?>
                                                        </script>
                                                    <?php
                                                } else{
                                                    ?>
                                                    <script>
                                                        var arrayCursos= []
                                                    </script>
                                                <?php
                                                }
                                            ?>-->
                                        </div>
                                            <label>Cursos asignados:</label>
                                            <div class="page-title-actions md-2" id="list-cursos">
                                                <div id="mensaje"></div>
                                                <?php foreach($asigCursos as $cursos){
                                                    ?>
                                                    <button type="button" class="btn-shadow mr-3 btn btn-danger"><span> Curso <?php echo $cursos->cursos ?></span></button>
                                                    <?php
                                                }?>
                                            </div>
                                    </div>
                                    <div class="modal-footer float-right">
                                        <button id="update" class="btn btn-primary" onclick="validarcorreo(form.email.value)">Editar Profesor</button>
                                        <a href="?controller=profesor" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                                    </div>
                                <!--</form>-->
                            </div>    
                        </div>
                    </div>
                </div>    
            </div>
        </div>
</div>