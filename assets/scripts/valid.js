//PRUEBA PARA MOSTRAR MENSAJE DE UN REQUIRE EN ESPECIFICO
//var nombre = document.getElementById('nombre');
//mensaje de especificacion de error
//nombre.oninvalid = function(event) {
    //event.target.setCustomValidity('Este campo debe tener mas de 4 letras');
//}
$(document).ready(function(){
    $('#buttonform').click(function(e){
        e.preventDefault();
    
        var fechai= $('#fechaeescogida').val();
        var curso= $('#ooo').val();
        var categoria= $('#categoriafecha').val();
        var centro= $('#centrofecha').val();

        $("#fechasistencia").load("?controller=asistencia&method=fecha&id="+curso+"&fe="+fechai+"&ca="+categoria+"&ce="+centro);
    });
})
$(document).ready(function(){
    $('#buttonforma').click(function(e){
        e.preventDefault();
        let fecha= $('#fechaescogidamin').val();
        let curso= $('#ooo').val();
        let categoria= $('#categoriafechamin').val();
        let centro= $('#centrofechamin').val();

        $("#fechasistenciamin").load("?controller=asistencia&method=fecha&id="+curso+"&fe="+fecha+"&ca="+categoria+"&ce="+centro);   
    });
})

window.onload = function(){
    var fecha = new Date(); //Fecha actual
    var mes = fecha.getMonth()+1; //obteniendo mes
    var dia = fecha.getDate(); //obteniendo dia
    var ano = fecha.getFullYear(); //obteniendo año
    if(dia<10)
      dia='0'+dia; //agrega cero si el menor de 10
    if(mes<10)
      mes='0'+mes //agrega cero si el menor de 10
    document.getElementById('fecha').value=ano+"-"+mes+"-"+dia;
    document.getElementById('fechae').value=ano+"-"+mes+"-"+dia;
}

//agregar asistencia
/*
$("#infoasistencia").click(function (e) {
    e.preventDefault()

    let url= "?controller=asistencia&method=save"
    let params= {
        id_inscripcion: $('input:hidden[name="id_persona[]"]').val(),
        id_situacion:  $('input:text[name="situacion[]"]').val(),
        id_clase: $('input:hidden[name=id_clase]').val()

    }
    console.log(params);

    $.post(url, params, function (response) {
        if(typeof response.error !== 'undefined') {
            //$("#mensaje").append('<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Uy! '+response.message+'</div>')
            alert(response.message)
        }else{
            alert("Asistencia realizada correctamente")

            location.href= "?controller=profesor"
        }
    }, 'json').fail(function (error) {
        alert("insercion Fallida: ("+error.responseText+")")
        console.log(error)
    })
})
*/
/*
$("#infocentrointeres").click(function (e) {
    e.preventDefault()

    let url= "?controller=centrointeres&method=save"
    let params= {
        nombre:  $("#nombre").val(),
        id_categoria: $("#id_categoria").val(),
        cupos: $("#cupos").val(),
        hora_inicio: $("#hora_inicio").val(),
        hora_final: $("#hora_final").val()
    }
    $.post(url, params, function (response) {
        if(typeof response.error !== 'undefined') {
            alert(response.message)
            //alert(response.message)
        }else{
            alert("se registro la informacion correctamente")

            location.href= "?controller=centrointeres"
        }
    }, 'json').fail(function (error) {
        alert("insercion Fallida: ("+error.responseText+")")
        console.log(error)
    })

})
*/

var arrayCursos= []
//showCursos()
$("#addElement").click(function (e) {
    e.preventDefault()

    let idCurso = $("#id_curso").val()
    let nombreCurso= $("#id_curso option:selected").text()

    if(idCurso !='') {
        if(typeof existCurso(idCurso) === 'undefined') {
            arrayCursos.push({
                'id': idCurso,
                'name': nombreCurso
            })
        }else{
            alert("El curso ya se encuentra seleccionada")
        }
        showCursos()
    } else{
        alert("Debe seleccionar un Curso")
    }
});

function existCurso(idCurso){
    let existCurso= arrayCursos.find(function (curso) {
        return curso.id == idCurso
    })
    return existCurso
}
function showCursos() {
    $("#list-cursos").empty()

    arrayCursos.forEach(function (curso) {
        $("#list-cursos").append('<button onclick="removeElement('+curso.id+')" type="button" data-toggle="tooltip" title="Eliminar Curso" data-placement="bottom" class="btn-shadow mr-3 btn btn-danger"><span> Curso '+curso.name+'</span></button>')
    })
}
function removeElement(idCurso) {
    let index = arrayCursos.indexOf(existCurso(idCurso))
    arrayCursos.splice(index, 1)
    showCursos()
    console.log(arrayCursos)
}

$("#infoprofesor").click(function (e) {
    e.preventDefault()

    let url= "?controller=profesor&method=save"
    let params= {
        nombre:           $("#nombre").val(),
        apellido:         $("#apellido").val(),
        documento:        $("#documento").val(),
        telefono:         $("#telefono").val(),
        eps:              $("#eps").val(),
        rh:               $("#rh").val(),
        id_centro:        $("#id_centro").val(),
        fecha_nacimiento: $("#fecha_nacimiento").val(),
        email:            $("#email").val(),
        cursos:           arrayCursos
        
    }

    $.post(url, params, function (response) {
        if(typeof response.error !== 'undefined') {
            $("#mensaje").append('<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Uy! '+response.message+'</div>')
            //alert(response.message)
        }else{
            alert("se registró la información correctamente")

            location.href= "?controller=profesor"
        }
    }, 'json').fail(function (error) {
        alert("inserción Fallida: ("+error.responseText+")")
        console.log(error)
    })
})

