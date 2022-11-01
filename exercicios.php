<html>
    <?php
        echo "Estereótipo de região por genero musical <br>";
		
		class Cantor{
			public $nome;
			public $genero;
			public function __construct($nome, $genero){
				$this->genero = $genero;
				$this->nome = $nome;
			}
			
			public function descreve(){
				echo "$this->nome é um cantor de $this->genero!";
			}
			
			public function regiaoPorGenero(){
				$genero = $this->genero;
				switch($genero){
					case "Sertanejo":
						echo "<br>Cantores desse genero são populares em Goiás. <br/>";
						break;
					case "Forro":
						echo "<br>Cantores desse genero são populares mo Nordeste. <br/>";
						break;
					case "Pagode":
						echo "<br>Cantores desse genero são populares no Rio. <br/>";
						break;
				
				}
			}
			
			
		}

    ?>
	
	<form method="POST" action="exercicios.php">
		<label>Nome:</label>
		<input type="text" id="nome" name="nome"><br/>
		<label>Genero:</label><br/>
		<input type="radio" id="genero" name="genero" value="Sertanejo">Sertanejo<br/>
		<input type="radio" id="genero" name="genero" value="Pagode">Pagode<br/>
		<input type="radio" id="genero" name="genero" value="Forro">Forró<br/>
		<input type="submit">
	</form>
	
	<?php
		if(!empty($_POST)){
			$cantor = new Cantor($_POST['nome'], $_POST['genero']);
			$cantor->descreve();
			$cantor->regiaoPorGenero();
		}
		
		
	?>
	
	<br/>
	<br/>
	<a href="index.php">Voltar</a>

</html>