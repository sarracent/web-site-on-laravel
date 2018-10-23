/**
 * Created by Yamil TM on 14/03/2016.
 */
//cuando se cargue la pagina....
$(function () {
    $('.dropdown-toggle').dropdown();

    /*se ejecuta la funcion del tooltip*/
    $('.mitooltip').tooltip();
	
	//Delete Message
	$('.eliminar-muestra').click(function(){
		swal({   
			title: "Esta seguro de eliminar ese elemento?",   
			text: "Una vez eliminado no podra recuperarlo!",   
			type: "warning",
			showCancelButton: true,
			cancelButtonText: "No, Cancelar",
			confirmButtonColor: "#DD6B55",   
			confirmButtonText: "Si, Eliminar!",   
			closeOnConfirm: false 
		}, function(){   
			swal("Eliminado!", "Su elemento a sido eliminado satisfactoriamente.", "success"); 
		});
	});
	
	//Close Message
	$('#cerrar').click(function(){
		swal({   
			title: "Esta seguro que desea salir?",   
			type: "warning",
			showCancelButton: true,
			cancelButtonText: "No, Cancelar",					
			confirmButtonColor: "#DD6B55",   
			confirmButtonText: "Si, Salir!",   
			closeOnConfirm: true,
		});
	});
			//Muestra
	//Eliminar Muestra
	$(".eliminar-muestra").on("click",function(evt){
		//capturar id del muestra
		 var id = $(this).data("prod_tip");
		 //pasarlo al hidden dentro del formulario
		 $(":hidden[name='eliminar_muestra']").val(id);
	});
	
	//Editar Muestra
	$(".editar-muestra").on("click",function(evt){
		//capturar id del muestra
		 var id = $(this).data("muestra");
		 var prod = $(this).data("producto");
		 var tip = $(this).data("tipo");
		 var proc = $(this).data("procedencia");
		 var prod_tip = $(this).data("prod_tip");
		 var bact = $(this).data("bact");
		 var bio = $(this).data("bio");
		 var cqb = $(this).data("cqb");
		 var et = $(this).data("et");
		 var fq = $(this).data("fq");
		 var ga = $(this).data("ga");
		 var mp = $(this).data("mp");
		 var mo = $(this).data("mo");
		 var pb = $(this).data("pb");
		 
		 //pasarlo al hidden dentro del formulario
		  $(":hidden[name='editar_muestra']").val(id);
		  $(":hidden[name='id_prod_tip']").val(prod_tip);
		  
		  //pasarle el nombre actual de la muestra
		  $("#edit_muestra_ncontrol").val($("#muestra_ncontrol"+id).text().trim());
		  $("#edit_muestra_lote").val($("#muestra_lote"+id).text().trim());
		  $("#edit_muestra_fentrada").val($("#muestra_fentrada"+id).text().trim());
		  $("#edit_muestra_ccontrol").val($("#muestra_ccontrol"+id).text().trim());
		  $("#edit_muestra_producto").val(prod);
		  $("#edit_muestra_hentrada").val($("#muestra_hentrada"+id).text().trim());
		  $("#edit_muestra_etiquetado").val($("#muestra_etiquetado"+id).text().trim());
		  $("#edit_muestra_tipo").val(tip);
		  $("#edit_muestra_procedencia").val(proc);
		  
		  // Chequear Laboratorio
		  if (bact != 0){
		  $("#bactereologia").prop('checked', true);
		  }
		  if (bio != 0){
		  $("#bioquimica").prop('checked', true);
		  }
		  if (cqb != 0){
		  $("#cqb").prop('checked', true);
		  }
		  if (et != 0){
		  $("#exterior").prop('checked', true);
		  }
		  if (fq != 0){
		  $("#fq").prop('checked', true);
		  }
		  if (ga != 0){
		  $("#ga").prop('checked', true);
		  }
		  if (mp != 0){
		  $("#mp").prop('checked', true);
		  }
		  if (mo != 0){
		  $("#monitoreo").prop('checked', true);
		  }
		  if (pb != 0){
		  $("#pb").prop('checked', true);
		  }
		  
		  //Chequear todos los checkbox
		  //$("input[type=checkbox]").prop('checked', true);		 
	});
	
			//Laboratorio
	//eliminar laboratorios
	$(".eliminar-lab").on("click",function(evt){
		//capturar id del laboratorio
		 var id = $(this).data("laboratorio");
		 //pasarlo al hidden dentro del formulario
		 $(":hidden[name='eliminar_laboratorio']").val(id);
	});
	//Editar Lab
	$(".editar-lab").on("click",function(evt){
		//capturar id del laboratorio
		 var id = $(this).data("laboratorio");
		 //pasarlo al hidden dentro del formulario
		  $(":hidden[name='editar_laboratorio']").val(id);
		  //pasarle el nombre actual del laboratorio
		  $("#edit-lab-nombre").val($("#lab"+id).text().trim());
	});
	
				//Producto
	//eliminar Producto
	$(".eliminar-prod").on("click",function(evt){
		//capturar id del producto
		 var id = $(this).data("producto");
		 //pasarlo al hidden dentro del formulario
		 $(":hidden[name='eliminar_producto']").val(id);
	});
	
	//Editar Producto
	$(".editar-prod").on("click",function(evt){
		//capturar id del producto
		 var id = $(this).data("producto");
		 //pasarlo al hidden dentro del formulario
		  $(":hidden[name='editar_producto']").val(id);
		  //pasarle el nombre actual del laboratorio
		  $("#edit-prod-nombre").val($("#prod"+id).text().trim());
	});
	
				//Procedencia
	//eliminar Procedencia
	$(".eliminar-proc").on("click",function(evt){
		//capturar id de procedencia
		 var id = $(this).data("procedencia");
		 //pasarlo al hidden dentro del formulario
		 $(":hidden[name='eliminar_procedencia']").val(id);
	});
	//Editar Procedencia
	$(".editar-proc").on("click",function(evt){
		//capturar id de procedencia
		 var id = $(this).data("procedencia");
		 //pasarlo al hidden dentro del formulario
		  $(":hidden[name='editar_procedencia']").val(id);
		  //pasarle el nombre actual de procedencia
		  $("#edit-proc-nombre").val($("#proc"+id).text().trim());
	});
	
					//Tipo
	//eliminar Tipo
	$(".eliminar-tip").on("click",function(evt){
		//capturar id del tipo
		 var id = $(this).data("tipo");
		 //pasarlo al hidden dentro del formulario
		 $(":hidden[name='eliminar_tipo']").val(id);
	});
	//Editar Tipo
	$(".editar-tip").on("click",function(evt){
		//capturar id del tipo
		 var id = $(this).data("tipo");
		 //pasarlo al hidden dentro del formulario
		  $(":hidden[name='editar_tipo']").val(id);
		   //pasarle el nombre actual del tipo
		  $("#edit-tip-nombre").val($("#tip"+id).text().trim());
	});
	
	
						//Usuario
	//Eliminar Usuario
	$(".eliminar-usuario").on("click",function(evt){
		//capturar id del tipo
		 var id = $(this).data("usuario");
		 //pasarlo al hidden dentro del formulario
		 $(":hidden[name='eliminar_usuario']").val(id);
	});
	
	//Editar Usuario
	$(".editar-usuario").on("click",function(evt){
		//capturar id del tipo
		 var id = $(this).data("usuario");
		 var permiso = $(this).data("permiso");
		 
		 //pasarlo al hidden dentro del formulario
		  $(":hidden[name='editar_usuario']").val(id);
		  $(":hidden[name='editar_permiso']").val(permiso);
		  
		   //pasarle el nombre actual del tipo
		  $("#edit-us-nombre").val($("#usuario_nombre"+id).text().trim());
		  $("#edit-us-usuario").val($("#usuario_user"+id).text().trim());
		  $("#edit-us-password").val($("#usuario_password"+id).text().trim());
		  $("#edit-us_permiso").val(permiso);
	});
	

});

