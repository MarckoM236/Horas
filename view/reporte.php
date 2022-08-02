<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class="bg-light">
    <nav class="navbar bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="../img/tablesa.jpg" alt=""></a>
        </div>
    </nav>
    <br>
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
    <footer class="footer bg-danger">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2022 Copyright:
            <a href="/">tablesa.com.co</a>
        </div>
        <!-- Copyright -->
    </footer>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../js/report.js"></script>
    <script src="../js/system.js"></script>
    <!-- js section -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/excellentexport@3.4.3/dist/excellentexport.min.js"></script>
    <script>
        
        let download_xls = document.querySelector("#download_xls")
        download_xls.addEventListener("click", ()=>{                     
            ExcellentExport.excel(download_xls, 'table')
        })

        let download_csv = document.querySelector("#download_csv")
        download_csv.addEventListener("click", ()=>{                     
            ExcellentExport.csv(download_csv, 'table');
        })

        let download_xlsx = document.querySelector("#download_xlsx")
        download_xlsx.addEventListener("click", ()=>{                     
            ExcellentExport.convert({ anchor: download_xlsx, filename: 'filename', format: 'xlsx'},[{name: 'Sheet Name Here 1', from: {table: 'table'}}])
        })

    </script>  
</body>
</html>