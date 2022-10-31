<?php
	class Musica {
		public $nome;
		public $cantor;
		public function __construct($nome, $cantor){
			$this->nome = $nome;
			$this->cantor = $cantor;
		}
		public function qual(){
			return "$this->nome, musica do cantor $this->cantor";
			
		}
		
	}
	
	
	
	
?>
	
	<html>
		<body>
			<form  method="POST" action="index.php" >
				<label>Música:</label>
				<input type='text' name='musica' id='musica'> <br>
				<label>Cantor:</label>
				<input type='text' name='cantor' id='cantor'><br>
				<input type='submit' >
			</form>
		</body>
	
	
	</html>

<?php
	
	#Usar formulário e funções da classe Musica
	if($_POST != NULL){
		$musica = new Musica($_POST['musica'], $_POST['cantor']);
	
		echo $musica->qual();
	}
	
	
?>