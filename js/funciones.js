function agregarArea(){
	var nombre = document.getElementById('nombreArea').value;
	cadena = "nombre="+nombre;

	if (nombre!='' && isNaN(nombre)){
		$.ajax({
		type:"POST",
		url:"controllers/addArea.php",
		data:cadena,
		success:function(r){
			if (r==1){
				    iziToast.success({
                    title: 'Bien',
                    message: 'Area Agregada correctamente'
                });
				  loadListAreas();
			}else{
				iziToast.error({
           		title: 'Error',
           		message: 'Error al insertar area'
        		});
			}
		}
	})
	}else{
		iziToast.error({
            title: 'Error',
            message: 'Existen campos incorrectos'
        });
}

}

function agregarCatalago(){
    var nombre = document.getElementById('nombreCatalago').value;
    cadena = "nombre="+nombre;

    if (nombre!='' && isNaN(nombre)){
        $.ajax({
        type:"POST",
        url:"controllers/addIncidenciaCatalogo.php",
        data:cadena,
        success:function(r){
            if (r==1){
                    iziToast.success({
                    title: 'Bien',
                    message: 'Area Agregada correctamente'
                });
                  loadListCatalago();
            }else{
                iziToast.error({
                title: 'Error',
                message: 'Error al insertar area'
                });
            }
        }
    })
    }else{
        iziToast.error({
            title: 'Error',
            message: 'Existen campos incorrectos'
        });
    }

}

function agregarCodigo(){
    var nombre = document.getElementById('nombreCodigo').value;
    var descripcion = document.getElementById('descripcion').value;

    cadena = "nombre="+nombre+"&descripcion="+descripcion;

    if (nombre!='' && isNaN(nombre) && descripcion!='' && isNaN(descripcion)){
        $.ajax({
        type:"POST",
        url:"controllers/addCodigo.php",
        data:cadena,
        success:function(r){
            if (r==1){
                    iziToast.success({
                    title: 'Bien',
                    message: 'Area Agregada correctamente'
                });
                  loadlistCodigos();
            }else{
                iziToast.error({
                title: 'Error',
                message: 'Error al insertar area'
                });
            }
        }
    })
    }else{
        iziToast.error({
            title: 'Error',
            message: 'Existen campos incorrectos'
        });
    }
}


function loadListAreas(){
     div = document.getElementById('listadoAReas');
     var xhr = new XMLHttpRequest();

     xhr.onload = function () {
         div.innerHTML = this.response;
     };

     xhr.open('GET', 'components/listarAreas.php', true);
     xhr.send();
}

function loadListIncidencias(){
    var mes = document.getElementById('mesFiltro').value;
    var year = document.getElementById('yearFiltro').value;

    if (year!=""){
        if (isNaN(year)) {
                iziToast.error({
                    title: 'Error',
                    message: 'El año no es valido'
                });
            return;
        }
    }

     div = document.getElementById('listadoIncidencias');
     var xhr = new XMLHttpRequest();

     xhr.onload = function () {
         div.innerHTML = this.response;
     };

     xhr.open('GET', 'components/listarIncidencias.php?Mes='+mes+'&Year='+year, true);
     xhr.send();
}



function loadlistCodigos(){
     div = document.getElementById('listadoCodigos');
     var xhr = new XMLHttpRequest();

     xhr.onload = function () {
         div.innerHTML = this.response;
     };

     xhr.open('GET', 'components/listarCodigos.php', true);
     xhr.send();

}

function loadListEnfermeras(){
     div = document.getElementById('listadoEnfermeras');
     var xhr = new XMLHttpRequest();

     xhr.onload = function () {
         div.innerHTML = this.response;
     };

     xhr.open('GET', 'components/listarEnfermeras.php', true);
     xhr.send();

}

function loadListCatalago(){
     div = document.getElementById('listadoCatalago');
     var xhr = new XMLHttpRequest();

     xhr.onload = function () {
         div.innerHTML = this.response;
     };

     xhr.open('GET', 'components/listarCatalagoIncidencias.php', true);
     xhr.send();

}


