var urlLoc = document.location.hostname;
console.log(urlLoc);
if(urlLoc == "localhost")
	var WEB_ROOT = "http://" + urlLoc + "/siv/sistema";
else if(urlLoc == "desarrollot.no-ip.biz" || urlLoc == "192.168.1.200")
	var WEB_ROOT = "http://" + urlLoc + "/siv/sistema";
else
	var WEB_ROOT = "http://" + urlLoc + "/sistema";

var LOADER = "<img src='"+WEB_ROOT+"/images/loading.gif'><br>Cargando...";
var LOADER2 = "<img src='"+WEB_ROOT+"/images/loader.gif'>";
var LOADER3 = "<div align='center'><img src='"+WEB_ROOT+"/images/loading.gif'><br>Cargando...</div>";

var msgFail = "Ocurrio un error al cargar los datos.";
var msgError = "Something went wrong...";

function verSubMenu(id){
	$("#mnuPrincipal_"+id).toggle();
}


jQuery(function($){
    $.fn.datepicker.dates['es'] = {
        days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
        daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
        daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
        months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
        today: "Hoy",
        monthsTitle: "Meses",
        clear: "Borrar",
        weekStart: 1,
        format: "yyyy-mm-dd",
        autoclose:true
    };

    $.fn.datepicker.defaults.language="es";
    $.fn.datepicker.defaults.autoclose=true;

})

function dateFormat(date,format){
	var fecha="";
	if(date){
		fecha= date.split("-");
		if (format)
			var monthNames = new Array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
		else
			var monthNames = new Array('Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic');
		fecha = fecha[2]+'-'+monthNames[fecha[1]-1]+'-'+fecha[0];	
	}
	return fecha;
}

function Calendario(input){

    jQuery("#"+input.id).datepicker({
        todayBtn: true,
        todayBtn: "linked",
        onSelect: function (date){
            $( "#"+input).val(dateFormat(date,false));
        }
    }).focus();
}

function soloNumeros(e){
   key = e.keyCode || e.which;
   tecla = String.fromCharCode(key).toLowerCase();
   letras = "1234567890";
   especiales = [8,37,39,46,160];

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

function soloDigito(e){
   key = e.keyCode || e.which;
   tecla = String.fromCharCode(key).toLowerCase();
   letras = "1234567890";
   especiales = [8,37,39,160];

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