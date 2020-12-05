                            
                            <div class="row">
								<div class="col-md-6">
									<div class="mb-3 card">
										<form action="?controller=usuario&method=update" method="POST">
											<div class="modal-body">
												<h4 class="m-2"> Información de <?php echo $persona[0]->nombre?> <?php echo $persona[0]->apellido?> <small> (editable)</small></h4>
												<input type="hidden" name="id_persona" class="form-control" value="<?php echo $persona[0]->id_persona?>" required>
                                                <input type="hidden" name="id_usuario" class="form-control" value="<?php echo $persona[0]->id_usuario?>" required>
												<div class="row mt-5">
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="nombre">Nombre</label>
															<input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre Profesor" onkeypress="return soloLetras(event)" value="<?php echo $persona[0]->nombre?>" required>
														</div>
													</div>	
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="apellido">Apellido</label>
															<input id="apellido" name="apellido" type="text" class="form-control" placeholder="Apellido Profesor" onkeypress="return soloLetras(event)" value="<?php echo $persona[0]->apellido?>" required>
														</div>
													</div>	
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="documento">Documento</label>
															<input id="documento" name="documento" type="text" class="form-control" placeholder="Nº Identificación" onkeypress="return soloNumeros(event)" value="<?php echo $persona[0]->documento?>" required>
														</div>
													</div>	
													<div class="col-md-6">
														<div class="form-group">
															<label class="float-left" for="telefono">Teléfono</label>
															<input id="telefono" name="telefono" type="text" class="form-control" placeholder="Nº Celular" onkeypress="return soloNumeros(event)" value="<?php echo $persona[0]->telefono ?>" required>
														</div>
													</div>	
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="float-left" for="eps">EPS</label>
															<input id="eps" name="eps" type="text" class="form-control" placeholder="ESP afiliado" onkeypress="return soloLetras(event)" value="<?php echo $persona[0]->eps?>" required>
														</div>
													</div>	
													<div class="col-md-4">
														<div class="form-group">
															<label class="float-left" for="fecha_nacimiento">Fec. Nacimiento</label>
															<input id="fecha_nacimiento" name="fecha_nacimiento" type="date" class="form-control" placeholder="Fecha" value="<?php echo $persona[0]->fecha_nacimiento?>" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="float-left" for="email">Email</label>
															<input type="email" name="email" class="form-control" id="email" placeholder="Correo electrónico" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" value="<?php echo $persona[0]->email?>" required readonly>
														</div>
													</div>	
												</div>
											</div>
											<div class="modal-footer float-right">
												<!-- onclick="validarcorreo(form.email.value)" -->
												<input type="submit" class="btn btn-primary" value="Guardar Cambios">
											</div>
										</form>
									</div>    
								</div>
							</div>