function eliminarArea(id){
    document.getElementById('eliminarBtn').onclick = () => {
        cadena = "id=" + id;
        $.ajax({
            type: "POST",
            url: "controllers/deleteArea.php",
            data: cadena,
            success: function (r) {
                loadListAreas();
                iziToast.success({
                    title: 'Bien',
                    message: 'Area eliminada correctamente'
                });
            },
            error: function () {
                iziToast.error({
                    title: 'Error',
                    message: 'Hubo un problema al eliminar el area'
                });
            }
        });
    }
}


function eliminarCodigo(id){
    document.getElementById('eliminarBtn').onclick = () => {
        cadena = "id=" + id;
        $.ajax({
            type: "POST",
            url: "controllers/deleteCodigo.php",
            data: cadena,
            success: function (r) {
                loadlistCodigos();
                iziToast.success({
                    title: 'Bien',
                    message: 'Codigo eliminado correctamente'
                });
            },
            error: function () {
                iziToast.error({
                    title: 'Error',
                    message: 'Hubo un problema al eliminar el area'
                });
            }
        });
    }
}



function eliminarCatalagoIncidencias(id){
    document.getElementById('eliminarBtn').onclick = () => {
        cadena = "id=" + id;
        $.ajax({
            type: "POST",
            url: "controllers/deleteIncidenciaCatalago.php",
            data: cadena,
            success: function (r) {
                loadListCatalago();
                iziToast.success({
                    title: 'Bien',
                    message: 'Area eliminada correctamente'
                });
            },
            error: function () {
                iziToast.error({
                    title: 'Error',
                    message: 'Hubo un problema al eliminar el area'
                });
            }
        });
    }
}

function updateArea(){
    let idArea = document.getElementById('idArea_UP').value;
    let nombreArea = document.getElementById('nombreArea_UP').value;

        if (idArea=='' || nombreArea=='' || !isNaN(nombreArea)) {
                iziToast.error({
                title: 'Error',
                message: 'Existen campos incorrectos'
             });
             return;
        }

    let cadena = "id=" + idArea +
        "&nombre=" + nombreArea;

    $.ajax({
        type: "POST",
        url: "controllers/updateArea.php",
        data: cadena,
        success: function (r) {
            loadListAreas();
            iziToast.success({
                title: 'Bien',
                message: 'Area actualizada correctamente'
            });
        },
        error: function (r) {
            iziToast.error({
                title: 'Error',
                message: 'Hubo un problema al editar el area'
            });
        }

    });

}


//CARGA DE LOS DATOS EN EL MODAL
function cargaDataArea(data) {
    let dataArea = data.split('||');
    document.getElementById('idArea_UP').value = dataArea[0];
    document.getElementById('nombreArea_UP').value = dataArea[1]; 

}

//CARGA DE LOS DATOS EN EL MODAL
function cargarDataCodigo(data) {
    let dataCodigo = data.split('||');
    document.getElementById('idCodigo_UP').value = dataCodigo[0];
    document.getElementById('nombreCodigo_UP').value = dataCodigo[1];
    document.getElementById('descCodigo_UP').value = dataCodigo[2];
}

//CARGA DE LOS DATOS EN EL MODAL
function cargarDataCatalogo(data) {
    let dataCatalago = data.split('||');
    document.getElementById('idCatalogo_UP').value = dataCatalago[0];
    document.getElementById('nombreCatalago_UP').value = dataCatalago[1];
}

//CARGA DE LOS DATOS EN EL MODAL
function cargarDataEnfermera(data) {
    //ejemplo: 15||1||AMO2035 ||ERICK RODRIGUEZ||Vespertino||2020-09-01||Seleccionar..||2020-09-01||3||COVID 2
    let dataCodigo = data.split('||');
    document.getElementById('idEnfermera_UP').value = dataCodigo[0];
    document.getElementById('idcodigoEnfermera_UP').value = dataCodigo[1];
    document.getElementById('nombreEnfermera_UP').value = dataCodigo[3];
    document.getElementById('turno_UP').value = dataCodigo[4];
    document.getElementById("fechaNa_UP").value=dataCodigo[5];
    document.getElementById('sexo_UP').value = dataCodigo[6];
    document.getElementById('fechaIngreso_UP').value = dataCodigo[7];
    document.getElementById('area_UP').value = dataCodigo[8];
}