$("#update").click(function (e) {
    e.preventDefault()

    let url = "?controller=profesor&method=update"
    let params = {
        id_persona:       $("#id_persona").val(),
        id_usuario:       $("#id_usuario").val(),
        nombre:           $("#nombre").val(),
        apellido:         $("#apellido").val(),
        documento:        $("#documento").val(),
        telefono:         $("#telefono").val(),
        eps:              $("#eps").val(),
        rh:               $("#rh").val(),
        id_centro:        $("#id_centro").val(),
        fecha_nacimiento: $("#fecha_nacimiento").val(),
        email:            $("#email").val(),
        cursos:           arrayCursos
    }
    $.post(url, params, function(response) {
        if(typeof response.error !== 'undefined') {
            $("#mensaje").append('<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Uy! '+response.message+'</div>')
        } else {
            alert("Actializacion Realizada")
            location.href = "?controller=profesor"
        }
    }, 'json').fail(function (error){
        alert("Actualizacion fallida ("+error.responseText+")")
        console.log(error)
    })
})

var arrayPlanes= []
//showCursos()
$("#addElements").click(function (e) {
    e.preventDefault()

    let idCentro = $("#id_centro").val()
    let nombreCentro= $("#id_centro option:selected").text()
    let dia= $("#dia").val()

    if(idCentro !='') {
            arrayPlanes.push({
                'id_centro': idCentro,
                'name': nombreCentro,
                'dia': dia
            })
        showCentros()
    } else{
        alert("Debe seleccionar un Centro")
    }
});
function existCentro(idCentro){
    let existCentro= arrayPlanes.find(function (centro) {
        return centro.id == idCentro
    })
    return existCentro
}
function showCentros() {
    $("#list-centros").empty()

    arrayPlanes.forEach(function (centro) {
        $("#list-centros").append('<button onclick="removeElements('+centro.id_centro+')" type="button" data-toggle="tooltip" title="Eliminar Plan" data-placement="bottom" class="btn-shadow mr-3 btn btn-danger"><span>'+centro.name+' '+centro.dia+'</span></button>')
    })
}
function removeElements(idCentro) {
    let index = arrayPlanes.indexOf(existCentro(idCentro))
    arrayPlanes.splice(index, 1)
    showCentros()
    console.log(arrayPlanes)
}

$("#infoplan").click(function (e) {
    e.preventDefault()

    let url= "?controller=curso&method=save"
    let params= {
        numero_curso:  $("#numero_curso").val(),
        id_grado:      $("#id_grado").val(),
        centros:        arrayPlanes
        
    }

    $.post(url, params, function (response) {
        if(typeof response.error !== 'undefined') {
            $("#mensaje").append('<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Uy! '+response.message+'</div>')
            //alert(response.message)
        }else{
            alert("se registro la informacion correctamente")
            let curso= $('#id_cursos').val();
            location.href= "?controller=grado&method=getById&id_grado="+curso
        }
    }, 'json').fail(function (error) {
        alert("insercion Fallida: ("+error.responseText+")")
        console.log(error)
    })
})

$(document).ready(function() {    
    $('#example').DataTable({        
        language: {
                "lengthMenu": "Cantidad de registros _MENU_",
                "zeroRecords": "No se encontraron resultados",
                "info": "",
                "infoEmpty": "",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
                 },
                 "sProcessing":"Procesando...",
            },
        //para usar los botones   
        responsive: "true",
        dom: 'Bfrtilp',       
        buttons:[ 
            {
                extend:    'excelHtml5',
                text:      '<i class="fas fa-file-excel"></i> ',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success'
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="fas fa-file-pdf"></i> ',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger'
            },
            {
                extend:    'print',
                text:      '<i class="fa fa-print"></i> ',
                titleAttr: 'Imprimir',
                className: 'btn btn-info'
            },
        ]           
    });     
});
$(document).ready(function() {    
    $('#example1').DataTable({        
        language: {
                "lengthMenu": "Cantidad de registros _MENU_",
                "zeroRecords": "No se encontraron resultados",
                "info": "",
                "infoEmpty": "",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
                 },
                 "sProcessing":"Procesando...",
            }
    });     
});   

//validar que se ingresen solo letras en el input
function soloLetras(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "á é í ó ú a b c d e f g h i j k l m n ñ o p q r s t u v w x y z A B C D E F G H I J K L M N Ñ O P Q R S T U V W X Y Z";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
         if(key == especiales[i]){
             tecla_especial = true;
             break;
         }
     }

     if(letras.indexOf(tecla)==-1 && !tecla_especial){
        return false;
     }
 }
 function soloNumeros(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    numero = "0123456789";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
         if(key == especiales[i]){
             tecla_especial = true;
             break;
         }
     }

     if(numero.indexOf(tecla)==-1 && !tecla_especial){
         return false;
         
     }
 }

 function validarcorreo(correo){
     var expReg=  /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
     var validar= expReg.test(correo);
     if(validar==true){
         return true;
     }else{
        document.getElementById("valido").innerHTML= '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Ingresa el email correctamente por favor!</div>';
        return false;
     }
 } 

$(document).ready(function() {
    var divs = $('.single-card');
    for (var i = 0; i < divs.length; i += 4) {
            divs.slice(i, i + 4).wrapAll('<div class="row"></div>');
    }
});






