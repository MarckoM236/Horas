//Ocultar teclado
$(document).ready(function() {
	var txb="";
	document.getElementById('calc').style.visibility = "hidden"; // hide
        });
 
// seleccionar inputs        
$(document).ready(function() {
    $("#identificacion").focus(function(){
        document.getElementById('calc').style.visibility = "visible"; // show
        txb="#identificacion";
    });

    $("#ot").focus(function(){
        document.getElementById('calc').style.visibility = "visible"; // show
        txb="#ot";
    });

    $("#tablero").focus(function(){
        document.getElementById('calc').style.visibility = "visible"; // show
        txb="#tablero";
    });

    $("#cuerpo").focus(function(){
        document.getElementById('calc').style.visibility = "visible"; // show
        txb="#cuerpo";
    });

    $("#actividad").focus(function(){
        document.getElementById('calc').style.visibility = "visible"; // show
        txb="#actividad";
    });

    $("#cantidad").focus(function(){
        document.getElementById('calc').style.visibility = "visible"; // show
        txb="#cantidad";
    });

    });
			
			
//rellenar inputs
function number(ch){
    var value = $(txb).val();
    var valu=value+ch;
    $(txb).val(valu);
}		
              
	        
//limpiar campos
$(document).ready(function() {
    $('#limpiar').click(function() {
        $(txb).val('');
    });
});

//Inicio
$(document).ready(function() {
    $(".error").hide();
    $('#inicio').click(function() {
        
        var identificacion=$("input#identificacion").val();
        if(identificacion==""){
            $("label#identificacion_error").show();
            $("input#identificacion").focus();
            return false
        }
        var ot=$("input#ot").val();
        if(ot==""){
            $("label#ot_error").show();
            $("input#ot").focus();
            return false
        }
        var tablero=$("input#tablero").val();
        if(tablero==""){
            $("label#tablero_error").show();
            $("input#tablero").focus();
            return false
        }
        var actividad=$("input#actividad").val();
        if(actividad==""){
            $("label#actividad_error").show();
            $("input#actividad").focus();
            return false
        }
        var cuerpo=$("input#cuerpo").val();

            ValidateUser(identificacion,ot,tablero,cuerpo,actividad);
        });

    });
  

 //FIN
$(document).ready(function() {
  
    $(".error").hide();
    $('#fin').click(function() {
        
        var identificacion=$("input#identificacion").val();
        if(identificacion==""){
            $("label#identificacion_error").show();
            $("input#identificacion").focus();
            return false
        }
        var ot=$("input#ot").val();
        if(ot==""){
            $("label#ot_error").show();
            $("input#ot").focus();
            return false
        }
        var tablero=$("input#tablero").val();
        if(tablero==""){
            $("label#tablero_error").show();
            $("input#tablero").focus();
            return false
        }
        var actividad=$("input#actividad").val();
        if(actividad==""){
            $("label#actividad_error").show();
            $("input#actividad").focus();
            return false
        }

        var cantidad=$("input#cantidad").val();
	if(cantidad==""){
            cantidad=0;        }


        
            fin(identificacion,cantidad);
        });

  });

  //consulta por ID
  $(document).ready(function() {
    $("input#identificacion").keyup(function(){
        //console.log('hola');
        var identificacion=$("input#identificacion").val();
        if((identificacion.length)>5){
            show(identificacion);
        }
      });
});