function updateCodigo(){
    let idCatalago = document.getElementById('idCodigo_UP').value;
    let nombreCatalago = document.getElementById('nombreCodigo_UP').value;
    let descripcion = document.getElementById('descCodigo_UP').value;

        //VALIDACION NO NUMBER NO NULL
        if (idCatalago=='' || nombreCatalago=='' || !isNaN(nombreCatalago) || !isNaN(descripcion)){
                iziToast.error({
                title: 'Error',
                message: 'Existen campos incorrectos'
             });
             return;
        }
    let cadena = "id=" + idCatalago +
        "&nombre=" + nombreCatalago+
        "&descripcion="+descripcion;

    $.ajax({
        type: "POST",
        url: "controllers/updateCodigo.php",
        data: cadena,
        success: function (r) {
            loadlistCodigos();
            iziToast.success({
                title: 'Bien',
                message: 'Codigo actualizado correctamente'
            });
        },
        error: function (r) {
            iziToast.error({
                title: 'Error',
                message: 'Hubo un problema al editar el codigo'
            });
        }
    });
}


function updateCatalago(){
    let idCatalago = document.getElementById('idCatalogo_UP').value;
    let nombreCatalago = document.getElementById('nombreCatalago_UP').value;


    //VALIDACION NO NUMBER NO NULL
    if (idCatalago=='' || nombreCatalago=='' || !isNaN(nombreCatalago)){
            iziToast.error({
            title: 'Error',
            message: 'Existen campos incorrectos'
         });
         return;
    }
    let cadena = "id=" + idCatalago +
        "&nombre=" + nombreCatalago;

    $.ajax({
        type: "POST",
        url: "controllers/updateIncidenciaCatalago.php",
        data: cadena,
        success: function (r) {
            loadListCatalago();
            iziToast.success({
                title: 'Bien',
                message: 'Catalago actualizado correctamente'
            });
        },
        error: function (r) {
            iziToast.error({
                title: 'Error',
                message: 'Hubo un problema al editar el catalago'
            });
        }
    });
}


function agregarEnfermera(){
    var codigo = document.getElementById('codigoEnfermera').value;
    var nombre = document.getElementById('nombreEnfermera').value;
    var fechaNa = document.getElementById('fechaNa').value;
    var sexo = document.getElementById('sexo').value;
    var turno = document.getElementById('turno').value;
    var area = document.getElementById('area').value;
    var fechaIngreso = document.getElementById('fechaIngreso').value;

    cadena = "codigo="+codigo+
            "&nombre=" +nombre+
            "&fechaNa="+fechaNa+
            "&sexo="+sexo+
            "&turno="+turno+
            "&area="+area+
            "&fechaIngreso="+fechaIngreso;

    if (codigo!='' && nombre!='' & isNaN(nombre)
     && fechaNa!="" && sexo!='' && turno!='' && area!='' && fechaIngreso!=''){
        $.ajax({
        type:"POST",
        url:"controllers/addEnfermera.php",
        data:cadena,
        success:function(r){
            if (r==1){
                    iziToast.success({
                    title: 'Bien',
                    message: 'Enfermera Agregada correctamente'
                });
                  loadListEnfermeras();
            }else{
                iziToast.error({
                title: 'Error',
                message: 'Error al insertar Enfermera'
                });
            }
        }
    })
    }else{
        iziToast.error({
            title: 'Error',
            message: 'Existen campos incorrectos'
        });

    }

}


