
    <main>
        <h1 style="text-align: center;">Reporte de Horas Tablesa</h1>
        <br>
        <hr>
        <div class="container">
            
            <div class="row">
                <div class="col">
                    <input type="date" id="fechaIn" class="form-control" placeholder="fecha">
                </div>
                <div class="col">
                    <input type="date" id="fechaFi" class="form-control" placeholder="fecha">
                </div>
                <div class="col">
                <button type="button" class="btn btn-success" id="consultar">Consultar</button>
                </div>
            </div>
        </div>
        <hr>
        <br>
        <div class="container">
            <!--Reportes-->
            <table class="table table-striped" id="table">
                <thead>
                    <tr>
                    <th scope="col">Cedula</th>
                    <th scope="col">Nombre Empleado</th>
                    <th scope="col"># OT</th>
                    <th scope="col">Nombre OT</th>
                    <th scope="col">Tablero</th>
                    <th scope="col">Cuerpo</th>
                    <th scope="col">Actividad</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Inicio</th>
                    <th scope="col">Fin</th>
                    <th scope="col">Duracion</th>
                    </tr>
                </thead>
                <tbody id="datos">
                    
                </tbody>
            </table>
            <!--Reportes-->
            <br>
            <div id="btn">
                <a style="text-align: center;" class="btn btn-success" id="download_xls" download="tablesa.xls" href="#">Exportar a Excel</a>
            </div>
        </div>
    </main>
    