//Reporte
$(document).ready(function() {
    $("#consultar").click(function(){
        console.log("click")
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