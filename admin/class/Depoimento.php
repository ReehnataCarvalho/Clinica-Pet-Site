<?php 

require_once("Conexao.php");

class Depoimento{
	/* Atributos */
	public $id;
	public $texto;
	public $nomeCli;

	/* Fim de Atributos*/
	
	/* Metodo Construtor*/
	public function __construct($id = false){ // false -> para nao chamar em outro momento

		if($id){
			$this->id =$id;
			$this->Carregar();
		}		
	}
	/* metodo Carregar */
	
	public function Carregar(){
	
		$query = "SELECT id, texto, nomeCli FROM depoimento WHERE id=".$this->id;
		$conn = Conexao::LigarConexao();
		$resultdo = $conn->query($query);
		$lista = $resultdo->fetchAll();
		foreach($lista as $row){
			$this->texto = $row["texto"];
			$this->nomeCli = $row["nomeCli"];
		}
	}
	/* Fim metodo Carregar */
	
	/* Metodo inserir*/
	public function Inserir(){
		
		$query 	= "INSERT INTO depoimento (texto, nomeCli) VALUES ('".$this->texto."','".$this->nomeCli."')";
		$conn 	= Conexao::LigarConexao();
		$conn  	->exec($query);			
	}
 	/* Fim metodo inserir */
	
	/*Metodo Listar */ 
	
	public function Listar(){
		$query		="SELECT * FROM depoimento";
        $conn       = Conexao::LigarConexao();         
        $resultado  = $conn->query($query);
        $listar= $resultado->fetchAll(); // PDO::FETCH_ASSOC
		return $listar;
    }
	/*Fim Metodo Listar */
	/* Metodo Excluir */
	public function Excluir(){
		
		$query 	="DELETE FROM depoimento WHERE depoimento.id =".$this->id;
		$conn 	= Conexao::LigarConexao();
		$conn 	-> exec($query);
		
	// echo"<script>document.location='index.php?p=depoimento'</script>";
	}
	public function Atualizar(){
        $query 	="UPDATE depoimento SET texto= '".$this->texto."', nomeCli = '".$this->nomeCli."' WHERE depoimento.id =".$this->id;	
		$conn 	= Conexao::LigarConexao();
		$conn 	-> exec($query);
	}

}
	
	
	
	
	
?>