function eliminarEnfermera(id){
    document.getElementById('eliminarBtn').onclick = () => {
        cadena = "id=" + id;
        $.ajax({
            type: "POST",
            url: "controllers/deleteEnfermera.php",
            data: cadena,
            success: function (r) {
                loadListEnfermeras();
                iziToast.success({
                    title: 'Bien',
                    message: 'Enfermera eliminada correctamente'
                });
            },
            error: function () {
                iziToast.error({
                    title: 'Error',
                    message: 'Hubo un problema al eliminar el registro'
                });
            }
        });
    }
}

function updateEnfermera(){

    var idEnfermera=  document.getElementById('idEnfermera_UP').value;
    var codigo = document.getElementById('idcodigoEnfermera_UP').value;
    var nombre = document.getElementById('nombreEnfermera_UP').value;
    var fechaNa = document.getElementById('fechaNa_UP').value;
    var sexo = document.getElementById('sexo_UP').value;
    var turno = document.getElementById('turno_UP').value;
    var area = document.getElementById('area_UP').value;
    var fechaIngreso = document.getElementById('fechaIngreso_UP').value;


    //VALIDACION NO NUMBER NO NULL
/*   if (codigo!='' && nombre!='' & isNaN(nombre)
     && fechaNa!="" && sexo!='' && turno!='' && area!='' && fechaIngreso!=''){
            iziToast.error({
            title: 'Error',
            message: 'Existen campos incorrectos'
         });
         return;
    }
*/
    var cadena ="idEnfermera="+idEnfermera+
            "&codigo="+codigo+
            "&nombre=" +nombre+
            "&fechaNa="+fechaNa+
            "&sexo="+sexo+
            "&turno="+turno+
            "&area="+area+
            "&fechaIngreso="+fechaIngreso;


    $.ajax({
        type: "POST",
        url: "controllers/updateEnfermera.php",
        data: cadena,
        success: function (r) {
            loadListEnfermeras();
            iziToast.success({
                title: 'Bien',
                message: 'Registro actualizado correctamente'
            });
        },
        error: function (r) {
            iziToast.error({
                title: 'Error',
                message: 'Hubo un problema al editar el registro'
            });
        }

    });
    
}


function registrarIncidencia(){
    var enfermera = document.getElementById('buscadorEnfermera');
    var incidencia = document.getElementById('buscadorIncidencia');
    var fechaInicio = document.getElementById('fechaInicio');
    var fechaFin = document.getElementById('fechaFin');    
    var cubreEnfermera = document.getElementById('buscadorEnfermera2').value;

    /*if (fechaFin=='') {
        fechaFin="0000-00-00";
    }*/

    if (cubreEnfermera==0) {
        cubreEnfermera=null;
    }

   if(enfermera.value!=null && incidencia.value!=0 && fechaInicio.value!=0){
        var cadena = "enfermera="+enfermera.value+
        "&incidencia="+incidencia.value+
        "&fechaInicio="+fechaInicio.value+
        "&fechaFin="+fechaFin.value+
        "&cubreEnfermera="+cubreEnfermera;

       alert(cadena);

        $.ajax({
            type: "POST",
            url: "controllers/addIncidencia.php",
            data: cadena,
            success: function (r) {
                alert(r);
                iziToast.success({
                    title: 'Bien',
                    message: 'Incidencia Agregada Correctamente'
                });
            },
            error: function (r) {
                alert(r);
                iziToast.error({
                    title: 'Error',
                    message: 'Hubo un problema al agregar la incidencia'
                });
            }
        });
    }else{
        iziToast.error({
            title: 'Error',
            message: 'Existen datos faltantes'
        });
    }

}


function eliminarIncidencia(id){
    document.getElementById('eliminarBtn').onclick = () => {
        cadena = "id=" + id;
        $.ajax({
            type: "POST",
            url: "controllers/deleteIncidencia.php",
            data: cadena,
            success: function (r) {
                loadListIncidencias();
                iziToast.success({
                    title: 'Bien',
                    message: 'Incidencia eliminada correctamente'
                });
            },
            error: function () {
                iziToast.error({
                    title: 'Error',
                    message: 'Hubo un problema al eliminar el registro'
                });
            }
        });
    }
}



