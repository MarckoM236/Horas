function show(identificacion){
    var dataString='txbIdentificacion='+identificacion +'&show=1';
 $.ajax({
    type:"POST",
    url:"/app/controller/ajaxController.php?action=show&controller=produccion",
    data: dataString,
    dataType: 'json',

    success: function(response){
        //llenar campos
        var res=Object.values(response);
        for(let i=0;i<res.length;i++){
            //console.log(res[i]['ot_produc']);
            $('input#ot').val(res[i]['ot_produc']);
            $('input#tablero').val(res[i]['tab_produc']);
            $('input#cuerpo').val(res[i]['cue_produc']);
            $('input#actividad').val(res[i]['act_produc']);
        }
    }
        
 });
}

function ValidateUser(identificacion,ot,tablero,cuerpo,actividad){
    var dataString='txbIdentificacion='+identificacion +'&user=1';
 $.ajax({
    type:"POST",
    url:"/app/controller/ajaxController.php?action=validateUS&controller=produccion",
    data: dataString,
    dataType: 'json',

    success: function(response){
        //Valida si existe 
        if(jQuery.isEmptyObject(response)){
            alert('El usuario no esta registrado');   
        }
        else{
            inicio(identificacion,ot,tablero,cuerpo,actividad);
        }
        
    }
        
 });
}

function inicio(identificacion,ot,tablero,cuerpo,actividad){
 var dataString='txbIdentificacion='+identificacion+'&txbOt='+ot+'&txbTablero='+tablero+'&txbCuerpo='+cuerpo+'&txbActividad='+actividad+'&insert=1';
 $.ajax({
    type:"POST",
    url:"/app/controller/ajaxController.php?action=insert&controller=produccion",
    data: dataString,
    dataType: 'json',

    success: function(response){
        if(response.status=='ok'){
            //alert(response.result);
            window.location="/app/view/sipcommb.html";
        }
        else{
            alert(response.result);
        }
    }
 });
}

function fin(identificacion,cantidad){
    var dataString='txbIdentificacion='+identificacion+'&txbCantidad='+cantidad+'&update=1';
 $.ajax({
    type:"POST",
    url:"/app/controller/ajaxController.php?action=update&controller=produccion",
    data: dataString,
    dataType: 'json',

    success: function(response){
        if(response.status=='ok'){
            //alert(response.result);
            window.location="/app/view/sipcommb.html";
        }
        else{
            alert(response.result);
        }
    }
 });
}

function reporteXFecha(fechaIn,fechaFi){
    var dataString='txbDateIn=' + fechaIn + '&txbDateFi=' + fechaFi +'&showXDate=1';
 $.ajax({
    type:"POST",
    url:"/app/controller/ajaxController.php?action=show&controller=reporte",
    data: dataString,
    dataType: 'json',

    success: function(response){
        //llenar campos
        var res=Object.values(response);
        for(let i=0;i<res.length;i++){
            //console.log(res[i]['ot_produc']);
            var tr = `<tr>
            <td>`+res[i]['Cedula']+`</td>
            <td>`+res[i]['NombreEmpleado']+`</td>
            <td>`+res[i]['NumeroOT']+`</td>
            <td>`+res[i]['NombreOT']+`</td>
            <td>`+res[i]['Tablero']+`</td>
            <td>`+res[i]['Cuerpo']+`</td>
            <td>`+res[i]['Actividad']+`</td>
            <td>`+res[i]['Cantidad']+`</td>
            <td>`+res[i]['Inicio']+`</td>
            <td>`+res[i]['Fin']+`</td>
            <td>`+res[i]['Duracion']+`</td>
            </tr>`;
            $("#datos").append(tr)
        }
    }
        
 });
}

function reporte(){
    var dataString='show=1';
 $.ajax({
    type:"POST",
    url:"/app/controller/ajaxController.php?action=show&controller=reporte",
    data: dataString,
    dataType: 'json',

    success: function(response){
        //llenar campos
        var res=Object.values(response);
        for(let i=0;i<res.length;i++){
            //console.log(res[i]['ot_produc']);
            var tr = `<tr>
            <td>`+res[i]['Cedula']+`</td>
            <td>`+res[i]['NombreEmpleado']+`</td>
            <td>`+res[i]['NumeroOT']+`</td>
            <td>`+res[i]['NombreOT']+`</td>
            <td>`+res[i]['Tablero']+`</td>
            <td>`+res[i]['Cuerpo']+`</td>
            <td>`+res[i]['Actividad']+`</td>
            <td>`+res[i]['Cantidad']+`</td>
            <td>`+res[i]['Inicio']+`</td>
            <td>`+res[i]['Fin']+`</td>
            <td>`+res[i]['Duracion']+`</td>
            </tr>`;
            $("#datos").append(tr)
        }
    }
        
 });
}