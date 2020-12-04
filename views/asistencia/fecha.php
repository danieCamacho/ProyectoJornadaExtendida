                                            <table class="table table-striped table-hover mt-2">
												<thead>
													<tr>
														<th>Nombre</th>
														<th>Apellido</th>
                                                        <th>Situación</th>
                                                        <th>Fecha</th>
                                                        <!--<th>Centro</th>-->
                                                        <th>Opc.</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($fechaEscogida as $info) : ?>
														<tr>
															<td><?php echo $info->nombre; ?></td>
															<td><?php echo $info->apellido;?></td>
                                                            <td><?php echo $info->situacion?></td>
                                                            <td><?php echo $info->fecha ?></td>
                                                            <!--<td><?php echo $info->centro ?></td>-->
														</tr>
													<?php endforeach ?> 
												</tbody>
                                            </table>