// Validadr Solo Numeros
function nun(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}


//Validar solo Letras y numeros
function letras_numeros(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    num = "áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789- ";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46,6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(num.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}


//No dejar entrar nada
function validar_fecha(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    num = "";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46,6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(num.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}

function Resetear_Formulario()
{
document.getElementById("datos_comunes").reset();
}

//Copiar valores de la caja "Datos Comunes"
function seleccion_lab(){

//Declaracion de variables
var bact = document.getElementById("bactereologia").checked;//Devuelve verdadero si esta chequeado y falso si no
var bio = document.getElementById("bioquimica").checked;
var cqb = document.getElementById("cqb").checked;
var ext = document.getElementById("exterior").checked;
var fq = document.getElementById("fq").checked;
var ga = document.getElementById("ga").checked;
var mp = document.getElementById("mp").checked;
var mon = document.getElementById("monitoreo").checked;
var pb = document.getElementById("pb").checked;

	if (bact != false){
	document.getElementById("bact1").value = 1;//Son los input hidden
	}
	else{
	document.getElementById("bact1").value = 0;
	}

	if (bio != false){
	document.getElementById("bio1").value = 2;
	}
	else{
	document.getElementById("bio1").value = 0;
	}

	if (cqb != false){
	document.getElementById("cqb1").value = 3;
	}
	else{
	document.getElementById("cqb1").value = 0;
	}

	if (ext != false){
	document.getElementById("et1").value = 4;
	}
	else{
	document.getElementById("et1").value = 0;
	}

	if (fq != false){
	document.getElementById("fq1").value = 5;
	}
	else{
	document.getElementById("fq1").value = 0;
	}

	if (ga != false){
	document.getElementById("ga1").value = 6;
	}
	else{
	document.getElementById("ga1").value = 0;
	}

	if (mp != false){
	document.getElementById("mp1").value = 7;
	}
	else{
	document.getElementById("mp1").value = 0;
	}

	if (mon != false){
	document.getElementById("mo1").value = 8;
	}
	else{
	document.getElementById("mo1").value = 0;
	}

	if (pb != false){
	document.getElementById("pb1").value = 9;
	}
	else{
	document.getElementById("pb1").value = 0;
	}
}





