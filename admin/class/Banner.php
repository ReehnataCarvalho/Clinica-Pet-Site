<?php 
require_once("Conexao.php");

class Banner{
	// Atributos
	public $id;
	public $img;
	public $titulo;
	public $texto;
	//Fim Atributos
	
	
	//Metodo adicionar
	public function adicionar(){		
		$query = "INSERT INTO banner (img, titulo, texto) VALUES ('".$this->img."','".$this->titulo."','".$this->texto."')";
		$conn  = Conexao::LigarConexao();
		$conn  ->exec($query);
		
		echo "<script>document.location='index.php?p=banner'</script>";
	}
	//Fim do Metodo Adicionar
	
	
	//Metodo Deletar
	public function Deletar(){		
		$query 	="DELETE FROM banner WHERE banner.id =".$this->id;
		$conn 	= Conexao::LigarConexao();
		$conn 	-> exec($query);
		
		echo "<script>document.location='index.php?p=banner'</script>";
	}
	
	//Fim do Metodo Deletar
	
	
	//Metodo Atualizar
	public function Atualizar(){
		$query ="UPDATE banner SET img= '".$this->img."',titulo= '".$this->titulo."',texto= '".$this->texto."' WHERE banner.id =".$this->id;	
		$conn  = Conexao::LigarConexao();
		$conn  -> exec($query);
		
		echo "<script>document.location='index.php?p=banner'</script>";
	}
	
	//Fim do Metodo Atualizar
	
	
	//Metodo Listar
	public function Listar(){
		$query		="SELECT * FROM banner";
        $conn       = Conexao::LigarConexao();         
        $resultado  = $conn->query($query);
        $listar		= $resultado->fetchAll(); 
		return $listar;
	}
	
	//Fim do Metodo Listar
	
	
}


?>