<?php



$nome = addslashes($_POST['nome']);
$telefone = addslashes($_POST['telefone']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$to = "clebysilva5@gmail.com";
$subject = "YBELC-hacking";
$body =" Nome: ".$nome. "\r\n".
       "Email: ".$email. "\r\n".
       "telefone: ".$telefone. "\r\n".
       "Mensagem: ".$mensagem;
$header = "from: contato@ybelccreative.com.br". "\r\n".
        "Reply-To:".$email."\r\n".
        "X=Mailer:PHP/".phpversion();
        

if(mail($to,$subject,$body,$header)){
    window.alert("E-mail Enviado Com Sucesso!");
}else {
    echo("O E-mail não pôde ser enviado!");
}



?>