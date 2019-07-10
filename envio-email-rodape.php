
<?php

	require_once("PHPMailer/PHPMailerAutoload.php");


if(isset($_POST["email"])){	
    
    require_once("admin/class/Contato.php");

    $assunto	= "Site Fada Madrinha Pet";
    $nome		= $_POST["nome"];
    $email		= $_POST["email"];
    $mensagem	= $_POST["msg"];

    $contato            = new Contato();
    $contato->nome      = $nome;
    $contato->email     = $email;
    $contato->msg       = $mensagem;
    $contato->Inserir();
    

    
    $phpmail = new PHPMailer(); // Instânciamos a classe PHPmailer para poder utiliza-la          
    $phpmail->isSMTP(); // envia por SMTP
    
    $phpmail->SMTPDebug = 0;
    $phpmail->Debugoutput = 'html';
    
    $phpmail->Host = "smtp.gmail.com"; // SMTP servidor de envio         
    $phpmail->Port = 587; // Porta SMTP do GMAIL
    
    //$phpmail->SMTPSecure = 'tls';
    $phpmail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação   
    
    $phpmail->Username = "oficialmaniadearteatelie@gmail.com"; // SMTP e-mail de envio         
    $phpmail->Password = "499216672"; // SMTP senha          
    $phpmail->IsHTML(true);         
    
    $phpmail->setFrom($email, $nome); // E-mail do remetende enviado pelo method post  
                
    $phpmail->addAddress("oficialmaniadearteatelie@gmail.com", "Site Fada Madrinha Pet");// E-mail do destinatario/*  
    
    $phpmail->Subject = $assunto; // Assunto do remetende enviado pelo method post
            
    $phpmail->msgHTML(" Nome: $nome <br>
                        E-mail: $email <br>
                        Mensagem: $msg");
    
    $phpmail->AlrBody = "Nome: $nome \n
                        E-mail: $email \n
                        Mensagem: $msg";
        
    if($phpmail->send()){
        $OK = "OK";
        
    }else{
        $OK = "ERRO";
    }
        
    
    // ############## RESPOSTA AUTOMATICA
    $phpmailResposta = new PHPMailer();        
    $phpmailResposta->isSMTP();
    
    $phpmailResposta->SMTPDebug = 0;
    $phpmailResposta->Debugoutput = 'html';
    
    $phpmailResposta->Host = "smtp.gmail.com";         
    $phpmailResposta->Port = 587;
    
    $phpmailResposta->SMTPSecure = 'tls';
    $phpmailResposta->SMTPAuth = true;   
    
    $phpmailResposta->Username = "oficialmaniadearteatelie@gmail.com";         
    $phpmailResposta->Password = "499216672";          
    $phpmailResposta->IsHTML(true);         
    
    $phpmailResposta->setFrom($email, $nome); // E-mail do remetende enviado pelo method post  
                
    $phpmailResposta->addAddress($email, "Site Fada Madrinha Pet");// E-mail do destinatario/*  
    
    $phpmailResposta->Subject = "Resposta - " .$assunto; // Assunto do remetende enviado pelo method post
            
    $phpmailResposta->msgHTML(" Nome: $nome <br>
                        Em breve daremos o retorno");
    
    $phpmailResposta->AlrBody = "Nome: $nome \n
                        Em breve daremos o retorno";
        
    $phpmailResposta->send();		

    header("Location:index.php?mens=OK&nome=$nome");
    
}

?>





