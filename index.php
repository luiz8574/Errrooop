<?php 

	class Pessoa{

		private $nome = 'Luiz';
		private $idade = '23';
		private $peso = '70kg';

		public function crescer(){
			$this->comer()
			echo "estou crescendo";
		}

		private function comer(){
			echo "estou comendo";
		}

		$pessoa->crescer();
	}

	$pessoa = new Pessoa;
	$pessoa2 = new Pessoa;


?>