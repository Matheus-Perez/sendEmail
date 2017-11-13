<?php
namespace sendEmail\Email;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class sendEmail
{
    private $dataEmail;

    public function __construct(email $dataEmail)
    {
        $this->dataEmail = $dataEmail;
    }

    public function sendEmail()
    {
        require 'vendor/autoload.php';
        $mail = new PHPMailer();// Passing `true` enables exceptions
        try
        {
            $mail -> setlanguage($this->dataEmail->getLanguage());//configurarar a classe
            //configuracoes do remetente
            $from       = $this->dataEmail->getEmailRemetente();
            $fromName   = $this->dataEmail->getNameRemetente();//Nome do rementente
            $mail->isSMTP();    // Set mailer to use SMTP
            $mail->Host     	= $this->dataEmail->getHost();//smtp gmail
            $mail->SMTPAuth   	= true;// Enable SMTP authentication
            $mail->Username     = $this->dataEmail->getEmailRemetente();//
            $mail->Password   	= $this->dataEmail->getPassword();
            $mail->SMTPSecure  	= $this->dataEmail->getSecure();
            $mail->Port     	= $this->dataEmail->getPort();
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );// TCP port to connect to

            //Recipients
            $mail->setFrom($from, $fromName);
            $destinatarios =  $this->dataEmail->getDestinatarios();
            //-- VERIFICA SE É SOMENTE UM ARRAY
            if(is_array($destinatarios))
            {
                //-- ABRO O ARRAY
                foreach ($destinatarios as $destinatario)
                {
                    //-- PASSO OS ENDERECOS PARA SEREM ENVIADOS
                    $mail->addAddress($destinatario['email'],$destinatario['name']);
                }
            }
            else
            {
                $mail->addAddress($destinatarios);
            }
            // Add a recipient
            $mail->addReplyTo($from, $fromName);
            //Content
            $mail->isHTML(true);
            $mail->wordwrap = $this->dataEmail->getWordwrap();//limite de caracteres por linha depois de atingir esse limite ele quebra
            $mail->CharSet 	= $this->dataEmail->getCharSet();// Set email format to HTML
            $mail->Subject = $this->dataEmail->getSubject();
            $mail->Body    = $this->dataEmail->getBody();
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            $arr = Array('result' => true, 'erroInfo' => "");
            return $arr;
        }
        catch (Exception $e)
        {
            $arr = Array('result' => true, 'erroInfo' => $mail->ErrorInfo);
            return $arr;
        }
    }//--email
}//#sendEmail