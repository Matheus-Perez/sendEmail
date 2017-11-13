<?php
use sendEmail\Email\Email;
use sendEmail\Email\sendEmail;
use sendEmail\Email\sendEmail53;

require 'vendor/autoload.php';

$language = "pt";
$emailRemetente = "youremail@com.br";
$nomeRemetente = "your name";
$host = "";
$password = '';
$port = "587";
$secure = "tls";
$charSet = "utf-8";
$wordwrap = 70;


$dataEmail = new Email($language,$emailRemetente,$nomeRemetente,$host,$password,$port,$secure,$charSet,$wordwrap);

/**
 ** SEND EMAIL **
 **/

function sendNewEmail($destinaratios, $subject,$body)
{
    global $dataEmail;

    //--verifica se os valores foram passados
    if(empty($destinaratios)){ die("Receiver Email Was Not Informed");}
    if(empty($subject)){ die("the title was not informed");}
    if(empty($body)){ die("The text was not informed");}

    //-- PASSA OS VALORES PARA AS CLASSES
    $dataEmail->setDestinatarios($destinaratios);
    $dataEmail->setSubject($subject);
    $dataEmail->setBody($body);

    //-- VERIFICA A VERSAO DO PHP
    if (version_compare(PHP_VERSION, '5.4.0', '<') )
    {
        die("version not supported!");
    }
    else
    {
        $sendEmail = new sendEmail($dataEmail);
        $return = $sendEmail->sendEmail();
    }

    return $return;
}//#sendNewEmail