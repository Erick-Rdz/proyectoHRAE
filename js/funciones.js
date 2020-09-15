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
    alert(data);
    let dataCatalago = data.split('||');
    document.getElementById('idCatalogo_UP').value = dataCatalago[0];
    document.getElementById('nombreCatalago_UP').value = dataCatalago[1];
}



function updateCodigo(){
    let idCodigo = document.getElementById('idCodigo_UP').value;
    let nombreCodigo = document.getElementById('nombreCodigo_UP').value;
    let descripcion = document.getElementById('descCodigo_UP').value;

        //VALIDACION NO NUMBER NO NULL
        if (idCodigo=='' || nombreCodigo=='' || !isNaN(nombreCodigo) || !isNaN(descripcion)){
                iziToast.error({
                title: 'Error',
                message: 'Existen campos incorrectos'
             });
             return;
        }
    let cadena = "id=" + idCodigo +
        "&nombre=" + nombreCodigo+
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
            alert(r);
            iziToast.error({
                title: 'Error',
                message: 'Hubo un problema al editar el codigo'
            });
        }
    });
}


function updateCatalago(){
    let idCodigo = document.getElementById('idCodigo_UP').value;
    let nombreCodigo = document.getElementById('nombreCodigo_UP').value;
    let descripcion = document.getElementById('descCodigo_UP').value;

        //VALIDACION NO NUMBER NO NULL
        if (idCodigo=='' || nombreCodigo=='' || !isNaN(nombreCodigo) || !isNaN(descripcion)){
                iziToast.error({
                title: 'Error',
                message: 'Existen campos incorrectos'
             });
             return;
        }
    let cadena = "id=" + idCodigo +
        "&nombre=" + nombreCodigo+
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
            alert(r);
            iziToast.error({
                title: 'Error',
                message: 'Hubo un problema al editar el codigo'
            });
        }
    });
}


