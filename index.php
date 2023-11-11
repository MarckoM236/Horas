<!DOCTYPE HTML>
 
<html>
	<head>
                <title>Tablesa</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<link rel="stylesheet" href="./Public/css/styles.css">

			
	</head>
	<body class="bg-light">
        
		<nav class="navbar navbar-expand-lg bg-danger">
			<div>
				<a class="navbar-brand"><img src="./Public/img/tablesa.jpg" alt=""></a>
			</div>
			<div>
				<a class="navbar-brand" href="./">Inicio</a>
				<a class="navbar-brand" href="?url=reporte">Reportes</a>
			</div>
		</nav>
		<br>
		<br>
		<!-- content -->
        <?php 
		$urlFull = $_SERVER['REQUEST_URI'];
		$ultimaBarraPos = strrpos($urlFull, '/');
		$url = substr($urlFull, $ultimaBarraPos + 1);
		
		if($url == "" || $url == "index.php" || $_GET['url']=="index"){
			include_once ("./App/View/sipcommb.php"); 
		}
		else if($_GET['url']=="reporte") {
			include_once ("./App/View/reporte.php"); 
		}
		?>
		<!-- end content-->

         <br>
		 <br>
		<footer class="footer bg-danger">
			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">© <?= date("Y") ?> Copyright:
				<a href="#">tablesa.com.co</a>
			</div>
			<!-- Copyright -->
		</footer>
		
		

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

		<?php if(isset($_GET['url']) && $_GET['url']=="reporte"){?>
		<script src="./Public/js/report.js"></script>
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
		
		<?php } 
		else {?>
		
		<script>
			$(document).ready(function() {
					$("input#identificacion").focus();        		
			});
		</script>
		<script src="./Public/js/forms.js"></script>
		<?php }?>

		<script src="./Public/js/system.js"></script>
	</body>
</html>
