//Reporte
$(document).ready(function() {
    $("#consultar").click(function(){
        var fechaIn=$("input#fechaIn").val();
        var fechaFi=$("input#fechaFi").val();
        if(fechaIn=="" || fechaFi==""){
            reporte();
        }
        else{
            reporteXFecha(fechaIn,fechaFi);
        }
      });
});