<?php
namespace sendEmail\Email;

class Email
{
    private $language;
    private $emailRemetente;
    private $nameRemetente;
    private $host;
    private $password;
    private $port;
    private $secure;
    private $destinatarios;
    private $charSet;
    private $wordwrap;
    private $subject;
    private $body;
    private $altBody;

    public function __construct($language,$emailRemetente,$nameRemetente,$host,$password,$port,$secure,$charSet,$wordwrap)
    {
        $this->language = $language;
        $this->emailRemetente = $emailRemetente;
        $this->nameRemetente = $nameRemetente;
        $this->host = $host;
        $this->password = $password;
        $this->port = $port;
        $this->secure = $secure;
        $this->charSet = $charSet;
        $this->wordwrap = $wordwrap;
    }//#__construct

    //--GETTERS AND SETTERS

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return mixed
     */
    public function getEmailRemetente()
    {
        return $this->emailRemetente;
    }

    /**
     * @param mixed $emailRemetente
     */
    public function setEmailRemetente($emailRemetente)
    {
        $this->emailRemetente = $emailRemetente;
    }

    /**
     * @return mixed
     */
    public function getNameRemetente()
    {
        return $this->nameRemetente;
    }

    /**
     * @param mixed $nameRemetente
     */
    public function setNameRemetente($nameRemetente)
    {
        $this->nameRemetente = $nameRemetente;
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @return mixed
     */
    public function getSecure()
    {
        return $this->secure;
    }

    /**
     * @param mixed $secure
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;
    }

    /**
     * @return mixed
     */
    public function getCharSet()
    {
        return $this->charSet;
    }

    /**
     * @param mixed $charSet
     */
    public function setCharSet($charSet)
    {
        $this->charSet = $charSet;
    }

    /**
     * @return mixed
     */
    public function getWordwrap()
    {
        return $this->wordwrap;
    }

    /**
     * @param mixed $wordwrap
     */
    public function setWordwrap($wordwrap)
    {
        $this->wordwrap = $wordwrap;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getAltBody()
    {
        return $this->altBody;
    }

    /**
     * @param mixed $altBody
     */
    public function setAltBody($altBody)
    {
        $this->altBody = $altBody;
    }

    /**
     * @return mixed
     */
    public function getDestinatarios()
    {
        return $this->destinatarios;
    }

    /**
     * @param mixed $destinatarios
     */
    public function setDestinatarios($destinatarios)
    {
        $this->destinatarios = $destinatarios;
    }

}//#Email