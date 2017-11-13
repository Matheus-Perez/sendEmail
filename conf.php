<?php
use sendEmail\Email\Email;
use sendEmail\Email\sendEmail;
use sendEmail\Email\sendEmail53;

require 'vendor/autoload.php';

/**
 * SO ALTERE ESSE CODIGO QUANDO VC SABE O QUE ESTA FAZENDO!
 * */
$language = "pt";
$emailRemetente = "sistemas.usb@adventistas.org.br";
$nomeRemetente = "ABES";
$host = "mail.usb.org.br";
$password = 'u$b2102';
$port = "587";
$secure = "tls";
$charSet = "utf-8";
$wordwrap = 70;

//-- INSTANCIA A CLASSE DO EMAIL
$dataEmail = new Email($language,$emailRemetente,$nomeRemetente,$host,$password,$port,$secure,$charSet,$wordwrap);

/**
 ** FUNÇÃO PARA ENVIAR O EMAIL **
 **/

function sendNewEmail($destinaratios, $subject,$body)
{
    global $dataEmail;

    //--verifica se os valores foram passados
    if(empty($destinaratios)){ die("O Email do destinatario não foi informado");}
    if(empty($subject)){ die("O Titulo não foi informado");}
    if(empty($body)){ die("O Texto não foi informado");}

    //-- PASSA OS VALORES PARA AS CLASSES
    $dataEmail->setDestinatarios($destinaratios);
    $dataEmail->setSubject($subject);
    $dataEmail->setBody($body);

    //-- VERIFICA A VERSAO DO PHP
    if (version_compare(PHP_VERSION, '5.4.0', '<') )
    {
        die("Versão não suportada!");
    }
    else
    {
        $sendEmail = new sendEmail($dataEmail);
        $return = $sendEmail->sendEmail();
    }

    return $return;
}//#sendNewEmail