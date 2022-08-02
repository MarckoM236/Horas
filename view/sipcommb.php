
<!DOCTYPE HTML>
 
<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">	
	</head>
	<body class="bg-light">
        
		<nav class="navbar bg-danger">
			<div class="container-fluid">
				<a class="navbar-brand"><img src="img/tablesa.jpg" alt=""></a>
			</div>
		</nav>
		<br>
		<br>
		<main>
			<div class="container">
				<form name="produccion" id="producion" method="post">
					<div class="container">
						<div class="form-group">
							<input type="text" id="identificacion" class="form-control" placeholder="IDENTIFICACION">
							<label for="identificacion" class="error" id="identificacion_error">Campo requerido</label>
						</div>
						<br>
						<div class="form-group">
							<div class="row">
								<div class="col">
								  <input type="text" id="ot" class="form-control" placeholder="ORDEN DE TRABAJO">
								  <label for="ot" class="error" id="ot_error">Campo requerido</label>
								</div>
								<div class="col">
								  <input type="text" id="tablero" class="form-control" placeholder="TABLERO">
								  <label for="ot" class="error" id="tablero_error">Campo requerido</label>
								</div>
								<div class="col">
									<input type="text" id="cuerpo" class="form-control" placeholder="CUERPO">
									<label for="ot" class="error" id="cuerpo_error">Campo requerido</label>
								</div>
								<div class="col">
									<input type="text" id="actividad" class="form-control" placeholder="ACTIVIDAD">
									<label for="ot" class="error" id="actividad_error">Campo requerido</label>
								</div>
								<div class="col">
									<input type="text" id="cantidad" class="form-control" placeholder="CANTIDAD">
									<label for="ot" class="error" id="cantidad_error">Campo requerido</label>
								</div>
							  </div>
						</div>
						<br>
						<div class="form-group">
							<div class="row">
								<div class="col">
									<button type="button" class="btn btn-success" id="inicio">INICIO</button>
								</div>
								<div class="col">
									<button type="button" class="btn btn-danger" id="fin">FIN</button>
								</div>
							</div>
						</div>
						
					</div>
					<br>
					<hr>
		
					<!-- INICIO TECLADO -->
					<div class="container">
						<table id="calc">
							<tbody>
								<tr>
									<td>  <input value=" 1 " onclick="number(1)" type="button" style='width:50px; height:50px;font-size:30px;color:blue'></td>
									<td>  <input value=" 2 " onclick="number(2)" type="button" style='width:50px; height:50px;font-size:30px;color:blue'></td>
									<td>  <input value=" 3 " onclick="number(3)" type="button" style='width:50px; height:50px;font-size:30px;color:blue'></td>
								</tr>
								<tr>
									<td>  <input value=" 4 " onclick="number(4)" type="button" style='width:50px; height:50px;font-size:30px;color:blue'></td>
									<td>  <input value=" 5 " onclick="number(5)" type="button" style='width:50px; height:50px;font-size:30px;color:blue'></td>
									<td>  <input value=" 6 " onclick="number(6)" type="button" style='width:50px; height:50px;font-size:30px;color:blue'></td>
								</tr>
								<tr>
									<td>  <input value=" 7 " onclick="number(7)" type="button" style='width:50px; height:50px;font-size:30px;color:blue'></td>
									<td>  <input value=" 8 " onclick="number(8)" type="button" style='width:50px; height:50px;font-size:30px;color:blue'></td>
									<td>  <input value=" 9 " onclick="number(9)" type="button" style='width:50px; height:50px;font-size:30px;color:blue'></td>
								</tr>
								<tr>
									<td><input value=" 0 " onclick="number(0)" type="button" style='width:50px; height:50px;font-size:30px;color:blue'></td>
									<td><input value=" . " onclick="number('.')" type="button" style='width:50px; height:50px;font-size:30px;color:blue'></td>
									<td><input value="C" id="limpiar" type="button" style='width:50px; height:50px;font-size:30px;color:blue'></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- FIN TECLADO -->
					
				</form>
			</div>
		</main>
         <br>
		 <br>
		<footer class="footer bg-danger">
			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">© 2022 Copyright:
				<a href="/">tablesa.com.co</a>
			</div>
			<!-- Copyright -->
		</footer>
		
		

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="js/forms.js"></script>
		<script src="js/system.js"></script>
	</body>
</html>