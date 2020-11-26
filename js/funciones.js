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
    let buscar = document.getElementById('buscarEnfermera').value;

     div = document.getElementById('listadoEnfermeras');
     var xhr = new XMLHttpRequest();

     xhr.onload = function () {
         div.innerHTML = this.response;
     };

     if (buscar!='') {
        xhr.open('GET', 'components/listarEnfermeras.php?buscarEnfermera='+buscar, true);
        xhr.send();
    }else{    
         xhr.open('GET', 'components/listarEnfermeras.php', true);
         xhr.send();
    }

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
    console.log(data);
    //ejemplo: 8||2||B-1234||PRUEBAUPDATE||2020-10-14||Femenino||2020-10-07||JORNADAS ESPECIALES||3
    let dataCodigo = data.split('||');
    document.getElementById('idEnfermera_UP').value = dataCodigo[0];
    document.getElementById('idcodigoEnfermera_UP').value = dataCodigo[1];
    document.getElementById('nombreEnfermera_UP').value = dataCodigo[3];
    document.getElementById('turno_UP').value= dataCodigo[7];
    document.getElementById("fechaNa_UP").value=dataCodigo[4];
    document.getElementById('sexo_UP').value = dataCodigo[5];
    document.getElementById('fechaIngreso_UP').value = dataCodigo[6];
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
    var activa = document.getElementById('switchActivo').checked;
    var codigo = document.getElementById('codigoEnfermera').value;
    var nombre = document.getElementById('nombreEnfermera').value;
    var fechaNa = document.getElementById('fechaNa').value;
    var sexo = document.getElementById('sexo').value;
    var turno = document.getElementById('turno').value;
    var desdeTurno = document.getElementById('desdeTurno').value;
    var area = document.getElementById('area').value;
    var desdeArea = document.getElementById('desdeArea').value;
    var fechaIngreso = document.getElementById('fechaIngreso').value;


    if (activa==false && codigo!='' && nombre!='' && isNaN(nombre) && fechaNa!="" && sexo!='' && fechaIngreso!='' ){
         cadena = "codigo="+codigo+
            "&nombre=" +nombre+
            "&fechaNa="+fechaNa+
            "&sexo="+sexo+
            "&fechaIngreso="+fechaIngreso+
            "&activa=FALSE";;

    }else if (activa==true && codigo!='' && nombre!='' && isNaN(nombre) && fechaNa!="" && sexo!='' && fechaIngreso!='' && turno!=''
        && desdeTurno!='' && area!='' && desdeArea!=''){

        cadena = "codigo="+codigo+
            "&nombre=" +nombre+
            "&fechaNa="+fechaNa+
            "&sexo="+sexo+
            "&turno="+turno+
            "&desdeTurno="+desdeTurno+
            "&area="+area+
            "&desdeArea="+desdeArea+
            "&fechaIngreso="+fechaIngreso+
            "&activa=TRUE";

    }else{
        iziToast.error({
            title: 'Error',
            message: 'Existen campos incorrectos'
        });
        return;
    }

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


        $.ajax({
            type: "POST",
            url: "controllers/addIncidencia.php",
            data: cadena,
            success: function (r) {
                iziToast.success({
                    title: 'Bien',
                    message: 'Incidencia Agregada Correctamente'
                });
            },
            error: function (r) {
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
function eliminarIncidenciaAPA(id){
    document.getElementById('eliminarBtn').onclick = () => {
        cadena = "id=" + id;
        $.ajax({
            type: "POST",
            url: "controllers/deleteIncidencia.php",
            data: cadena,
            success: function (r) {
                loadListIncidenciasPA();
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


function loadListIncidenciasPorEnfermera(){
    var enfermera = document.getElementById('buscadorEnfermeraPY').value;
    var year = document.getElementById('yearPY').value;

    if(year!=""){
        if (isNaN(year)) {
              iziToast.error({
                    title: 'Error',
                    message: 'Verifica tus datos'
                });
            return;
        }
    }
     div = document.getElementById('listadoIncidenciasPY');
     var xhr = new XMLHttpRequest();

     xhr.onload = function () {
         div.innerHTML = this.response;
     };

     xhr.open('GET', 'components/listarIncidenciasEnfermera.php?enfermeraPY='+enfermera+'&YearPY='+year, true);
     xhr.send();
}

function loadListIncidenciasPA(){
    var area = document.getElementById('buscadorAreaPA').value;
    var year = document.getElementById('yearPA').value;

    if(year!=""){
        if (isNaN(year)) {
              iziToast.error({
                    title: 'Error',
                    message: 'Verifica tus datos'
                });
            return;
        }
    }
     div = document.getElementById('listadoIncidenciasPA');
     var xhr = new XMLHttpRequest();

     xhr.onload = function () {
         div.innerHTML = this.response;
     };

     xhr.open('GET', 'components/listarIncidenciasPA.php?AreaPA='+area+'&YearPA='+year, true);
     xhr.send();
}

function loadListIncidenciasPT(){
    var turno = document.getElementById('buscadorturnoPT').value;
    var year = document.getElementById('yearPT').value;

    if(year!=""){
        if (isNaN(year)) {
              iziToast.error({
                    title: 'Error',
                    message: 'Verifica tus datos'
                });
            return;
        }
    }
     div = document.getElementById('listadoIncidenciasPA');
     var xhr = new XMLHttpRequest();

     xhr.onload = function () {
         div.innerHTML = this.response;
     };

     xhr.open('GET', 'components/listarIncidenciasPT.php?TurnoPT='+turno+'&YearPT='+year, true);
     xhr.send();
}


function loadListDistribucionAreas(){
     div = document.getElementById('listadoDistribucion');
     var xhr = new XMLHttpRequest();

     xhr.onload = function () {
         div.innerHTML = this.response;
     };

     xhr.open('GET', 'components/listarDistribucionPorAreas.php', true);
     xhr.send();
}



function loadListDistribucionTurnos(){
     div = document.getElementById('listadoDistribucionTurnos');
     var xhr = new XMLHttpRequest();

     xhr.onload = function () {
         div.innerHTML = this.response;
     };

     xhr.open('GET', 'components/listarDistribucionPorTurnos.php', true);
     xhr.send();
}



function loadlistRegistrosAreas(){
     div = document.getElementById('listadoRegistros');
     var xhr = new XMLHttpRequest();

     xhr.onload = function () {
         div.innerHTML = this.response;
     };

     xhr.open('GET', 'components/listarRegistrosAreas.php', true);
     xhr.send();
}

function agregarRegistroArea(){

    var fechaInicio = document.getElementById('fechaInicioRegistroArea').value;
    var fechaFin = document.getElementById('fechaFinRegistroArea').value;
    var area = document.getElementById('areaRegistroArea').value;
    var enfermera = document.getElementById('enfermeraRegistroArea').value;

    cadena = "fechaInicio="+fechaInicio+"&fechaFin="+fechaFin+"&area="+area+"&enfermera="+enfermera;

    if (fechaInicio!='' && fechaFin!='' && area!='' && enfermera!=''){
        $.ajax({
        type:"POST",
        url:"controllers/addRegistroArea.php",
        data:cadena,
        success:function(r){
            if (r==1){
                    iziToast.success({
                    title: 'Bien',
                    message: 'Registro Agregado correctamente'
                });
                  loadlistRegistrosAreas();
            }else{
                iziToast.error({
                title: 'Error',
                message: 'Error al insertar Registro'
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

function eliminarRegistroArea(id){
    document.getElementById('eliminarBtn').onclick = () => {
        cadena = "id=" + id;
        $.ajax({
            type: "POST",
            url: "controllers/deleteRegistroArea.php",
            data: cadena,
            success: function (r) {
                loadlistRegistrosAreas();
                iziToast.success({
                    title: 'Bien',
                    message: 'Registro eliminado correctamente'
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


function loadlistRegistroTurnos(){
     div = document.getElementById('listadoRegistrosTurnos');
     var xhr = new XMLHttpRequest();

     xhr.onload = function () {
         div.innerHTML = this.response;
     };

     xhr.open('GET', 'components/listarRegistrosTurnos.php', true);
     xhr.send();
}

function eliminarRegistroTurno(id){
    document.getElementById('eliminarBtn').onclick = () => {
        cadena = "id=" + id;
        $.ajax({
            type: "POST",
            url: "controllers/deleteRegistroTurno.php",
            data: cadena,
            success: function (r) {
                loadlistRegistroTurnos();
                iziToast.success({
                    title: 'Bien',
                    message: 'Registro eliminado correctamente'
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


function agregarRegistroTurno(){
    var fechaInicio = document.getElementById('fechaInicioRegistroTurno').value;
    var fechaFin = document.getElementById('fechaFinRegistroTurno').value;
    var turno = document.getElementById('turnoRegistroTurno').value;
    var enfermera = document.getElementById('enfermeraRegistroTurno').value;

    cadena = "fechaInicio="+fechaInicio+"&fechaFin="+fechaFin+"&turno="+turno+"&enfermera="+enfermera;

    if (fechaInicio!='' && fechaFin!='' && turno!='' && enfermera!=''){
        $.ajax({
        type:"POST",
        url:"controllers/addRegistroTurno.php",
        data:cadena,
        success:function(r){
            if (r==1){
                    iziToast.success({
                    title: 'Bien',
                    message: 'Registro Agregado correctamente'
                });
                  loadlistRegistroTurnos();
            }else{
                iziToast.error({
                title: 'Error',
                message: 'Error al insertar Registro'
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