<?php

if(isset($_POST['email']) && !empty($_POST['email']))

{

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem =  addcslashes($_POST['mesage']);

$to = "fanciley.torres@gmail.com";
$subject = "Contato Loja de Carro";
$body = "Nome: ".$nome. "\n".
        "Email: ".$email. "\n".
        "Mensagem: "$mensagem;

$header = "From: frtorres@mapfre.com.br". "\r\n".
            "Reply-To: ".$email. "\r\n".
            "X=Mailer:PHP/" .phpversion();

if(mail($to,$subject,$body,$header))

{
    echo("e-mail enviado com Sucesso");

} else{
    echo("e-mail nao enviado");

}


}

?>