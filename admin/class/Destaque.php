<?php 

require_once("Conexao.php");

class Destaque{
	
	/* Atributos */
	public $id;
	public $img;
	public $titulo;
	public $texto;
	public $linkUrl;	
	/* Fim de Atributos*/
	
	/* Metodo Construtor*/
	public function __construct($id = false){ // false -> para nao chamar em outro momento
		
		if($id){
			$this->id =$id;
			$this->Carregar();
		}	
	}
	/* Metodo Carregar*/ 	
	public function Carregar(){
	
		$query 		= "SELECT id, img, titulo, texto, linkUrl FROM destaque WHERE id=".$this->id; 
		$conn 		= Conexao::LigarConexao();
		$resultado 	= $conn->query($query);
		$lista 		= $resultado->fetchAll();
		foreach($lista as $row){
			$this->img 		= $row["img"];
			$this->titulo 	= $row["titulo"];
			$this->texto 	= $row["texto"];
			$this->linkUrl 	= $row["linkUrl"];
		}		
	}	
	/*Metodo Listar */ 	
	public function Listar(){
		$query		="SELECT * FROM destaque";
        $conn       = Conexao::LigarConexao();         
        $resultado  = $conn->query($query);
        $listar		= $resultado->fetchAll(); 
		return $listar;
    }
	public function Adicionar(){
		
		$query = "INSERT INTO destaque(img, titulo, texto, linkUrl) VALUES ('".$this->img."','".$this->titulo."','".$this->texto."','".$this->linkUrl."')";
		$conn  = Conexao::LigarConexao();
		$conn  ->exec($query);		
		
		echo "<script>document.location='index.php?p=destaque'</script>";
	}
	public function Deletar(){
		
		$query ="DELETE FROM destaque WHERE destaque.id =".$this->id;
		$conn  = Conexao::LigarConexao();
		$conn  -> exec($query);
		
		echo "<script>document.location='index.php?p=destaque'</script>";
		
	// echo"<script>document.location='index.php?p=depoimento'</script>";
	}	
	public function Atualizar(){
		
        $query ="UPDATE destaque SET img= '".$this->img."',titulo= '".$this->titulo."',texto= '".$this->texto."',linkUrl= '".$this->linkUrl."' WHERE destaque.id =".$this->id;	
		$conn  = Conexao::LigarConexao();
		$conn  -> exec($query);
		
		echo "<script>document.location='index.php?p=destaque'</script>";
	}
	
	
	
}

?>











