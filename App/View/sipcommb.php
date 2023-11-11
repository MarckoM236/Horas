<main>
			<div class="container">
				<form name="produccion" id="producion" method="post">
					<div class="container">
						<div class="form-group">
							<input type="text" autocomplete="off" id="identificacion" class="form-control" id="formGroupExampleInput" placeholder="IDENTIFICACION">
						</div>
						<br>
						<div class="form-group">
							<div class="row">
								<div class="col">
								  <input type="text" id="ot"  readonly class="form-control" placeholder="ORDEN DE TRABAJO">
								</div>
								<div class="col">
								  <input type="text" id="tablero" readonly class="form-control" placeholder="TABLERO">
								</div>
								<div class="col">
									<input type="text" id="cuerpo" readonly class="form-control" placeholder="CUERPO">
								</div>
								<div class="col">
									<input type="text" id="actividad" readonly class="form-control" placeholder="ACTIVIDAD">
								</div>
								<div class="col">
									<input type="text" id="cantidad" readonly class="form-control" placeholder="CANTIDAD" value="0">
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
					<div class="row">
						<div id="calc" class="col-lg-12">
							<div id="virtual-keyboard">
								<div class="keyboard-row">
									<a class="number" href="#" onclick="number(1)" data="1">1</a>
									<a class="number" href="#" onclick="number(2)" data="2">2</a>
									<a class="number" href="#" onclick="number(3)" data="3">3</a>
									<a class="number" href="#" onclick="number(4)" data="4">4</a>
									<a class="number" href="#" onclick="number(5)" data="5">5</a>
									<a class="number" href="#" onclick="number(6)" data="6">6</a>
									<a class="number" href="#" onclick="number(7)" data="7">7</a>
									<a class="number" href="#" onclick="number(8)" data="8">8</a>
									<a class="number" href="#" onclick="number(9)" data="9">9</a>
									<a class="number" href="#" onclick="number(0)" data="0">0</a>
									<a href="#" onclick="number('.')" data=".">.</a>
								</div>
								<div class="keyboard-row">
									<a href="#" onclick="number('Q')" data="Q">Q</a>
									<a href="#" onclick="number('W')" data="W">W</a>
									<a href="#" onclick="number('E')" data="E">E</a>
									<a href="#" onclick="number('R')" data="R">R</a>
									<a href="#" onclick="number('T')" data="T">T</a>
									<a href="#" onclick="number('Y')" data="Y">Y</a>
									<a href="#" onclick="number('U')" data="U">U</a>
									<a href="#" onclick="number('I')" data="I">I</a>
									<a href="#" onclick="number('O')" data="O">O</a>
									<a href="#" onclick="number('P')" data="P">P</a>
								</div>
								<div class="keyboard-row">
									<a href="#" onclick="number('A')" data="A">A</a>
									<a href="#" onclick="number('S')" data="S">S</a>
									<a href="#" onclick="number('D')" data="D">D</a>
									<a href="#" onclick="number('F')" data="F">F</a>
									<a href="#" onclick="number('G')" data="G">G</a>
									<a href="#" onclick="number('H')" data="H">H</a>
									<a href="#" onclick="number('J')" data="J">J</a>
									<a href="#" onclick="number('K')" data="K">K</a>
									<a href="#" onclick="number('L')" data="L">L</a>
								</div>
								<div class="keyboard-row">
									<a href="#" onclick="number('Z')" data="Z">Z</a>
									<a href="#" onclick="number('X')" data="X">X</a>
									<a href="#" onclick="number('C')" data="C">C</a>
									<a href="#" onclick="number('V')" data="V">V</a>
									<a href="#" onclick="number('B')" data="B">B</a>
									<a href="#" onclick="number('N')" data="N">N</a>
									<a href="#" onclick="number('M')" data="M">M</a>
									<a href="#" id="limpiar" data="DEL">BORRAR</a>
								</div>
								<div class="keyboard-row">
									
								</div>
							</div>
						</div>
					</div>
					<!-- FIN TECLADO -->
					
				</form>
			</div>
		</main>