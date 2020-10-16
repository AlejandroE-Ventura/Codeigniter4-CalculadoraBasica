<div class="envio-page">
	<div class="form">
		<h2>Calculadora Basica</h2>
		<h4>Suma, Resta, Multiplicación, Division</h4>
		<hr>

		<form action="<?php echo base_url(); ?>/numeros" method="POST">

			<label>Elige una opción:</label>
			<select class="form-control" name="opciones">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multi">Multiplicacion</option>
				<option value="div">Division</option>
			</select>
			<hr>
			<input type="number" name="num1" placeholder="Numero 1"required />
			<input type="number" name="num2" placeholder="Numero 2" required/>
			<hr>
			<?php echo $resultado ?>
			<hr>
			<button>Calcular</button>
		</form>

	</div>
</div>
