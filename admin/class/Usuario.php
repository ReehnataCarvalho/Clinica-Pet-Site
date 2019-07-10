<?php 

require_once("Conexao.php");

class Usuario{
	
	/* Atributos */
	public $id;
	public $nomeUsua;
	public $login;
	public $senha;	
	/* Fim de Atributos*/
	
	
	/* Metodo Construtor*/
	
	public function __construct($id = false){ // false -> para nao chamar em outro momento
		
		if($id){
			$this->id =$id;
			$this->Carregar();
		}	
	}
	
	/* Metodo Construtor*/
	
	/* Fim Metodo Carregar*/ 	
	public function Carregar(){
	
		$query 		= "SELECT id, nomeUsua, login, senha, img FROM usuario WHERE id=".$this->id;
		$conn 		= Conexao::LigarConexao();
		$resultado 	= $conn->query($query);
		$lista 		= $resultado->fetchAll();
		foreach($lista as $row){
			$this->nome 	= $row["nomeUsua"];
			$this->login 	= $row["login"];
			$this->senha 	= $row["senha"];
			$this->img	 	= $row["img"];
		}		
	}	
	/*Metodo Listar */ 	
	public function Listar(){
		$query		="SELECT * FROM usuario ORDER BY usuario.id DESC";
        $conn       = Conexao::LigarConexao();         
        $resultado  = $conn->query($query);
        $listar		= $resultado->fetchAll(); 
		return $listar;
    }
	public function Adicionar(){
		
		$query = "INSERT INTO usuario(nomeUsua, login, senha, img) VALUES ('".$this->nomeUsua."','".$this->login."','".$this->senha."','".$this->img."')";	
		$conn  = Conexao::LigarConexao();
		$conn  ->exec($query);	
		
		echo"<script>document.location='index.php?p=usuario'</script>";
		
	}
	public function Deletar(){
		
		$query ="DELETE FROM usuario WHERE usuario.id =".$this->id;
		$conn  = Conexao::LigarConexao();
		$conn  -> exec($query);
		
		echo"<script>document.location='index.php?p=usuario'</script>";
		
		
	// echo"<script>document.location='index.php?p=depoimento'</script>";
	}	
	public function Atualizar(){
		
        $query ="UPDATE usuario SET nomeUsua= '".$this->nomeUsua."',login= '".$this->login."',senha= '".$this->senha."',img='".$this->img."' WHERE usuario.id =".$this->id;
		$conn  = Conexao::LigarConexao();
		$conn  -> exec($query);
		
		echo"<script>document.location='index.php?p=usuario'</script>";
	}
	
	public function VerificarLogin(){
		
		if(isset($this->login)){
			$query = "SELECT * FROM usuario WHERE usuario.login='".$this->login."' AND usuario.senha='".$this->senha."'";			
		}else{
			
			if(isset($this->id)){
			$query		="SELECT * FROM usuario WHERE usuario.id=".$this->id;
				
			}
			if(isset($this->nomeUsua)){
			$query		="SELECT * FROM usuario WHERE usuario.id=".$this->nomeUsua;
				
			}
		}		
		
		$conn  = Conexao::LigarConexao();       
        $resultado  = $conn->query($query);
        $listar		= $resultado->fetch(PDO::FETCH_ASSOC);
		return $listar;
		
		
		
	}
	
	
}

?>











